<?php

namespace backend\controllers;

use Yii;
use common\models\Topics;
use common\models\TopicsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\extmodels\UploadForm;
/**
 * TopicsController implements the CRUD actions for Topics model.
 */
class TopicsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Topics models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TopicsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Topics model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Topics model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Topics();

        if ($model->load(Yii::$app->request->post())) 
		{
			
			// Kiem tra chủ đề đa ton tai hay chua.
			$old_model = Topics::find()->where(['title' => $model->title])->asArray()->one();
			if (!empty($old_model)) {
				$model->addError("title","Chủ đề này đã tồn tại trong hệ thống .");
				return $this->render('create', [
					'model' => $model,
				]);
			}
			
			//SET IMAGES
            $modelUpload = new UploadForm();
			$fileImgName ="";
			$modelUpload->file = UploadedFile::getInstance($model, 'images');
            if(!empty($modelUpload->file)) {
				$fileImgName = vietnamese_permalink($model->title).'_'. time();
                if ($modelUpload->validate()) {                
                    $modelUpload->file->saveAs(Yii::getAlias('@frontend').'/web/uploads/topics/'.$fileImgName.'.'.$modelUpload->file->extension);
                }
				$model->images = $fileImgName . '.' . $modelUpload->file->extension;
            }
            //END UPLOAD IMAGES
			
			if($model->save()){
				return $this->redirect(['view', 'id' => $model->id]);
			}
            else
			{
				return $this->render('create', [
					'model' => $model,
				]);
			}
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Topics model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model 	= $this->findModel($id);
		$oldImg = $model->images;
        if ($model->load(Yii::$app->request->post())) 
		{
            //SET IMAGES
            $modelUpload 		= new UploadForm();
            $modelUpload->file 	= UploadedFile::getInstance($model, 'images');
            if(isset($modelUpload->file) && $modelUpload->validate() && count($modelUpload->file)>0)
            {
                if(!empty($oldImg) || $oldImg !='')
                {
                    if(file_exists(Yii::getAlias('@frontend').'/web/uploads/topics/'.$oldImg))
                    {
                        unlink(Yii::getAlias('@frontend').'/web/uploads/topics/'.$oldImg); 
                    }
                }
				$fileImgName 	= vietnamese_permalink($model->title).'_'. time();
                $modelUpload->file->saveAs(Yii::getAlias('@frontend').'/web/uploads/topics/'.$fileImgName.'.'.$modelUpload->file->extension);
                $model->images 	= $fileImgName . '.' . $modelUpload->file->extension;
            }
            else
            {
                $model->images = $oldImg;
            }
            //END UPLOAD IMAGES
			if($model->save()){
				return $this->redirect(['view', 'id' => $model->id]);
			}else
			{
				return $this->render('update', [
					'model' => $model,
				]);
			}
			
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Topics model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Topics model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Topics the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Topics::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
