<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统管理——管理账户管理</title>
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


function getRandChar($length){
   $str = null;
   $strPol = "0123456789";
   $max = strlen($strPol)-1;

   for($i=0;$i<$length;$i++){
    $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
   }

   return $str;
  }

if(is_array($_POST)&&count($_POST)>0){
	if(isset($_POST["delete"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
  {
	 $admin_id = $_POST["admin_id"];
	$admin_name=$_POST["admin_name"];
	$admin_password=$_POST["admin_password"];
	$res = mysql_query("delete from flightAdmin where adminId='$admin_id'",$conn);
	if($res){
		echo "<script type='text/javascript'>alert('删除成功');</script>";
		}
		else{die( mysql_error());
		}
  }
  else if(isset($_POST["update"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
  {
	 $admin_id = $_POST["admin_id"];
	$admin_name=$_POST["admin_name"];
	$admin_password=$_POST["admin_password"];
	$res = mysql_query("update flightAdmin set adminName='$admin_name',password='$admin_password' where adminId='$admin_id'",$conn);
	if($res){
		echo "<script type='text/javascript'>alert('更新成功');</script>";
		}
		else{die( mysql_error());
		}
  }
  else if(isset($_POST["add"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
  {
	$admin = $_POST["admin"];
	$pass =$_POST["pass"];
	$admin_id=getRandChar(10);;
	$res = mysql_query("INSERT INTO flightAdmin(adminId,adminName,password)VALUES('$admin_id','$admin','$pass')",$conn);
	if($res){
		echo "<script type='text/javascript'>alert('添加成功');</script>";;
		}
		else{die( mysql_error());
		}
  }
}


//----------------------


//---------

$s = "select *  from flightAdmin";
$result=mysql_query($s,$conn);

?>
<body>
	<nav class="top">
		<a href="" class="navbar-brand">航空订票管理系统</a>
		<div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-10 col-sm-offset-10 col-xs-offset-10 user_session">
		<a href="#"><?php echo $_SESSION['username']?></a>
		<a href="manage_4.php?action=logout">退出</a>
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
	        		<li><a href="manage_3.php">乘客订单管理</a></li>
	        		<li><a href="#">管理账户管理</a></li>
	        	</ul>
	        </div>
	        <div class="manage-nav col-md-9 col-sm-9 col-xs-9 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 manage-right">
	        	<h3 class="bg-primary">管理员信息管理</h3>
                <div class="col-md-12 col-sm-12">
				        <div class="col-md-3 col-sm-3 col-xs-3 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 form-group">
                              <span>管理员账号</span>
				        </div>
				        <div class="col-md-3 col-sm-3 col-xs-3 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 form-group">
                              <span>密码</span>
				        </div>
			    </div>
                <div class="col-md-12 col-sm-12">
			        <form  role="form" action="manage_4.php" method="post">
				        <div class="col-md-3 col-sm-3 col-xs-3 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 form-group">
                              <input type="text" class="form-control" name="admin" id="inputUser">
				        </div>
				        <div class="col-md-3 col-sm-3 col-xs-3 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 form-group">
                              <input type="password" class="form-control" name="pass" id="inputPassword">
				        </div>
						<div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 form-group">
						    <button class="operation" id="add" name="add" type="submit" >添加</button>
				        </div>
				    </form>
			    </div>
                
               <?php    while ($row=mysql_fetch_array($result)) { 
?>
                
	        	<div class="col-md-12 col-sm-12">
			        <form  role="form" action="manage_4.php" method="post">
				        <div class="col-md-3 col-sm-3 col-xs-3 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 form-group">
                              <input type="text" class="form-control" value="<?php echo $row['adminName']?>" name="admin_name" id="inputUser">
				        </div>
				        <div class="col-md-3 col-sm-3 col-xs-3 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 form-group">
                              <input type="password" class="form-control" value="<?php echo $row['password']?>" name="admin_password" id="inputPassword">
				        </div>
						<div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 form-group">
                            <input name="admin_id" type="hidden" value="<?php echo $row['adminId']?>" />
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