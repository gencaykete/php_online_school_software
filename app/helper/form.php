<?php

function post($name)
{
    if (isset($_POST[$name])){
        if (is_array($_POST[$name]))
            return array_map(function($item){
                return htmlspecialchars(trim($item));
            }, $_POST[$name]);
        return htmlspecialchars(trim($_POST[$name]));
    }
}

function get($name)
{
    if (isset($_GET[$name])){
        if (is_array($_GET[$name]))
            return array_map(function($item){
                return htmlspecialchars(trim($item));
            }, $_GET[$name]);
        return htmlspecialchars(trim($_GET[$name]));
    }
}

function upload($name,$path="files"){
    if (!file_exists(PATH.'/upload/'.$path)) {
      mkdir(PATH.'/upload/'.$path);
    }
    $file_name=$_FILES[$name]["name"];
    $uzanti = substr($file_name,-4,4);
    $image = 'upload/'.$path.'/'.random_string(8).'.'.$uzanti;
    $image = str_replace('..','.',$image);
    $yeni_ad = PATH.'/'.$image;

    if (move_uploaded_file($_FILES[$name]["tmp_name"],$yeni_ad)){
      return $image;
    }else{
      $error = 'Dosya Yüklenemedi!';
    }
}

function multi_upload($dosyalar)
{
    $sonuc = [];
    // hataları kontrol et
    foreach ($dosyalar['error'] as $index => $error) {
        if ($error == 4) {
            $sonuc['hata'] = 'Lütfen dosya seçin!!';
        } elseif ($error != 0) {
            $sonuc['hata'][] = 'Dosya yüklenirken bir sorun oluştu #' . $dosyalar['name'][$index];
        }
    }

    if (!isset($sonuc['hata'])) {
        foreach ($dosyalar['tmp_name'] as $index => $tmp) {
            $dosyaAdi = rand(99, 999) . $dosyalar['name'][$index];
            $yukle = move_uploaded_file($tmp, 'upload/files/' . $dosyaAdi);

            if ($yukle) {
                $sonuc['dosya'][] = 'upload/files/' . $dosyaAdi;
            } else {
                $sonuc['hata'][] = 'Dosya yüklenemedi! #' . $dosyaAdi;
                echo "Dosya yüklenemedi";
            }
        }
    }
    return $sonuc;

}
