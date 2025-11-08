<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?
 $productno = $_REQUEST["productno"];
 $product_where="productno =$productno";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $productno = $product_row["productno"];
  $pname1 = $product_row["pname"];
  $obrandsno = $product_row["brandsno"];
  $pstatus = $product_row["pstatus"];  
 }
 
if($brandsno<>0){
if($pname=="sortbrandwise"){
if($pname=="sortbrandwise" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){
 $pname="sortbrandwise"; $pnamesub="";
 $youarein1="Brand Wise"; $youarein1link="sortbrandwise.php?brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="sortbrandwiseproductlist.php?brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="View Product Details "; $youarein3link="viewproduct.php?brandsno=".$brandsno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";
 $youarein9="";$youarein9link="";
 $mainheading="Add Product Details : ".$master_brandsname; 
 }
 }
}
if($categoryno<>0){
if($pname=="category"){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="View Product Details "; $youarein3link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";$youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Add Product Details : ".$master_categoryname;
 }
}
if($pname=="sortcategorywise"){
 if($pname=="sortcategorywise" && $page=="viewproduct.php"){
 $pname="sortcategorywise"; $pnamesub="";
 $youarein1="Category Wise"; $youarein1link="sortcategorywise.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="sortcategorywiseproductlist.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="View Product Details "; $youarein3link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";
 $youarein6=""; $youarein6link=""; 
 $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";
 $youarein9="";$youarein9link="";
 $mainheading="Add Product Details : ".$master_categoryname; 
 }
}
}
//for sub and category
if($categoryno<>0 && $subcategoryno<>0){
if($pname=="category" && $page=="product.php" || $page=="subcategory.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Product"; $youarein3link="product.php?productno=".$productno."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; ;
 $youarein4="View Product Details"; $youarein4link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&productno=".$productno."&page=".$page."&pname=".$pname;$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
  $mainheading="Add Product Details : ".$master_categoryname." - ".$master_subcategory;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0){
if($pname=="category" && $page=="product.php" || $page=="subcategory.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
	$pname="category"; $pnamesub="";
    $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
    $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
    $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
    $youarein4="Product"; $youarein4link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname;
	$youarein5="View Product Details"; $youarein5link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&productno=".$productno."&page=".$page."&pname=".$pname;
	$youarein6=""; $youarein6link=""; $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link=""; 
	$youarein9=""; $youarein9link="";
	$mainheading="Add Product Details : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2;
 }
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory3.php" ||  $page=="subcategory2.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Product"; $youarein5link="product.php?productno=".$productno."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; ;
 $youarein6="View Product Details"; $youarein6link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Add Product Details  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory3.php" ||  $page=="subcategory2.php" ||  $page=="subcategory4.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
	 $pname="category"; $pnamesub="";
	 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
	  $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no;
	  $youarein6="Product"; $youarein6link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&page=".$page."&pname=".$pname."&subcategory4no=".$subcategory4no;
	  $youarein7="View Product Details"; $youarein7link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&productno=".$productno."&page=".$page."&pname=".$pname;
	  $youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
	  $mainheading="Add Product Details  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0 && $subcategory5no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory3.php" ||  $page=="subcategory2.php" ||  $page=="subcategory4.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
	 $pname="category"; $pnamesub="";
	 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
	  $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no;
	 $youarein6="Sub Category Level 5"; $youarein6link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no; 
     $youarein7="Product"; $youarein7link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&page=".$page."&pname=".$pname."&subcategory4no=".$subcategory4no."&subcategory5no=".$subcategory5no;
     $youarein8="View Product Details"; $youarein8link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&subcategory5no=".$subcategory5no."&productno=".$productno."&page=".$page."&pname=".$pname;
	 $youarein9=""; $youarein9link="";
	  $mainheading="Add Product Details  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
}
}
$youareinname="Add Product Details : ".$pname1;
$linkheading="Add Product Details :";
$linkheading="Add Product Details";
$subheading="";
$bodyheading="List of all Product Details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<form id="basicForm" method="post" action="saveproductdetails.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
 <input type="hidden" name="brandsno" value="<?echo $brandsno?>">
 <input type="hidden" name="categoryno" value="<?echo $categoryno?>">
 <input type="hidden" name="subcategoryno" value="<?echo $subcategoryno?>">
 <input type="hidden" name="subcategory2no" value="<?echo $subcategory2no?>">
 <input type="hidden" name="subcategory3no" value="<?echo $subcategory3no?>">
 <input type="hidden" name="subcategory4no" value="<?echo $subcategory4no?>">
 <input type="hidden" name="subcategory5no" value="<?echo $subcategory5no?>">
 <input type="hidden" name="subcategory6no" value="<?echo $subcategory6no?>">
 <input type="hidden" name="pagename" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
 <input type="hidden" name="productno" class="form-control" value="<?echo $productno?>"> 	

