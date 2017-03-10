<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>航空订票管理系统</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<?php
include "conn.php";
if(is_array($_GET)&&count($_GET)>0)//判断是否有Get参数
{
  if(isset($_GET["start_city"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
  {
	$start_city=$_GET["start_city"];//存在
  }
  if(isset($_GET["end_city"]))
  {
	$end_city=$_GET["end_city"];
  }
  if(isset($_GET["start_time"]))
  {
	$start_time=$_GET["start_time"];
  }
  $s = "select * from flightInfo where startCity='$start_city' and endCity='$end_city' and startTime like'%$start_time%' ";
  $result=mysql_query($s,$conn);
}
else{
  $s = "select * from flightInfo";
  $result=mysql_query($s,$conn);
}
?>
<body>
    <nav class="top">
		<a href="" class="navbar-brand">航空订票管理系统</a>
	</nav>
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-md-12 col-sm-12 search">
	        <form action="index.php" method="get" class="navbar-form " role="form">
		        <div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1 form-group">
				    <input class="input-lg form-control" type="text" name="start_city" value="<?php if(isset($_GET["start_city"])){echo $_GET["start_city"];}?>" placeholder="出发城市" />
		        </div>
		        <div class="col-md-3 col-sm-3 form-group">
				    <input class="input-lg form-control" type="text" name="end_city" value="<?php if(isset($_GET["end_city"])){echo $_GET["end_city"];}?>" placeholder="目的城市" />
		        </div>
		        <div class="col-md-3 col-sm-3 form-group">
				    <input class="input-lg form-control" type="text" name="start_time" value="<?php if(isset($_GET["start_time"])){echo $_GET["start_time"];}?>"  placeholder="出发时间" />
		        </div>
		        <div class="col-md-2 col-sm-2 form-group">
				    <button id="search" type="submit" >搜索</button>
		        </div>
		    </form>
	    </div>
	  </div>
	</div>
 
<div class="container list">
	  <div class="row">
      
      <?php    while ($row=mysql_fetch_array($result)) { 
?>
	    <div class="col-md-12 col-sm-12 flight-list">
        	<div class="col-md-3 col-sm-3">
        		<span class="f16 company"><?php echo $row['company']?></span>
        		<span class="flight-id"><?php echo $row['flightId']?></span>
        		<span class="size">(中)</span>
        	</div>
        	<div class="col-md-3 col-sm-3">
        	    <span class="f24 start-time"><?php echo substr($row['startTime'], -8,5);?></span>
        		<span class="start-city"><?php echo $row['startPort']?></span>
        	</div>
        	<div class="hr"></div>
        	<div class="col-md-3 col-sm-3">
        		<span class="f24 end-time"><?php echo substr($row['endTime'], -8,5);?></span>
        		<span class="end-city"><?php echo $row['endPort']?></span>
        	</div>
        	<div class="col-md-2 col-sm-2 last">
        		<span class="f30 price"><?php echo ceil($row['economy']*$row['discount']); ?></span>
        		<span class="discount">经济舱<?php echo $row['discount']?></span>
        	</div>
        	<div class="col-md-1 col-sm-1">
					<a class="buy" href="order_info.php?fligh_id=<?php echo $row['flightId']?>" >预订</a>
        	</div>
	    </div>
        
        <?php
}
?>
     </div>
  </div>



</body>
</html>