<?php
  header("Location: new_page.php");
  exit;
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<?php require("components/site-functions.php");?>
<?php include("components/html-head.php"); ?>
</head>

<body>
    <p>Näidisdokument</p>

    <?php
    	echo name("ngga");
    ?>
</body>
</html>