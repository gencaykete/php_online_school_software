<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-12">
            <h4 class="m-b-lg">Dersler</h4>
          </div>
					<div class="table-responsive col-md-12">
						<table class="table">
							<tr>
								<th>#</th>
								<th>Ders Adı</th>
								<th>Ders Sayısı</th>
								<th>İşlemler</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++;
                $l=$db->from('lesson_video')
                      ->where('video_school',$user['user_school'])
                      ->where('video_lesson',$row['lesson_id'])
                      ->where('video_class',$row['lesson_class'])
                      ->all();
                ?>
                <tr>
  								<td><?=$i?></td>
  								<td><?=$row['lesson_name']?></td>
  								<td><?=count($l)?></td>
  								<td>
                    <a href="<?=admin_url('lesson-videos/'.$row['lesson_id'])?>" class="btn rounded btn-info"><b>Dersler</b> <i class="fa fa-eye"></i></a>
                    <a href="<?=admin_url('homeworks/'.$row['lesson_id'])?>" class="btn rounded btn-danger"><b>Ödevler</b> <i class="fa fa-eye"></i></a>
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
<?php require admin_view('static/footer'); ?>
