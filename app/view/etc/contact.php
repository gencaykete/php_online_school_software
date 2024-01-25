<?php require view('static/header'); ?>
    <article id="art_iletisim" class="kurumsal_article">
        <section id="breadcrumb">
            <ul>
                <li>
                  <a href="<?=site_url()?>">
                    <img src="<?=public_url('images/icon_breadcrumb_home.svg')?>" alt="" />
                  </a>
                </li>
                <li>&dash;</li>
                <li>İletişim</li>
            </ul>
        </section>

        <section class="full_content">
            <h1>İLETİŞİM<span></span></h1>
            <div class="wrapper">
                <?=htmlspecialchars_decode(setting('map'))?>
                <div class="sube_cover">
                    <div class="sube no_border">
                        <div class="kurumsal_h2">İLETİŞİM BİLGİLERİ</div>
                        <div class="sube_left">
                            <div class="sube_text_cover">
                                <div class="sube_image">
                                    <img src="<?=public_url('images/icon_sube_pin.png')?>" alt="" />
                                </div>
                                <div class="sube_text">
                                    <label>Adres:</label>
                                    <?=setting('adres')?>
                                </div>
                            </div>
                            <div class="sube_text_cover">
                                <div class="sube_image">
                                    <img src="<?=public_url('images/icon_sube_email.png')?>" alt="" />
                                </div>
                                <div class="sube_text">
                                    <label>E-posta:</label>
                                    <a href="mailto:<?=setting('email')?>" class="t2"><?=setting('email')?></a>
                                </div>
                            </div>
                        </div>
                        <div class="sube_right">
                            <div class="sube_text_cover">
                                <div class="sube_image">
                                    <img src="<?=public_url('images/icon_sube_phone.png')?>" alt="" />
                                </div>
                                <div class="sube_text">
                                    <label>Telefon:</label>
                                    <a href="tel:<?=setting('tel')?>" class="t2"><?=setting('tel')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="form_wrapper">
                    <div class="kurumsal_h2">İLETİŞİM FORMU</div>
                    <form action="" method="post" class="kurumsalForm" id="con">
                        <input type="text" class="form_left_text" placeholder="Ad Soyad *" name="ad" required/>
                        <input type="text" class="form_right_text" placeholder="Konu *" name="subject" required/>
                        <input type="text" class="form_left_text" placeholder="Telefon *" name="tel" required/>

                        <textarea class="form_right_textarea" placeholder="Mesaj *" name="message" required></textarea>
                        <input type="text" class="form_left_text" placeholder="Email *"  name="email" required/>
                        <div class="gradient_button orange_gradient_button t5">
                          <input type="hidden" name="contact" value="1">
                            <a href="javascript:;" onclick="con()">GÖNDER</a>
                            <span class="t3"></span>
                            <div class="button_bg t5"></div>
                        </div>
                    </form>
                </div>


                <div class="clear"></div>

            </div>
        </section>
    </article>
<?php require view('static/footer'); ?>
<script type="text/javascript">
  function con() {
    $('#con').submit();
  }
</script>
