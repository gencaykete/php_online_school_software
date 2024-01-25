<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-3">
				<div class="app-action-panel" id="compose-action-panel">
					<div class="action-panel-toggle" data-toggle="class" data-target="#compose-action-panel" data-class="open">
						<i class="fa fa-chevron-right"></i>
						<i class="fa fa-chevron-left"></i>
					</div><!-- .app-action-panel -->
          <div class="m-b-lg">
						<a href="<?=admin_url('select-user')?>" type="button" class="btn action-panel-btn btn-default btn-block">Yeni Mesaj</a>
					</div>
          <div class="widget">
					<div class="media-group">
            <?php foreach ($my_chat as $row): $msg=$db->from('chat_message')->where('message_chat',$row['chat_id'])->where('message_sender',session('user_id'),'!=')->where('message_view',2)->all(); ?>
              <a href="<?=admin_url('send-message/'.$row['chat_id'])?>" class="media-group-item">
  							<div class="media">
  								<div class="media-left">
  									<div class="avatar avatar-sm avatar-circle">
  										<img src="<?=site_url($row['user_profile'])?>" alt="">
  									</div>
  								</div>
  								<div class="media-body">
  									<h5 class="media-heading"><?=$row['user_name']?></h5>
  									<small class="media-meta">Son Görülme: <?=timeConvert($row['user_last'])?></small>
                    <?php if (count($msg)>0): ?>
                      <span class="badge badge-danger" style="position:absolute;top:41%;right:4%;"><?=count($msg)?></span>
                    <?php endif; ?>
  								</div>
  							</div>
  						</a>
            <?php endforeach; ?>
					</div>
				</div>

				</div><!-- .app-action-panel -->
			</div><!-- END column -->

			<div class="col-md-9">
				<div class="panel panel-default new-message">
          <style media="screen">
          ::-webkit-scrollbar {
            width: 3px;
          }

          /* Track */
          ::-webkit-scrollbar-track {
            background: #fff;
          }

          /* Handle */
          ::-webkit-scrollbar-thumb {
            background: #3F95D1;
          }
          .message_content{
            height:380px;
            overflow-y:scroll;
            padding-top: 15px;
          }
          .message_content .me {
            float: right;
            background-color: #CA455A;
            color:#fff;
            padding: 5px 20px;
            border-radius: 20px;
            margin-bottom: 7px;
            cursor: pointer;
            max-width: 80%;
            clear: both;
          }
          .message_content .to {
            float: left;
            background-color: #3D58D0;
            color:#fff;
            padding: 5px 20px;
            border-radius: 20px;
            margin-bottom: 7px;
            cursor: pointer;
            max-width: 80%;
            clear: both;
          }
          .content-error{
            width: 100%;
            height: 400px;
            background-color: #EDF0F5;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size:24px;
            font-weight: 800;
          }
          </style>
					<div class="panel-body" style="height:500px;">
            <?php if (route(2)){ ?>
              <div class="message_content">
                <?php foreach ($query as $row): ?>
                  <div data-type="msg" data-id="<?=$row['message_id']?>" data-toggle="tooltip" title="<?=timeConvert($row['message_date'])?>" class="<?=$row['message_sender']==session('user_id') ? 'me' : 'to' ?>"><?=$row['message_text']?></div>
                <?php endforeach; ?>
              </div>
              <div class="input-group" style="position: absolute;bottom: 50px;width: calc(100% - 70px) !important;left: 30px;">
                <input type="text" class="form-control" id="msg" style="width:90%;float:left;" placeholder="Mesajınız..">
                <button class="btn btn-success px-4" id="send" style="width:10%;border-radius:0px;" type="button"><i class="fa fa-paper-plane text-white"></i></button>
              </div>
            <?php }else{ ?>
              <div class="content-error">
                Mesaj Göndermek İstediğiniz Kişiyi Seçin
              </div>
            <?php } ?>
					</div>
				</div><!-- .panel -->
			</div><!-- END column -->
		</div><!-- .row -->
	</section><!-- .app-content -->
</div><!-- .wrap -->

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
<script type="text/javascript">
  $('.message_content').scrollTop(50000);
  function getMessage() {
    var chat = "<?=route(2)?>";
    $.ajax({
      url: "<?=admin_url('get-message')?>",
      type: "POST",
      data: {'chat':chat},
      success: function(data){
        $('.message_content').html(data);
        $('.message_content').scrollTop(50000);
      }
    });
  }
  $('#send').click(function(){
    var chat = "<?=route(2)?>";
    var msg = $('#msg').val();

    if (msg.trim().length>0) {
      $.ajax({
        url: "<?=admin_url('send')?>",
        type: "POST",
        data: {'msg':msg,'chat':chat},
        success: function(data){
          getMessage();
          $('#msg').val('');
        }
      });
    }
  });

  $('#msg').keydown(function(e){
    if (e.keyCode==13) {
      var chat = "<?=route(2)?>";
      var msg = $('#msg').val();
      if (msg.trim().length>0) {
        $.ajax({
          url: "<?=admin_url('send')?>",
          type: "POST",
          data: {'msg':msg,'chat':chat},
          success: function(data){
            getMessage();
            $('#msg').val('');
          }
        });
      }
    }
  });

  setInterval(getMessage,1000);
</script>
