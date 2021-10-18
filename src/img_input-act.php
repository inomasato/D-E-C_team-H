<?php

$imgName = $_FILES['upImg']['name'];

move_uploaded_file($_FILES['upImg']['tmp_name'],'./icon/'.$imgName);

echo '<img src="img.php?img_name='.$imgName.'">';

?>

