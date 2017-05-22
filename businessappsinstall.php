<title>巨龙法则</title>
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
<a>更新日志</a>
<br><br/>
<?php echo file_get_contents("http://1v5499909c.iask.in:8081/businessapps/updatelog.html"); ?>
