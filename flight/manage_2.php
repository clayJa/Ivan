<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统管理——添加航班信息</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
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
	$flight_id = $_POST['flight_id'];
	$company = $_POST['company'];
	$start_city = $_POST['start_city'];
	$end_city = $_POST['end_city'];
	$start_port = $_POST['start_port'];
	$end_port = $_POST['end_port'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$size = $_POST['size'];
	/*$sql ="INSERT INTO flightInfo(flightId,startCity,endCity,startPort,endPort,startTime,endTime,economy,discount,size,company)VALUES('$flight_id','$start_city','$end_city','$start_port','$end_port','$start_time','$end_time','$price','$discount','$size','$company')";*/
	$result = mysql_query("INSERT INTO flightInfo(flightId,startCity,endCity,startPort,endPort,startTime,endTime,economy,discount,size,company)VALUES('$flight_id','$start_city','$end_city','$start_port','$end_port','$start_time','$end_time','$price','$discount','$size','$company')",$conn)or die(mysql_error());
     if($result){
		 echo "<script type='text/javascript'>alert('添加成功');</script>";
		 echo "<script>location.href ='manage_1.php';</script>";
	exit;
		}
}


//----------------------

?>
<body>
	<nav class="top">
		<a href="" class="navbar-brand">航空订票管理系统</a>
		<div class="col-md-2 col-sm-2 col-md-offset-10 col-sm-offset-10 user_session">
		<a href="#"><?php echo $_SESSION['username']?></a>
		<a href="manage_2.php?action=logout">退出</a>
	    </div>
	</nav>
	<div class="container-fluid manage">
	  <div class="row">
	    <div class="col-md-12 col-sm-12">
	        <div class="manage-nav col-md-2 col-sm-2 manage-left">
	        	<h3 class="bg-primary">系统管理</h3>
	        	<ul class="f18">
	        		<li><a href="manage_1.php">航班信息管理</a></li>
	        		<li><a href="#">添加航班信息</a></li>
	        		<li><a href="manage_3.php">乘客订单管理</a></li>
	        		<li><a href="manage_4.php">管理账户管理</a></li>
	        	</ul>
	        </div>
	        <div class="manage-nav col-md-9 col-sm-9 col-md-offset-1 col-sm-offset-1 manage-right">
	        	<h3 class="bg-primary">添加航班信息</h3>
	        	<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
			        <form class="form-horizontal" role="form" action="manage_2.php" method="post">
					  <div class="form-group">
					    <label for="inputID" class="col-sm-3 control-label">航班编号</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputId" name="flight_id" placeholder="如：9H8337">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputCompany" class="col-sm-3 control-label">航班公司</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputCompany" name="company" placeholder="如：9H8337">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputStartCity" class="col-sm-3 control-label">出发城市</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputStartCity" name="start_city" placeholder="如：西安">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEndCity" class="col-sm-3 control-label">目的城市</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputEndCity" name="end_city" placeholder="如：成都">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputStartPort" class="col-sm-3 control-label">起飞机场</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputStartPort" name="start_port" placeholder="如：咸阳国际机场T2">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEndPort" class="col-sm-3 control-label">降落机场</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputEndPort" name="end_port" placeholder="如：咸阳国际机场T2">
					    </div>
                       </div>
					    <div class="form-group">
					    <label for="inputStartTime" class="col-sm-3 control-label">起飞时间</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputStartTime" name="start_time" placeholder="20161209070500">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEndtime" class="col-sm-3 control-label">降落时间</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputEndTime" name="end_time" placeholder="20161209085500">
					    </div>
					  </div>
                      <div class="form-group">
					    <label for="inputPrice" class="col-sm-3 control-label">全价</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputPrice" name="price" placeholder="20161209085500">
					    </div>
					  </div>
                      <div class="form-group">
					    <label for="inputDiscount" class="col-sm-3 control-label">折扣</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputDiscount" name="discount" placeholder="20161209085500">
					    </div>
					  </div>
                      <div class="form-group">
					    <label for="inputSize" class="col-sm-3 control-label">余票</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputSize" name="size" placeholder="20161209085500">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-5 col-sm-10">
					      <button type="submit" class="btn btn-info">确定添加</button>
					    </div>
					  </div>
					</form>
			    </div>
	        </div>
	    </div>
	  </div>
	</div>
</body>
</html>