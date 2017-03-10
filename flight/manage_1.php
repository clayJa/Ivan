<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统管理——航班信息管理</title>
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
	$user = $_POST['user'];
    $password = $_POST['password'];
	$check_query = mysql_query("select adminId from flightAdmin where adminName='$user' and password='$password' limit 1");
    if($result = mysql_fetch_array($check_query)){
	//登录成功
	$_SESSION['username'] = $user;
	$_SESSION['userid'] = $result['adminId'];
	//echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
	//echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    } else {
	exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
    }
}


//----------------------

if(is_array($_GET)&&count($_GET)>0)//判断是否有Get参数
{
  if(isset($_GET["update"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
  {
	$company=$_GET["company"];
	$start_city=$_GET["start_city"];
	$end_city=$_GET["end_city"];
	$start_time=$_GET["start_time"];
	$size=$_GET["size"];
	$flight=$_GET["flight"];
	$res = mysql_query("update flightInfo set startCity='$start_city',endCity='$end_city',startTime='$start_time',size='$size' where flightId='$flight'",$conn);
	if($res){
		//echo ' 更新成功';
		echo "<script type='text/javascript'>alert('更新成功');</script>";
		}
  }
  else if(isset($_GET["delete"])){
	  $flight=$_GET["flight"]; 
	  $res_1 = mysql_query("delete from flightInfo where flightId='$flight'",$conn);
	  $res_2 = mysql_query("delete from orderInfo where flightId='$flight'",$conn);
	if($res_1 && $res_2){
		//echo ' 删除成功';
		echo "<script type='text/javascript'>alert('删除成功');</script>";
		}
  }
}

//---------

$s = "select * from flightInfo";
$result=mysql_query($s,$conn);

?>
<body>
	<nav class="top">
		<a href="" class="navbar-brand">航空订票管理系统</a>
		<div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-10 col-sm-offset-10 col-xs-offset-10 user_session">
		<a href="#"><?php echo $_SESSION['username']?></a>
		<a href="manage_1.php?action=logout">退出</a>
	    </div>
	</nav>
	<div class="container-fluid manage">
	  <div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="manage-nav col-md-2 col-sm-2 col-xs-2 manage-left">
	        	<h3 class="bg-primary">系统管理</h3>
	        	<ul class="f18">
	        		<li><a href="#">航班信息管理</a></li>
	        		<li><a href="manage_2.php">添加航班信息</a></li>
	        		<li><a href="manage_3.php">乘客订单管理</a></li>
	        		<li><a href="manage_4.php">管理账户管理</a></li>
	        	</ul>
	        </div>
	        <div class="manage-nav col-md-9 col-sm-9 col-xs-9 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 manage-right">
	        	<h3 class="bg-primary">航班信息管理</h3>
                <div class="col-md-12 col-sm-12">
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>航空公司</span>
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>出发城市</span>
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>目的城市</span>
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>出发日期</span>
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <span>余票</span>
				        </div>
			    </div>
                      <?php    while ($row=mysql_fetch_array($result)) { 
?>
                
	        	<div class="col-md-12 col-sm-12">
			        <form  role="form" action="manage_1.php" method="get">
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text" value="<?php echo $row['company']?>" name="company" placeholder="航空公司">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text"  value="<?php echo $row['startCity']?>" name="start_city" placeholder="出发城市">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text"  value="<?php echo $row['endCity']?>" name="end_city"  placeholder="到达城市">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control f12" type="text"  value="<?php echo substr($row['startTime'], 0,16);?>" name="start_time" placeholder="出发日期">
				        </div>
				        <div class="col-md-2 col-sm-2 col-xs-2 form-group">
						    <input class=" form-control" type="text"  value="<?php echo $row['size']?>" name="size" placeholder="余票">
				        </div>
						<div class="col-md-2 col-sm-2 col-xs-2 form-group">
                            <input name="flight" type="hidden" value="<?php echo $row['flightId']?>" />
						    <button class="operation" id="update" name="update" type="submit" >更新</button>
						    <button class="operation" id="delete" name="delete" type="submit" >删除</button>
				        </div>
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