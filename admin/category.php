<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?include("iproductcategoryflag.php")?>
<?
$pname="category"; $pnamesub="";
$youarein1=""; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9="";$youarein9link="";
$youareinname="Category";
$mainheading="Category";
$linkheading="Category";
$subheading="";
$bodyheading="List of all Category";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="Yes";
$linkname="category";
$linknamepriority="prioritycategory";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Category";
$dropdown1="category";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$category_tcount1=$obj->totalrecords_condition_nowhere('category','*');
foreach($category_tcount1 as $category_row )
{
	$category_tcount=$category_row['count(*)'];
}
if($category_tcount<>'0')	
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
     <a title="Set Priority <?echo $linkheading?>" href="setprioritycategory.php?pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	 </a>
    <? } ?>	
    <?if ($addicon<>"No") { ?>
    <a title="Add <?echo $linkheading?>" href="addcategory.php?pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span>
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
    <th style="width:29%">Category </th>
    <?if ($subcategoryoption<>0){ ?>	
    <th style="width:12%;">Sub Category Level 1</th>
    <?}?>
	<th style="width:12%;">Products</th>
    <? if($pro_categoryimg<>0){?><th style="width:8%">Image</th><?}?>	
    <? if($pro_categorybanner<>0){?><th style="width:10%">Banner</th><?}?>
     <!--<th style="width:10%">Description </th>-->
    <th style="width:5%">Priority</th>
    <th style="width:5%">Status</th>
    <th style="width:5%">Actions</th>
   </tr>
  </thead>
  <tbody>
  <!----tbody starts---->
  <?
  $category_orderby="ORDER BY priority asc";
  $category_result=$obj->select_table_orderby("category",$category_orderby);
  $count=0;
  foreach($category_result as $category_row)
  { 
    $count++;
    $categoryno = $category_row['categoryno'];
    $categoryname = $category_row['categoryname'];
    if($categoryname=="")
     $categoryname="-";
    $categoryimg = $category_row['categoryimg'];
    $categorybanner = $category_row['categorybanner'];
    $categorydesc = $category_row['categorydesc'];
    if($categorydesc=="")
     $categorydesc="-";
    $categorydescmodal =$category_row["categorydesc"];
	if($categorydescmodal=="")
     $categorydescmodal="-";
    $priority = $category_row["priority"];
    $status = $category_row["status"];
    $addeddate =$category_row["addeddate"];
    $addeddate = date("d M Y", strtotime($addeddate));
	
     // take subcategory max count
    $subcategory_wherecondition = "categoryno =$categoryno";
    $subcategory_tcount1=$obj->totalrecords_condition('subcategory', '*', $subcategory_wherecondition);
    foreach($subcategory_tcount1 as $subcategory_row )
    {
     $subcategory_tcount = $subcategory_row['count(*)'];
    }
	
    // take productcategory max count
    $productcategory_wherecondition = "categoryno =$categoryno  and subcategoryno=0";
    $productcategory_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory_wherecondition);
    foreach($productcategory_tcount1 as $productcategory_row )
    {
     $productcategory_tcount = $productcategory_row['count(*)'];
    }
	
    include ("icalltdstatus.php");
  ?>
 <tr>
    <td <?echo $tdcolor?> ><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $categoryname?></td>
	
	<?if ($subcategoryoption<>0){ ?>
    <td <?echo $tdcolor?> class="table-action">
	<?if ($subcategory_tcount <> 0 ){?>
	 <?if ($categoryno==200 ){?>
	 <a href="subcategory.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>">
	 <i class="fas fa-layer-group iconblue fa-lg" title="View Sub Category Level 1" ></i>
	 </a> &nbsp; &nbsp;
	<?}?>
	<?}?>
	<?if ($productcategory_tcount==0 ||($subcategory_tcount<>0)){?>
	<?if ($categoryno==200 ){?>
	  <a href="addsubcategory.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>">
	  <i class="fas fa-plus-circle iconblue fa-lg" title="Add Sub Category Level 1"></i>
	  </a>
	  <?}?>
	<?}?>
	<?if ($subcategory_tcount==0){?>
	<?if ($categoryno<>200 ){?>
	  <i class="fa fa-minus" style="color:#3377B5;" aria-hidden="true" title="No Sub Category Level 1"></i>
	<?}?>
	<?}?>
	</td>
    <?}?>
	
	<td <?echo $tdcolor?> class="table-action">
	 <?if ($productcategory_tcount <> 0 ){?>
	  <a href="product.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-layer-group iconblue fa-lg" title="View Products" ></i></a> &nbsp; &nbsp; 
	 <? } ?>	
	<?if ($subcategory_tcount==0 ){?>
	  <a href="addproduct.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-plus-circle iconblue fa-lg" title="Add Products" ></i></a>
	<?} else {?>
	  <i class="fa fa-minus" style="color:#3377B5;" aria-hidden="true" title="No Products"></i>
	<?}?>
	</td>
	<? if($pro_categoryimg<>0){?>
	<td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemocategorylogo-<?echo $count?>" title="View Category Image"> <?if ($categoryimg<>""){ ?> <img src="../categoryimg/<? echo $categoryimg?>" width="40" height="37"><?}else{?><img src="img/noimage.png" width="90" height="30"><?}	?>
	 </a>	
	</td>
	<? }?>	
	<? if($pro_categorybanner<>0){?>
	<td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemocategorybanner-<?echo $count?>" title="View Category Banner"> <?if ($categorybanner<>""){ ?> <img src="../categorybanner/<? echo $categorybanner?>" width="80" height="17"><?}else{?><img src="img/nobanner.jpg" width="80" height="17"><?}?>
	 </a>	
	</td> 
	<? }?>
	 <!--<td <?echo $tdcolor?>>    
	<?if ($categorydescmodal<>"") 
	{ 
     // Starts at the beginning of the string and ends after 30 characters 
	    $categorydesccount=strlen(trim($categorydescmodal));
		if($categorydesccount < 30)
		{
			echo $categorydescmodal;
		}
		else
		{
			echo$categorydescmodalnew= substr($categorydescmodal, 0, 20);
			?>
			<a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemowork-<?echo $count?>"><i class="fa fa-comments" aria-hidden="true" title="Read More ....."></i></a>
	 <? } ?>
	<? } ?>
	</td> -->
	<td <?echo $tdcolor?>><?echo $priority?></td>
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Category Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Category Activated"></i><? } ?></a>
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
	 <?//if ($categoryno<>200 && $categoryno<>210){?>
	 <a href="modifycategory.php?categoryno=<?echo $categoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Category"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;<? //} ?>
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete? All the category of this category will be deleted')"   href="deletecategory.php?categoryno=<?echo $categoryno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-trash" title="Delete Category" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <? //} ?>
	</td>	
 </tr>

<!---------------- BASIC MODAL CATEGORY IMAGE STARTS-------------------------->
 <div id="modaldemocategorylogo-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Category Image : <?echo $categoryname?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($categoryimg<>""){ ?> <img src="../categoryimg/<? echo $categoryimg?>" class="img-fluid w-100"><?}else{?><img src="img/noimage.png" class="img-fluid w-100"><?}?>
      </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!------------------- BASIC MODAL CATEGORY IMAGE ENDS ------------------------------------>
<!---------------- BASIC MODAL CATEGORY BANNER STARTS------------------------------------------->
 <div id="modaldemocategorybanner-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Category Banner : <?echo $categoryname?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($categorybanner<>""){ ?> <img src="../categorybanner/<? echo $categorybanner?>" class="img-fluid w-100"><?}else{?><img src="img/nobanner.jpg" class="img-fluid w-100"><?}?>
      </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
 </div>
<!----------------- BASIC MODAL CATEGORY BANNER ENDS ---------------------------------------->
<!--------------------------- BASIC MODAL CATEGORY DESCRIPTION STARTS---------------------------->
<div id="modaldemowork-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Category Description : <?echo $categoryname?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p style="text-align:justify"><?echo $categorydescmodal?></p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
</div>
<!---------------- BASIC MODAL CATEGORY DESCRIPTION ENDS----------------------------------------->
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