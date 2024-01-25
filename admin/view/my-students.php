<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-12">
            <h4 class="m-b-lg">Öğrencilerim</h4>
          </div>
					<div class="table-responsive col-md-12">
						<table class="table" data-plugin="DataTable" id="default-datatable">
							<tr>
								<th>#</th>
								<th>Öğrenci Adı</th>
                <th>Kayıt Tarihi</th>
								<th>Sınıf</th>
								<th>İşlemler</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++; ?>
                <tr>
  								<td><?=$i?></td>
  								<td><?=$row['user_name']?></td>
  								<td><?=timeConvert($row['user_date'])?></td>
  								<td><?=$row['user_class']?></td>
  								<td>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#st-<?=$row['user_id']?>" class="btn rounded btn-info"><i class="fa fa-eye"></i></a>
                  </td>
  							</tr>
              <?php endforeach; ?>
						</table>
					</div>
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
        <div class="copyright pull-left">Copyright RaThemes 2016 &copy;</div>
      </div>
    </footer>
  </div>
  <!-- /#app-footer -->
</main>

<?php
foreach ($query as $rows) {
  /* Ders Programı Sorguları */
  $programs = $db->from('programs')
              ->where('p_l_class',$rows['user_class'])
              ->where('p_l_school',$user['user_school'])
              ->all();

  $color = [];
  $class=['primary','purple','warning','danger','success','info','pink','inverse'];
  $lesson = $db->from('lessons')->where('lesson_class',$rows['user_class'])->where('lesson_school',$user['user_school'])->all();
  $i=-1;
  foreach ($lesson as $row) {
    $i++;
    $color[permalink($row['lesson_name'])]=$class[$i];
  }

  /* Ders Programı Sorguları Bitiş */
  /* Not Sorguları */
  $notes = $db->from('exam_notes')
              ->where('note_user',$rows['user_id'])
              ->join('exams','%s.exam_code = %s.note_exam','left')
              ->join('lessons','%s.lesson_id = exams.exam_lesson','left')
              ->all();

  /* Not Sorguları Bitiş */
  /* Sağlık Bilgisi */
  $ills = $db->from('ills')
              ->where('ill_school',$user['user_school'])
              ->where('ill_student',$rows['user_id'])
              ->all();
  /* Sağlık Bilgisi Bitiş*/

?>
<div class="modal fade bd-example-modal-lg" id="st-<?=$rows['user_id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width: 85% !important;">
    <div class="modal-content" style="min-height: 500px;">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#program<?=$rows['user_id']?>">Ders Programı</a></li>
        <li><a data-toggle="tab" href="#notes<?=$rows['user_id']?>">Not Bilgisi</a></li>
        <li><a data-toggle="tab" href="#ills<?=$rows['user_id']?>">Sağlık Bilgileri</a></li>
      </ul>

      <div class="tab-content">
        <div id="program<?=$rows['user_id']?>" class="tab-pane fade in active">
          <div class="table-responsive col-md-12" style="background-color:#fff;">
						<table class="table">
							<tr>
								<th>#</th>
                <th>Pazartesi</th>
                <th>Salı</th>
                <th>Çarşamba</th>
                <th>Perşembe</th>
                <th>Cuma</th>
                <th>Cumartesi</th>
								<th>Pazar</th>
							</tr>
							<?php if (count($programs)>0){ ?>
                <?php foreach ($programs as $row): ?>
                  <tr>
                    <td><span><b><?=$row['p_l_time']?></b></span></td>
                    <td><span class="btn btn-<?=isset($color[permalink($row['p_l_1'])]) ? $color[permalink($row['p_l_1'])] : ''?>"><b><?=$row['p_l_1']?></b></span></td>
                    <td><span class="btn btn-<?=isset($color[permalink($row['p_l_2'])]) ? $color[permalink($row['p_l_2'])] : ''?>"><b><?=$row['p_l_2']?></b></span></td>
                    <td><span class="btn btn-<?=isset($color[permalink($row['p_l_3'])]) ? $color[permalink($row['p_l_3'])] : ''?>"><b><?=$row['p_l_3']?></b></span></td>
                    <td><span class="btn btn-<?=isset($color[permalink($row['p_l_4'])]) ? $color[permalink($row['p_l_4'])] : ''?>"><b><?=$row['p_l_4']?></b></span></td>
                    <td><span class="btn btn-<?=isset($color[permalink($row['p_l_5'])]) ? $color[permalink($row['p_l_5'])] : ''?>"><b><?=$row['p_l_5']?></b></span></td>
                    <td><span class="btn btn-<?=isset($color[permalink($row['p_l_6'])]) ? $color[permalink($row['p_l_6'])] : ''?>"><b><?=$row['p_l_6']?></b></span></td>
                    <td><span class="btn btn-<?=isset($color[permalink($row['p_l_7'])]) ? $color[permalink($row['p_l_7'])] : ''?>"><b><?=$row['p_l_7']?></b></span></td>
                  </tr>
                <?php endforeach; ?>
              <?php }else{ for($i=1;$i<=7;$i++){ ?>
                <tr>
                  <td><span><b>-</b></span></td>
                  <td><span><b>-</b></span></td>
                  <td><span><b>-</b></span></td>
                  <td><span><b>-</b></span></td>
                  <td><span><b>-</b></span></td>
                  <td><span><b>-</b></span></td>
                  <td><span><b>-</b></span></td>
                  <td><span><b>-</b></span></td>
                </tr>
              <?php }} ?>
						</table>
					</div>
        </div>
        <div id="notes<?=$rows['user_id']?>" class="tab-pane fade">
          <div class="table-responsive col-md-12" style="background-color:#fff;">
						<?php if(count($notes)>0){ ?>
              <table class="table">
  							<tr>
  								<th>#</th>
  								<th>Ders Adı</th>
  								<th>Notu</th>
  							</tr>
  							<?php $i=0; foreach ($notes as $row): $i++; ?>
                  <tr>
    								<td><?=$i?></td>
    								<td><?=$row['lesson_name']?></td>
    								<td><?=$row['note_point']?></td>
    							</tr>
                <?php endforeach; ?>
  						</table>
            <?php }else{ ?>
              <div class="alert alert-danger" style="margin-top:25px;">
                Açıklanmış not bulunamadı
              </div>
            <?php } ?>
					</div>
        </div>
        <div id="ills<?=$rows['user_id']?>" class="tab-pane fade">
          <div class="table-responsive col-md-12" style="background-color:#fff;">
            <?php if(count($ills)>0){ ?>
  						<table class="table">
  							<tr>
  								<th>#</th>
  								<th>Şikayet</th>
  								<th>Tanı</th>
  								<th>İlgilenen Yetkili</th>
  								<th>Tarih</th>
  							</tr>
  							<?php $i=0; foreach ($ills as $row): $i++; ?>
                  <tr>
    								<td><?=$i?></td>
    								<td><?=$row['ill_complaint']?></td>
                    <td><?=$row['ill_detail']?></td>
                    <td><?=$row['ill_doctor']?></td>
    								<td><?=$row['ill_date']?></td>
    							</tr>
                <?php endforeach; ?>
  						</table>
            <?php }else{ ?>
            <div class="alert alert-danger" style="margin-top:25px;">
              Sağlık Bilgisi Bulunamadı
            </div>
          <?php } ?>
					</div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php require admin_view('static/footer'); ?>
