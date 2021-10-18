<?

$img_dir =  $_GET['img_name'];

var_dump($img_dir);

$info = getimagesize($img_dir);

header('Content-Type:'.$info['mime']);

readfile($img_dir);

?>