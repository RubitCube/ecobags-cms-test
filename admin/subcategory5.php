<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?
if($pname=="category" && $page=="category.php" || $page=="subcategory.php" || $page=="subcategory2.php" || $page=="subcategory3.php" || $page=="subcategory4.php" || $page=="subcategory5.php" || $page=="subcategory6.php" || $page=="setprioritysubcategory4.php" || $page=="setprioritysubcategory5.php" || $page=="setprioritysubcategory6.php" || $page=="setpriorityproduct.php" || $page=="product.php" || $page=="viewproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductdetails.php" || $page=="setpriorityproductcolors.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no;
 $youareinname="Sub Category Level 5";
}
$youarein6=""; $youarein6link="";$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";$youarein9="";$youarein9link="";

$mainheading="Sub Category Level 5 : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
$linkheading="Sub Category Level 5";
$subheading="";
$bodyheading="List of all Sub Category Level 5";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="Yes";
$linkname="subcategory5";
$linknamepriority="prioritysubcategory5";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Sub Category Level 5";
$dropdown1="subcategory5";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$subcategory2_tcount1=$obj->totalrecords_condition_nowhere('subcategory5','*');
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
     <a title="Set Priority <?echo $linkheading?>" href="setprioritysubcategory5.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	 </a>
    <? } ?>	
    <?if ($addicon<>"No") { ?>
    <a title="Add <?echo $linkheading?>" href="addsubcategory5.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span>
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
	<?if ($subcategoryoption6<>0){ ?>
    <th style="width:28%;">Sub Category Level 5</th>
    <th style="width:8%;">Sub Category Level 6</th>
	<? } else { ?>	
    <th style="width:28%;">Sub Category Level 5</th>
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
  $subcategory5_where="categoryno =$categoryno and subcategoryno =$subcategoryno and subcategory2no =$subcategory2no and subcategory3no =$subcategory3no and subcategory4no =$subcategory4no";
  $subcategory5_orderby="ORDER BY subcategory5priority ASC";
  $subcategory5_result = $obj->select_all_values('subcategory5', $subcategory5_where,$subcategory5_orderby);
  foreach($subcategory5_result as $subcategory5_row){
   $count++;
   $subcategory5no =$subcategory5_row["subcategory5no"];
   $subcategoryno =$subcategory5_row["subcategoryno"];
   $subcategory5 =$subcategory5_row["subcategory5"];
   $subcategory5img =$subcategory5_row["subcategory5img"];
   $subcat5desc =$subcategory5_row["subcat5desc"];
   if($subcat5desc=="")
     $subcat5desc="-";
   $subcategory5descmodal=$subcategory5_row["subcat5desc"];
   $subcategory5priority =$subcategory5_row["subcategory5priority"];
   if($subcategory5priority==0)
     $subcategory5priority="-";
   $status =$subcategory5_row["status"];

   $subcategory6_wherecondition = "subcategory5no =$subcategory5no";
   $subcategory6_tcount1=$obj->totalrecords_condition('subcategory6', '*', $subcategory6_wherecondition);
   foreach($subcategory6_tcount1 as $subcategory6_row ){
    $subcategory6_tcount = $subcategory6_row['count(*)'];
   }
   $productcategory_wherecondition = "subcategory5no =$subcategory5no";
   $productcategory_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory_wherecondition);
   foreach($productcategory_tcount1 as $productcategory_row ){
    $productcategory_tcount = $productcategory_row['count(*)'];
   } 
   include ("icalltdstatus.php");
  ?>
   <tr>
    <td <?echo $tdcolor?>><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $subcategory5?></td>
    <?if ($subcategoryoption6<>0){ ?>
	<td <?echo $tdcolor?> class="table-action">
	 <?if ($subcategory6_tcount <> 0 ){?>
	  <a href="subcategory6.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-layer-group iconblue fa-lg" title="View Sub Category Level 6" ></i></a> &nbsp; &nbsp; <? } ?>
	 <?if ($productcategory_tcount==0||($subcategory6_tcount<>0)){?>
	  <a href="addsubcategory6.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-plus-circle iconblue fa-lg" title="Add Sub Category Level 6"></i></a><? } else {?>
	  <a  href="#"><i title="No Products" class="fa fa-minus " style="color:#3377B5;" aria-hidden="true"></i></a>
	 <? } ?>
	</td>  
	<?}?>
	<td <?echo $tdcolor?> class="table-action"><?if (($productcategory_tcount <> 0 )&&($subcategory6_tcount==0)){?><a href="product.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fas fa-layer-group iconblue fa-lg" title="View Products" ></i></a> &nbsp; &nbsp; <? } ?>		
	 <?if ($subcategory6_tcount==0 ){?>
	  <a href="addproduct.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-plus-circle iconblue fa-lg" title="Add Products" ></i>
	 <?} else {?><i class="fa fa-minus" style="color:#3377B5;" aria-hidden="true" title="No Products"></i><?}?>
	</td> 
	<td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemocategorylogo-<?echo $count?>" title="View Sub Category Level 5 Image"> 
	  <?if ($subcategory5img<>""){ ?> 
	   <img src="../subcategory5img/<? echo $subcategory5img?>" class="img-fluid w-100"><?} else {?><img src="img/noimage.png" class="img-fluid w-100">	
	  <?}?>
	 </a>	
	</td>	
	<td <?echo $tdcolor?>>    
	<?
	if ($subcategory5descmodal<>"") 
	{ 
     // Starts at the beginning of the string and ends after 30 characters 
	    $subcategory5desccount=strlen(trim($subcategory5descmodal));
		if($subcategory5desccount < 30)
		{
			echo $subcategory5descmodal;
		}
		else
		{    
			 echo$subcategory5descmodalnew= substr($subcategory5descmodal, 0, 20);			 
			?>
			<a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemowork-<?echo $count?>"><i class="fa fa-comments" aria-hidden="true" title="Read More ....."></i></a>
		<?}		
	?>	
	<? }
	else
	{
		echo$subcat5desc;
	}	
	?>
	</td> 
	<td <?echo $tdcolor?>><?echo $subcategory5priority?></td>
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Sub Category Level 5 Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Sub Category Level 5 Activated"></i><? } ?></a>
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
	 <?if ($modifyicon<>"No") { ?><a href="modifysubcategory5.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Sub Category Level 5"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete? All the subcategory of this subcategory will be deleted')"   href="deletesubcategory3.php?categoryno=<?echo $categoryno?>&subcategory3no=<?echo $subcategory3no?>"><i class="fas fa-trash" title="Delete Sub Category Level 5" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <? //} ?>
	</td>	
   </tr>

<!-------------------------------- BASIC MODAL Sub Category 3Image STARTS----------------------------------------------------------------------->
 <div id="modaldemocategorylogo-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 5 Image : <?echo $subcategory5?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($subcategory5img<>""){ ?> <img src="../subcategory5img/<? echo $subcategory5img?>" class="img-fluid w-100"><?}else{?><img src="img/noimage.png" class="img-fluid w-100"><?}?>
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
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 5 Description : <?echo $subcategory5?></h6>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p style="text-align:justify"><?echo $subcat5desc?></p>
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