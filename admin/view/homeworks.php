<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-4">
            <h4 class="m-b-lg">Ödevler</h4>
          </div>
          <?php if (session('user_rank')==3): ?>
            <div class="col-md-8 text-right">
              <a href="<?=admin_url('add-homework/'.route(2))?>" class="btn btn-success btn-sm rounded">Ödev Ekle <i class="fa fa-plus"></i> </a>
            </div>
          <?php endif; ?>
					<div class="table-responsive col-md-12">
						<table class="table">
							<tr>
								<th>#</th>
								<th>Ödev Başlığı</th>
								<th>Ödev Detayı</th>
                <th>Son Gönderim Tarihi</th>
								<th>Gönderen Sayısı</th>
								<th>İşlemler</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++;
              $c=$db->from('homework_files')->where('file_homework',$row['homework_id'])->all();
                ?>
                <tr>
  								<td><?=$i?></td>
  								<td><?=$row['homework_title']?></td>
  								<td><?=$row['homework_detail']?></td>
                  <td><?=($row['homework_date'])?></td>
  								<td><?=count($c)?></td>
  								<td>
                    <?php if (session('user_rank')==3): ?>
                      <a href="<?=admin_url('homework-files/'.$row['homework_id'])?>" class="btn rounded btn-info"><b>Gönderenleri Görüntüle</b> <i class="fa fa-eye"></i></a>
                    <?php endif; ?>
                    <a href="<?=admin_url('delete/homeworks/homework_id/'.$row['homework_id'])?>" class="btn rounded btn-danger btn-delete"><b>Ödevi Sil</b> <i class="fa fa-trash"></i></a>
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
