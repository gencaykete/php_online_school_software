<?php require view('static/header'); ?>
    <article class="kurumsal_article">
        <section id="breadcrumb">
            <ul>
                <li>
                  <a href="<?=site_url()?>">
                    <img src="<?=public_url('images/icon_breadcrumb_home.svg')?>" alt="" />
                  </a>
                </li>
                <li>&ndash;</li>
                <li>Hakkımızda</li>
            </ul>
        </section>

        <section class="two_col_content">
            <div class="wrapper">
                <div id="bg_gray_title"></div>
                <div id="left_col">
                    <div id="left_menu_cover">
                        <div id="left_menu_title">
                            KURUMSAL
                            <span></span>
                        </div>
                        <ul>
                            <?php foreach ($menu as $row): ?>
                              <li<?=$row['page_seo']==route(1) ? ' class="current"' : null?>>
                                <a href="<?=site_url('page/'.$row['page_seo'])?>"><?=$row['page_title']?></a>
                                <span class="left_menu_arrow t3"></span>
                                <span class="left_menu_line t3"></span>
                              </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div id="right_col">
                    <div id="image_wrapper">
                        <h1><?=$query['about_title']?><span></span></h1>
                        <img src="<?=public_url('Images/Sayfalar/5284Baslik_en54.jpg')?>" alt="" />
                        <div class="clear"></div>
                    </div>
                    <div id="right_col_wrapper">
						           <p><?=htmlspecialchars_decode($query['about_detail'])?></p>
					          </div>

					<div class="clear"></div>
				</div>
				<div class="clear"></div>
             </div>
        </section>
    </article>
<?php require view('static/footer'); ?>
