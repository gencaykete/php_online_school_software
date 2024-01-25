<?php require view('static/header'); ?>
<div class="strip"></div>
<script type="text/javascript">
  var backgrounds = [<?php foreach($slider as $row){echo "'url(".site_url($row['slider_img']).")',"; } ?>];
</script>

<div class="content" style="background-color:#f5f5f5;">
    <div class="hero" style="background-position: center;margin-top:-35px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-7 pull-right">
                <div class="register-form-overlay hidden-xs">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h4>Kazanmaya Başlamak için</h4>
                            <h4><strong>ÜYE OLUN!</strong></h4>
                            <div class="alert alert-success cevap" style="display:none"></div>
                            <hr>
                        </div>
                    </div>
                    <form class="register-form formbir" action="javascript:void(0)" method="post">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_name" placeholder="Adınız">
                                </div>
                            </div>
                            <input type="hidden" name="submit" value="1">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_surname" placeholder="Soyadınız">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="user_email" placeholder="E-Posta Adresiniz">
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_tel" placeholder="Telefon Numaranız">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="user_pass" placeholder="Şifreniz">
                                </div>
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="user_message"> Yeni siparişlerde mesajla bildir
                            </label>
                        </div>
                        <button type="submit" id="post" class="btn btn-block btn-pink">Hemen Üye Ol</button>
                        <div class="row text-center">
                            <span>Kayıt sonrası aktivasyon mesajı gelecektir.</span>
                            <span>Lütfen numaranızı doğru yazdığınızdan emin olun.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slogan">
    <div class="container">
        <div class="row text-center">
            <h4 class="fontla" style="font-size:50px;"><?=$box['pembe_title']?></h4>
            <p><?=$box['pembe_desc']?></p>
        </div>
    </div>
</div>

<div class="col-xs-12 visible-xs">
    <div class="register-form-overlay">
        <div class="row text-center">
            <div class="col-md-12">
                <h4>Kazanmaya Başlamak için</h4>
                <h4><strong>ÜYE OLUN!</strong></h4>
                <div class="alert alert-success cevap" style="display:none"></div>
                <hr>
            </div>
        </div>
        <form class="register-form formpost" action="javascript:void(0)" method="post">
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_name" placeholder="Adınız">
                    </div>
                </div>
                <input type="hidden" name="submit" value="1">
                <div class="col-xs-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_surname" placeholder="Soyadınız">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="user_email" placeholder="E-Posta Adresiniz">
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_tel" placeholder="Telefon Numaranız">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <input type="password" class="form-control" name="user_pass" placeholder="Şifreniz">
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="user_message"> Yeni siparişlerde mesajla bildir
                </label>
            </div>
            <button type="submit" id="posti" class="btn btn-block btn-pink">Hemen Üye Ol</button>
            <div class="row text-center">
                <span>Kayıt sonrası aktivasyon mesajı gelecektir.</span>
                <span>Lütfen numaranızı doğru yazdığınızdan emin olun.</span>
            </div>
        </form>
    </div>
</div>
<div style="clear:both;"></div>
<div style="clear:both"></div>
<div style="clear:both"></div>
<div class="home-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="stages">
                    <div class="kapsa">
                      <div class="bir">
                        <img src="<?=site_url('upload/files/bir.png')?>" alt=""><br><br>
                        <span class="fontla" style="font-size:25px"><?=$box['ikon1']?></span><br><br>
                        <p><?=$box['text1']?></p>
                        <div></div>
                      </div>
                      <div class="iki">
                        <img src="<?=site_url('upload/files/iki.png')?>" alt=""><br><br>
                        <span class="fontla" style="font-size:25px"><?=$box['ikon2']?></span><br><br>
                        <p><?=$box['text2']?></p>
                        <div></div>
                      </div>
                      <div class="uc">
                        <img src="<?=site_url('upload/files/uc.png')?>" alt=""><br><br>
                        <span class="fontla" style="font-size:25px"><?=$box['ikon3']?></span><br><br>
                        <p><?=$box['text3']?></p>
                        <div></div>
                      </div>
                      <div style="clear:both"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="announcements">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-volume-control-phone"></i> Duyurular</h3>
                                </div>
                                <ul class="list-group">
                                    <?php foreach ($duyurular as $row): ?>
                                      <a href="<?=site_url('duyuru/'.$row['duyuru_id'])?>">
                                        <li class="list-group-item" style="border-bottom:1px solid #ddd;"><i class="fa fa-circle-o-notch"></i> <?=$row['duyuru_title']?></li>
                                      </a>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-30">
                    <div class="col-xs-6 text-center">
                        <div class="counter" style="border: 2px solid #1E88E5">
                            <span class="count text-info"><?=$user_say?></span>
                            <span class="title" style="font-size:14px">Aktif Üye</span>
                        </div>
                    </div>
                    <div class="col-xs-6 text-center">
                        <div class="counter" style="border: 2px solid #FC4B6C">
                            <span class="count text-danger"><?=$aktif_say?></span>
                            <span class="title" style="font-size:14px">Yazılan Yorum</span>
                        </div>
                    </div>
                    <div class="col-xs-6 text-center">
                        <div class="counter" style="border: 2px solid #A6427D">
                            <span class="count text-pink"><?=$tamam_say?></span>
                            <span class="title" style="font-size:14px">Teslim Edilen Sipariş</span>
                        </div>
                    </div>
                    <div class="col-xs-6 text-center">
                        <div class="counter" style="border: 2px solid #42C6DA">
                            <span class="count text-primary"><?=$toplam_odeme?> TL</span>
                            <span class="title" style="font-size:14px">Toplam Ödeme</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php require view('static/footer'); ?>
<script type="text/javascript">
  $('#post').click(function(){
    var data = $('.formbir').serialize();
    $.ajax({
      url: "<?=site_url('register')?>",
      type: "POST",
      data: data,
      success: function(e){
        $('.cevap').show();
        $('.cevap').text(e);
      }
    });
  });
  $('#posti').click(function(){
    var data = $('.formpost').serialize();
    $.ajax({
      url: "<?=site_url('register')?>",
      type: "POST",
      data: data,
      success: function(e){
        $('.cevap').show();
        $('.cevap').text(e);
      }
    });
  });
</script>
