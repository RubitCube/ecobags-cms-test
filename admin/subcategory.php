<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?
if($pname=="category" && $page=="category.php" || $page=="subcategory.php"  || $page=="subcategory2.php" || $page=="subcategory3.php" || $page=="subcategory4.php" || $page=="subcategory5.php" || $page=="subcategory6.php" || $page=="setprioritysubcategory.php" || $page=="setprioritysubcategory2.php" || $page=="setprioritysubcategory3.php" || $page=="setprioritysubcategory4.php" || $page=="setprioritysubcategory5.php" || $page=="setprioritysubcategory6.php" || $page=="setpriorityproduct.php" || $page=="product.php" || $page=="viewproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductdetails.php" || $page=="setpriorityproductcolors.php"){
$pname="category"; $pnamesub="";
$youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
}	
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";$youarein9="";$youarein9link="";
$youareinname="Sub Category Level 1";	
$mainheading="Sub Category Level 1: ".$master_categoryname;
$linkheading="Sub Category Level 1";
$subheading="";
$bodyheading="List of all Sub Category Level 1";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="Yes";
$linkname="subcategory";
$linknamepriority="prioritysubcategory";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Sub Category";
$dropdown1="subcategory";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<!--####Take status for display under category and subcategory inactive mode--> 
<?
$category_sql2 = "SELECT * FROM category where categoryno=$categoryno and status='Active'";
$category_countresult=$obj->execute($category_sql2);
$categoryactiverow_count = $category_countresult->rowCount();
?>

<!--####Take status for display under category and subcategory inactive mode--> 
<?
$subcategory_tcount1=$obj->totalrecords_condition_nowhere('subcategory','*');
foreach($subcategory_tcount1 as $subcategory_row ){
$subcategory_tcount=$subcategory_row['count(*)'];
}
if($subcategory_tcount<>'0')	
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
     <a title="Set Priority <?echo $linkheading?>" href="setprioritysubcategory.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	 </a>
    <? } ?>	
    <?if ($addicon<>"No") { ?>
    <a title="Add <?echo $linkheading?>" href="addsubcategory.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span>
	</a>
    <?}?>	
   </div>	  
  </div>
 </div>
 <!---Menu sets ends---->
 <table id="datatable1" class="table display table-responsive nowrap">
  <thead>
   <tr>
    <th style="width:2%">#</th>	
	<?if ($subcategoryoption2<>0){ ?>
    <th style="width:29%;">Sub Category Level 1</th>
    <th style="width:12%;">Sub Category Level 2</th>
	<? } else { ?>	
    <th style="width:29%;">Sub Category Level 1</th>
	<? } ?>
	<th style="width:6%;">Products</th>
	<? if($pro_categoryimg<>0){?><th style="width:8%;">Image</th><? }?>	
	<th style="width:8%;">Banner</th>
	<th style="width:5%">Priority</th>
	<th style="width:5%">Status</th>
	<th style="width:5%">Actions</th>
   </tr>
  </thead>
  <tbody>
   <!----tbody starts---->
  <?
  $where="categoryno=$categoryno";
  $orderby="ORDER BY subcategorypriority ASC";
  $result=$obj->select_all_values("subcategory",$where,$orderby);
  $count=0;
  foreach($result as $row)
  { 
   $count++;
   $subcategoryno =$row["subcategoryno"];
   $categoryno = $row['categoryno'];
   $subcategory =$row["subcategory"];
   $subcategorybanner =$row["subcategorybanner"];
   $subcategoryimg =$row["subcategoryimg"];
   $subcatdesc =$row["subcatdesc"];
   if($subcatdesc=="")
     $subcatdesc="-";
   $subcategorydescmodal=$row["subcatdesc"];
   $subcategorypriority =$row["subcategorypriority"];
   if($subcategorypriority==0)
     $subcategorypriority="-";
   $status =$row["status"];
  
 $subcategory2_wherecondition = "subcategoryno =$subcategoryno and categoryno =$categoryno ";
  $subcategory2_tcount1=$obj->totalrecords_condition('subcategory2', '*', $subcategory2_wherecondition);
  foreach($subcategory2_tcount1 as $subcategory2_row ){
    $subcategory2_tcount = $subcategory2_row['count(*)'];
  }
  
  $productcategory_wherecondition = "subcategoryno =$subcategoryno and categoryno =$categoryno ";
  $productcategory_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory_wherecondition);
  foreach($productcategory_tcount1 as $productcategory_row ){
   $productcategory_tcount = $productcategory_row['count(*)'];
  }
  $productcategory1_wherecondition = "subcategoryno =$subcategoryno and categoryno =$categoryno and  subcategory2no =0  and subcategory3no =0";
  $productcategory1_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory1_wherecondition);
  foreach($productcategory1_tcount1 as $productcategory1_row ){
   $productcategory1_tcount = $productcategory1_row['count(*)'];
  }
   include ("icalltdstatus.php");
  ?>
   <tr <? if($categoryactiverow_count==0){?>style="background-color:#f2dede"<?}?>>
    <td <?echo $tdcolor?> <? if($categoryactiverow_count==0){?>style="background-color:#f2dede"<?}?>><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $subcategory?></td>
	<?if ($subcategoryoption2<>0){ ?>
    <td <?echo $tdcolor?> class="table-action">
	<?if ($subcategory2_tcount <> 0 ){?>
	<a href="subcategory2.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>">
	<i class="fas fa-layer-group iconblue fa-lg" title="View Sub Category Level 2" ></i>
	</a> &nbsp; &nbsp;
	<?}?>
	<?if ($productcategory_tcount==0||($subcategory2_tcount<>0)){?>
	<a href="addsubcategory2.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>">
	<i class="fas fa-plus-circle iconblue fa-lg" title="Add Sub Category Level 2" ></i>
	</a>
	<? } 
	else {?>
	<i class="fa fa-minus" style="color:#3377B5;" aria-hidden="true" title="No Sub Category Level 2"></i>
	<?}?>
	</td>
    <?}?>
	<td <?echo $tdcolor?> class="table-action">
	 <?if ($productcategory1_tcount <> 0 ){?>
	  <a href="product.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-layer-group iconblue fa-lg" title="View Products" ></i></a> &nbsp; &nbsp; 
	 <? } ?>	
	<?if ($subcategory2_tcount==0 ){?>
	  <a href="addproduct.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-plus-circle iconblue fa-lg" title="Add Products" ></i>
	<?} else {?>
	<i class="fa fa-minus" style="color:#3377B5;" aria-hidden="true" title="No Products"></i>
	<?}?>
	</td>
	<? if($pro_categoryimg<>0){?><td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemocategorylogo-<?echo $count?>" title="View Sub Category Level 1 Image"> 
	 <?if ($subcategoryimg<>""){ ?> 
	 <img src="../subcategoryimg/<? echo $subcategoryimg?>" width="40" height="37"><?} else {?><img src="img/noimage.png" width="40" height="37">	
	 <?}?>
	 </a>	
	</td>
    <?}?>	
	<td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemosubcategorybanner-<?echo $count?>" title="View SubCategory Banner"> <?if ($subcategorybanner<>""){ ?> <img src="../subcategorybanner/<? echo $subcategorybanner?>" width="80" height="17"><?}else{?><img src="img/nobanner.jpg" width="80" height="17"><?}?>
	 </a>	
	</td> 
