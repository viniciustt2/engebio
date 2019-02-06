<?php 
session_start();
session_unset();
session_destroy();
echo "<script>alert('Você saiu!'); document.location.href='../ihospital.php';</script>";

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

</body>
</html>