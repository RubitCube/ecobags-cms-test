<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?
if($pname=="category" && $page=="subcategory.php" || $page=="subcategory2.php" || $page=="subcategory3.php" || $page=="subcategory4.php" || $page=="subcategory5.php" || $page=="subcategory6.php" || $page=="setprioritysubcategory.php" || $page=="setprioritysubcategory2.php" || $page=="setprioritysubcategory3.php" || $page=="setprioritysubcategory4.php" || $page=="setprioritysubcategory5.php" || $page=="setprioritysubcategory6.php" || $page=="setpriorityproduct.php" || $page=="product.php" || $page=="viewproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductdetails.php" || $page=="setpriorityproductcolors.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youareinname="Sub Category Level 2";
}
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9="";$youarein9link="";
$mainheading="Sub Category Level 2 : ".$master_categoryname." - ".$master_subcategory;
$linkheading="Sub Category Level 2";
$subheading="";
$bodyheading="List of all Sub Category Level 2";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="Yes";
$linkname="subcategory2";
$linknamepriority="prioritysubcategory2";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Sub Category Level 2";
$dropdown1="subcategory2";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$subcategory2_tcount1=$obj->totalrecords_condition_nowhere('subcategory2','*');
foreach($subcategory2_tcount1 as $subcategory2_row ){
 $subcategory2_tcount=$subcategory2_row['count(*)'];
}
if($subcategory2_tcount<>'0'){ 
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
     <a title="Set Priority <?echo $linkheading?>" href="setprioritysubcategory2.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	 </a>
    <? } ?>	
    <?if ($addicon<>"No") { ?>
    <a title="Add <?echo $linkheading?>" href="addsubcategory2.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span>
	</a>
    <?}?>	
   </div>	  
  </div>
 </div>
 <!---Menu sets ends---->
 <table id="datatable1" class="table display table-responsive nowrap">
  <thead>
   <tr>
	<th style="width:4%;">#</th>			
	<?if ($subcategoryoption3<>0){ ?>
    <th style="width:28%;">Sub Category Level 2</th>
    <th style="width:8%;">Sub Category Level 3</th>
	<? } else { ?>	
    <th style="width:28%;">Sub Category Level 2</th>
	<? } ?>
    <th style="width:8%;">Products</th>
	<th style="width:8%;">Image</th>	
	<th style="width:15%;">Description</th>
	<th style="width:5%">Priority</th>
	<th style="width:5%">Status</th>
	<th style="width:5%">Actions</th>
   </tr>
  </thead>
  <tbody>
   <!----tbody starts---->
  <?
  $count = 0;
  $subcategory2_where="categoryno =$categoryno and subcategoryno =$subcategoryno";
  $subcategory2_orderby="ORDER BY subcategory2priority ASC";
  $subcategory2_result = $obj->select_all_values('subcategory2', $subcategory2_where,$subcategory2_orderby);
  foreach($subcategory2_result as $subcategory2_row){
   $count++;
   $subcategory2no =$subcategory2_row["subcategory2no"];
   $subcategoryno =$subcategory2_row["subcategoryno"];
   $subcategory2 =$subcategory2_row["subcategory2"];
   $subcategory2img =$subcategory2_row["subcategory2img"];
   $subcat2desc =$subcategory2_row["subcat2desc"];
   if($subcat2desc=="")
     $subcat2desc="-";
   $subcategory2descmodal=$subcategory2_row["subcat2desc"];
   $subcategory2priority =$subcategory2_row["subcategory2priority"];
   if($subcategory2priority==0)
     $subcategory2priority="-";
   $status =$subcategory2_row["status"];

   $subcategory3_wherecondition = "subcategory2no =$subcategory2no and categoryno =$categoryno";
   $subcategory3_tcount1=$obj->totalrecords_condition('subcategory3', '*', $subcategory3_wherecondition);
   foreach($subcategory3_tcount1 as $subcategory3_row ){
    $subcategory3_tcount = $subcategory3_row['count(*)'];
   }

   $productcategory_wherecondition = "subcategory2no =$subcategory2no and subcategory3no =0";
   $productcategory_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory_wherecondition);
   foreach($productcategory_tcount1 as $productcategory_row ){
    $productcategory_tcount = $productcategory_row['count(*)'];
   }
  
   include ("icalltdstatus.php");
  ?>
   <tr>
    <td <?echo $tdcolor?>><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $subcategory2?></td>
    <?if ($subcategoryoption3<>0){ ?>
	<td <?echo $tdcolor?> class="table-action">
	 <?if ($subcategory3_tcount <> 0 ){?>
	  <a href="subcategory3.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-layer-group iconblue fa-lg" title="View Sub Category Level 3" ></i></a> &nbsp; &nbsp; <? } ?>
	 <?if ($productcategory_tcount==0||($subcategory3_tcount<>0)){?>
	  <a href="addsubcategory3.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-plus-circle iconblue fa-lg" title="Add Sub Category Level 3"></i></a><? } else {?>
	  <a  href="#"><i title="No Products" class="fa fa-minus " style="color:#3377B5;" aria-hidden="true"></i></a>
	 <? } ?>
	</td>  
	<?}?>
	<td <?echo $tdcolor?> class="table-action"><?if (($productcategory_tcount <> 0 )&&($subcategory3_tcount==0)){?><a href="product.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-layer-group iconblue fa-lg" title="View Products" ></i></a> &nbsp; &nbsp; <? } ?>		
	 <?if ($subcategory3_tcount==0 ){?>
	  <a href="addproduct.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-plus-circle iconblue fa-lg" title="Add Products" ></i>
	 <?} else {?><i class="fa fa-minus" style="color:#3377B5;" aria-hidden="true" title="No Products"></i><?}?>
	</td> 
	<td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemocategorylogo-<?echo $count?>" title="View Sub Category Level 2 Image"> 
	  <?if ($subcategory2img<>""){ ?> 
	   <img src="../subcategory2img/<? echo $subcategory2img?>" class="img-fluid w-100"><?} else {?><img src="img/noimage.png" class="img-fluid w-100">	
	  <?}?>
	 </a>	
	</td>	
    <td <?echo $tdcolor?>>    
	<?
	if ($subcategory2descmodal<>"") 
	{ 
     // Starts at the beginning of the string and ends after 30 characters 
	    $subcategory2desccount=strlen(trim($subcategory2descmodal));
		if($subcategory2desccount < 30)
		{
			echo $subcategory2descmodal;
		}
		else
		{    
			 echo$subcategory2descmodalnew= substr($subcategory2descmodal, 0, 20);			 
			?>
			<a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemowork-<?echo $count?>"><i class="fa fa-comments" aria-hidden="true" title="Read More ....."></i></a>
		<?}		
	?>	
	<? }
	else
	{
		echo$subcat2desc;
	}	
	?>
	</td> 
	<td <?echo $tdcolor?>><?echo $subcategory2priority?></td>
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Sub Category Level 2 Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Sub Category Level 2 Activated"></i><? } ?></a>
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
	 <?if ($modifyicon<>"No") { ?><a href="modifysubcategory2.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Sub Category Level 2"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete? All the subcategory of this subcategory will be deleted')"   href="deletesubcategory2.php?categoryno=<?echo $categoryno?>&subcategory2no=<?echo $subcategory2no?>"><i class="fas fa-trash" title="Delete Sub Category Level 2" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <?// } ?>
	</td>	
   </tr>

<!-------------------------------- BASIC MODAL Sub Category 2 Image STARTS----------------------------------------------------------------------->
 <div id="modaldemocategorylogo-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 2 Image : <?echo $subcategory2?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($subcategory2img<>""){ ?> <img src="../subcategory2img/<? echo $subcategory2img?>" class="img-fluid w-100"><?}else{?><img src="img/noimage.png" class="img-fluid w-100"><?}?>
      </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------------------------- BASIC MODAL Sub Category 2 Image ENDS ------------------------------------------------------------------------->
<!-------------------------------- BASIC MODAL Sub Category 2 DESCRIPTION STARTS---------------------------------------------------------------->
 <div id="modaldemowork-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 2 Description : <?echo $subcategory2?></h6>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p style="text-align:justify"><?echo $subcat2desc?></p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------------------------- BASIC MODAL Sub Category 2 DESCRIPTION ENDS------------------------------------------------------------------------>
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