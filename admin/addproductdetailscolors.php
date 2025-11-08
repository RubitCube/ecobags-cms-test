<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?
 $productno=$_REQUEST["productno"];
 $product_where="productno =$productno";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $productno = $product_row["productno"];
  $pname1 = $product_row["pname"];
  $brandsno = $product_row["brandsno"];
  $pstatus = $product_row["pstatus"];  
 }
?>
<?
if($categoryno<>0){ 
if($pname=="category" && $page=="category.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="product.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein3="View Product Details "; $youarein3link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";$youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Assign Product Colors to Storage Space : ".$master_categoryname;
 }
}
if($categoryno<>0 && $subcategoryno<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory2.php" || $page=="subcategory3.php" || $page=="subcategory4.php" || $page=="subcategory5.php" || $page=="subcategory6.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){
  $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein3="Product"; $youarein3link="product.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein4="View Product Details"; $youarein4link="viewproduct.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein5=""; $youarein5link=""; $youarein6=""; $youarein6link=""; $youarein7=""; $youarein7link="";$youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Assign Product Colors to Storage Space : ".$master_categoryname." - ".$master_subcategory;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" ||  $page=="subcategory2.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1 "; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Assign Product Colors to Storage Space  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2;
}
}
if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory3.php" ||  $page=="subcategory2.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Product"; $youarein5link="product.php?productno=".$productno."&categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; ;
 $youarein6="View Product Details"; $youarein6link="viewproduct.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Assign Product Colors to Storage Space  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory3.php" ||  $page=="subcategory2.php"  ||  $page=="subcategory4.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&subcategory3no=".$subcategory3no; 
 $youarein6="Product"; $youarein6link="product.php?productno=".$productno."&categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no; 
 $youarein7="View Product Details"; $youarein7link="viewproduct.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Assign Product Colors to Storage Space  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0 && $subcategory5no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory3.php" ||  $page=="subcategory2.php" ||  $page=="subcategory4.php"  ||  $page=="subcategory5.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
	 $pname="category"; $pnamesub="";
	 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
	 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
	 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&page=".$page."&pname=".$pname;
	 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
	  $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&subcategory3no=".$subcategory3no;
	  $youarein6="Sub Category Level 5"; $youarein6link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no; 
      $youarein7="Product"; $youarein7link="product.php?productno=".$productno."&categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no; 
	  $youarein8="View Product Details"; $youarein8link="viewproduct.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&subcategory5no=".$subcategory5no."&productno=".$productno."&page=".$page."&pname=".$pname;
	  $youarein9=""; $youarein9link="";
	  $mainheading="Assign Product Colors to Storage Space : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0 && $subcategory5no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory3.php" ||  $page=="subcategory2.php" ||  $page=="subcategory4.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
	 $pname="category"; $pnamesub="";
	 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
	 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
	 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&page=".$page."&pname=".$pname;
	 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
	  $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&subcategory3no=".$subcategory3no;
	 $youarein6="Sub Category Level 5"; $youarein6link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no; 
     $youarein7="Product"; $youarein7link="product.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&page=".$page."&pname=".$pname."&subcategory4no=".$subcategory4no."&subcategory5no=".$subcategory5no;
     $youarein8="View Product Details"; $youarein8link="viewproduct.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&subcategory5no=".$subcategory5no."&productno=".$productno."&page=".$page."&pname=".$pname;
	 $youarein9=""; $youarein9link="";
	  $mainheading="Assign Product Colors to Storage Space  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
}
}
//###############for #############

$youareinname="Assign Product Colors to Storage Space : ".$pname1;
$linkheading="Assign Product Colors to Storage Space :";
$subheading="";
$bodyheading="List of all Product";
$mainheadingdesc="";
$linknamepriority="priorityproductphotos";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";$priorityicon="Yes";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});
</script>

