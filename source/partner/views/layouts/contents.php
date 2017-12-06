 <?php 
 use yii\widgets\Breadcrumbs;
 ?>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <?= $content ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->