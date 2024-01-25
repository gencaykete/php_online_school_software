<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-4">
            <h4 class="m-b-lg">Ders Programı</h4>
          </div>
          <div class="col-md-8 text-right">
            <a href="<?=admin_url('add-program-lesson/'.route(2))?>" class="btn btn-success btn-sm rounded">Programı Düzenle <i class="fa fa-pencil"></i> </a>
          </div>

					<div class="table-responsive col-md-12">
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
							<?php if (count($query)>0){ ?>
                <?php foreach ($query as $row): ?>
                  <tr>
                    <td><span><b><?=$row['p_l_time']?></b></span></td>
                    <td><span class="btn btn-<?=@$color[permalink($row['p_l_1'])]?>"><b><?=$row['p_l_1']?></b></span></td>
                    <td><span class="btn btn-<?=@$color[permalink($row['p_l_2'])]?>"><b><?=$row['p_l_2']?></b></span></td>
                    <td><span class="btn btn-<?=@$color[permalink($row['p_l_3'])]?>"><b><?=$row['p_l_3']?></b></span></td>
                    <td><span class="btn btn-<?=@$color[permalink($row['p_l_4'])]?>"><b><?=$row['p_l_4']?></b></span></td>
                    <td><span class="btn btn-<?=@$color[permalink($row['p_l_5'])]?>"><b><?=$row['p_l_5']?></b></span></td>
                    <td><span class="btn btn-<?=@$color[permalink($row['p_l_6'])]?>"><b><?=$row['p_l_6']?></b></span></td>
                    <td><span class="btn btn-<?=@$color[permalink($row['p_l_7'])]?>"><b><?=$row['p_l_7']?></b></span></td>
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
