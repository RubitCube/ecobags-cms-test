<?include("iconnect.php")?>
<?
$pname="bannergallery"; $pnamesub="";
$youarein1=""; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$youareinname="Banner Gallery";
$mainheading="Banner Gallery";
$linkheading="Banner Gallery";
$subheading="";
$bodyheading="List of all Banner Gallery";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";$priorityicon="Yes";$addiconinboundtours="No";
$linkname="bannergallery";
$linknamepriority="prioritybannergallery";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Banner Gallery";
$dropdown1="bannergallery";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$bannergallery_tcount1=$obj->totalrecords_condition_nowhere('bannergallery','*');
foreach($bannergallery_tcount1 as $bannergallery_row ){
$bannergallery_tcount=$bannergallery_row['count(*)'];
}
if($bannergallery_tcount<>'0')	
{ 
?> 
<?//include ("isubheading.php")?>  
<?include ("iaction.php")?> 
	<div class="table-wrapper">
	<!------->
	<div class="widget-2 mg-b-10" style="padding:0px; margin-right: 0px;">
	<div class="card-header" style="padding:0px; margin-right: 0px; background-color: transparent;">
	<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"><?echo $bodyheading?></h6>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">			
	<?if ($priorityicon<>"No") { ?>
	<a href="setprioritybannergallery.php?pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span></a>
	<? } ?>	
	<?if ($addicon<>"No") { ?>
	<a href="addbannergallery.php?pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span></a>
	<? } ?>	
	</div>	  
	</div>
	</div>
<!------->
	<table id="datatable1" class="table display table-responsive nowrap">
	<thead>
	<tr>
	<th style="width:4%">#</th>
	<th style="width:10%">Posted Date</th>
	<th style="width:25%">Desktop Banner</th>
	<!--<th style="width:20%">Mobile Banner</th>-->
	<th style="width:18%">Priority</th>
	<th style="width:18%">Status</th>
	<th style="width:10%">Actions</th>
	</tr>
	</thead>
	<tbody>
	<?
	$bannergallery_orderby="ORDER BY priority ASC";
	$result=$obj->select_table_orderby("bannergallery",$bannergallery_orderby);
	$count=0;
	foreach($result as $bannergallery_row)
	{ 
	$count++;
	$bannergalleryno = $bannergallery_row["bannergalleryno"];
	$pimg = $bannergallery_row["pimg"];
	$mimg = $bannergallery_row["mimg"];
	$status = $bannergallery_row["status"];
	$priority = $bannergallery_row["priority"];
	$addeddate = $bannergallery_row["addeddate"];
	$addeddate = date("d/m/Y", strtotime($addeddate));
	
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
	<?if ($status<> "Active") {
	$tdcolor = "style='background-color: #f2dede;'";
	} else {
	$tdcolor = "";
	}?>
	<tr>
	<td <?echo $tdcolor?>><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $addeddate?></td>
	<td <?echo $tdcolor?>><?if ($pimg<>""){ ?><a href="../bannergallery/<? echo $pimg;?>" target="_blank" title="View Desktop Banner"><img src="../bannergallery/<?echo $pimg?>" class="wd-100" alt="Image"><? } else { ?><img src="img/nobanner.jpg" class="wd-100" alt="Image"><? } ?></a></td>	
	<!--<td <?echo $tdcolor?>><?if ($mimg<>""){ ?><a href="../bannergallery/<? echo $mimg;?>" target="_blank" title="View Mobile Banner"><img src="../bannergallery/<?echo $mimg?>" class="wd-100" alt="Image"><? } else { ?><img src="img/nobanner.jpg" class="wd-100" alt="Image"><? } ?></a>
	</td>-->
	<td <?echo $tdcolor?>><?echo $priority?></td>
	<td <?echo $tdcolor?> class="table-action">	
	 <div class="widget-messaging panel-edit ">
      <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Banner Gallery Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Banner Gallery Activated"></i><? } ?></a>
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
	<?if ($modifyicon<>"No") { ?><a href="modifybannergallery.php?bannergalleryno=<?echo $bannergalleryno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Banner Gallery"></i></a>  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; 	
	<? }
	else
	{
		?>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
		<?
	}?>	
	</td>
	</tr>	
	<!-------------------------------- BASIC MODAL STARTS-------------------------------->
	<div id="modaldemowork-<?echo $count?>" class="modal fade">
	<div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: 500px;">
	<div class="modal-content bd-0 tx-14">
	<div class="modal-header pd-y-20 pd-x-25">
	<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message </h6>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body pd-25">
	<p><?echo $message?></p>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
	</div>
	</div>
	</div>
	</div>
	<!-------------------------------- BASIC MODAL ENDS-------------------------------->
	<? } ?> 
	</tbody>
	</table>
	</div>
	<? } else { ?>
	<?include ("isubheadingempty.php")?>
	<?include ("inodata.php")?>
	<? } ?>	    
	<?include ("ibottom.php")?>