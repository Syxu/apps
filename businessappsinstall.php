<title>巨龙法则</title>
<style type="text/css"> 
*{ margin:0; padding:0;} 
.boxmain
{
	float:left;
	margin-right:-200px;
	width:100%;
} 
.right,.left
{
	width:195px; 
	z-index:1;
} 
.right
{ 
	position:absolute; 
	right:0;
} 
.left
{
	position:absolute;
	left:0; 
} 
.main
{
	margin-right:320px; 
	margin-left:320px;
} 
</style> 
</head>
<body> 
<div class="boxmain"> 
<div class="main">
<br><br/>
<img src="http://1v5499909c.iask.in:8081/businessapps/ICON.png"  width="128" height="128" />
<br><br/>
<a>《巨龙法则》</a>
<br><br/>
<?php
	if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad'))
	{	
		$str = "&lt;a href=&quot;itms-services://?action=download-manifest&url=https://raw.githubusercontent.com/Syxu/apps/master/businessapps.plist&quot; id=&quot;text&quot; &gt;安装iOS版本&lt;/a&gt;";
		echo htmlspecialchars_decode($str);
		
	}
	else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android'))
	{
		$str = "&lt;a href=&quot;http://1v5499909c.iask.in:8081/businessapps/dragonfantasy.apk&quot;&gt;安装Android版本&lt;/a&gt;";
		echo htmlspecialchars_decode($str);
	}
	else
	{			
		$str = "&lt;a href=&quot;itms-services://?action=download-manifest&url=https://raw.githubusercontent.com/Syxu/apps/master/businessapps.plist&quot; id=&quot;text&quot; &gt;安装iOS版本&lt;/a&gt;";
		echo htmlspecialchars_decode($str);
		
		echo "<br>";
		echo "<br>";
				
		$str = "&lt;a href=&quot;http://1v5499909c.iask.in:8081/businessapps/dragonfantasy.apk&quot;&gt;安装Android版本&lt;/a&gt;";
		echo htmlspecialchars_decode($str);
	}
?>
<br><br/>
<a>扫描二维码</a>
<br><br/>
<img src="http://1v5499909c.iask.in:8081/businessapps/businessapps.png"  width="280" height="280" />
<br><br/>
<a href="http://1v5499909c.iask.in:8081/businessapps/updatelog.html">
<input type="button" style="width:150px;height:30px;" value="查看更新日志" name="bt" />
</a>
<br><br/>
<a> 杭州炫趣网络科技有限公司 版权所有</a>
<br><br/>
<a> COPYRIGHT© 2016 . ALL RIGHTS RESERVED. </a>
<br><br/>
<a>《网络文化经营许可证》浙ICP备17009324号-2</a>
<br><br/>
</div> 
</div> 
<div class="left"><img src="http://1v5499909c.iask.in:8081/businessapps/download_pattern_left.png"/></div> 
<div class="right"><img src="http://1v5499909c.iask.in:8081/businessapps/download_pattern_right.png"/></div> 
</body> 
</html> 