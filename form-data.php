<?php
$imagename = $_POST['imagename'];
$imagetag = $_POST['imagetag'];
$module = $_POST['module'];
switch ($module) {
   case "apache":
   shell_exec('docker build -t $imagename:$imagetag -f /var/www/html/templates/centos7apache .);
   echo $imagename:$imagetag image is create
   break;
default:
      echo "<h2>NO SELECTION</h2><br>";
}
?>
