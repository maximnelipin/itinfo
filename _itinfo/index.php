<!doctype html>
<html>
<?php
	include_once ('auth.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=cp1251">
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