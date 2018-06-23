<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="poster.php" method="POST" enctype="multipart/form-data">
	<input type="text" name="name" placeholder="姓名">
	<input type="text" name="sex" placeholder="性别">
	<input type="text" name="time" placeholder="入团时间">
	<input type="text" name="location" placeholder="入团地点">
	<input type="text" name="no" placeholder="编号">
	<input type="file" name="myfile">
	<button type="submit">提交</button>
</form>
</body>
</html> -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
晒晒最萌团员证
</title>
<meta name="keywords" content>
<meta name="description" content>
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="width">
<meta id="viewport" content="width=device-width, user-scalable=no,initial-scale=1" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<script src="//pingjs.qq.com/h5/stats.js?v2.0.4" name="MTAH5" sid="500617881"></script>
<script type="text/javascript"></script>
<meta name="viewport" content="width=640, initial-scale=0.5625, minimum-scale = 0.5625, maximum-scale = 0.5625, target-densitydpi=device-dpi">
<link href="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/css/all.css" type="text/css" rel="stylesheet">
<link href="js/upload/style.css" type="text/css" rel="stylesheet">
<link href="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/css/style.css" type="text/css" rel="stylesheet">
<link href="css/index.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/common.js"></script>
<link href="http://h5.gstai.com/cyl_synth_ylc/js/layer/need/layer.css?2.0" type="text/css" rel="styleSheet" id="layermcss">
<body>
<form id="submitForm" action="poster.php" method="POST" enctype="multipart/form-data">
	<section class="main-page bg clearfix">
		<div class="write-warp">
			<div class="img-warp">
				<img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/img_out.png" class="img-out" onclick="fileSelect();">
				<div class="img" id="hitWarp">
					<img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/click.png">
				</div>
			</div>
			<img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/pen.png" class="pen">

			<input type="file" name="myfile" id="fileToUpload" style="display:none;">

			<div class="item nickname">
				<input class="input-text" name="name" type="text">
			</div>
			<div class="item sex">
				<select class="select input-text" name="sex">
					<option value="男">男</option>
					<option value="女">女</option>
				</select>
			</div>
			<div class="item time">
				<input class="input-text" type="text" name="time" value="1999-02-02">
			</div>
			<div class="item add">
				<input class="input-text" type="text" value="北京-北京" name="location">
			</div>
		</div>
		<a class="submit" href="javascript:void(0);" onclick="submitForm();">
			<img src="http://img1.xuetang.cn/h5-video/cyl_synth_ylc/images/btn1.png">
		</a>
		<script type="text/javascript">
			function submitForm(){
				document.getElementById("submitForm").submit();
			}
    		function fileSelect() {
    			document.getElementById("fileToUpload").click();
    		}
		</script>
	</section>
</form>
</body>
</head>
</html>
