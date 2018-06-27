<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>新增資料</title>
</head>

<body>
<form id="form1" name="form1" method="post" >
  <table width="600" border="1" cellspacing="2" cellpadding="2">
    <tbody>
      <tr>
        <td>欄位</td>
        <td>資料</td>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="sname" value="111"></td>
      </tr>
      <tr>
        <td>性別</td>
        <td><input type="radio" name="sex" value="M" checked="checked">
        <label for="radio3">男
          <input type="radio" name="sex" value="F">
          女
        </label></td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="birth" ></td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><input type="text" name="email" value="aaa@bbb.ccc"></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="text" name="tel" value="0912345678"></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="addr" value="222"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button2" value="送出">
        <input type="reset" name="reset2" value="重設"></td>
      </tr>
    </tbody>
  </table>
</form>
<p>&nbsp;</p>
<?php 
	header("Content-Type: text/html; charset=utf-8");

	include("connMysql.php");
	
	mysqli_select_db($db_link,"class") or die("資料庫切換失敗！");
	

	if($_POST == null){
	
	}else{
		$stuname = $_POST["sname"];
	//	$stuname = '同學';
		echo $stuname;
		$stusex = $_POST["sex"];
		$stubirth = $_POST["birth"];
		$stuemail = $_POST["email"];
		$stutel = $_POST["tel"];
		$stuaddr = $_POST["addr"];
		//echo "<br>".$stusex."<br>";
		//echo "<br>".$stubirth."<br>";
		echo "<br>".$stuemail."<br>";
		echo "<br>".$stutel."<br>";
		echo "<br>".$stuaddr."<br>";
	//	echo "<br>".gettype('同學');
		echo "<br>".gettype($stuname);

	

	$result= mysqli_query($db_link, "select id from students");

	$newid = mysqli_num_rows($result)+1;
	$sql_query = "INSERT INTO students(name,sex,birth,email,phone,addr) VALUES('$stuname','$stusex','$stubirth','$stuemail','$stutel','$stuaddr')";
	mysqli_query($db_link, $sql_query) or die("無法新增".mysql_error());
	}
?>
</body>
</html>
