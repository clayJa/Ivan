<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填写订单信息</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<?php
include "conn.php";
if(is_array($_GET)&&count($_GET)>0)//判断是否有Get参数
{
  if(isset($_GET["fligh_id"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
  {
	$fligh_id=$_GET["fligh_id"];//存在
  }
  $s = "select * from flightInfo where flightId='$fligh_id'";
  $result=mysql_query($s,$conn);
  $row=mysql_fetch_array($result);
}
else{
  
}
?>
<body>
	<nav class="top">
		<a href="" class="navbar-brand">航空订票管理系统</a>
	</nav>
	<div class="container order">
	  <div class="row">
	    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 order-information">
		    <div class="flight-info">
		    	<h3>航班信息</h3>
		    	<div class="col-md-6 col-sm-6">
		    		<p><span>航空公司：</span><span><?php echo $row['company']?></span></p>
		    		<p><span>飞机型号：</span><span><?php echo $row['flightId']?>（中）</span></p>
		    		<p><span>起飞机场：</span><span><?php echo $row['startPort']?></span></p>
		    		<p><span>降落机场：</span><span><?php echo $row['endPort']?></span></p>
		    	</div>
		    	<div class="col-md-6 col-sm-6">
		    		<p><span>起飞时间：</span><span><?php echo substr($row['startTime'], -8,5);?></span></p>
		    		<p><span>降落时间：</span><span><?php echo substr($row['endTime'], -8,5);?></span></p>
		    		<p><span>机舱类型：</span><span>经济舱</span></p>
		    		<p><span>价格：</span><span><?php echo $row['economy']*$row['discount'] ?></span></p>
		    	</div>
		    </div>
	        <div class="customer-info">
		    	<h3>乘客信息</h3>
		    	<div class="col-md-12 col-sm-12">
			        <form class="form-horizontal" role="form" action="order.php" method="post">
					  <div class="form-group">
					    <label for="inputName" class="col-sm-2 control-label">姓名</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputName" name="name" placeholder="真实姓名">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputIdentity" class="col-sm-2 control-label">身份证号</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputIdentity" name="identity" placeholder="居民二代身份证">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputAddress" class="col-sm-2 control-label">地址</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="机票邮寄地址">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPhone" class="col-sm-2 control-label">手机</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="可用的手机号">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
                          <input name="flight" type="hidden" value="<?php echo $row['flightId']?>" />
					      <button type="submit" class="btn btn-info">提交订单</button>
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