<?php
admin_page();
$up = $db->update('users')
         ->where('user_id',post('id'))
         ->set([
           "user_type" => post('val')
         ]);

$cek = $db->from('users')
          ->where('user_school',post('id'))
          ->all();
foreach ($cek as $q) {
  $ups = $db->update('users')
           ->where('user_id',$q['user_id'])
           ->set([
             "user_type" => post('val')
           ]);
}

$query = $db->from('users')
           ->where('user_rank',2)
           ->orderby('user_id','DESC')
           ->all();
?>

<?php foreach ($query as $row): ?>
  <tr>
    <td data-toggle="tooltip" data-title="<?=$row['user_name']?>"><?=mb_substr($row['user_name'],0,17)?> ...</td>
    <td><?=$row['user_packet']?></td>
    <td><?=$row['user_finish']?></td>
    <td>
      <?php if ($row['user_type']==1){ ?>
        <span onclick="onay(<?=$row['user_id']?>,2)" style="cursor: pointer;" class="badge badge-success a<?=$row['user_id']?> px-2 py-2">Aktif</span>
      <?php }else{ ?>
        <span onclick="onay(<?=$row['user_id']?>,1)" style="cursor: pointer;" class="badge badge-danger a<?=$row['user_id']?> px-2 py-2">Pasif</i></span>
      <?php } ?>
    </td>
    <td>
      <a href="<?=admin_url('edit-school/'.$row['user_id'])?>" class="btn btn-outline-info waves-effect waves-light m-1"><i class="fa fa-edit"></i></a>
      <a href="<?=admin_url('delete?table=users&column=user_id&id='.$row['user_id'])?>" class="btn btn-outline-danger waves-effect waves-light m-1"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
<?php endforeach; ?>
