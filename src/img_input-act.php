<?php

$imgData = $_FILES['upImg']['tmp_name'];
$imgType = $_FILES['upImg']['type'];

if($imgType === "image/png"){
    $extension = ".png";
}else{
    $extension = ".jpeg";
}

$imgName = "icon{$extension}";

move_uploaded_file($imgData,"./icon/{$imgName}");


$file_name = './icon/icon.png';
header('Content-Type: image/png');
readfile($file_name);

?>

<img src="img.php?img_name=icon.png">


