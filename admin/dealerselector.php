<?include("iconnect.php")?>
<?
$pname="dealerselector"; $pnamesub="";
$youarein1=""; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youareinname="Dealer Selector";
$mainheading="Dealer Selector";
$linkheading="Dealer Selector";
$subheading="";
$bodyheading="List of all Dealer Selector";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="No";
$linkname="dealerselector";
$linknamepriority="prioritydealerselector";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Dealer Selector";
$dropdown1="dealerselector";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$dealerselector_tcount1=$obj->totalrecords_condition_nowhere('dealerselector','*');
foreach($dealerselector_tcount1 as $dealerselector_row )
{
	$dealerselector_tcount=$dealerselector_row['count(*)'];
}
if($dealerselector_tcount<>'0')	
{ 
?> 
<?include ("isubheading.php")?>  
<?include ("iaction.php")?> 
<div class="table-wrapper">
 <table id="datatable1" class="table display table-responsive nowrap">
  <thead>
   <tr>
    <th style="width:2%">#</th>
    <th style="width:10%">Region</th>
    <th style="width:10%">Community</th>
    <th style="width:10%">Dealer Name</th>
    <th style="width:15%">Company Name</th>
    <th style="width:6%">Phone</th>
    <th style="width:4%">Status</th>
    <th style="width:5%">Actions</th>
   </tr> 
  </thead>
  <tbody>
  <!----tbody starts---->
  <?
  $dealerselector_orderby="ORDER BY dealername asc";
  $dealerselector_result=$obj->select_table_orderby("dealerselector",$dealerselector_orderby);
  $count=0;
  foreach($dealerselector_result as $dealerselector_row)
  {  
    $count++;
    $dealerselectorno = $dealerselector_row['dealerselectorno'];
    $regionno = $dealerselector_row['regionno'];
	$where="regionno =$regionno";
	$result_region = $obj->select_all_values('region', $where,'');
	foreach($result_region as $region_row)
	{
	 $region= $region_row['region'];
	}
	
    $communityno = $dealerselector_row['communityno'];
	if($communityno<>0){
	$where="communityno=$communityno";
	$result_community = $obj->select_all_values('community', $where,'');
	foreach($result_community as $community_row)
	{
	 $communityname= $community_row['communityname'];
	}
	}
	else{
		$communityname="-";
	}
    $dealername = $dealerselector_row['dealername'];
    $companyname = $dealerselector_row["companyname"];	
    $address = $dealerselector_row['address'];
    $phone = $dealerselector_row["phone"];		
    $email = $dealerselector_row['email'];
    $website = $dealerselector_row["website"];
	$location = $dealerselector_row["location"];	
    if($location=="")$location="-";
    $locationmodal =$dealerselector_row["location"];
	if($locationmodal=="")$locationmodal="-";
    $status = $dealerselector_row["status"];
	include ("icalltdstatus.php");
  ?>
   <tr>
    <td <?echo $tdcolor?>><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $region?></td>
	<td <?echo $tdcolor?>><?echo $communityname?></td>
	<td <?echo $tdcolor?>><?echo $dealername?></td>
	<td <?echo $tdcolor?>><?echo $companyname?></td>
	<td <?echo $tdcolor?>><?echo $phone?></td>
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Dealer Selector Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Dealer Selector Activated"></i><? } ?></a>
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
	 <a title="View Orders" href="viewdealerselector.php?dealerselectorno=<?echo $dealerselectorno?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-list-alt  tooltips"></i></a>&nbsp; &nbsp;&nbsp;
	
	 <?if ($modifyicon<>"No") { ?><a href="modifydealerselector.php?dealerselectorno=<?echo $dealerselectorno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Dealer Selector"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete?')"   href="deletedealerselector.php?dealerselectorno=<?echo $dealerselectorno?>"><i class="fas fa-trash" title="Delete Dealer Selector" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <? //} ?>
	</td>	
   </tr>
  <!--------------------------- LOCATION STARTS---------------------------->
 <div id="modaldemowork-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">LOCATION : <?echo $dealername?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p style="text-align:justify;word-wrap: break-word;"><?echo $locationmodal?></p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!---------------- LOCATION ENDS----------------------------------------->
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