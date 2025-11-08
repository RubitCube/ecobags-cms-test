<?include("iconnect.php")?>
<?
$regionno=$_REQUEST["regionno"];
$communityno=$_REQUEST["communityno"];
include ("icallregion.php");
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?
if($pname=="region" && $page=="community.php")
{
	$pname="region"; $pnamesub="";
	$youarein1="Emirates"; $youarein1link="region.php";
	$youarein2="View Emirates"; $youarein2link="community.php?page=".$page."&pname=".$pname."&regionno=".$regionno;
	$youareinname="Modify Emirates : ".$region;
}	
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";

$mainheading="Modify Emirates";
$linkheading="Modify Emirates";
$subheading="";
$bodyheading="Update your Emirates details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="community";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 

 <form action="updatecommunity.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
	<input type="hidden" name="regionno" class="form-control" value="<?echo $regionno?>"> 
	<input type="hidden" name="communityno" class="form-control" value="<?echo $communityno?>"> 
	<input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 
    <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
	<div class="form-layout form-layout-1">
	<div class="row mg-b-25">
  		
	<!-------------------------community to 5 start------------------------------->
	<?
	$fcount = 0; 
	$where="regionno =$regionno and communityno='$communityno'";
	$result_community = $obj->select_all_values('community', $where,'');
	foreach($result_community as $community_row)
	{
		$fcount++;
		$communityno = $community_row["communityno"];
		$communityname = $community_row["communityname"];
		$status = $community_row["status"];
	?>
	<div class="col-lg-6" >
	<div class="form-group">
	<label class="form-control-label">Emirates Name <span class="tx-danger">*</span></label>
	<table  id="dynamic_field" style="width:100%;" cellpadding="5">  
	<tr>  
	<td><input type="text" name="communityname" placeholder="Enter Emirates Name" class="form-control name_list" required value="<?echo $communityname?>"></td>  
	<td>				 
	</td>  
	</tr>  
	</table>  	
	</div>		
	</div>
	<?}?>
<!-------------------------community to 5  ends------------------------------->
	</div>	
	<div class="form-layout-footer">
	<button class="btn btn-info">Submit Form</button>
	</div>
	</form>		
<?include ("ibottom.php")?>