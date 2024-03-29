<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-2">
				<div class="app-action-panel" id="inbox-action-panel">
					<div class="action-panel-toggle" data-toggle="class" data-target="#inbox-action-panel" data-class="open">
						<i class="fa fa-chevron-right"></i>
						<i class="fa fa-chevron-left"></i>
					</div><!-- .app-action-panel -->

					<div class="m-b-lg">
						<a href="#" type="button" data-toggle="modal" data-target="#composeModal" class="btn action-panel-btn btn-default btn-block">Compose</a>
					</div>

					<div class="app-actions-list scrollable-container">
						<!-- mail category list -->
						<div class="list-group">
							<a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-envelope"></i>Inbox</a>
							<a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-star"></i>Starred</a>
							<a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-bookmark"></i>Important</a>
							<a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-paper-plane"></i>Sent</a>
							<a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-exclamation-triangle"></i>Drafts</a>
							<a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-folder"></i>All Mail</a>
							<a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-exclamation-circle"></i>Spam</a>
							<a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-trash"></i>Trash</a>
						</div><!-- .list-group -->

						<hr class="m-0 m-b-md" style="border-color: #ddd;">

						<!-- mail label list -->
						<div class="list-group">
							<h4>Labels</h4>
							<a href="#" class="list-group-item">
								<i class="m-r-sm fa fa-circle text-warning"></i>
								<span>Personal</span>
								<div class="item-actions">
									<i class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i>
									<i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<i class="m-r-sm fa fa-circle text-primary"></i>
								<span>Work</span>
								<div class="item-actions">
									<i class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i>
									<i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<i class="m-r-sm fa fa-circle text-danger"></i>
								<span>Business</span>
								<div class="item-actions">
									<i class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i>
									<i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<i class="m-r-sm fa fa-circle text-success"></i>
								<span>Clients</span>
								<div class="item-actions">
									<i class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i>
									<i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i>
								</div>
							</a>
							<a href="#" class="list-group-item text-color" data-toggle="modal" data-target="#labelModal"><i class="fa fa-plus m-r-sm"></i> Add New Label</a>
						</div><!-- .list-group -->

						<hr class="m-0 m-b-md" style="border-color: #ddd;">

						<div class="list-group">
							<a href="#" class="text-color list-group-item"><i class="m-r-sm fa fa-gear"></i>settings</a>
							<a href="#" class="text-color list-group-item"><i class="m-r-sm fa fa-exclamation-circle"></i>Need Help?</a>
						</div>
					</div><!-- .app-actions-list -->
				</div><!-- .app-action-panel -->
			</div><!-- END column -->

			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="mail-toolbar m-b-lg">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#">time</a></li>
									<li><a href="#">importance</a></li>
								</ul>
							</div>

							<div class="btn-group" role="group">
								<a href="#" class="btn btn-default"><i class="fa fa-trash"></i></a>
								<a href="#" class="btn btn-default"><i class="fa fa-exclamation-circle"></i></a>
							</div>
							<a href="#" class="btn btn-default"><i class="fa fa-refresh"></i></a>

							<div class="btn-group pull-right" role="group">
								<a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
								<a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table mail-list">
						<tr>
							<td>
								<!-- a single mail -->
								<div class="mail-item">
									<table class="mail-container">
										<tr>
											<td class="mail-left">
												<div class="avatar avatar-lg avatar-circle">
													<a href="#"><img src="../assets/images/208.jpg" alt="sender photo"></a>
												</div>
											</td>
											<td class="mail-center">
												<div class="mail-item-header">
													<h4 class="mail-item-title"><a href="mail-view.html" class="title-color">Welcome To Dashboard</a></h4>
													<a href="#"><span class="label label-success">client</span></a>
													<a href="#"><span class="label label-primary">work</span></a>
												</div>
												<p class="mail-item-excerpt">Welcome To your dashboard. here you can manage and coordinate any activities</p>
											</td>
											<td class="mail-right">
												<p class="mail-item-date">2 hours ago</p>
												<p class="mail-item-star starred">
													<a href="#"><i class="zmdi zmdi-star"></i></a>
												</p>
											</td>
										</tr>
									</table>
								</div><!-- END mail-item -->

								<!-- a single mail -->
								<div class="mail-item">
									<table class="mail-container">
										<tr>
											<td class="mail-left">
												<div class="avatar avatar-lg avatar-circle">
													<a href="#"><img src="../assets/images/209.jpg" alt="sender photo"></a>
												</div>
											</td>
											<td class="mail-center">
												<div class="mail-item-header">
													<h4 class="mail-item-title"><a href="mail-view.html" class="title-color">Account Activity</a></h4>
													<a href="#"><span class="label label-warning">personal</span></a>
												</div>
												<p class="mail-item-excerpt">A login activity detected from unusual location. please check this mail</p>
											</td>
											<td class="mail-right">
												<p class="mail-item-date">1 minute ago</p>
												<p class="mail-item-star">
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</p>
											</td>
										</tr>
									</table>
								</div><!-- END mail-item -->

								<!-- a single mail -->
								<div class="mail-item">
									<table class="mail-container">
										<tr>
											<td class="mail-left">
												<div class="avatar avatar-lg avatar-circle">
													<a href="#"><img src="../assets/images/210.jpg" alt="sender photo"></a>
												</div>
											</td>
											<td class="mail-center">
												<div class="mail-item-header">
													<h4 class="mail-item-title"><a href="mail-view.html" class="title-color">Sales Report 2014</a></h4>
													<a href="#"><span class="label label-primary">work</span></a>
												</div>
												<p class="mail-item-excerpt">Lorem ipsum. ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, accusamus</p>
											</td>
											<td class="mail-right">
												<p class="mail-item-date">2 hours ago</p>
												<p class="mail-item-star">
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</p>
											</td>
										</tr>
									</table>
								</div><!-- END mail-item -->

								<!-- a single mail -->
								<div class="mail-item">
									<table class="mail-container">
										<tr>
											<td class="mail-left">
												<div class="avatar avatar-lg avatar-circle">
													<a href="#"><img src="../assets/images/211.jpg" alt="sender photo"></a>
												</div>
											</td>
											<td class="mail-center">
												<div class="mail-item-header">
													<h4 class="mail-item-title"><a href="mail-view.html" class="title-color">Sales Report 2014</a></h4>
													<a href="#"><span class="label label-danger">business</span></a>
												</div>
												<p class="mail-item-excerpt">Lorem ipsum. ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, accusamus</p>
											</td>
											<td class="mail-right">
												<p class="mail-item-date">Just now</p>
												<p class="mail-item-star starred">
													<a href="#"><i class="zmdi zmdi-star"></i></a>
												</p>
											</td>
										</tr>
									</table>
								</div><!-- END mail-item -->

								<!-- a single mail -->
								<div class="mail-item">
									<table class="mail-container">
										<tr>
											<td class="mail-left">
												<div class="avatar avatar-lg avatar-circle">
													<a href="#"><img src="../assets/images/212.jpg" alt="sender photo"></a>
												</div>
											</td>
											<td class="mail-center">
												<div class="mail-item-header">
													<h4 class="mail-item-title"><a href="mail-view.html" class="title-color">Sales Report 2014</a></h4>
													<a href="#"><span class="label label-warning">personal</span></a>
												</div>
												<p class="mail-item-excerpt">Lorem ipsum. ipsum dolor sit consectetur adipisicing elit. Eveniet, accusamus</p>
											</td>
											<td class="mail-right">
												<p class="mail-item-date">a minute ago</p>
												<p class="mail-item-star">
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</p>
											</td>
										</tr>
									</table>
								</div><!-- END mail-item -->

								<!-- a single mail -->
								<div class="mail-item">
									<table class="mail-container">
										<tr>
											<td class="mail-left">
												<div class="avatar avatar-lg avatar-circle">
													<a href="#"><img src="../assets/images/213.jpg" alt="sender photo"></a>
												</div>
											</td>
											<td class="mail-center">
												<div class="mail-item-header">
													<h4 class="mail-item-title"><a href="mail-view.html" class="title-color">Sales Report 2012</a></h4>
													<a href="#"><span class="label label-primary">work</span></a>
												</div>
												<p class="mail-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, accusamus</p>
											</td>
											<td class="mail-right">
												<p class="mail-item-date">10 days ago</p>
												<p class="mail-item-star starred">
													<a href="#"><i class="zmdi zmdi-star"></i></a>
												</p>
											</td>
										</tr>
									</table>
								</div><!-- END mail-item -->

								<!-- a single mail -->
								<div class="mail-item">
									<table class="mail-container">
										<tr>
											<td class="mail-left">
												<div class="avatar avatar-lg avatar-circle">
													<a href="#"><img src="../assets/images/214.jpg" alt="sender photo"></a>
												</div>
											</td>
											<td class="mail-center">
												<div class="mail-item-header">
													<h4 class="mail-item-title"><a href="mail-view.html" class="title-color">Sales Report 2011</a></h4>
													<a href="#"><span class="label label-success">client</span></a>
												</div>
												<p class="mail-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, accusamus</p>
											</td>
											<td class="mail-right">
												<p class="mail-item-date">2 years ago</p>
												<p class="mail-item-star">
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</p>
											</td>
										</tr>
									</table>
								</div><!-- END mail-item -->
							</td>
						</tr>
					</table>
				</div>
			</div><!-- END column -->
		</div><!-- .row -->
	</section><!-- .app-content -->
