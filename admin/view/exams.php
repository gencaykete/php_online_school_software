<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg">
					<div class="row">
            <div class="col-md-4">
              <h4 class="m-b-lg">Sınavlar</h4>
            </div>
            <?php if (session('user_rank')==3): ?>
              <div class="col-md-8 text-right">
                <a href="<?=admin_url('add-exam')?>" class="btn btn-success btn-sm rounded">Sınav Ekle <i class="fa fa-plus"></i> </a>
              </div>
            <?php endif; ?>
          </div>
					<div class="row">
            <?php if(count($query)>0){ ?>
              <?php
                  foreach ($query as $row):
                    $v=$db->from('questions')->where('question_exam',$row['exam_code'])->all();
                    $k=$db->from('exam_notes')->where('note_exam',$row['exam_code'])->all();
                 ?>
                <div class="col-md-3" style="position:relative;">
                  <a href="<?=admin_url('questions/'.$row['exam_code'])?>">
                    <div class="bg-danger" style="width:100;height:230px!important;display:flex;justify-content:center;align-items:center;flex-direction: column;/*background-color:#3b3e47*/">
                      <p style="font-size:24px;font-weight:bold;color:#fff;"><?=$row['lesson_class'].'.Sınıf '.$row['lesson_name'].' sınavı'?></p>
                      <p style="font-size:18px;font-weight:bold;color:#fff;">Soru Sayısı: <?=count($v)?></p>
                      <p style="font-size:18px;font-weight:bold;color:#fff;">Katılan Sayısı: <?=count($k)?></p>
                      <p style="font-size:18px;font-weight:bold;color:#fff;"><?=getFinish($row['exam_date']) == '[NO_TIME]' ? "Sınav Tarihi: " : 'Kalan Süre'?>: <?=getFinish($row['exam_date']) != '[NO_TIME]' ? getFinish($row['exam_date']) : $row['exam_date']?></p>
                    </div>
                  </a>
                  <div class="dropdown" style="position:absolute;top:12px;right:24px;">
                    <button class="btn btn-dark dropdown-toggle rounded" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i> </button>
                    <ul class="dropdown-menu">
                      <li><a href="<?=admin_url('edit-exam/'.$row['exam_code'])?>"><i class="fa fa-pencil"></i> Düzenle</a></li>
                      <?php if ($row['exam_view']=='[NO]'){ ?>
                        <li><a href="<?=admin_url('exams/view-notes/'.$row['exam_code'])?>"><i class="fa fa-eye"></i> Notları Açıkla</a></li>
                      <?php }else{ ?>
                        <li><a href="<?=admin_url('exams/hide-notes/'.$row['exam_code'])?>"><i class="fa fa-eye-slash"></i> Notları Gizle</a></li>
                      <?php } ?>
                      <li><a href="<?=admin_url('exam-notes/'.$row['exam_code'])?>"><i class="fa fa-line-chart"></i> Sınav Sonuçları</a></li>
                      <li><a href="<?=admin_url('delete/exams/exam_id/'.$row['exam_id'])?>" class="btn-delete"><i class="fa fa-trash"></i> Sil</a></li>
                    </ul>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php }else{ ?>
              <div class="alert alert-danger">
                Henüz sınav eklenmemiş
              </div>
            <?php } ?>
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
<?php require admin_view('static/footer'); ?>
