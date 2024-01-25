<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-4">
            <h4 class="m-b-lg">Veliler</h4>
          </div>
          <div class="col-md-8 text-right">
            <a href="<?=admin_url('add-veli')?>" class="btn btn-success btn-sm rounded">Veli Ekle <i class="fa fa-plus"></i> </a>
          </div>
					<div class="table-responsive col-md-12">
						<table class="table">
							<tr>
								<th>#</th>
								<th>Veli Adı</th>
								<th>Email Adresi</th>
								<th>Telefon Numarası</th>
								<th>Öğrencileri</th>
								<th>İşlemler</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++; $cek = $db->from('users')->where('user_veli',$row['user_id'])->all(); ?>
                <tr>
  								<td><?=$i?></td>
  								<td><?=$row['user_name']?></td>
  								<td><?=$row['user_email']?></td>
  								<td><?=$row['user_phone']?></td>
  								<td>
                    <?php foreach ($cek as $rows): echo "<b>".$rows['user_name']."</b><br>"; endforeach; ?>
                  </td>
  								<td>
                    <a href="<?=admin_url('edit-veli/'.$row['user_id'])?>" class="btn rounded btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="<?=admin_url('delete/users/user_id/'.$row['user_id'])?>" class="btn rounded btn-danger btn-delete"><i class="fa fa-trash"></i></a>
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
