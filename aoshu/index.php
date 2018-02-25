<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="聚财城顶级域名网" name="keywords" />
<meta content="聚财城顶级域名网" name="description" />
<title>聚财城顶级域名网</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.flip.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<body>

<h1><a href="http://www.jucaicheng.com/"><img src="img/sponsors/jucaicheng.png" alt="聚财城顶级域名网" height="50"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.jucaicheng.com/">聚财城顶级域名网</a></h1>


<?php

// Each sponsor is an element of the $sponsors array:

$sponsors = array(
	array('kangche','康车 80万','http://www.kangche.com/'),
	array('shaotang','少唐 3万','http://www.shaotang.com/'),
	array('mxdg','梦想帝国 5万','http://www.mxdg.com/'),
	array('bianshou','变瘦 5万','http://www.bianshou.com/'),
	array('liuxingwang','流行网 1万','http://liuxingwang.com/')
	
);


// Randomizing the order of sponsors:

shuffle($sponsors);

?>



<div id="main">

	<div class="sponsorListHolder">

		
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="img/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'">'.$company[2].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>

        
        
    	<div class="clear"></div>
    </div>

</div>

<p class="note">Copyright &copy;1997-2997 聚财城 All Rights Reserved.<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5793089'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/stat.php%3Fid%3D5793089' type='text/javascript'%3E%3C/script%3E"));</script> </p>

</body>
</html>
