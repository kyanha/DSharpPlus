<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	if(isset($_GET[h])){
		print(md5($_GET[h]));
	}else{
		print('<form action="" method="get">input: <input type="text" name="h"><br><input type="submit" value="Submit"></form>');
	}
?>