<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$pname="region"; $pnamesub="";
$youarein1=""; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9="";$youarein9link="";
$youareinname="Region";
$mainheading="Region";
$linkheading="Region";
$subheading="";
$bodyheading="List of all Region";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="No";
$linkname="region";
$linknamepriority="priorityregion";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Region";
$dropdown1="region";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$region_tcount1=$obj->totalrecords_condition_nowhere('region','*');
foreach($region_tcount1 as $region_row )
{
	$region_tcount=$region_row['count(*)'];
}
if($region_tcount<>'0')	
{ 
?> 
<?//include ("isubheading.php")?>  
<?include ("iaction.php")?> 
<div class="table-wrapper">
<!----Menu sets--->
 <div class="widget-2 mg-b-10" style="padding:0px; margin-right: 0px;">
  <div class="card-header" style="padding:0px; margin-right: 0px; background-color: transparent;">
   <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"><?echo $bodyheading?></h6>
   <div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">			
    <?if ($priorityicon<>"No") { ?>
     <a title="Set Priority <?echo $linkheading?>" href="setpriorityregion.php?pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	 </a>
    <? } ?>	
    <?if ($addicon<>"No") { ?>
    <a title="Add <?echo $linkheading?>" href="addregion.php?pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span>
	</a>
    <?}?>	
   </div>	  
  </div>
 </div>
 <!---Menu sets ends---->
 <table id="datatable1" class="table display table-responsive nowrap">
  <thead >
   <tr >
    <th style="width:2%">#</th>
    <th style="width:20%">Region </th>
    <th style="width:20%">Emirates </th>
    <th style="width:5%">Status</th>
    <th style="width:5%">Actions</th>
   </tr>
  </thead>
  <tbody>
  <!----tbody starts---->
  <?
  $region_orderby="ORDER BY regionno asc";
  $region_result=$obj->select_table_orderby("region",$region_orderby);
  $count=0;
  foreach($region_result as $region_row)
  { 
    $count++;
    $regionno = $region_row['regionno'];
    $region = $region_row['region'];
    $status = $region_row["status"];
    $addeddate =$region_row["addeddate"];
    $addeddate = date("d M Y", strtotime($addeddate));
	
	//take communitydesc count
	$community_dist="*";
	$community_wheree="regionno  ='$regionno' ";
	$community_tcount= $obj->totalrecords_condition('community',$community_dist, $community_wheree);
	foreach($community_tcount as $community1_row ){
	$community_count=$community1_row['count(*)'];
	}
	
    include ("icalltdstatus.php");
  ?>
  <tr>
    <td <?echo $tdcolor?> ><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $region?></td>	
	<td <?echo $tdcolor?>><?   if($community_count<>0)	{?><a href="community.php?regionno=<?echo $regionno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-layer-group iconblue" title="View Community " style="font-size:19px;"></i></a><? } ?>
	&nbsp; &nbsp; &nbsp; 
	<a href="addcommunity.php?regionno=<?echo $regionno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-plus-circle iconblue" title="Add Community" style="font-size:19px;"></i></a>
	</td> 
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Region Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Region Activated"></i><? } ?></a>
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
	 <?if ($modifyicon<>"No") { ?>
	 <?if ($regionno<>200 ){?>
	 <a href="modifyregion.php?regionno=<?echo $regionno?>&regionno=<?echo $regionno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Region"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;<? } ?>
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete? All the region of this region will be deleted')"   href="deleteregion.php?regionno=<?echo $regionno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-trash" title="Delete Region" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <? //} ?>
	</td>	
 </tr>
  <?}?>
   <!----tbody ends---->
  </tbody> 
 </table>
</div>	
<?}
else 
{ 
?>
<?include ("isubheadingempty.php")?>
<?include ("inodata.php")?>
<?}?>
<?include ("ibottom.php")?>