<!--***************************************MULTIPLE PRODUCT DETAILS ENDS************************************************-->
<? if ($pro_productmultiple<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Details</h6>
	 <p class="mg-b-0">Please Provide the Products Details to be Displayed...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25"> 
     <? for($j=1;$j<=4;$j++) { ?>
	 <div class="col-xl-6 mg-t-20 mg-xl-t-0 pt-4">
	  <div class="form-layout form-layout-5" style="padding:0px 19px 19px; ">
	   <? if (($pro_productcode<>0) and ($pro_productcodeauto<>1)){ ?>
	    <?if ($pro_productcodename<>"") { 
	       $productcodename = $pro_productcodename;
	      } else {
		     $productcodename = "Product Code";
	        }?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" ><?echo $productcodename?><? if ($pro_productcode<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger">*</span><? } ?><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type='text' class="form-control" placeholder="Type Product Code..." <? if ($pro_productcode<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?> id="productcode<?echo $j?>" name="productcode<?echo $j?>" />
	       </div>
	     </div>
	   <?}?>	
	   <!----pro_storage-->
		<? if ($pro_storage<>0) { ?>	
		<div class="row mg-t-20">
			  <label class="col-sm-4 form-control-label control-label" >Storage Space <? if ($pro_storage<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger"></span><? } ?><? } ?></label>
			   <div class="col-sm-8 mg-t-10 mg-sm-t-0">
				<input type='text' class="form-control" name="storagespace<?echo $j?>" placeholder="Type Product Storage Space" <? if ($pro_storage<>0) { ?><? if ($j==1) { ?><? } ?><? } ?>>				
			   </div>
			 </div>	   
		  <?}?>
		<!----pro_storage-->

   
	   <!----Item Size-->
	   <? if ($pro_itemsize<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Item Size <? if ($pro_itemsize_com<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger">*</span><? } ?><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type='text' class="textbox form-control" placeholder="Type Item Size..." id="itemsize<?echo $j?>" name="itemsize<?echo $j?>" <? if ($pro_itemsize_com<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?>/>
	       </div>
	     </div>	   
	   <? } else { ?>
	    <input type='hidden' class="form-control" placeholder="Type Item Size..." id="itemsize<?echo $j?>" name="itemsize<?echo $j?>" value=""/>
	   <? } ?>
	   <!----Item Size-->
	   <!----Item Weight-->
	   <? if ($pro_weight<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Item Weight<? if ($pro_weight_com<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger">*</span><? } ?><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type='text' class="form-control" placeholder="Type Item Weight..." id="itemweight<?echo $j?>" name="itemweight<?echo $j?>" <? if ($pro_weight_com<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?>/>
	       </div>
	     </div>	   
	   <? } else { ?>
	    <input type='hidden' class="form-control" placeholder="Type Item Weight..." id="itemweight<?echo $j?>" name="itemweight<?echo $j?>" value=""/>
	   <? } ?>
	   <!----Item Weight-->	   
	   <!----Packing Size-->
	   <? if ($pro_packing<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Packing Size<? if ($pro_packing_com<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger">*</span><? } ?><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type='text' class="form-control" placeholder="Type Packing Size..." id="packingsize<?echo $j?>" name="packingsize<?echo $j?>" <? if ($pro_packing_com<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?>/>
	       </div>
	     </div>	   
	   <? } else { ?>
	    <input type='hidden' class="form-control" placeholder="Type Packing Size..." id="packingsize<?echo $j?>" name="packingsize<?echo $j?>" value=""/>
	   <? } ?>
	   <!----Packing Size-->	   
	   <!----Country of Origin-->
	   <? if ($pro_countryoforigin<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Country of Origin<? if ($pro_countryoforigin_com<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger">*</span><? } ?><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type='text' class="form-control" placeholder="Type Country of Origin..." id="countryoforigin<?echo $j?>" name="countryoforigin<?echo $j?>" <? if ($pro_countryoforigin_com<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?>/>
	       </div>
	     </div>	   
	   <? } else { ?>
	    <input type='hidden' class="form-control" placeholder="Type Country of Origin..." id="countryoforigin<?echo $j?>" name="countryoforigin<?echo $j?>" value=""/>
	   <? } ?>
	   <!----Country of Origin-->	
	   <!----Stock-->
      <? if ($pro_stock<>0){ ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Stock<? if ($pro_stock_com<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger"></span><? } ?><? } ?> </label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="stock<?echo $j?>"  checked  id="stock1<?echo $j?>" value="1">&nbsp;&nbsp;<label for="stock1<?echo $j?>">In Stock</label>&nbsp;&nbsp;
	      <input type="radio" name="stock<?echo $j?>" id="stock2<?echo $j?>" value="0" >&nbsp;&nbsp;<label for="stock2<?echo $j?>">Out Of Stock</label>
	     </div>
	   </div>	   
	   <? } else { ?>
	    <input type='hidden' class="form-control" placeholder="Type New Arrivals..." id="stock<?echo $j?>" name="stock<?echo $j?>" value=""/>
	   <? } ?>	   
	   <!----Stock-->
	   <!----Stock
	   <? //if ($pro_stock<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Stock<? //if ($pro_stock_com<>0) { ?><?// if ($j==1) { ?>&nbsp;<span class="tx-danger">*</span><? //} ?><? //} ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">		 
	        <input type='number' class="form-control" placeholder="Type Stock..." id="stock<?echo $j?>" name="stock<?//echo $j?>" <? //if ($pro_stock_com<>0) { ?><? //if ($j==1) //{ ?>required<? //} ?><? //} ?>/>
	       </div>
	     </div>	   
	   <? //} else { ?>
	    <input type='hidden' class="form-control" placeholder="Type Stock..." id="stock<?echo $j?>" name="stock<?echo $j?>" value=""/>
	   <?// } ?>
	   <!----Stock-->		   
	   <!----Wholesale Price-->
	   <? if ($pro_wholesaler<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Wholesale Price <? if ($pro_wholesaler_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type="number"  min="1"  step="any" name="wholesaleprice<?echo $j?>" class="form-control" placeholder="Type Wholesale Price ..." <? if ($pro_wholesaler_com<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?> pattern=".*[^ ].*" />
	       </div>
	     </div>	   
	   <? } else { ?>
	    <input type="hidden"  min="1"  step="any" name="wholesaleprice<?echo $j?>">
	   <? } ?>
	   <!----Wholesale Price-->	   
	   <!----Distributor Price-->
	   <? if ($pro_distrubutor<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Distributor Price <? if ($pro_distrubutor_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type="number"  min="1"  step="any" name="distrubutorprice<?echo $j?>" class="form-control" placeholder="Type Distributor Price ..." <? if ($pro_distrubutor_com<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?> pattern=".*[^ ].*" />
	       </div>
	     </div>	   
	     <? } else { ?>
	    <input type="hidden"  min="1"  step="any" name="distrubutorprice<?echo $j?>">
	   <? } ?>
	   <!----Distributor Price-->		   
	   <!----Retailer Price-->
	   <? if ($pro_retailer<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Retailer Price <? if ($pro_retailer_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type="number"  min="1"  step="any" name="retailerprice<?echo $j?>" class="form-control" placeholder="Type Retailer Price ..." <? if ($pro_retailer_com<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?> pattern=".*[^ ].*" />
	       </div>
	     </div>	   
	   <? } else { ?>
	    <input type="hidden"  min="1"  step="any" name="retailerprice<?echo $j?>">
	   <? } ?>
	   <!----Retailer Price-->
    	   
	   <!----Enduser Price-->
	   <? if ($pro_enduser<>0){ ?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Price <? if ($pro_enduser_com<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger">*</span><? } ?><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type="number"  min="1"  step="any" name="enduserprice<?echo $j?>" class="form-control" placeholder="Type End User Price ..." <? if ($pro_enduser_com<>0) { ?><? if ($j==1) { ?>required<? } ?><? } ?> pattern=".*[^ ].*" />
	       </div>
	     </div>	   
	   <? } else { ?>
	    <input type="hidden"  min="1"  step="any" name="enduserprice<?echo $j?>">
	   <? } ?>
	   <!----Enduser Price-->		   
	   <!---- SpecialOffer-->	   
	   <? if ($pro_specialoffer<>0) { ?>
	   <? if ($pro_specialofferprice<>0) { ?>		
	     <div class="row mg-t-20" >
	      <label class="col-sm-4 form-control-label control-label" >Special Offer </label>
	       <div class="col-sm-3" style="margin-top:9px;margin-left:0px;">
	        <input type="radio" name="specialoffer<?echo $j?>"  id="specialoffer2<?echo $j?>" value="No" checked>&nbsp;&nbsp;        <label for="specialoffer2<?echo $j?>">No</label>&nbsp;&nbsp;
	        <input type="radio" name="specialoffer<?echo $j?>" id="specialoffer1<?echo $j?>" value="Yes">&nbsp;&nbsp; <label for="specialoffer1<?echo $j?>">Yes</label>
	       </div>
	       <div class="col-lg-5">
	        <input type="number"  min="1"  step="any" name="specialofferprice<?echo $j?>" id="specialofferprice<?echo $j?>" class="form-control" placeholder="Type Special Offer Price ..." pattern=".*[^ ].*" style="display: none;"/>
	       </div>
	     </div> 	      
	     <script>
	      function changeOptions() {
	       var basicForm = window.document.getElementById("basicForm");
	       var specialofferprice = window.document.getElementById("specialofferprice");
	       if (basicForm.specialoffer1<?echo $j?>.checked) {
	        specialofferprice<?echo $j?>.style.display = "block";
  	      } else if (basicForm.specialoffer2<?echo $j?>.checked) {
          specialofferprice<?echo $j?>.style.display = "none";
         }
        }
        window.document.getElementById("specialoffer1<?echo $j?>").onclick = changeOptions;
        window.document.getElementById("specialoffer2<?echo $j?>").onclick = changeOptions;
	     </script>	 
	   <? } else { ?>	
	   <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" >Special Offer </label>
	       <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	        <input type="radio" name="specialoffer<?echo $j?>"  id="specialoffer2<?echo $j?>" value="No" checked>&nbsp;&nbsp;<label for="specialoffer2">No</label>&nbsp;&nbsp;
	        <input type="radio" name="specialoffer<?echo $j?>" id="specialoffer1<?echo $j?>" value="Yes">&nbsp;&nbsp;<label for="specialoffer1<?echo $j?>">Yes</label>
	       </div>
	   </div>    
	   <? } ?>
	   <? } else { ?>
         <input type="hidden"  min="1"  step="any" name="specialofferprice<?echo $j?>" id="specialofferprice<?echo $j?>" value=0>
	   <? } ?>	   
	   <!----Special Offer-->	   
	   <!---- New Arrivals-->
	   <? if ($pro_newarrivals<>0){ ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >New Arrivals </label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="newarrivals<?echo $j?>"  checked  id="newarrivals1<?echo $j?>" value="No">&nbsp;&nbsp;<label for="newarrivals1<?echo $j?>">No</label>&nbsp;&nbsp;
	      <input type="radio" name="newarrivals<?echo $j?>" id="newarrivals2<?echo $j?>" value="Yes" >&nbsp;&nbsp;<label for="newarrivals2<?echo $j?>">Yes</label>
	     </div>
	   </div>	   
	   <? } else { ?>
	    <input type='hidden' class="form-control" placeholder="Type New Arrivals..." id="newarrivals<?echo $j?>" name="newarrivals<?echo $j?>" value=""/>
	   <? } ?>
	   <!---- New Arrivals-->		   
	   <!---- Hot Deals-->
	   <? if ($pro_hotdeals<>0){ ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Hot Deals </label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="hotdeals<?echo $j?>"  checked  id="hotdeals1<?echo $j?>" value="No">&nbsp;&nbsp;        <label for="hotdeals1<?echo $j?>">No</label>&nbsp;&nbsp;
	      <input type="radio" name="hotdeals<?echo $j?>" id="hotdeals2<?echo $j?>" value="Yes" >&nbsp;&nbsp;        <label for="hotdeals2<?echo $j?>">Yes</label>
	     </div>
	   </div>	   
	   <? } else { ?>
	    <input type='hidden' class="textbox form-control" placeholder="Type Hot Deals..." id="hotdeals<?echo $j?>" name="hotdeals<?echo $j?>" value=""/>
	   <? } ?>
	   <!---- Hot Deals-->	  
      <!---- Renewed-->
	   <? if ($pro_renewed<>0){ ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Renewed </label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="renewed<?echo $j?>"  checked  id="renewed1<?echo $j?>" value="No">&nbsp;&nbsp;        <label for="renewed1<?echo $j?>">No</label>&nbsp;&nbsp;
	      <input type="radio" name="renewed<?echo $j?>" id="renewed2<?echo $j?>" value="Yes" >&nbsp;&nbsp;        <label for="renewed2<?echo $j?>">Yes</label>
	     </div>
	   </div>	   
	   <? } else { ?>
	    <input type='hidden' class="textbox form-control" placeholder="Type Renewed..." id="renewed<?echo $j?>" name="renewed<?echo $j?>" value=""/>
	   <? } ?>
	   <!---- Renewed-->	   	   
	   <!---- Featured Product-->
	   <? if ($pro_featuredproduct<>0){ ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Featured Product </label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="featuredproduct<?echo $j?>"  checked  id="featuredproduct1<?echo $j?>" value="No">&nbsp;&nbsp;        <label for="featuredproduct1<?echo $j?>">No</label>&nbsp;&nbsp;
	      <input type="radio" name="featuredproduct<?echo $j?>" id="featuredproduct2<?echo $j?>" value="Yes" >&nbsp;&nbsp;        <label for="featuredproduct2<?echo $j?>">Yes</label>
	     </div>
	   </div>	   
	   <? } else { ?>
	    <input type='hidden' class="textbox form-control" placeholder="Type Featured Product..." id="featuredproduct<?echo $j?>" name="featuredproduct<?echo $j?>" value=""/>
	   <? } ?>
	   <!---- Featured Product-->		   
	   <!---- Best Seller-->
	   <? if ($pro_bestseller<>0){ ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Best Seller </label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="bestseller<?echo $j?>"  checked  id="bestseller1<?echo $j?>" value="No">&nbsp;&nbsp;        <label for="bestseller1<?echo $j?>">No</label>&nbsp;&nbsp;
	      <input type="radio" name="bestseller<?echo $j?>" id="bestseller2<?echo $j?>" value="Yes" >&nbsp;&nbsp;        <label for="bestseller2<?echo $j?>">Yes</label>
	     </div>
	   </div>	   
	   <? } else { ?>
	    <input type='hidden' class="textbox form-control" placeholder="Type Best Seller Product..." id="bestseller<?echo $j?>" name="bestseller<?echo $j?>" value=""/>
	   <? } ?>
	   <!---- Best Seller-->	   
	   <!---- Status-->
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Status </label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="status<?echo $j?>"  checked  id="status1<?echo $j?>" value="Active">&nbsp;&nbsp;        <label for="status1">Active</label>&nbsp;&nbsp;
	      <input type="radio" name="status<?echo $j?>" id="status2<?echo $j?>" value="Inactive" >&nbsp;&nbsp;        <label for="status2">Inactive</label>
	     </div>
	   </div>	   	   
	   <!---- Status-->	   
	 
	   <!----Upload PDF-->
	   <? if ($pro_pdfcommon<>1) { ?>	   
	   <? if ($pro_productpdf<>0) { ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" ><input type='text' class="form-control" placeholder="Type PDF Name..." id="pdfname" name="pdfname"/></label>
	     <div class="col-sm-8 mg-t-10 mg-sm-t-0">	      
		  <label class="custom-file">
		   <input type="file" name="pdfpimg<?echo $j?>" id="file" class="custom-file-input"  placeholder="Upload PDF..." style="margin-bottom:10px;">
		   <span class="custom-file-control"></span>
		  </label>
	     </div>
	   </div>		 
	   <? } ?>
	   <? } ?>
	   <!----Upload PDF-->	   
	  </div>
	 </div>	
	 <? } ?>
	</div>	
   <!----form layout ends--->	
  </div>
 </div>
 </div>
</div>
<? } ?>

</br>
<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Save Product</button>
 <!--<button class="btn btn-info" name="sbutton">Save & Add Product to Same Category</button>-->
</div>
</form>

<?include ("ibottomdashboard.php")?>

 