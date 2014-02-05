<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>
<title>Shoreline Land Care | Aurora, IL | Landscaping and paver brick work, design and maintenance</title>
<meta name="description" content="Shoreline Landcare in Aurora, IL provides outstanding landscaping and paver brick work through dedicated client services and superior product knowledge.">
<meta name="abstract" content="Full line paver brick and landscaping design and maintenance services - Aurora, Illinois">
<meta name="keywords" content="Landscape design, paver brick design, brick patio, Aurora, IL, brick driveway, retaining wall, landscape maintenance, 
commercial landscaping, residential landscaping, Aurora, Batavia, Boulder Hill, Bolingbrook, Montgomery, Naperville, North Aurora, Sugar Grove, Oswego,
Plainfield, Geneva, Downers Grove, Woodridge, Wheaton, Lisle, brick fire pits, decorative stone installation, theme gardens, mulch, tree and shrub trimming">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="7 days">
<meta name="googlebot" content="index,follow"> 
<meta name="author" content="JG Web Designs - Aurora, IL"> 



<link rel="stylesheet" href="sl_style.css">


<!-- *********** Form verification ****************** -->
<script language="JavaScript" type="text/JavaScript">
<!-- Original:  Wayne Nolting (w.nolting@home.com) -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function verify() {
var themessage = "You are required to complete the following fields: ";
if (document.form.name.value=="") {
themessage = themessage + " - First Name";
}

if (document.form.email.value=="") {
themessage = themessage + " -  E-mail";
}

//alert if fields are empty and cancel form submit
if (themessage == "You are required to complete the following fields: ") {
document.form.submit();
}
else {
alert(themessage);
return false;
   }
}
//  End -->
</script>

<!-- ************************************************ -->


</head>

<body  >

<div align="center">

<table width=1024 border="0" cellpadding="0" id="tableMain">
<tr height="220" >
	<td align="middle" valign="middle" background="graphics/hdrBG4.jpg">
		<table id="hdrTab" width="440" border=0 cellpadding="0" cellspacing="-1" bgcolor="#cccc99">
			<tr>


				<td>
				<img src="graphics/SL_leaf6.jpg" title="Shoreline Landcare - Aurora, IL | Commercial and residential landscaping services">
				</td>

				<td bgcolor="#cccc99">
				<div id="header_main">
				<!--
				<script language="JavaScript" SRC="date.js"></script>
				-->
				
				Shoreline Landcare
				
				</div>

				<div id="header_sub">
				<strong>Architecture | Landscape | Maintenance</strong><br>
				<br>Aurora, IL &nbsp; | &nbsp; 630.551.5224 &nbsp; | &nbsp; <a href="mailto:info@shorelinelandcare.com">info@shorelinelandcare.com</a><br>
				<span style="size: 8px; color: white;">All content &copy; Shoreline Landcare 2004-2012</span>
				</div>
				
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr height="360">
	<td valign="top">
	
	<!-- 
	<a style="text-decoration: none; text-size: 12px; font-weight: bold;" href="home.html"  class="menuanchorclass" rel="Menu">
	<img name="bt_015786" border="0" alt="Menu" src="graphics/MenuButton.gif" align="center" width="85" height="30">
	</a>
	-->

	<table border="0" width="100%">
	<tr>
		<td>
		<!-- ***** Nav table ***** -->
		<table border="1" id="navTab" cellpadding="4">
			<tr>
				<td class="nav">
					<a class="nav" href="index.html"> Home </a>
				</td>
				<td class="nav">
					<a class="nav" href="gallery.html"> Gallery </a>
				</td>
				<td class="nav">
					<a class="nav" href="services.html"> Services </a>
				</td>
				<td class="nav">
					<a class="nav" href="contact.html"> Contact Us </a>
				</td>
			</tr>
		</table>
		<!-- ********************* -->
		</td>

		<td align="right">
		<p><a href="SL_InstallationProcess.pdf" target="_blank">Installation Process</a>&nbsp; &nbsp;<a href="SL_Pavers.pdf" target="_blank">Paver Benefits</a></p>
		</td>
	</tr>
	</table>
	

	<table style="margin-top: 15px;" width="1024" border="0" cellpadding=3>
	<tr>
		<td valign="top" style="">
		<?php


			$msg = "The following has been submitted from the Contact Us page of www.shorelinelandcare.com \n\n";

			$msg .= "   Name: ".$_POST["name"]."\n\n";
			$msg .= "  Email: ".$_POST["email"]."\n\n";
			if($_POST["telephone"] != ""){
				$msg .= "  Phone: ".$_POST["telephone"]."\n\n";
				}
			if($_POST["address"] != ""){
				$msg .= " Address: ".$_POST["address"]."\n\n";
				}
			if($_POST["comments"] != ""){
				$msg .= "Comments: ".$_POST["comments"]."\n\n";
				}

			$msg .= "Services of interest:\n";
			for($i=0; $i<16; $i++)
			{
				if($_POST["cb".$i] != "") {
					$msg .= $_POST["cb".$i]. "\n";
				}
			}	

		   $to = "shorelinelandcare@gmail.com";

		   //$to = "info@shorelinelandcare.com";

		   $subject = "*** Website Contact Form ***";

		   $mailHdrs = "From: Shoreline Landcare website";

		   // invoke the PHP mail function...
		   mail($to, $subject, $msg, $mailHdrs);



			echo ("<p>Thank you for your interest, we will contact you soon</p><br>");

			echo ("<p><a href='http://www.shorelinelandcare.com'>Return to site</a></p>");		
		?>


		</td>

	</tr>
	</table>

	</td>
</tr>
<tr>
	<td style="text-align: center;">
		<br>
		<a href="gallery_3d.html"><img src="graphics/banner3DGallery.jpg" border="0"></a>

		<p id="footer1">Shoreline Landcare is fully insured - Call 630-551-5224 to request an estimate</p>
		<p id="footer2">
		Shoreline Landcare provides commercial and residential landscaping design, installation and maintenance.  We also specialize in paver brick designs, maintenance and repair.<br>
		Our services include: Lawn care, tree and shrub care, brick patios, driveways and retaining walls.
		</p>

		<p id="footer2">
		We provide our landscaping and brick services in the following Illinois cities:<br>Aurora, Naperville, Osewgo, Plainfield, Montgomery, Sugar Grove, Batavia, Bolingbrook, Geneva
		</p>

		<p id="footer3">Website by <a href="http://www.jgwebdesigns.net" target="_blank"><img src="graphics/jgwdLogo_thm.gif" align="middle" border="0"></a></p>
	
	</td>
</tr>
</table>


</div>



</body>

</html>