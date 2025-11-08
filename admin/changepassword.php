<?include("iconnect.php")?>
<?
$pname="changepassword"; $pnamesub="";
$youarein1=""; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$youareinname="Change Password";
$mainheading="Change Password";
$linkheading="Change Password";
$subheading="";
$bodyheading="List of all Change Password";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";$priorityicon="No";
$linkname="changepassword";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";

$dropdown="Change Password";
$dropdown1="changepassword";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$adminuser_tcount1=$obj->totalrecords_condition_nowhere('adminuser','*');
foreach($adminuser_tcount1 as $adminuser_row ){
$adminuser_tcount=$adminuser_row['count(*)'];
}
if($adminuser_tcount<>'0')	
{ 
?> 
<?//include ("isubheading.php")?>  
<?include ("iaction.php")?> 
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
	<div class="table-wrapper">
	<table id="datatable1" class="table display table-responsive nowrap">
	<thead>
	<tr>
	<th style="width:4%">#</th>
	<th style="width:12%">User Name</th>
	<th style="width:25%">Password </th>	
	<th style="width:25%">Actions</th>
	</tr>
	</thead>
	<tbody>
	<?
	$adminuser_orderby="ORDER BY sessionusername  desc";
	$adminuser_result=$obj->select_table_orderby("adminuser",$adminuser_orderby);
	$count=0;
	foreach($adminuser_result as $adminuser_row)
	{ 
	$count++;
	$sessionusername = $adminuser_row["sessionusername"];
	$sessionpassword = $adminuser_row["sessionpassword"];	
		 	 
	if (isset($_REQUEST["action"])) { 
	if ($action=="Inactive") {
	$tdselectno = $_REQUEST[$dropdown1.$no];
	if ($tdselectno == $assignjobno) {
	$tdcolor = "style='background-color: #f7ebeb;'";
	} else {
	$tdcolor = "";
	}
	} else {
	$tdcolor = "";
	$tdselectno = "";
	}
	} else {
	$tdcolor = "";
	}
	?>

	<tr>
	<td <?echo $tdcolor?>><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $sessionusername?></td>	
	<td <?echo $tdcolor?>><?echo $sessionpassword?></td>	
    <td <?echo $tdcolor?>>
	<?if ($modifyicon<>"No") { ?><a href="modifychangepassword.php?sessionusername=<?echo $sessionusername?>&sessionpassword=<?echo $sessionpassword?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit fa-lg" title="Modify Change Password"></i></a> <? } ?>
	</td>	
	</tr>
	<? } ?> 
	</tbody>
	</table>
	</div>
	<? } else { ?>
	<?include ("isubheadingempty.php")?>
	<?include ("inodata.php")?>
	<? } ?>	    
	<?include ("ibottom.php")?>