<?include("iconnect.php")?>
<?
$pname="brands"; $pnamesub="";
$youarein1=""; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youareinname="Brands";
$mainheading="Brands";
$linkheading="Brands";
$subheading="";
$bodyheading="List of all Brands";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="Yes";
$linkname="brands";
$linknamepriority="prioritybrands";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Brands";
$dropdown1="brands";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$brands_tcount1=$obj->totalrecords_condition_nowhere('brands','*');
foreach($brands_tcount1 as $brands_row )
{
	$brands_tcount=$brands_row['count(*)'];
}
if($brands_tcount<>'0')	
{ 
?> 
<?include ("isubheading.php")?>  
<?include ("iaction.php")?> 
<div class="table-wrapper">
 <table id="datatable1" class="table display table-responsive nowrap">
  <thead>
   <tr>
    <th style="width:4%">#</th>
    <th style="width:5%">Logo</th>
    <th style="width:25%">Brands</th>
   <!-- <th style="width:8%">Image</th>	
    <th style="width:8%">Banner</th>-->
    <th style="width:15%">Brands Url</th>	
    <th style="width:15%">Description</th>
    <th style="width:5%">Priority</th>
    <th style="width:6%">Status</th>
    <th style="width:5%">Actions</th>
   </tr>
  </thead>
  <tbody>
  <!----tbody starts---->
  <?
  $brands_orderby="ORDER BY priority asc";
  $brands_result=$obj->select_table_orderby("brands",$brands_orderby);
  $count=0;
  foreach($brands_result as $brands_row)
  {  
    $count++;
    $brandsno = $brands_row['brandsno'];
    $brandsname = $brands_row['brandsname'];
    if($brandsname=="")
	 $brandsname="-";
    $brandslogo = $brands_row['brandslogo'];
	$brandsimg = $brands_row['brandsimg'];
    $brandsbanner = $brands_row['brandsbanner'];
    $brandsurl = $brands_row['brandsurl'];
    if($brandsurl=="")
	 $brandsurl="-";
    $brandsdesc = $brands_row['brandsdesc'];
	if($brandsdesc=="")
	 $brandsdesc="-";
    $brandsdescmodal=$brands_row["brandsdesc"];
    $priority = $brands_row["priority"];
    $status = $brands_row["status"];	
	include ("icalltdstatus.php");
  ?>
   <tr>
    <td <?echo $tdcolor?>><?echo $count?></td>
	<td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemobrandslogo-<?echo $count?>" title="View Brands Logo"> <?if ($brandslogo<>""){ ?><img src="../brandslogo/<? echo $brandslogo?>" width="90" height="30">		 <?}else{?><img src="img/noimage.png" width="90" height="30"><?}?>
	 </a>	
	</td>
	<td <?echo $tdcolor?>><?echo $brandsname?></td>	
   <!-- <td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemobrandsimg-<?echo $count?>" title="View Brands Image"> <?if ($brandsimg<>""){ ?><img src="../brandsimg/<? echo $brandsimg?>" width="90" height="30"><?}else{?><img src="img/noimage.png" width="90" height="30"><?}?>
	 </a>	
	</td>	
	<td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemobrandsbanner-<?echo $count?>" title="View Brands Banner"> <?if ($brandsbanner<>""){?><img src="../brandsbanner/<? echo $brandsbanner?>" width="90" height="30"><?}else{?><img src="img/nobanner.jpg" width="90" height="30"><?}?>
	 </a>	
	</td>-->
	<td <?echo $tdcolor?>><a href="<?echo $brandsurl?>" target="_blank"><?echo $brandsurl?></a></td> 
	<td <?echo $tdcolor?>>    
	<?
	if ($brandsdescmodal<>"") 
	{ 
     // Starts at the beginning of the string and ends after 30 characters 
	    $brandsdesccount=strlen(trim($brandsdescmodal));
		if($brandsdesccount < 30)
		{
			echo $brandsdescmodal;
		}
		else
		{    
			 echo$brandsdescmodalnew= substr($brandsdescmodal, 0, 20);			 
			?>
			<a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemowork-<?echo $count?>"><i class="fa fa-comments" aria-hidden="true" title="Read More ....."></i></a>
		<?}		
	?>	
	<? }
	else
	{
		echo$brandsdesc;
	}	
	?>
	</td> 
	<td <?echo $tdcolor?>><?echo $priority?></td>
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Brands Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Brands Activated"></i><? } ?></a>
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
	 <?if ($modifyicon<>"No") { ?><a href="modifybrands.php?brandsno=<?echo $brandsno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Brands"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete?')"   href="deletebrands.php?brandsno=<?echo $brandsno?>"><i class="fas fa-trash" title="Delete Brands" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <? //} ?>
	</td>	
   </tr>

<!-------------------------------- BASIC MODAL BRANDS LOGO STARTS------------------------------>
 <div id="modaldemobrandslogo-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Brands Logo : <?echo $brandsname?></h6>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     &nbsp;&nbsp;<span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($brandslogo<>""){ ?> <img src="../brandslogo/<? echo $brandslogo?>" class="img-fluid w-100"><?}else{?><img src="img/noimage.png" class="img-fluid w-100"><?}?>
      </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------------------------- BASIC MODAL BRANDS LOGO ENDS-------------------------------->
<!-------------------------------- BASIC MODAL BRANDS Image STARTS------------------------------>
 <div id="modaldemobrandsimg-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Brands Image : <?echo $brandsname?></h6>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     &nbsp;&nbsp;<span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($brandsimg<>""){ ?> <img src="../brandsimg/<? echo $brandsimg?>" class="img-fluid w-100"><?}else{?><img src="img/noimage.png" class="img-fluid w-100"><?}?>
      </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------------------------- BASIC MODAL BRANDS Image ENDS-------------------------------->
<!-------------------------------- BASIC MODAL BRANDS BANNER STARTS------------------------------>
 <div id="modaldemobrandsbanner-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Brands Banner : <?echo $brandsname?></h6>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($brandsbanner<>""){ ?> <img src="../brandsbanner/<? echo $brandsbanner?>" class="img-fluid w-100">		 <?}else{?><img src="img/nobanner.jpg" class="img-fluid w-100">		<?}	?>	
	  </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------------------------- BASIC MODAL BRANDS BANNER ENDS-------------------------------->
<!-------------------------------- BASIC MODAL BRANDS DESCRIPTION STARTS------------------------------>
 <div id="modaldemowork-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Brands Description : <?echo $brandsname?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p style="text-align:justify"><?echo $brandsdesc?></p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------------------------- BASIC MODAL BRANDS DESCRIPTION ENDS-------------------------------->
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