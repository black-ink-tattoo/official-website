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
	<title>BLACK INK TATTOO</title>

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
                                <script type="text/javascript" src="../common/jquery-1.6.2.min.js"></script>
        <script type="text/javascript">
            function clear_text(obj_id, action, default_txt ){
                if( action == 'focus'){
                    if ( $('#'+obj_id).val() == default_txt ){
                        $('#'+obj_id).val('');
                    }
                }
                if( action == 'blur'){
                    if ( $('#'+obj_id).val().length == 0 ){
                        $('#'+obj_id).val(default_txt);
                    }
                }
            }
        </script>

	</head>

	<body id="monitor">

		<div id="testata">
			<?php 
			include("../common/include/testata.php");
			?>
		</div>

		<div id="corpo">
			<div class="gabbia_contattaci">
				
				<p class="ww_georgia_bold" 		style="padding:10px 0 0 135px;">
                                    <br/><br/>
				Inviaci una mail:
				</p>
				
				<form class="contatto" name="contatto" method="post" action="invia_mail.php">
					<table border="0" cellspacing="0" cellpadding="0">
								
						<tr><td>
                                                        <span><input type="text" class="nec" 	value="nome" id="_nome" name="_nome" onfocus="javascript: clear_text('_nome', 'focus', 'nome' );" onblur="javascript: clear_text('_nome', 'blur', 'nome' );" /></span><br />
							<span><input type="text" class="mail" 	value="tuamail@server.it" id="_mail" name="_mail" onfocus="javascript: clear_text('_mail', 'focus', 'tuamail@server.it' );" onblur="javascript: clear_text('_mail', 'blur', 'tuamail@server.it' );" /></span><br />
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