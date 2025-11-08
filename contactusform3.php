<?
	$name=$_POST["name"];
	if($name==""){$name="-";}
	$mobile=$_POST["mobile"];
	if($mobile==""){$mobile="-";}
	$email=$_POST["email"];
	if($email==""){$email="-";}
	$requirements=$_POST["additionalrequirements"];
	if($requirements==""){$requirements="-";}
?>
<?
$body="<div align='left'><table width='840' height='10' cellspacing='0' cellpadding='0' border='0' style=' background-color:#F3F3F3;'>
<tr><th width='840' height='2' valign='middle'  align='left' style='background-color:#417137;'></th></tr>

<tr><th width='840' height='60' valign='middle'  align='left' style='background-color:#FFFFFF; font-size: 26px; font-family : calibri; color: #ED1B24; padding-left:25px; padding-right:25px; padding-top:15px;'><img  src='https://shamsnaturals.com/img/shamsnaturals-logo.jpg'></th></tr></table></div>" ;

	$body.="<div align='left'><table width='840' height='10' cellspacing='0' cellpadding='0' border='0' style=' background-color:#F3F3F3;'><tr><td width='840' height='35'><div align='center'><table width='800' height='10' cellspacing='0' cellpadding='0' border='0'>" ;
	$body.="<tr><td width='800' height='10' valign='top'  align='left'></td></tr>" ;
	$body.="<tr><td width='800' height='70' valign='top'  align='left' style='font-size: 36px;font-family : calibri; color: #417137 !important;'>Enquiry Submission</td></tr>" ;
	$body.="<tr><td width='800' height='10' valign='top'  align='left' style='font-size: 26px;font-family : calibri; color: #417137;'>Hello  ".$name."!</td></tr>" ;
	$body.="<tr><td width='800' height='15'></td></tr>" ;
	$body.="<tr><td width='800' height='10' valign='top'  align='left' style='font-size: 19px; font-family : calibri; color: #2D2D2D; line-height: 23px;'>Thank you for your interest in Shams Naturals. We will go through your requirements and  will get back to you soon.</td></tr>" ;
	
	$body.="<tr><td width='800' height='20'></td></tr>";	
	
	$body.="<tr><td width='800' height='20'></td></tr></table></div></td></tr></table></div>" ;
	$body.="<div align='left'><table width='840' height='10' cellspacing='0' cellpadding='0' border='0' style=' background-color:#F3F3F3;'><tr>" ;
	$body.="<td width='840' height='35'><div align='center'><table width='800' height='10' cellspacing='0' cellpadding='0' border='0'>" ;
	$body.="<tr><td width='800' height='30' style='background-color: #F2F2F2;   border-style: dotted; border-color: #417137; border-width:1px;'><div align='center'><center><table width='750' height='10' cellspacing='0' cellpadding='0' border='0'>" ;
	$body.="<tr><td width='750' height='20' colspan='2'></td></tr>" ;
	$body.="<tr><td width='750' height='35' valign='top' colspan='2' align='left' style='font-size: 20px; font-family : calibri; color: #417137;'><b>Here is your Enquiry details  </b></td></tr>" ;
	$body.="<tr><td width='180' height='35' valign='top'  align='left' style='font-size: 18px; font-family : calibri; color: #333333;'><b>Name </b></td>" ;
	$body.="<td width='570' height='35' valign='top'  align='left' style='font-size: 18px; font-family : calibri; color: #333333;'>: ".$name."</td></tr>" ;
	$body.="<tr><td width='180' height='35' valign='top'  align='left' style='font-size: 18px; font-family : calibri; color: #333333;'><b>Mobile </b></td>" ;
	$body.="<td width='570' height='35' valign='top'  align='left' style='font-size: 18px; font-family : calibri; color: #333333;'>: ".$mobile."</td></tr>" ;
	$body.="<tr><td width='180' height='35' valign='top'  align='left' style='font-size: 18px; font-family : calibri; color: #333333;'><b>Email </b></td>" ;
	$body.="<td width='570' height='35' valign='top'  align='left' style='font-size: 18px; font-family : calibri; color: #333333;'>: ".$email." </td></tr>" ;
	
	$body.="<tr><td width='180' height='35' valign='top'  align='left' style='font-size: 18px; font-family : calibri; color: #333333;'><b>Requirements </b></td>" ;
	$body.="<td width='570' height='35' valign='top'  align='left' style='font-size: 18px; font-family : calibri; color: #333333;'>: ".$requirements." </td></tr>" ;
	
	$body.="<tr><td width='750' height='20' colspan='2'></td></tr></table></center></div></td></tr></table></div><br><br></td></tr></table></div>" ;
	
	
	$body.="<div align='left'><table width='840' height='60' cellspacing='0' cellpadding='0' border='0' style=' background-color:#417137;'>
	<tr><td width='840' height='5' valign='middle'  align='left' style='background-color:#417137;'></td></tr>
	<tr><td width='840' height='2' valign='middle'  align='left' style='background-color:#417137;'><div align='center'><table width='800' height='60' cellspacing='0' cellpadding='0' border='0' style=' background-color:#417137;'><tr><td width='264' height='3' style='font-size: 15px; font-family : calibri; color: #FFFFFF; line-height: 23px;'><b>Help Desk</b><br>+971 55 190 6177</td><td width='4' height='3'></td><td width='264' height='3' style='font-size: 15px; font-family : calibri; color: #FFFFFF; line-height: 23px;'><b></b><br></td><td width='4' height='3'></td><td width='264' height='3' style='font-size: 15px; font-family : calibri; color: #FFFFFF; line-height: 23px;'><b>Email Support</b><br> info@shamsnaturals.com</td></tr></table></div></td></tr>

	<tr><td width='840' height='5' valign='middle'  align='left' style='background-color:#FFFFFF;'></td></tr>
	</table></div>" ;

	$body.="<div align='left'><table width='840' height='2' cellspacing='0' cellpadding='0' border='0' style=' background-color:#417137;'>
    <tr><td width='840' height='2' valign='middle'  align='left' style='background-color:#417137 !important;'></td></tr></table></div>" ;
?>
<?//echo $body; exit;?>

<?php
$flayera="callus.webp";
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->Mailer = "sendmail";
$mail->Host = "127.0.0.1";
$mail->FromName = $name;
$mail->From = $email;
$mail->AddAddress("info@shamsbags.com");
$mail->AddCC($email);
$mail->Subject = "Contact Enquiry from www.shamsnaturals.com :  ".$name;
$mail->AddEmbeddedImage($flayera,  "my-attach",  $flayera);
$mail->WordWrap = 50;
$mail->Body = $body;

if(!$mail->Send())
{
echo "Message was not sent";
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
	
}
?>
<!----------------------------- form starts ----------------------------->
<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pb-3">
    <div class="mx-0 pl-3">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-left px-0">
            <p class="ttext py-2">Your Enquiry Form have been sucessfully submitted.<br> We will get back to you soon.
            </p>

            <p class="py-4"></p>
            <p class="py-4"></p>
        </div>
    </div>
</div>
<!----------------------------- form ends ----------------------------->