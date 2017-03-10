<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统管理——乘客订单管理</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <?php
session_start();

//注销登录
if(@$_GET['action'] == "logout"){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo "<script>location.href = 'admin_login.html';</script>";
	exit;
}
include "conn.php";
//登录
if(is_array($_POST)&&count($_POST)>0){
	if(isset($_POST["delete"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
  {
	$order_id=$_POST["order_id"];
	$customer_id=$_POST["customer_id"];
	$res_1 = mysql_query("delete from customerInfo where customerId='$customer_id'",$conn);
	  $res_2 = mysql_query("delete from orderInfo where orderId='$order_id'",$conn);
	if($res_1 && $res_2){
		//echo ' 删除成功';
		echo "<script type='text/javascript'>alert('删除成功');</script>";
		}
  }
}


//----------------------


//---------

$s = "select customerInfo.name,customerInfo.customerId,customerInfo.phone,flightInfo.flightId,flightInfo.startCity,flightInfo.endCity,flightInfo.startTime,orderInfo.orderId  from customerInfo,flightInfo,orderInfo where customerInfo.customerId = orderInfo.customerId and flightInfo.flightId = orderInfo.flightId";
$result=mysql_query($s,$conn);

?>
</head>
<body>
	<nav class="top">
		<a href="" class="navbar-brand">航空订票管理系统</a>
		<div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-10 col-sm-offset-10 col-xs-offset-10 user_session">
		<a href="#"><?php echo $_SESSION['username']?></a>
		<a href="manage_3.php?action=logout">退出</a>
	    </div>
	</nav>
	<div class="container-fluid manage">
	  <div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="manage-nav col-md-2 col-sm-2 col-xs-2 manage-left">
	        	<h3 class="bg-primary">系统管理</h3>
	        	<ul class="f18">
	        		<li><a href="manage_1.php">航班信息管理</a></li>
	        		<li><a href="manage_2.php">添加航班信息</a></li>
	        		<li><a href="#">乘客订单管理</a></li>
	        		<li><a href="manage_4.php">管理账户管理</a></li>
	        	</ul>
	        </div>
	        <div class="manage-nav col-md-9 col-sm-9 col-xs-9 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 manage-right">
	        	<h3 class="bg-primary">乘客订单管理</h3>
                <div class="col-md-12 col-sm-12">
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>乘客</span>
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>联系方式</span>
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>航班编号</span>
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>出发城市</span>
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>到达城所</span>
				        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>出发日期</span>
				        </div>
			    </div>
                <?php    while ($row=mysql_fetch_array($result)) { 
?>
	        	<div class="col-md-12 col-sm-12">
			        <form  role="form" action="manage_3.php" method="post">
			            <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text" value="<?php echo $row['name']?>" placeholder="乘客">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text" value="<?php echo $row['phone']?>" placeholder="联系方式">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text" value="<?php echo $row['flightId']?>"  placeholder="航班编号">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text" value="<?php echo $row['startCity']?>" placeholder="出发城市">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text" value="<?php echo $row['endCity']?>" placeholder="到达城市">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control f12" type="text" value="<?php echo substr($row['startTime'], 0,16);?>"  placeholder="出发日期">
				        </div>
                        <input name="order_id" type="hidden" value="<?php echo $row['orderId']?>" />
                        <input name="customer_id" type="hidden" value="<?php echo $row['customerId']?>" />
						<button class="operation" id="deleteOrder" name="delete" type="submit" >×</button>
				    </form>
			    </div>
                
                                        <?php
}
?>
                
	        </div>
	    </div>
	  </div>
	</div>
</body>
</html>