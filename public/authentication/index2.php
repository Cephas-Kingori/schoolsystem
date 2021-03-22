<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	    <div>
        <h1 style="font-family: 'Comfortaa', cursive" > Welcome back
            <?php
            echo $_SESSION['activeUser'];
            ?>
        </h1>
    </div>
</body>
</html>