<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
 </head>
<title> 0x6b </title>
<body>
    <div>
	<!-- Menu Bar --!> 
          <ul class="nav navbar-nav">
            <li><a href="?link=home">[Home]</a></li>
            <li><a href="sftp://192.210.170.180">[Files]</a></li>
            <li><a href="http://192.210.170.180:8080">[Wiki]</a></li>
            <li><a href="?link=about">[About]</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
    </div>
    <div>
	<?php
		if(isset($_GET["link"]))
	        {
	            $link=$_GET["link"];
	        }
	        else
	        {
	            $link='home';
	        }

		switch($link)
		{
			case "home":
				break;
	
			case "files":
	              		include('ftp://192.210.170.180'); 
				print "hello";
				break;
			case "wiki":
				include('/var/www/dokuwiki/');
				print "WIKI";
				break;
			case "about":
				include('about.php');
				break;
                break;
		}
	?>
    </div>
</body>