<!--<td <?echo $tdcolor?>>    
	<?
	if ($subcategorydescmodal<>"") 
	{ 
     // Starts at the beginning of the string and ends after 30 characters 
	    $subcategorydesccount=strlen(trim($subcategorydescmodal));
		if($subcategorydesccount < 30)
		{
			//echo $subcategorydescmodal;
		}
		else
		{    
			 //echo$subcategorydescmodalnew= substr($subcategorydescmodal, 0, 20);			 
			?>
			<a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemowork-<?echo $count?>"><i class="fa fa-comments" aria-hidden="true" title="Read More ....."></i></a>
		<?}		
	?>	
	<? }
	else
	{
		//echo$subcatdesc;
	}	
	?>
	</td> -->
	<td <?echo $tdcolor?>><?echo $subcategorypriority?></td>
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Sub Category Level 1 Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Sub Category Level 1 Activated"></i><? } ?></a>
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
	 <?if ($modifyicon<>"No") { ?><a href="modifysubcategory.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Sub Category Level 1"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete? All the subcategory of this subcategory will be deleted')"   href="deletesubcategory.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-trash" title="Delete Sub Category Level 1" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <?// } ?>
	</td>	
   </tr>

<!------------------- BASIC MODAL Sub Category Image STARTS-------------------------->
 <div id="modaldemocategorylogo-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 1 Image : <?echo $subcategory?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($subcategoryimg<>""){ ?> <img src="../subcategoryimg/<? echo $subcategoryimg?>" class="img-fluid w-100"><?}else{?><img src="img/noimage.png" class="img-fluid w-100"><?}?>
      </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------- BASIC MODAL Sub Category Image ENDS ------------------------------>

<!------------------- BASIC MODAL Sub Category banner STARTS-------------------------->
 <div id="modaldemosubcategorybanner-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 1 Banner : <?echo $subcategory?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($subcategorybanner<>""){ ?> <img src="../subcategorybanner/<? echo $subcategorybanner?>" class="img-fluid w-100"><?}else{?><img src="img/noimage.png" class="img-fluid w-100"><?}?>
      </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------- BASIC MODAL Sub Category banner ENDS ------------------------------>

<!-------------------------------- BASIC MODAL Sub Category DESCRIPTION STARTS---------------------------------------------------------------->
 <div id="modaldemowork-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 1 Description : <?echo $subcategory?></h6>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p style="text-align:justify"><?echo $subcategorydescmodal?></p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!-------------------------------- BASIC MODAL Sub Category DESCRIPTION ENDS------------------------------------------------------------------------>
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