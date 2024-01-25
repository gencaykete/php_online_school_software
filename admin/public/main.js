const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

$('.btn-delete').click(function(e){
  var url = $(this).attr('href');
  e.preventDefault();
  Swal.fire({
  title: 'Silme İşlemini Onaylayın',
  html: "Bu içeriği silmek istediğinizden emin misiniz?<br>Bu işlem geri alınamaz!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sil',
  cancelButtonText: 'İptal'
}).then((result) => {
  if (result.value) {
    window.location.href=url;
  }
})
});
$('input[valid]').keyup(function(){
  var input = $(this);
  var val = $(this).val();
  var key = $(this).attr('name');
  $.ajax({
    url: site_url+'/valid',
    type: "POST",
    data: {'key':key,'val':val,'not':not},
    success: function(data){
      if (data==1) {
        input.css({'border-color':'red'});
        Toast.fire({
          icon: 'error',
          title: 'Veri sisteme kayıtlı'
        })
        $('[type=submit]').fadeOut();
        $('form').attr('action','javascript:void(0)');
      }else {
        input.css({'border-color':''});
        $('form').attr('action','');
        $('[type=submit]').fadeIn();
      }
    }
  });
});
