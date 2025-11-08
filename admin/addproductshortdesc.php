<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?
 $productno = $_REQUEST["productno"];
 $product_where="productno =$productno ";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $productno = $product_row["productno"];
  $pname1 = $product_row["pname"];
  $obrandsno = $product_row["brandsno"];
  $pstatus = $product_row["pstatus"];  
 }
if($categoryno<>0){ 
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Category"; $youarein2link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Product"; $youarein3link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="View Product Details "; $youarein4link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link=""; $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Add Product Short Description : ".$master_categoryname;
 }
}
if($categoryno<>0 && $subcategoryno<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Category"; $youarein2link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 1"; $youarein3link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Product"; $youarein4link="product.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname; 
 $youarein5="View Product Details"; $youarein5link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein6=""; $youarein6link=""; $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Add Product Short  Description : ".$master_categoryname.." - ".$master_subcategory;
}
}
 
if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Category"; $youarein2link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 1"; $youarein3link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 2"; $youarein4link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein5="Product"; $youarein5link="product.php?productno=".$productno."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $youarein6="View Product Details"; $youarein6link="viewproduct.php?productno=".$productno."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; 
 $youarein7=""; $youarein7link="";$youarein8="";$youarein8link=""; 
 $mainheading="Add Product Short Description : ".$master_categoryname.." - ".$master_subcategory." - ".$master_subcategory2;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Category"; $youarein2link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 1"; $youarein3link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 2"; $youarein4link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein5="Sub Category Level 3"; $youarein5link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein6="Product"; $youarein6link="product.php?subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; 
 $youarein7="View Product Details"; $youarein7link="viewproduct.php?productno=".$productno."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;  
 $youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Add Product Short Description: ".$master_categoryname.." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Category"; $youarein2link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 1"; $youarein3link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 2"; $youarein4link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;	
 $youarein5="Sub Category Level 3"; $youarein5link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein6="Sub Category Level 4"; $youarein6link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
 $youarein7="Product"; $youarein7link="product.php?subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; 
 $youarein8="View Product Details"; $youarein8link="viewproduct.php?productno=".$productno."&subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $mainheading="Add  Product Short Description : ".$master_categoryname.." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
 }
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0 && $subcategory5no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Category"; $youarein2link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 1"; $youarein3link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 2"; $youarein4link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;	
 $youarein5="Sub Category Level 3"; $youarein5link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein6="Sub Category Level 4"; $youarein6link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
 $youarein7="Sub Category Level 5"; $youarein7link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no; 
 $youarein8="Product"; $youarein8link="product.php?subcategory5no=".$subcategory5no."&subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; 
 $youarein9="View Product Details"; $youarein9link="viewproduct.php?productno=".$productno."&subcategory5no=".$subcategory5no."&subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $mainheading="Add  Product Short Description : ".$master_categoryname.." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
 }
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0 && $subcategory5no<>0 && $subcategory6no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Category"; $youarein2link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 1"; $youarein3link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 2"; $youarein4link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;	
 $youarein5="Sub Category Level 3"; $youarein5link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein6="Sub Category Level 4"; $youarein6link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
 $youarein7="Sub Category Level 5"; $youarein7link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no; 
 $youarein8="Sub Category Level 6"; $youarein8link="subcategory6.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&subcategory5no=".$subcategory5no."&subcategory6no=".$subcategory6no; 
 $youarein9="Product"; $youarein9link="product.php?subcategory6no=".$subcategory6no."&subcategory5no=".$subcategory5no."&subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; 
 $youarein10="View Product Details"; $youarein10link="viewproduct.php?productno=".$productno."&subcategory5no=".$subcategory5no."&subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $mainheading="Add Product Short Description : ".$master_categoryname.." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5." - ".$master_subcategory6;
 }
}
$youareinname="Add  Product Short Description: ".$pname1;
$linkheading="Add  Product Short Description :";
$linkheading="Add  Product Short Description";
$subheading="";
$bodyheading="List of all Product Short Description";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<form id="basicForm" method="post" action="saveproductshortdesc.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> <input type="hidden" name="brandsno" value="<?echo $brandsno?>">
 <input type="hidden" name="categoryno" value="<?echo $categoryno?>">
 <input type="hidden" name="subcategoryno" value="<?echo $subcategoryno?>">
 <input type="hidden" name="subcategory2no" value="<?echo $subcategory2no?>">
 <input type="hidden" name="subcategory3no" value="<?echo $subcategory3no?>">
 <input type="hidden" name="subcategory4no" value="<?echo $subcategory4no?>">
 <input type="hidden" name="subcategory5no" value="<?echo $subcategory5no?>">
 <input type="hidden" name="subcategory6no" value="<?echo $subcategory6no?>">
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
 <input type="hidden" name="productno" value="<?echo $productno?>">
 <input type="hidden" name="productdetailsno" class="form-control" value="<?echo $productdetailsno?>">
 <input type="hidden" name="productcodesuffix" class="form-control" value="<?echo $productcodesuffix?>">
<!--***************************************PRODUCT  DESCRIPTION  STARTS***************************************************-->
<? if ($pro_desc<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Short Description</h6>
	 <p class="mg-b-0">Please Provide the Product Short Description...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <div class="col-lg-12">
	     <textarea  placeholder="Type text here..." name="shortdesc1" class="form-control" rows="10"></textarea>		
	    </div>	
	   <!----form Inputs starts--->	  
	  </div>	
	 </div>
	</div>	
   </div>
   <!----form layout ends--->	
  </div>
 </div>
</div>		
<? } ?>
<!--***************************************PRODUCT DESCRIPTION ENDS******************************************************-->
</br>
<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Submit Form</button>
 <!--<button class="btn btn-info" name="sbutton">Save & Add Product to Same Category</button>-->
</div>
</form>

	
<?include ("ibottomdashboard.php")?>