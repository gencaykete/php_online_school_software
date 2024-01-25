<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=isset($meta['title']) ? $meta['title'] : setting('title')?></title>
    <meta name="description" content="<?=isset($meta['description']) ? $meta['description'] : setting('description')?>">
    <meta name="keywords" content="<?=isset($meta['keywords']) ? $meta['keywords'] : setting('keywords')?>">

    <link href="<?=public_url('css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/font-awesome.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/main.css?u='.rand())?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <style media="screen">
      @font-face {
        font-family: "(MyA)Edo SZ";
        src : url(<?=public_url('fonts/pembe.ttf')?>);
      }
      .fontla{
        font-family: "(MyA)Edo SZ" !important;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div class="mobile-menu">
    <ul class="navigation list-inline">
      <?php
        $pages = $db->from('pages')->where('page_menu',1)->all();
        foreach ($pages as $row) {
      ?>
      <li onclick="document.location='<?=site_url('page/'.$row['page_seo'])?>'">
        <a href="<?=site_url('page/'.$row['page_seo'])?>" style="color:#fff;">
          <?=$row['page_title']?>
        </a>
      </li><br>
     <?php } ?>
     <li onclick="document.location='<?=site_url('blogs')?>'">
       <a href="<?=site_url('blogs')?>" style="color:#fff;">
         Blog
       </a>
     </li><br><br>
         <a href="<?=admin_url()?>" style="margin-right:25px;">
           <button type="button" class="btn btn-info">
               <i class="fa fa-user-plus"></i>
               <b>Giriş Yap</b>
           </button>
         </a>
    </ul>
  </div>
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-left">

            </div>
            <div class="col-md-8 text-right">
                <ul class="list-inline">
                    <li>Destek Saatleri 10:00 - 23:00</li>
                    <li><i class="fa fa-phone-square"></i> <?=setting('tel')?></li>
                    <li><a href="mailto:<?=setting('email')?>"><i class="fa fa-envelope"></i> <?=setting('email')?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header>
  <div class="text-right visible-xs mobil-ac">
      <ul class="list-inline">
          <li>
              <a href="javascript:;" onclick="acmobil()">
                <button type="button" class="btn btn-colorful">
                    <i class="fa fa-bars"></i>
                </button>
              </a>
          </li>
      </ul>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-2 text-left">
              <a href="<?=site_url()?>">
                <img height="54" src="<?=site_url(setting('logo'))?>" class="lggg" style="max-height:60px" alt="Logo">
              </a>
          </div>

          <div class="col-md-6 text-center visible-md visible-lg">
              <ul class="navigation list-inline">
                <?php
                  $pages = $db->from('pages')->where('page_menu',1)->all();
                  foreach ($pages as $row) {
                ?>
                <li>
                  <a href="<?=site_url('page/'.$row['page_seo'])?>">
                    <?=$row['page_title']?>
                  </a>
                </li>
               <?php } ?>
               <li>
                 <a href="<?=site_url('blogs')?>">
                   Blog
                 </a>
               </li>
              </ul>
          </div>
          <div class="col-md-4 text-right visible-md visible-lg">
              <ul class="list-inline">
                  <li>
                      <a href="<?=admin_url()?>">
                        <button type="button" class="btn btn-colorful">
                            <i class="fa fa-user-plus"></i>
                            <b>Giriş Yap</b>
                        </button>
                      </a>
                  </li>
              </ul>
          </div>

      </div>
  </div>
  </header>
