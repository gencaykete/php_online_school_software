<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <img src="<?=site_url(setting('logo'))?>" style="max-width:200px !important;" alt="Logo">
                </div>
            </div>
            <div class="col-md-6 ftabout">
                <div class="about-us">
                    <h4>Hakkımızda</h4>
                    <p><?=setting('about')?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="social-media">
                    <h4>Bizi Takip Edin</h4>
                    <ul class="list-inline">
                        <li>
                            <a href="<?=setting('facebook')?>" target="_blank">
                                <img src="<?=public_url('img/socials/facebook.png')?>" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="<?=setting('twitter')?>" target="_blank">
                                <img src="<?=public_url('img/socials/twitter.png')?>" alt="Twitter">
                            </a>
                        </li>
                        <li>
                            <a href="<?=setting('instagram')?>" target="_blank">
                                <img src="<?=public_url('img/socials/instagram.png')?>" alt="Instagram">
                            </a>
                        </li>
                        <li>
                            <a href="<?=setting('whatsapp')?>" target="_blank">
                                <img src="<?=public_url('img/socials/whatsapp.png')?>" alt="Whatsapp">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="giris-yap" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Giriş Yap</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>E-Posta Adresiniz</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Şifreniz</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-key"></i></div>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?=public_url('js/jquery.js')?>"></script>
<script src="<?=public_url('js/bootstrap.js')?>"></script>
<script src="<?=public_url('js/jquery.mask.js')?>"></script>
<script src="<?=public_url('js/main.js?u='.rand())?>"></script>
<script type="text/javascript">
  function acmobil(){
    $('.mobile-menu').toggle(500);
  }
</script>
</body>
</html>
