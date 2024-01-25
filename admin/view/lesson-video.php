<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg">
					<div class="row">
            <div class="col-md-4">
              <h4 class="m-b-lg"><?=$query['video_title']?></h4>
            </div>
          </div>
					<div class="row">
            <div class="col-md-8">
              <video width="1150" id="audio">
      				  <source src="<?=$query['video_src']?>" type="video/mp4">
      				  Tarayıcınız video elementini desteklemiyor.
      				</video>
              <div class="progress progress-sm">
    						<div class="progress-bar progress-bar-warning" id="progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                  <span class="current" style="float:left;margin-left:10px;"></span>
                  <span class="duration" style="float:right;margin-right:10px;"></span>
                </div>

    					</div>
              <button type="button" id="play" class="btn btn-warning rounded"><i class="fa fa-play"></i> </button>
              <button type="button" id="pause" class="btn btn-danger rounded"><i class="fa fa-pause"></i></button>


              <p style="margin-top:1rem"><?=$query['video_detail']?></p>
            </div>
            <style media="screen">
              .history li{
                height: 40px;
                padding: 0px 10px;
                line-height: 40px;
              }
              .history li:nth-child(2n){
                background-color: #ddd
              }
            </style>
            <div class="col-md-4" style="height:650px;overflow-y:scroll;padding:10px 40px;">
              <ul class="history">
                <?php if(count($view)>0){ foreach ($view as $row): ?>
                  <li>
                    <span class="pull-left"><?=$row['user_name']?> Dersi Görüntüledi</span>
                    <span class="pull-right"><?=timeConvert($row['view_date'])?></span>
                  </li>
                <?php endforeach;}else{ ?>
                  <li class="bg-danger">Dersi Henüz Kimse Görüntülemedi</li>
                <?php } ?>
              </ul>
            </div>
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
<script type="text/javascript">
  var video_code="<?=route(2)?>";
</script>
<?php require admin_view('static/footer'); ?>
<script type="text/javascript">
// saniyeyi çeviren fonksiyon
function readableDuration(seconds) {
    sec = Math.floor( seconds );
    min = Math.floor( sec / 60 );
    min = min >= 10 ? min : '0' + min;
    sec = Math.floor( sec % 60 );
    sec = sec >= 10 ? sec : '0' + sec;
    return min + ':' + sec;
}

// html audio nesnesi
var audio = $('#audio'),
    progress = $('#progress'),
    duration = 0;

// oynatma olayı
$('#play').on('click', function(e){
    audio[0].play();
    e.preventDefault();
});

// durdurma olayı
$('#pause').on('click', function(e){
    audio[0].pause();
    e.preventDefault();
});

// hazır olduğunda toplam süreyi yazdır
audio.bind('canplay', function(){
    duration = audio[0].duration;
    $('.duration').text( readableDuration(duration) );
});

// değişiklik olduğunda mevcut süreyi yazdır
audio.bind('timeupdate', function(){

    var current = audio[0].currentTime;
    $('.current').text( readableDuration(current) );

    // yüzdeyi hesapla
    var currentPercent = Math.ceil( (current / duration) * 100 );
    progress.width( currentPercent + '%' );

});

audio.bind('progress', function(){
    try {
        var currentBuffered = audio[0].progress.end(audio[0].progress.length - 1) / duration * 100;
        progress.width(currentBuffered + '%');
    } catch ( err ){
        // err
    }
});
function load_video_view(video_code) {
  $.ajax({
    url: site_url+"/load-view",
    type: "POST",
    data: {'video_code':video_code},
    success: function(data){
      $('.history').html(data);
    }
  });
}
audio[0].addEventListener("ended", function() {
    $.ajax({
      url: site_url+"/add-view",
      type: "POST",
      data: {'video_code':video_code},
      success: function(){
        load_video_view(video_code);
      }
    });
});
</script>
