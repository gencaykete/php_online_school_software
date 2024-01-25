<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-4">
            <h4 class="m-b-lg">Ödev Gönderenler</h4>
          </div>
          <div class="col-md-8 text-right">
            <a href="<?=admin_url('homeworks/'.$query[0]['homework_lesson'])?>" class="btn btn-danger btn-sm rounded"><b>Geri Git</b> <i class="fa fa-angle-left"></i> </a>
          </div>
					<div class="table-responsive col-md-12">
						<table class="table">
							<tr>
								<th>#</th>
                <th>Öğrenci Adı</th>
								<th>Tarih</th>
								<th>Dosyalar</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++; ?>
                <tr>
  								<td><?=$i?></td>
                  <td><?=$row['user_name']?></td>
  								<td><?=timeConvert($row['file_date'])?></td>
  								<td>
                    <a href="<?=site_url($row['file_name'])?>" class="btn rounded btn-danger"><b>İndir</b> <i class="fa fa-download"></i></a>
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
