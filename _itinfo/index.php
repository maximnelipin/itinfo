<!doctype html>
<html>
<?php
	include_once ('php_scripts/auth.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
<title>����������</title>
</head>

    <body>
    <?php
    	print '
    	<form action="index.php" method="post">
    		<div class="auth"> 
    			<p> �������� ����� <input type="text" name="login" /> </p>
    			<p> �������� ������ <input type="password" name="pwd"/> </p>
    			<p> <input type="submit" value="����"/> </p>
    		</div>
    	</form>
    	';
    	echo " ����������� ��� ������� � �����������"
    			
    ?>
    
    
    </body>
 
</html>