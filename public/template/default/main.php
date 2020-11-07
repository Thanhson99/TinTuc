<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php include 'component/head.php'?>
</head>
<body>
<?php include 'component/header.php'?>
<div class="container">
<?php include 'app/'.$this->request['app'].'/view/' . $includeView . '.php'; ?>
<?php include 'component/footer.php'?>
</div>
</body>
</html>
<?php include 'component/script.php'?>