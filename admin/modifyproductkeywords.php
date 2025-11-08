<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
$brandsno=$_REQUEST["brandsno"];
$productno = $_REQUEST["productno"];
 $product_where="productno =$productno";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $pname1 = $product_row["pname"];
 }
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?include("icallbrands.php")?>
<?
if($categoryno<>0){ 
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="View Product Details "; $youarein3link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";$youarein7=""; $youarein7link="";$youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Modify Product SEO Keywords : ".$master_categoryname;
 }
}
$youareinname="Modify Product SEO Keywords : ".$pname1;
$linkheading="Modify Product SEO Keywords :";
$subheading="";
$bodyheading="List of all Product SEO Keywords";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?
 $productkeywords_where="productno =$productno";
 $productkeywords_result = $obj->select_all_values('productkeywords', $productkeywords_where,'');
 foreach($productkeywords_result as $productkeywords_row){
  $pagetitle = $productkeywords_row["pagetitle"];
  $pagedesc = $productkeywords_row["pagedesc"];
  $keywords = $productkeywords_row["keywords"];
 }
 ?>
<?include ("itopheaddashboard.php")?> 
<form id="basicForm" method="post" action="updateproductkeywords.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
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
 <input type="hidden" name="productno" class="form-control" value="<?echo $productno?>"> 

<? if ($pro_keywords<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product SEO Keywords</h6>
	 <p class="mg-b-0">Please Provide the Product SEO Keywords....</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	  <!----form Inputs starts--->
	   <!----Title-->	      
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label"> Page Title</label>
	      </div>		
	     </div>
	     <div class="col-lg-9">	      
	       <input type="text" name="pagetitle" class="form-control" placeholder="Type Page Title ..." pattern=".*[^ ].*" value="<?echo $pagetitle?>"/> 	     		
	     </div>		   
	    <!----Title -->	
	    <!----Description-->	      
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label"> Page Description</label>
	      </div>		
	     </div>
	     <div class="col-lg-9">	      
	       <textarea  placeholder="Type Description..." name="pagedesc" class="form-control" rows="4"><?echo $pagedesc?></textarea> 	     		
	     </div>		   
	    <!----Description -->
	    <!----Keywords-->	      
	     <div class="col-lg-3 pt-2">
	      <div class="form-group control-label">
	       <label class="form-control-label"> Keywords</label>
	      </div>		
	     </div>
	     <div class="col-lg-9 pt-2">	      
	       <textarea  placeholder="Type Keywords..." name="keywords" class="form-control" rows="4"><?echo $keywords?></textarea>	 	     		
	     </div>		   
	    <!----Keywords -->		
	  <!----form Inputs starts--->	  
	  </div>	
	 </div>
	</div>	
   </div>	  
   <!----form layout ends--->	
  </div>
 </div>
</div>
<? } 
else { ?> 
 <input type="hidden" name="pro_warranty" class="form-control" value="0">
<? } ?>
<!--***************************************PRODUCT WARRANTY  ENDS ************************************************************-->
</br>
<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Save Product</button>
 <!--<button class="btn btn-info" name="sbutton">Save & Modify Product to Same Category</button>-->
</div>
</form>

<!-------------------------pfeaturedesc increment------------------------------->		
<?include ("ibottomdashboard.php")?>

 