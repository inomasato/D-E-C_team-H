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

?>

