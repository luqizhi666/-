<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>奇志慢传-luqizhi.tk</title>

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">

<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta name="format-detection" content="telephone=no">

<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.uploadifive.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadifive.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
.uploadifive-button {
	float: left;
	margin-right: 10px;
}
#queue {
	border: 1px solid #E5E5E5;
	height: 177px;
	overflow: auto;
	margin-bottom: 10px;
	padding: 0 3px 3px;
	width: 300px;
}
</style>
</head>

<body bgcolor="aqua">
	<h1>奇志慢传-luqizhi.tk</h1>
        <h3>奇特的志向，成就奇特的人生————无限分站</h3>
        <p>此网站不做删除处理，可当作图床，html服务器使用</p>
         <h2>上传：</h2>
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
		<a style="position: relative; top: 8px;" href="javascript:$('#file_upload').uploadifive('upload')">上传文件</a>
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : false,
				'checkScript'      : 'check-exists.php',
				'fileType'         : '.jpg,.jpeg,.gif,.png,.html,.mp4,.mp3,.ppt,.pptx,.zip,.rar,.7z,.*,.txt,.doc,.doxc,.xls,.xlsx,.sb3,.pdf,.apk,.exe',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queue',
				'uploadScript'     : 'uploadifive.php',
				'onUploadComplete' : function(file, data) { console.log(data); }
			});
		});
	


             </script>
<br/>
<br/>
上传后请刷新
<br/>
你现在的取件码是：
<?php
if ($_COOKIE["number"]!=""){
    echo $_COOKIE["number"];
}else{
    echo '无';
}

?>
（一分钟后自动消失,但文件还在，一分钟内上传的文件在同一文件夹，使用cookie完成操作）
<h2>取出:</h2>
<input type="text" name="href" id="href" value="123456" />
<button>取出/查看</button>
<script type="text/javascript">
var hrefVal = document.getElementById('href');
var but = document.getElementsByTagName('button')[0];
but.onclick=function(){
window.open("http://manchuan.is-best.net/s/"+hrefVal.value)
}
</script>
<br/>
<p>made with uploadifive qq邮箱:1708044815@qq.com</p>
</body>
</html>