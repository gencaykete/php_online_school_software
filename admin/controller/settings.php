<?php
admin_page();
$themes = [];
foreach (glob(PATH . '/app/view/*/') as $folder){
    $folder = explode('/', rtrim($folder, '/'));
    $themes[] = end($folder);
}

if (post('submit')){
    $html = '<?php' . PHP_EOL . PHP_EOL;
    foreach (post('settings') as $key => $val) {
        $html .= '$settings["' . $key . '"] = "' . $val . '";' . PHP_EOL;
    }
    if (!empty($_FILES['logo']['name'])) {
      $html .= '$settings["logo"] = "' . upload('logo') . '";' . PHP_EOL;
      unlink(setting('logo'));
    }else {
      $html .= '$settings["logo"] = "' . setting('logo') . '";' . PHP_EOL;
    }

    if (!empty($_FILES['favicon']['name'])) {
      $html .= '$settings["favicon"] = "' . upload('favicon') . '";' . PHP_EOL;
      unlink(setting('favicon'));
    }else {
      $html .= '$settings["favicon"] = "' . setting('favicon') . '";' . PHP_EOL;
    }
    file_put_contents(PATH . '/app/settings.php', $html);
    header('Location:' . admin_url('settings'));
    }

require admin_view('settings');
