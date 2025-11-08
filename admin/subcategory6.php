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
 $youarein6="Sub Category Level 5"; $youarein6link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;   
 $youareinname="Sub Category Level 6";
}
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";$youarein9="";$youarein9link="";
$mainheading="Sub Category Level 6 : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
$linkheading="Sub Category Level 6";
$subheading="";
$bodyheading="List of all Sub Category Level 6";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="Yes";$priorityicon="Yes";
$linkname="subcategory6";
$linknamepriority="prioritysubcategory6";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Sub Category Level 6";
$dropdown1="subcategory6";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$subcategory2_tcount1=$obj->totalrecords_condition_nowhere('subcategory6','*');
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
     <a title="Set Priority <?echo $linkheading?>" href="setprioritysubcategory6.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	 </a>
    <? } ?>	
    <?if ($addicon<>"No") { ?>
    <a title="Add <?echo $linkheading?>" href="addsubcategory6.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&pname=<?echo$pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span>
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
    <th style="width:28%;">Sub Category Level 6</th>
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
  $subcategory6_where="categoryno =$categoryno and subcategoryno =$subcategoryno and subcategory2no =$subcategory2no and subcategory3no =$subcategory3no and subcategory4no =$subcategory4no and subcategory5no =$subcategory5no";
  $subcategory6_orderby="ORDER BY subcategory6priority ASC";
  $subcategory6_result = $obj->select_all_values('subcategory6', $subcategory6_where,$subcategory6_orderby);
  foreach($subcategory6_result as $subcategory6_row){
  $count++;
   $subcategory6no =$subcategory6_row["subcategory6no"];
   $subcategory5no =$subcategory6_row["subcategory5no"];
   $subcategory4no =$subcategory6_row["subcategory4no"];
   $subcategory3no =$subcategory6_row["subcategory3no"];
   $subcategory2no =$subcategory6_row["subcategory2no"];
   $subcategoryno =$subcategory6_row["subcategoryno"];
   $subcategory6 =$subcategory6_row["subcategory6"];
   $subcategory6img =$subcategory6_row["subcategory6img"];
   $subcat6desc =$subcategory6_row["subcat6desc"];
   if($subcat6desc=="")
     $subcat6desc="-";
   $subcategory6descmodal=$subcategory6_row["subcat6desc"];
   $subcategory6priority =$subcategory6_row["subcategory6priority"];
   if($subcategory6priority==0)
     $subcategory6priority="-";
   $status =$subcategory6_row["status"];
   $productcategory_wherecondition = "subcategory6no =$subcategory6no";
   $productcategory_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory_wherecondition);
   foreach($productcategory_tcount1 as $productcategory_row ){
	$productcategory_tcount = $productcategory_row['count(*)'];
   }
   include ("icalltdstatus.php");
  ?>
   <tr>
    <td <?echo $tdcolor?>><?echo $count?></td>
	<td <?echo $tdcolor?>><?echo $subcategory6?></td>	
	<td <?echo $tdcolor?> class="table-action"><?if ($productcategory_tcount <> 0) {?><a href="product.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-layer-group iconblue fa-lg" title="View Products" ></i></a> &nbsp; &nbsp;<? } ?>
	<a href="addproduct.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-plus-circle iconblue fa-lg" title="Add Products" ></i>
	</td> 
	<td <?echo $tdcolor?>>
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemocategorylogo-<?echo $count?>" title="View Sub Category Level 5 Image"> 
	  <?if ($subcategory6img<>""){ ?> 
	   <img src="../subcategory6img/<? echo $subcategory6img?>" class="img-fluid w-100"><?} else {?><img src="img/noimage.png" class="img-fluid w-100">	
	  <?}?>
	 </a>	
	</td>	
	<td <?echo $tdcolor?>>    
	<?
	if ($subcategory6descmodal<>"") 
	{ 
     // Starts at the beginning of the string and ends after 30 characters 
	    $subcategory6desccount=strlen(trim($subcategory6descmodal));
		if($subcategory6desccount < 30)
		{
			echo $subcategory6descmodal;
		}
		else
		{    
			 echo$subcategory6descmodalnew= substr($subcategory6descmodal, 0, 20);			 
			?>
			<a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemowork-<?echo $count?>"><i class="fa fa-comments" aria-hidden="true" title="Read More ....."></i></a>
		<?}		
	?>	
	<? }
	else
	{
		echo$subcat6desc;
	}	
	?>
	</td> 
	<td <?echo $tdcolor?>><?echo $subcategory6priority?></td>
	<td <?echo $tdcolor?>>	
	 <div class="widget-messaging panel-edit ">
	  <a href="#" id="<?echo $dropdown1?>details_<?echo $count?>" data-toggle="modal"  class="panel-edit" data-target="#myModal<?echo $dropdown1?>_<?echo $count?>" style="font-size:12px"><?if ($status<> "Active") { ?><i class="fa fa-lightbulb-o fa-lg" style="color:red; font-size:20px;" title="Sub Category Level 6 Inactivated"></i><? } else { ?><i class="fa fa-lightbulb-o fa-lg"  style="color:green;  font-size:20px;" title="Sub Category Level 6 Activated"></i><? } ?></a>
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
	 <?if ($modifyicon<>"No") { ?><a href="modifysubcategory6.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Sub Category Level 6"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete? All the subcategory of this subcategory will be deleted')"   href="deletesubcategory6.php?categoryno=<?echo $categoryno?>&subcategory3no=<?echo $subcategory3no?>"><i class="fas fa-trash" title="Delete Sub Category Level 6" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <?// } ?>
	</td>	
   </tr>

<!-------------------------------- BASIC MODAL Sub Category 3Image STARTS----------------------------------------------------------------------->
 <div id="modaldemocategorylogo-<?echo $count?>" class="modal fade">
   <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: auto">
    <div class="modal-content bd-0 tx-14">
     <div class="modal-header pd-y-20 pd-x-25">
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 6 Image : <?echo $subcategory6?></h6>
     &nbsp;&nbsp;<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p align="center"> <?if ($subcategory6img<>""){ ?> <img src="../subcategory6img/<? echo $subcategory6img?>" class="img-fluid w-100"><?}else{?><img src="img/noimage.png" class="img-fluid w-100"><?}?>
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
     <h6 class="tx-14 mg-b-0 tx-uppercase  tx-bold">Sub Category Level 6 Description : <?echo $subcategory6?></h6>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body pd-25">
      <p style="text-align:justify"><?echo $subcat6desc?></p>
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