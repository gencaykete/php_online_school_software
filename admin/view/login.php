<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Infinity - Bootstrap Admin Template</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="<?=admin_public_url('assets/images/logo.png')?>">

	<link rel="stylesheet" href="<?=admin_public_url('libs/bower/font-awesome/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('libs/bower/animate.css/animate.min.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('assets/css/core.css')?>">
	<link rel="stylesheet" href="<?=admin_public_url('assets/css/misc-pages.css')?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
	<div id="back-to-home">
		<a href="<?=site_url()?>" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.html">
				<span><i class="fa fa-gg"></i></span>
				<span>Infinity</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Okul Hesabınızla Giriş Yapın</h4>
  <?php if(isset($success)){ ?>
    <div class="alert alert-success">
      <?=$success?>
    </div>
  <?php }elseif(isset($error)){ ?>
    <div class="alert alert-danger">
      <?=$error?>
    </div>
  <?php } ?>
	<form action="" method="post">
    <input type="hidden" name="submit" value="1">
		<div class="form-group">
			<input id="sign-in-email" name="email" type="text" value="<?=cookie('user_username') ? cookie('user_username') : NULL?>" class="form-control" placeholder="Email">
		</div>

		<div class="form-group">
			<input id="sign-in-password" name="pass" type="password" value="<?=cookie('user_pass') ? cookie('user_pass') : NULL?>" class="form-control" placeholder="Şifre">
		</div>

		<div class="form-group m-b-xl">
			<div class="checkbox checkbox-primary">
				<input type="checkbox" checked name="remember" id="keep_me_logged_in"/>
				<label for="keep_me_logged_in">Beni Hatırla</label>
			</div>
		</div>
		<input type="submit" class="btn btn-primary" value="Giriş">
	</form>
</div><!-- #login-form -->

<div class="simple-page-footer">
	<p><a href="<?=admin_url('forgot-password')?>">Şifreni mi unuttun ?</a></p>
	<!--
    <p>
      <small>Don't have an account ?</small>
      <a href="signup.html">CREATE AN ACCOUNT</a>
    </p>
  -->
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>
</html>
