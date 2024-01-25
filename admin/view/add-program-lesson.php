<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Ders Programları</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div style="width:12.5%;font-size:24px;font-weight:24px;text-align:center;float:left;margin-bottom:15px;">Ders Saati</div>
                <div style="width:12.5%;font-size:24px;font-weight:24px;text-align:center;float:left;margin-bottom:15px;">Pazartesi</div>
                <div style="width:12.5%;font-size:24px;font-weight:24px;text-align:center;float:left;margin-bottom:15px;">Salı</div>
                <div style="width:12.5%;font-size:24px;font-weight:24px;text-align:center;float:left;margin-bottom:15px;">Çarşamba</div>
                <div style="width:12.5%;font-size:24px;font-weight:24px;text-align:center;float:left;margin-bottom:15px;">Perşembe</div>
                <div style="width:12.5%;font-size:24px;font-weight:24px;text-align:center;float:left;margin-bottom:15px;">Cuma</div>
                <div style="width:12.5%;font-size:24px;font-weight:24px;text-align:center;float:left;margin-bottom:15px;">Cumartesi</div>
                <div style="width:12.5%;font-size:24px;font-weight:24px;text-align:center;float:left;margin-bottom:15px;">Pazar</div>
              </div>
              <?php for ($i=1; $i <=7 ; $i++) {  ?>
                <div class="row">
                  <div class="form-group col-md-2" style="width:12.5%">
    									<select class="form-control" name="p_l_time_<?=$i?>" data-plugin="select2">
                        <option value="06:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='06:00' ? ' selected' : NULL ?>>06:00</option>
                        <option value="07:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='07:00' ? ' selected' : NULL ?>>07:00</option>
                        <option value="08:00"<?=$i==1 ? ' selected' : NULL ?><?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='08:00' ? ' selected' : NULL ?>>08:00</option>
                        <option value="09:00"<?=$i==2 ? ' selected' : NULL ?><?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='09:00' ? ' selected' : NULL ?>>09:00</option>
                        <option value="10:00"<?=$i==3 ? ' selected' : NULL ?><?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='10:00' ? ' selected' : NULL ?>>10:00</option>
                        <option value="11:00"<?=$i==4 ? ' selected' : NULL ?><?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='11:00' ? ' selected' : NULL ?>>11:00</option>
                        <option value="12:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='12:00' ? ' selected' : NULL ?>>12:00</option>
                        <option value="13:00"<?=$i==5 ? ' selected' : NULL ?><?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='13:00' ? ' selected' : NULL ?>>13:00</option>
                        <option value="14:00"<?=$i==6 ? ' selected' : NULL ?><?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='14:00' ? ' selected' : NULL ?>>14:00</option>
                        <option value="15:00"<?=$i==7 ? ' selected' : NULL ?><?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='15:00' ? ' selected' : NULL ?>>15:00</option>
                        <option value="16:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='16:00' ? ' selected' : NULL ?>>16:00</option>
                        <option value="17:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='17:00' ? ' selected' : NULL ?>>17:00</option>
                        <option value="18:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='18:00' ? ' selected' : NULL ?>>18:00</option>
                        <option value="19:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='19:00' ? ' selected' : NULL ?>>19:00</option>
                        <option value="20:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='20:00' ? ' selected' : NULL ?>>20:00</option>
                        <option value="21:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='21:00' ? ' selected' : NULL ?>>21:00</option>
                        <option value="22:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='22:00' ? ' selected' : NULL ?>>22:00</option>
                        <option value="23:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='23:00' ? ' selected' : NULL ?>>23:00</option>
                        <option value="00:00"<?=isset($program[$i-1]['p_l_time']) && $program[$i-1]['p_l_time']=='00:00' ? ' selected' : NULL ?>>00:00</option>
                      </select>
    							</div>
                  <div class="form-group col-md-1" style="width:12.5%">
    									<select class="form-control" name="p_l_1_<?=$i?>" data-plugin="select2">
                        <option value="-">Ders Yok</option>
                        <?php foreach ($query as $row): ?>
                          <option value="<?=$row['lesson_name']?>"<?=isset($program[$i-1]['p_l_1']) && $program[$i-1]['p_l_1']==$row['lesson_name'] ? ' selected' : NULL ?>><?=$row['lesson_name']?></option>
                        <?php endforeach; ?>
                      </select>
    							</div>
                  <div class="form-group col-md-1" style="width:12.5%">
    									<select class="form-control" name="p_l_2_<?=$i?>" data-plugin="select2">
                        <option value="-">Ders Yok</option>
                        <?php foreach ($query as $row): ?>
                          <option value="<?=$row['lesson_name']?>"<?=isset($program[$i-1]['p_l_2']) && $program[$i-1]['p_l_2']==$row['lesson_name'] ? ' selected' : NULL ?>><?=$row['lesson_name']?></option>
                        <?php endforeach; ?>
                      </select>
    							</div>
                  <div class="form-group col-md-1" style="width:12.5%">
    									<select class="form-control" name="p_l_3_<?=$i?>" data-plugin="select2">
                        <option value="-">Ders Yok</option>
                        <?php foreach ($query as $row): ?>
                          <option value="<?=$row['lesson_name']?>"<?=isset($program[$i-1]['p_l_3']) && $program[$i-1]['p_l_3']==$row['lesson_name'] ? ' selected' : NULL ?>><?=$row['lesson_name']?></option>
                        <?php endforeach; ?>
                      </select>
    							</div>
                  <div class="form-group col-md-1" style="width:12.5%">
    									<select class="form-control" name="p_l_4_<?=$i?>" data-plugin="select2">
                        <option value="-">Ders Yok</option>
                        <?php foreach ($query as $row): ?>
                          <option value="<?=$row['lesson_name']?>"<?=isset($program[$i-1]['p_l_4']) && $program[$i-1]['p_l_4']==$row['lesson_name'] ? ' selected' : NULL ?>><?=$row['lesson_name']?></option>
                        <?php endforeach; ?>
                      </select>
    							</div>
                  <div class="form-group col-md-1" style="width:12.5%">
    									<select class="form-control" name="p_l_5_<?=$i?>" data-plugin="select2">
                        <option value="-">Ders Yok</option>
                        <?php foreach ($query as $row): ?>
                          <option value="<?=$row['lesson_name']?>"<?=isset($program[$i-1]['p_l_5']) && $program[$i-1]['p_l_5']==$row['lesson_name'] ? ' selected' : NULL ?>><?=$row['lesson_name']?></option>
                        <?php endforeach; ?>
                      </select>
    							</div>
                  <div class="form-group col-md-1" style="width:12.5%">
    									<select class="form-control" name="p_l_6_<?=$i?>" data-plugin="select2">
                        <option value="-">Ders Yok</option>
                        <?php foreach ($query as $row): ?>
                          <option value="<?=$row['lesson_name']?>"<?=isset($program[$i-1]['p_l_6']) && $program[$i-1]['p_l_6']==$row['lesson_name'] ? ' selected' : NULL ?>><?=$row['lesson_name']?></option>
                        <?php endforeach; ?>
                      </select>
    							</div>
                  <div class="form-group col-md-1" style="width:12.5%">
    									<select class="form-control" name="p_l_7_<?=$i?>" data-plugin="select2">
                        <option value="-">Ders Yok</option>
                        <?php foreach ($query as $row): ?>
                          <option value="<?=$row['lesson_name']?>"<?=isset($program[$i-1]['p_l_7']) && $program[$i-1]['p_l_7']==$row['lesson_name'] ? ' selected' : NULL ?>><?=$row['lesson_name']?></option>
                        <?php endforeach; ?>
                      </select>
    							</div>
                </div>
              <?php } ?>
              <div class="form-group text-center">
	               <button type="submit" class="btn btn-warning rounded">Kaydet</button>
              </div>

						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
		</div><!-- .row -->
	</section><!-- #dash-content -->
</div><!-- .wrap -->
  <!-- APP FOOTER -->
  <div class="wrap p-t-0">
    <footer class="app-footer">
      <div class="clearfix">
        <ul class="footer-menu pull-right">
          <li><a href="javascript:void(0)">Careers</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
          <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
        </ul>
        <div class="copyright pull-left">Copyright RaThemes 2016 ©</div>
      </div>
    </footer>
  </div>
  <!-- /#app-footer -->
</main>
<?php require admin_view('static/footer'); ?>
