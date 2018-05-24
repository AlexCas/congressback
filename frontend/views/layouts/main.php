<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\MainAsset;
use common\widgets\Alert;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Congreso Panel </title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-green-light sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

  <header class="main-header">

    <a href="/congreso" class="logo">

      <span class="logo-mini"><b>A</b>MC</span>

      <span class="logo-lg"><b>A</b>MMAC</span>
    </a>

    <nav class="navbar navbar-static-top">

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">



          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://www.trybooking.co.uk/media/3446/login-user-icon.png" class="user-image" alt="User Image">
              <span class="hidden-xs">
                <?php if (Yii::$app->user->isGuest): ?>
                  <?php echo 'invitado';  ?>
                  <?php else: ?>
                    <?= Yii::$app->user->identity->username ?>
                <?php endif; ?>
              </span>
            </a>
            <ul class="dropdown-menu">

              <li class="user-header">
                <img src="https://www.trybooking.co.uk/media/3446/login-user-icon.png" class="img-circle" alt="User Image">

                <p>
                  <?php if (Yii::$app->user->isGuest): ?>
                    <?php echo 'invitado';  ?>
                    <?php else: ?>
                      <?= Yii::$app->user->identity->username ?>
                  <?php endif; ?>
                </p>
              </li>


              <li class="user-footer">
                <div class="pull-right">
                  <a href="/ammacyii/site/logout" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">

    <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://www.trybooking.co.uk/media/3446/login-user-icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php if (Yii::$app->user->isGuest): ?>
            <?php echo 'invitado';  ?>
            <?php else: ?>
              <?= Yii::$app->user->identity->username ?>
          <?php endif; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>


      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Congresos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/congreso/congreso/create"><i class="fa fa-circle-o"></i> Crear</a></li>
            <li><a href="/congreso/congreso"><i class="fa fa-circle-o"></i> Administrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Documentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/congreso/documentos/create"><i class="fa fa-circle-o"></i> Crear</a></li>
            <li><a href="/congreso/documentos"><i class="fa fa-circle-o"></i> Administrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Ponentes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/congreso/ponentes/create"><i class="fa fa-circle-o"></i> Crear</a></li>
            <li><a href="/congreso/ponentes"><i class="fa fa-circle-o"></i> Administrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Programa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/congreso/programa/create"><i class="fa fa-circle-o"></i> Crear</a></li>
            <li><a href="/congreso/programa"><i class="fa fa-circle-o"></i> Administrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Temario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/congreso/temario/create"><i class="fa fa-circle-o"></i> Crear</a></li>
            <li><a href="/congreso/temario"><i class="fa fa-circle-o"></i> Administrar</a></li>
          </ul>
        </li>

      </ul>
    </section>

  </aside>

  <div class="content-wrapper">

    <section class="content">
      <?= $content ?>
    </section>

  </div>

  <div class="control-sidebar-bg"></div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
