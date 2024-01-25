<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-4">
            <h4 class="m-b-lg">Sınav Soruları</h4>
          </div>
          <div class="col-md-8 text-right">
            <a href="<?=admin_url('add-question/'.route(2))?>" class="btn btn-success btn-sm rounded">Soru Ekle <i class="fa fa-plus"></i> </a>
          </div>
					<div class="table-responsive col-md-12">
						<table class="table">
							<tr>
								<th>#</th>
								<th>Soru</th>
                <th>Cevap 1</th>
                <th>Cevap 2</th>
                <th>Cevap 3</th>
                <th>Cevap 4</th>
								<th>İşlemler</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++; ?>
                <tr>
  								<td><?=$i?></td>
  								<td><?=$row['question_text']?></td>
                  <td><button class="btn btn-sm btn-<?=$row['question_correct_ansver']=='1-sec' ? 'success' : 'danger'?>"><?=$row['question_ansver_1']?></button></td>
                  <td><button class="btn btn-sm btn-<?=$row['question_correct_ansver']=='2-sec' ? 'success' : 'danger'?>"><?=$row['question_ansver_2']?></button></td>
                  <td><button class="btn btn-sm btn-<?=$row['question_correct_ansver']=='3-sec' ? 'success' : 'danger'?>"><?=$row['question_ansver_3']?></button></td>
                  <td><button class="btn btn-sm btn-<?=$row['question_correct_ansver']=='4-sec' ? 'success' : 'danger'?>"><?=$row['question_ansver_4']?></button></td>
  								<td>
                    <a href="<?=admin_url('edit-question/'.$row['question_id'])?>" class="btn rounded btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="<?=admin_url('delete/questions/question_id/'.$row['question_id'])?>" class="btn rounded btn-danger btn-delete"><i class="fa fa-trash"></i></a>
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
