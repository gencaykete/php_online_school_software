<?php
if (session('user_rank')==2) {
	$q=$db->from('lessons')->where('lesson_school',session('user_id'))->groupby('lesson_class')->orderby('lesson_class','ASC')->all();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="<?=admin_public_url('assets/images/logo.png')?>">
	<title>Okul v1 | İstanbul Yazılım</title>

	<link rel="stylesheet" href="<?=admin_public_url('libs/bower/font-awesome/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css')?>">
	<!-- build:css <?=admin_public_url('assets/css/app.min.css')?> -->
	<link rel="stylesheet" href="<?=admin_public_url('libs/bower/animate.css/animate.min.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('libs/bower/fullcalendar/dist/fullcalendar.min.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('libs/bower/perfect-scrollbar/css/perfect-scrollbar.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('assets/css/core.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('assets/css/app.css')?>">
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script src="<?=admin_public_url('libs/bower/breakpoints.js/dist/breakpoints.min.js')?>"></script>
	<script>
		Breakpoints();
		var site_url= "<?=site_url()?>";
	</script>
</head>

<body class="menubar-top pace-done menubar-dark theme-warning">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" style="padding-left:70px;" class="navbar navbar-inverse navbar-fixed-top in warning">

  <!-- navbar header -->
  <div class="navbar-header">
    <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-more"></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-search"></span>
    </button>

    <a href="<?=admin_url()?>" class="navbar-brand">
      <span class="brand-icon"><i class="fa fa-gg"></i></span>
      <span class="brand-name">Infinity</span>
    </a>
  </div><!-- .navbar-header -->

  <div class="navbar-container container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
        <li class="hidden-float hidden-menubar-top">
          <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
          </a>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top">Dashboard</h5>
        </li>
      </ul>

      <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
          <div class="media-group dropdown-menu animated flipInY" style="width: 390px !important;">
            <?php
						$notify = $db->from('notify')->where('notify_user',session('user_id'))->all();
						 foreach ($notify as $row): ?>
							<a href="<?=$row['notify_url'] ? admin_url($row['notify_url']) : 'javascript:void(0)'?>" class="media-group-item">
	              <div class="media">
	                <div class="media-body">
	                  <h5 class="media-heading"><?=$row['notify_text']?></h5>
	                  <small class="media-meta"><?=timeConvert($row['notify_date'])?></small>
	                </div>
	              </div>
	            </a>
            <?php endforeach; ?>

          </div>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
          <ul class="dropdown-menu animated flipInY">
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>Profil</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span class="label label-primary">3</span></a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class" data-target="#side-panel" data-class="open" role="button"><i class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
        </li>
      </ul>
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<aside id="menubar" style="padding-left:70px;padding-right:70px;" class="menubar dark">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)"><img class="img-responsive" src="<?=site_url($user['user_profile'])?>" alt="avatar"/></a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username"><?=$user['user_name']?></a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>Web Developer</small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
								<li>
                  <a class="text-color" href="<?=admin_url()?>">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span><?=getRank(session('user_rank'))?></span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="<?=admin_url()?>">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Anasayfa</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="<?=admin_url('profile')?>">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>Profil</span>
                  </a>
                </li>
                <?php if (session('user_rank')==1): ?>
									<li>
	                  <a class="text-color" href="<?=admin_url('settings')?>">
	                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
	                    <span>Ayarlar</span>
	                  </a>
	                </li>
                <?php endif; ?>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="<?=admin_url('logout')?>">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Çıkış</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">
				<?=getMenu(session('user_rank'))?>
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->

<!-- navbar search -->
<div id="navbar-search" class="navbar-search collapse">
  <div class="navbar-search-inner">
    <form action="#">
      <span class="search-icon"><i class="fa fa-search"></i></span>
      <input class="search-field" type="search" placeholder="search..."/>
    </form>
    <button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <i class="fa fa-close"></i>
    </button>
  </div>
  <div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false"></div>
</div><!-- .navbar-search -->
