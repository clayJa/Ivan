<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预订成功</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<?php
include "conn.php";
$name = $_POST['name'];
$identity = $_POST['identity'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$flight = $_POST['flight'];
  $s = "select * from flightInfo where flightId='$flight'";
  $result=mysql_query($s,$conn);
  $row=mysql_fetch_array($result);
function getRandChar($length){
   $str = null;
   $strPol = "0123456789";
   $max = strlen($strPol)-1;

   for($i=0;$i<$length;$i++){
    $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
   }

   return $str;
  }
$userId=getRandChar(10);
$orderId=getRandChar(15);
$sql_1 ="INSERT INTO customerInfo(customerId,name,idCard,address,phone)VALUES('$userId','$name','$identity','$address','$phone')";
$sql_2 ="INSERT INTO orderInfo(orderId,customerId,flightId)VALUES('$orderId','$userId','$flight')";
     if(mysql_query($sql_1,$conn) && mysql_query($sql_2,$conn)){
		 
		}

?>
<body>
	<nav class="top">
		<a href="" class="navbar-brand">航空订票管理系统</a>
	</nav>
	<div class="container info">
	  <div class="row">
	    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 order-info">
		    <div class="col-md-8 col-sm-8 left f24">
		    	<p><span class="hkgs"><?php echo $row['company']?></span><span class="hbbh"><?php echo $row['flightId']?>（中）</span></p>
	    		<p><span class="sc"><?php echo $row['startPort']?></span><span class="ec"><?php echo $row['endPort']?></span></p>
	    		<p><span class="st"><?php echo substr($row['startTime'], -8,5);?></span><span class="et"><?php echo substr($row['endTime'], -8,5);?></span></p>
	    		<p><span class="c"><?php echo $name?></span></p>
		    </div>
		    <div class="col-md-4 col-sm-4 right">
		    	<p><span class="hkgs"><?php echo $row['company']?></span><span class="hbbh"><?php echo $row['flightId']?>（中）</span></p>
	    		<p><span class="sc"><?php echo $row['startPort']?></span><span class="ec"><?php echo $row['endPort']?></span></p>
	    		<p><span class="st"><?php echo substr($row['startTime'], -8,5);?></span><span class="et"><?php echo substr($row['endTime'], -8,5);?></span></p>
	    		<p><span class="c"><?php echo $name?></span></p>
		    </div>
	    </div>
	    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 text-center">
	    	<h2>恭喜您，预订成功！祝您旅途愉快！</h2>
	    </div>
	  </div>
	</div>
</body>
</html>