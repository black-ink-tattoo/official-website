<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="it-IT">
	<meta name="google" value="notranslate">
	<meta name="owner" content="Alberto Marangelo">
	<meta name="author" content="Pixo systems - Alberto Marà" />
	<meta name="creation_date" content="08/06/2011">
	<meta name="robots" content="noindex,follow" />

	<meta name="description" lang="it" content="Black ink tattoo" />
	<meta name="robots" content="index, follow" />
	<meta name="robots" content="all">
	<meta name="revisit-after" content="60 days">
	<title>BLACK INK TATOO</title>

				<!--ICON set-->
				<link rel="icon" href="favicon.ico" type="image/x-icon"/>

				<!--CSS set-->
        		<!--[if lte IE 6]>
				<script type="text/javascript">
				/* <![CDATA[ */
				window.top.location = '../common/error/mod_errorbrowser.html';
				/* ]]> */
				</script>
				<![endif]-->

				<!--[if !IE]>--> 	<link rel="stylesheet" type="text/css" href="../common/template/css/no_ie_stylesheet.css" /> 	<!--<![endif]-->
				<!--[if IE]> 		<link rel="stylesheet" type="text/css" href="../common/template/css/ie_stylesheet.css" /> 		<![endif]-->
				<!--[if IE 7]> 		<link rel="stylesheet" type="text/css" href="../common/template/css/ie7_stylesheet.css" /> 		<![endif]-->

				<!--SCRIPT set-->
				<!--no script-->

	</head>

	<body id="monitor">

		<div id="testata">
			<?php 
			include("../common/include/testata.php");
			?>
		</div>

		<div id="corpo">
			<div class="gabbia_contattaci">
<?php
$indice_attuale = 0;
if( !empty($_GET['index']) ){
    $indice_attuale = $_GET['index'];
}
$path = 'img/photo/';
$dh = opendir($path);
$index=0;
$immagine = 'img/gallery/nophoto.jpg';
while( ($file = readdir($dh)) !== false ){
    if( is_file($path.$file) && ($index==$indice_attuale) ){
        $immagine = $path.$file;
    }
    if(is_dir($path.$file)){
        continue;
    }
    $index++;
}
$immagine = urlencode($immagine);
echo "<img class=\"photo\" title=\"photonow\" src=\"immagine.php?file=$immagine\" />";


$prev_index= $indice_attuale-1;
if($prev_index<0){ $prev_index=0;}
$next_index=$indice_attuale+1;
if($next_index>=$index){ $next_index=$indice_attuale; }
?>
				<!-- <img class="photo" title="photonow" src="img/photo/nophoto.jpg" /> --> <!--foto tatuaggio/altro-->
				
				<a href="<?php echo "{$_SERVER['PHP_SELF']}?index=$prev_index"; ?>"><img class="leftarrow" alt="left" title="left_arrow"
				src="img/gallery/arrowL.png"  /></a>
				<a href="<?php echo "{$_SERVER['PHP_SELF']}?index=$next_index"; ?>"><img class="rightarrow" alt="left" title="right_arrow"
				src="img/gallery/arrowR.png"   /></a>

			</div>	
		</div>

		<div id="fondo">
			<?php 
			include("../common/include/fondopagina.php");
			?>
		</div>

	</body>

</html>