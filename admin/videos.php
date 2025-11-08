<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$pname="videos"; $pnamesub="";
$youarein1=""; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9="";$youarein9link="";
$youareinname="Videos";
$mainheading="Videos";
$linkheading="Videos";
$subheading="";
$bodyheading="List of all Videos";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="No";
$linkname="videos";
$linknamepriority="priorityvideos";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Videos";
$dropdown1="videos";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$videos_tcount1=$obj->totalrecords_condition_nowhere('videos','*');
foreach($videos_tcount1 as $videos_row )
{
	$videos_tcount=$videos_row['count(*)'];
}
if($videos_tcount<>'0')	
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
     <a title="Set Priority <?echo $linkheading?>" href="setpriorityvideos.php?pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	 </a>
    <? } ?>	
    <?if ($addicon<>"No") { ?>
    <a title="Add <?echo $linkheading?>" href="addvideos.php?pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span>
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
    <th style="width:20%">Videos Title </th>
    <th style="width:20%">Videos Link  </th>
    <th style="width:5%">Status</th>
    <th style="width:5%">Actions</th>
   </tr>
  </thead>
  <tbody>
  <!----tbody starts---->
  <?
  $videos_orderby="ORDER BY addeddate desc";
  $videos_result=$obj->select_table_orderby("videos",$videos_orderby);
  $count=0;
  foreach($videos_result as $videos_row)
  { 
    $count++;
    $videosno = $videos_row['videosno'];
    $videotitle = $videos_row['videotitle'];
    $videolink = $videos_row['videolink'];
    $status = $videos_row["status"];
    $addeddate =$videos_row["addeddate"];
    $addeddate = date("d M Y", strtotime($addeddate));
	
    include ("icalltdstatus.php");
  ?>
  <tr>
    <td <?echo $tdcolor?> ><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $videotitle?></td>	
	<td <?echo $tdcolor?>><?echo $videolink?></td>
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Videos Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Videos Activated"></i><? } ?></a>
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
	 <?if ($videosno<>200 ){?>
	 <a href="modifyvideos.php?videosno=<?echo $videosno?>&videosno=<?echo $videosno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Videos"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;<? } ?>
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete? All the videos of this videos will be deleted')"   href="deletevideos.php?videosno=<?echo $videosno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-trash" title="Delete Videos" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <? //} ?>
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