</div><!-- .wrap -->

<!-- Compose modal -->
<div class="modal fade" id="composeModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">New Message</h4>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="form-group">
						<input name="mail_from_field" id="mail_from_field" type="text" class="form-control" placeholder="from">
					</div>
					<div class="form-group">
						<input name="mail_to_field" id="mail_to_field" type="text" class="form-control" placeholder="to">
					</div>
					<div class="form-group">
						<input name="mail_subject_field" id="mail_subject_field" type="text" class="form-control" placeholder="subject">
					</div>
					<textarea name="mail_body_field" id="mail_body_field" cols="30" rows="5" class="form-control" placeholder="content"></textarea>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-danger"><i class="fa fa-trash"></i></button>
				<button type="button" data-dismiss="modal" class="btn btn-success"><i class="fa fa-save"></i></button>
				<button type="button" data-dismiss="modal" class="btn btn-primary">Send <i class="fa fa-send"></i></button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- new label Modal -->
<div id="labelModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Create / update label</h4>
			</div>
			<form action="#" id="newCategoryForm">
				<div class="modal-body">
					<div class="form-group m-0">
						<input type="text" id="catLabel" class="form-control" placeholder="Label">
					</div>
				</div><!-- .modal-body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
				</div><!-- .modal-footer -->
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- delete item Modal -->
<div id="deleteItemModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Delete item</h4>
			</div>
			<div class="modal-body">
				<h5>Do you really want to delete this item ?</h5>
			</div><!-- .modal-body -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
			</div><!-- .modal-footer -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
