<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增資料</title>
<style type="text/css">
   body {font-size: 24px;}  
</style> 
</head>
<body>
<?php 
	header("Content-Type: text/html; charset=utf-8");

	$dbname = "class";
	$db_link = mysqli_connect("localhost", "root", "1234");
	$seldb=@mysqli_select_db($db_link,$dbname);
	
	
	if (!$seldb)die("資料庫切換失敗！");

	mysqli_query($db_link, "SET CHARACTER SET utf8");
	mysqli_query($db_link, "SET collation_connection = 	'utf8_general_ci'");

	$result= mysqli_query($db_link, "select id from students");
	echo mysqli_num_rows($result);
	$newid = mysqli_num_rows($result)+1;
	$sql_query = "INSERT INTO students(id,name,sex,birth,email,phone,addr) VALUES($newid,'同學','M','1987-07-01','aaa@bbb.ccc','0912345678','aaa')";
	mysqli_query($db_link, $sql_query) or die("無法新增".mysqli_connect_error());
	
?>
</body>
</html>