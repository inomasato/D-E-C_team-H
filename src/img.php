$img_name =  $_GET['img_name'];

$img_dir = './icon/'. $img_name;

$info = getimagesize($img_dir);

header('Content-Type:'.$info['mime']);

readfile($img_dir);

