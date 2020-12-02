<?php

    $dir = '../uploads';
    $display = array('jpg', 'jpeg', 'png', 'gif');

    if (file_exists($dir) == false) {
      echo 'Directory \''. $dir. '\' not found!';
    } else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {
     $name_parts = explode('.', $file);
$type = strtolower(end($name_parts));

      if ($file !== '.' && $file !== '..' && in_array($type, $display) == true)     
      {             
        echo'<div style="width:1170px;" >'.
        '<div style="float:left; margin-right:5px;" >'.'<img style="width:200px; height:200px;"src="'. $dir. '/'. $file. '" alt="'. $file.'"/>'.'</div>'
        .'</div>';
      }
    }
    }
?>