<form id="basicForm" method="post" action="saveproductdetailscolors.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off">
 <input type="hidden" name="productno" value="<?echo $productno?>">
 <input type="hidden" name="brandsno" value="<?echo $brandsno?>">
 <input type="hidden" name="categoryno" value="<?echo $categoryno?>">
 <input type="hidden" name="subcategoryno" value="<?echo $subcategoryno?>">
 <input type="hidden" name="subcategory2no" value="<?echo $subcategory2no?>">
 <input type="hidden" name="subcategory3no" value="<?echo $subcategory3no?>">
 <input type="hidden" name="subcategory4no" value="<?echo $subcategory4no?>">
 <input type="hidden" name="subcategory5no" value="<?echo $subcategory5no?>">
 <input type="hidden" name="subcategory6no" value="<?echo $subcategory6no?>">
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
<!--------------------------------proerty Colors entry-------------------------------->
<div class="row row-sm mg-t-20">
<div class="col-12" >
<div class="card bd-0 shadow-base pd-30 ">
<div class="d-flex align-items-center justify-content-between mg-b-30">
<div>
<h6 class="tx-gray-800 mg-b-5">Assign Product Colors to Storage Space </h6>
<p class="mg-b-0">Please provide the Product Colors...</p>
</div>
</div>
<hr>
	<!----form layout--->
<div class="col-lg-12" style="background-color:" >
	 <label class="form-control-label">Product Colors  &nbsp;<span class="tx-danger">*</span></label>
</div>	
<?
$i=0;
 $productdetails_where="productno =$productno";
 $productdetails_result = $obj->select_all_values('productdetails', $productdetails_where,'');
 foreach($productdetails_result as $productdetails_row){
	 $i++;
  $productdetailsno = $productdetails_row["productdetailsno"];
  $productcodesuffix = $productdetails_row["productcodesuffix"];
  $productcode = $productdetails_row["productcode"];
  $pcode = $productdetails_row["pcode"];
  $itemsize = $productdetails_row["itemsize"];
  $itemweight = $productdetails_row["itemweight"];
  $packingsize = $productdetails_row["packingsize"];
  $countryoforigin = $productdetails_row["countryoforigin"];
  $stock = $productdetails_row["stock"];
  $specialoffer  = $productdetails_row["specialoffer"];
  $newarrivals = $productdetails_row["newarrivals"];
  $hotdeals = $productdetails_row["hotdeals"];
  $featuredproduct = $productdetails_row["featuredproduct"];
  $bestseller = $productdetails_row["bestseller"];
  $storagespace = $productdetails_row["storagespace"];
  $status = $productdetails_row["status"];
 ?>
	<div class="row mg-t-20">
	 <div class="col-4">
	   <label class="col-sm-4 form-control-label control-label" style="text-align:left" ><?echo $i?>  <?if($storagespace<>""){echo"-". $storagespace;}?></label>	  
	 </div>
	<div class="col-lg-8">
    <div class="row px-0 mx-0  p-0" >	
	<?
	$orderby="where productno =$productno  ORDER BY priority ASC";
	$result=$obj->select_table_orderby("productcolors",$orderby);
	$productcolorscount=0;
	foreach($result as $row){ 
	$productcolorscount++;
	$productcolorsno =$row["productcolorsno"];
	$colorname =$row["colorname"];
   ?>     
	<div class="col-lg-3 py-3">	
	<label for="productcolorsno<?echo $productcolorsno?><?echo $productdetailsno?>">
	<input type="checkbox" class="lg-6" name="productcolorsno<?echo $productcolorsno?><?echo $productdetailsno?>" id="productcolorsno<?echo $productcolorsno?><?echo $productdetailsno?>" value="<?echo $productcolorsno?>">
	<span>&nbsp;&nbsp;<?echo $colorname?></span>
	</label>
	 <input type="hidden" name="productcolorsno<?echo $productcolorscount?>" class="form-control" value="<?echo $productcolorsno?>">   
	 <input type="hidden" name="productdetailsno<?echo $i?>" class="form-control" value="<?echo $productdetailsno?>">   
	</div>
	<?}?>	  	
    </div>
    </div> 
	</div>	
    <div class="col-12 mt-5"></div>
  <?}?>
    <input type="hidden" name="productdetailscount" class="form-control" value="<?echo $i?>">  
	<input type="hidden" name="productcolorscount" class="form-control" value="<?echo $productcolorscount?>">  
	<!------->
	</div>
	</div>
	</div>
	<br>
<!--------------------------------proerty Colors entry-------------------------------->

   <div class="form-layout-footer">
	<button class="btn btn-info" id="checkBtn" >Submit Form</button>
	</div>
   </form>
	
<?include ("ibottomdashboard.php")?>
