<?include("iconnect.php")?>
<?
$regionno=$_REQUEST["regionno"];
include ("icallregion.php");
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>

<?
if($pname=="region" && $page=="region.php")
{
	$pname="region"; $pnamesub="region";
	$youarein1="Region"; $youarein1link="region.php";
	$youarein2=""; $youarein2link="";
	$youareinname="View Emirates : ".$region;
}
if($pname=="region" && $page=="community.php")
{
	$pname="region"; $pnamesub="region";
	$youarein1="Region"; $youarein1link="region.php";
	$youarein2=""; $youarein2link="";
	$youareinname="View Emirates : ".$region;
}
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";

$mainheading="View Emirates : ".$region;
$linkheading="Emirates";
$subheading="";
$bodyheading="List of all Emirates";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";$priorityicon="No";
$linkname="community";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";

$dropdown="community";
$dropdown1="community";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 

<?
$community1_dist="*";
$community_wheree="regionno ='$regionno' ";
$community_tcount= $obj->totalrecords_condition('community',$community1_dist, $community_wheree);
foreach($community_tcount as $community_row ){
$community_count=$community_row['count(*)'];
}
?> 
<?//include ("isubheading.php")?>  
<?include ("iaction.php")?> 
<div class="table-wrapper">
<!------->
	<div class="widget-2 mg-b-10" style="padding:0px; margin-right: 0px;">
	<div class="card-header" style="padding:0px; margin-right: 0px; background-color: transparent;">
	<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"><?echo $bodyheading?></h6>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">			
	<?if ($addicon<>"No") { ?>
	<a title="Add <?echo $linkheading?>" href="addcommunity.php?regionno=<?echo $regionno?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span></a>
	<? } ?>	
	</div>	  
	</div>
	</div>
<!------->
<?if($community_count<>'0')	{ ?>
   
	<table id="datatable1" class="table display table-responsive nowrap">
	<thead>
	<tr>
	<th style="width:4%">#</th>
    <th style="width:62%">Emirates Name</th>	
	<th style="width:20%">Status</th>
	<th style="width:25%">Actions</th>
	</tr>
	</thead>
	<tbody>
	<?
	$where="regionno =$regionno order by communityno asc";
    $community_result = $obj->select_all_values('community', $where,'');
	$count=0;
	foreach($community_result as $community_row)
	{ 
	$count++; 
	$communityno = $community_row["communityno"];
	$regionno = $community_row["regionno"];
	$communityname = $community_row["communityname"];	
	$status = $community_row["status"];
		 
	if (isset($_REQUEST["action"])) { 
	if ($action=="Inactive") {
	$tdselectno = $_REQUEST[$dropdown1.$no];
	if ($tdselectno == $communityno) {
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
	if ($status<> "Active") {
	$tdcolor = "style='background-color: #f2dede;'";
	} else {
	$tdcolor = "";
	}
	?>
	
	<tr>
	<td <?echo $tdcolor?>><?echo $count?></td>	
	<td <?echo $tdcolor?>><?echo $communityname?></td>
    <td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
      <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Emirates Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Emirates Activated"></i><? } ?></a>
      <? include 'css/modalstyle.css'; ?>   
      <? include 'modal'.$dropdown1.'status.php'; ?>
	  <script>
	   $(document).ready(function(){
        $("#<?echo $dropdown1?>details_<?echo $count?>").click(function(){
         $("#myModal<?echo $dropdown1?>_<?echo $count?>").modal();
        });
       });
	  </script>	 
	 </div>
	</td>
	<td <?echo $tdcolor?>>
	<?if ($modifyicon<>"No") { ?><a href="modifycommunity.php?regionno=<?echo $regionno?>&communityno=<?echo $communityno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Emirates"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;
	</td>	
	</tr>
	<!-------------------------------- BASIC MODAL PHOTO STARTS-------------------------------->
	<div id="modaldemoworkphoto-<?echo $count?>" class="modal fade">
	<div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto;">
	<div class="modal-content bd-0 tx-14">
	<div class="modal-header pd-y-20 pd-x-25">
	<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> <?echo $mainheading?></h6>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body pd-25">
	<p align="center"><?if ($pimg<>""){ ?><img src="../community/<?echo $pimg?>"  alt="Image" width="700" height="500"><? } else { ?><img src="img/dummy.png" class="wd-55" alt="Image"><? } ?></p>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
	</div>
	</div>
	</div>
	</div>
	<!-------------------------------- BASIC MODAL PHOTO ENDS-------------------------------->
	<? } ?> 
	</tbody>
	</table>
	</div>
	<? } else { ?>
	<?//include ("isubheadingempty.php")?>
	<?include ("inodata.php")?>
	<? } ?>	    
	<?include ("ibottom.php")?>