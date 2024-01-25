<?php
$id = route(2);

$query = $db->from('message_detail')
            ->where('ust_message',$id)
            ->all();
?>
<?php $i=0; foreach ($query as $row): $i++;?>
  <?php if($i==1){ ?>
    <script type="text/javascript">
      var destek_a_id = <?=$row['ust_message']?>;
    </script>
     <div class="bg-primary col-md-12 mb-3 pt-2" style="border-radius:10px;height:45px">
       <h3 class="text-white">Mesajlar</h3>
     </div>
   <?php } ?>
  <?php if ($row['message_type'] == 1): ?>
    <div class="col-md-12">
      <span class="<?=$row['message_sender']==session('user_id') ? 'bg-primary text-white mt-1' : 'mt-1' ?>" style="float:<?=$row['message_sender']==session('user_id') ? 'right' : 'left' ?>;background-color:#f5f5f5;padding:10px 20px;border-radius:15px">
        <?=$row['message_desc']?>
      </span>
    </div>
    <br><br>
  <?php endif; ?>
<?php endforeach; ?>
