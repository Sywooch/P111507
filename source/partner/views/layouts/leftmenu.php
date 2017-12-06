 <?php 
 use yii\helpers\Url;
 use yii\helpers\Html;
 use partner\assets\AppAsset;
 
 AppAsset::register($this);   
 ?>
 
 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <?php if (!Yii::$app->user->isGuest) { ?>
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="<?=$baseUrl?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p><?=Yii::$app->user->identity->username?></p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>
          <?php } ?>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="<?=Yii::$app->urlManager->createAbsoluteUrl('/site/index');?>">
                <i class="fa fa-dashboard"></i> <span>DASHBOARD</span> 
              </a>
            </li>
			
			<li class="treeview">
				<a href="<?= Yii::$app->urlManager->createAbsoluteUrl('/questions/index'); ?>">
					<i class="fa fa-users"></i> <span>QUẢN LÝ CÂU HỎI</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
            </li>
			
			<li class="treeview">
				<a href="<?= Yii::$app->urlManager->createAbsoluteUrl('/answers/index'); ?>">
					<i class="fa fa-users"></i> <span>CÂU HỎI CẦN TRẢ LỜI</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
            </li>
			
			<li class="treeview">
				<a href="<?= Yii::$app->urlManager->createAbsoluteUrl('/answers/answerbyuser'); ?>">
					<i class="fa fa-users"></i> <span>CÂU TRẢ LỜI CỦA BẠN</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>