<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-4">
            <h4 class="m-b-lg">Dersler</h4>
          </div>
          <div class="col-md-8 text-right">
            <a href="<?=admin_url('add-lesson')?>" class="btn btn-success btn-sm rounded">Ders Ekle <i class="fa fa-plus"></i> </a>
          </div>
					<div class="table-responsive col-md-12">
						<table class="table">
							<tr>
								<th>#</th>
								<th>Ders Adı</th>
								<th>Ders Sınıfı</th>
								<th>Ders Öğretmeni</th>
								<th>İşlemler</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++; ?>
                <tr>
  								<td><?=$i?></td>
  								<td><?=$row['lesson_name']?></td>
  								<td><?=$row['lesson_class']?></td>
  								<td><?=$row['user_name']?></td>
  								<td>
                    <a href="<?=admin_url('edit-lesson/'.$row['lesson_id'])?>" class="btn rounded btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="<?=admin_url('delete/lessons/lesson_id/'.$row['lesson_id'])?>" class="btn rounded btn-danger btn-delete"><i class="fa fa-trash"></i></a>
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
