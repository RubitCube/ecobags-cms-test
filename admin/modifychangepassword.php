<?include("iconnect.php")?>

<?

	$pname="changepassword"; $pnamesub="changepassword";
	$youarein1="Change Password"; $youarein1link="changepassword.php";
	$youarein2=""; $youarein2link="";
	$youareinname="Modify Change Password";

$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";

$mainheading="Modify Change Password";
$linkheading="Modify Change Password";
$subheading="";
$bodyheading="Update your Change Password details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="changepassword";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?
$sessionusername=$_REQUEST["sessionusername"];
$where="sessionusername ='$sessionusername'";
$result_changepassword = $obj->select_all_values('adminuser', $where,'');
foreach($result_changepassword as $changepassword_row)
{
    $sessionusername = $changepassword_row["sessionusername"];
	$sessionpassword = $changepassword_row["sessionpassword"];
}?>
<script language="Javascript">
function validate()
{
	oldpassword=document.myform.oldpassword.value;
	if (oldpassword == "" || oldpassword == null || oldpassword.charAt(0) == ' ')
	{
		alert("Please enter your current password")
		document.myform.oldpassword.focus();
		return false;
	}
	else
    {
		newpassword=document.myform.newpassword.value;
		confirmpassword=document.myform.confirmpassword.value;
		if (newpassword == "" || newpassword == null || newpassword.charAt(0) == ' ')
		{
			alert("Password cannot be blank")
			document.myform.newpassword.focus();
			return false;
		}
		else 
		{
		  if(newpassword.charAt(0)>=0 && newpassword.charAt(0)<=9)
		  {
			  alert("First character of Password cannot be a number")
			  document.myform.newpassword.focus();
			  return false;
		  }
		  
		  flagp=true;
		  for(i=0;i<newpassword.length;i++)
		  {
			   if ((!(newpassword.charAt(i)>=" ")) || (newpassword.charAt(i)>="A" && newpassword.charAt(i)<="Z"))
			   flagp=false;
		  }
		  
		  if (flagp==false)
		  {
			   alert("Password shouldnot contain Capital letters")
			   document.myform.newpassword.select();
			   return false;		
		   }
		}
		
		if (newpassword != confirmpassword)
		{
			alert('New Password and Confirm Password do not match')
			document.myform.newpassword.select();
			return false;
		}
		else
		{
			return true;
		}
    }
}

</script>
 <form name="myform" action="updatechangepassword.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off" onsubmit="return validate();"> 
	<input type="hidden" name="sessionusername" class="form-control" value="<?echo $sessionusername?>"> 
	<input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
	<div class="form-layout form-layout-1">
	<div class="row mg-b-25"> 	
	<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">Enter Your Current Password &nbsp;<span class="tx-danger">*</span></label>
	<input class="form-control" type="password" name="oldpassword" placeholder="Enter Your Current Password" required value="">
	</div>		
	</div>	
	<div class="col-lg-6">
	<div class="form-group">
	</div>		
	</div>	
	<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">Enter Your New Password &nbsp;<span class="tx-danger">*</span></label>
	<input class="form-control" type="password" name="newpassword" placeholder="Enter Your New Password" required value="">
	</div>		
	</div>
	<div class="col-lg-6">
	<div class="form-group">
	</div>		
	</div>
	<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">Confirm Your New Password  &nbsp;<span class="tx-danger">*</span></label>
	<input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Your New Password" required value="">
	</div>		
	</div>
	
	</div>
	<div class="form-layout-footer">
	<button class="btn btn-info">Submit Form</button>
	</div>

	</form>		
	
<?include ("ibottom.php")?>