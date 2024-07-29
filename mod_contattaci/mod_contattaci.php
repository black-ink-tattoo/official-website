<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="it-IT">
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
				
				<p class="ww_georgia_bold" 				style="padding:40px 0 0 135px;">
				Vieni a trovarci o  chiamaci:
				</p>
				<p class="ww_georgia" 				style="padding:10px 0 0 135px;">
				Via tal dei tali					<br />
				battipaglia (Salerno) 000000		<br />
				tel: 000 - 0000000 fax: 000 - 000000
				</p>
				
				<p class="ww_georgia_bold" 		style="padding:10px 0 0 135px;">
				Inviaci una mail:
				</p>
				
				<form class="contatto" name="contatto" method="post" action="invia_mail.php">
					<table border="0" cellspacing="0" cellpadding="0">
								
						<tr><td>
							<span><input type="text" class="nec" 	value="nome" name="_nome" /></span><br />
							<span><input type="text" class="mail" 	value="tuamail@server.it" name="_mail" /></span><br />
						</td></tr>
																
						<tr><td>
							<textarea class="messaggio" name="messaggio">Scriva qui il suo messaggio...</textarea>
						</td></tr>
						
						<tr><td>
							<input type="submit" class="invia" value="&nbsp;"/>&nbsp; - &nbsp;<input type="reset" class="reset"  value="&nbsp;"/>
						</td></tr>
							
					</table>
				</form>	
				
			</div>	
		</div>

		<div id="fondo">
			<?php 
			include("../common/include/fondopagina.php");
			?>
		</div>

	</body>

</html>