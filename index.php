<?php
?>
<html>
<head>
<title>WEBDOCKERBUILDER</title>
</head>
<fieldset>
<font color="blue">
<legend align="center"><h2>WEBDOCKERBUILDER</h2></legend>
<form name=webdocker method="post" action="form-data.php">
<label aliign="center"><h3>Automate Docker Image Building Process</h3></label> </fieldset>
</font>
<fieldset>
<label><h3>Modules & options</h3></label>
</fieldset>
<h3>BASEIMAGE</h3>
<select id="baseimage" name="baseimage" style="width: 200px; height: 30px; font-size: 20px; padding-top: 10px;">
 <option value="centos:6">centos:6</option>
 <option value="centos:7">centos:7</option>
 <option value="ubuntu:latest">ubuntu:latest</option>
 <option value="busybox:latest">busybox:latest</option>
</select>
<br>
</br>
<h3>MODULES</h3>
<select id="module" name="module" style="width: 200px; height: 30px; font-size: 20px; padding-top: 10px;">
 <option value="apache">apache</option>
 <option value="nginx">nginx</option>
 <option value="mariadb">mariadb</option>
 <option value="java">java</option>
 <option value="php">php</option>
</select>
<br>
</br>


<h3>OUTPUT IMAGE NAME</h3>
 <input style="width: 200px; height: 30px; font-size: 20px; padding-top: 10px; type="text" name="imagename">
<br>
</br>

<h3>IMAGE TAG</h3>
 <input style="width: 200px; height: 30px; font-size: 20px; padding-top: 10px; type="text" name="imagetag">
<br>
</br>

<button type="Submit" style="font-size: 20px; background-color:lightgreen;">Submit</button>
</form>
</body>
</html>
