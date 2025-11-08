<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
$productno = $_REQUEST["productno"];
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?
if($categoryno<>0){ 
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="View Product Details "; $youarein3link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";$youarein7=""; $youarein7link=""; $youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Modify Product Shipping Details : ".$master_categoryname;
 }
}
 $product_where="productno =$productno";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $productno = $product_row["productno"];
  $pname1 = $product_row["pname"];
  $obrandsno = $product_row["brandsno"];
  $pstatus = $product_row["pstatus"];  
 }
 
 $productshipping_where="productno =$productno";
 $productshipping_result = $obj->select_all_values('productshipping', $productshipping_where,'');
 foreach($productshipping_result as $productshipping_row){
  $shippingfrom = $productshipping_row["shippingfrom"];
  $leadtime = $productshipping_row["leadtime"];
  $shippingcost = $productshipping_row["shippingcost"];
  $shippingdesc = $productshipping_row["shippingdesc"];
 }

$youareinname="Modify Product Shipping Details: ".$pname1;
$linkheading="Modify Product Shipping Details :";
$subheading="";
$bodyheading="List of all Product Shipping Details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<form id="basicForm" method=post action="updateproductshipping.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
 <input type="hidden" name="brandsno" value="<?echo $brandsno?>">
 <input type="hidden" name="productno" class="form-control" value="<?echo $productno?>">
 <input type="hidden" name="categoryno" value="<?echo $categoryno?>">
 <input type="hidden" name="subcategoryno" value="<?echo $subcategoryno?>">
 <input type="hidden" name="subcategory2no" value="<?echo $subcategory2no?>">
 <input type="hidden" name="subcategory3no" value="<?echo $subcategory3no?>">
 <input type="hidden" name="subcategory4no" value="<?echo $subcategory4no?>">
 <input type="hidden" name="subcategory5no" value="<?echo $subcategory5no?>">
 <input type="hidden" name="subcategory6no" value="<?echo $subcategory6no?>">
 <input type="hidden" name="productdetailsno" class="form-control" value="<?echo $productdetailsno?>">
 <input type="hidden" name="productcodesuffix" class="form-control" value="<?echo $productcodesuffix?>">
 <input type="hidden" name="pagename" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
 <!--***************************************PRODUCT  SHIPPING  STARTS *********************************************************-->
<? if ($pro_shipping<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Shipping Details</h6>
	 <p class="mg-b-0">Please Provide the Product Shipping Details....</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <!----pro_shippedfrom-->	      
	    <? if ($pro_shippedfrom<>0){ ?>
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label">Shipped From </label>
	      </div>		
	     </div>
	     <div class="col-lg-9">
	      <div class="input-group">
	       <input type="text" name="shippingfrom" class="form-control" placeholder="Type Shipped From ..." pattern=".*[^ ].*" value="<?echo $shippingfrom?>"/>
	      </div>		
	     </div>	   
	   <? } ?>
	    <!----Shipped From-->
	    <!----Lead Time-->	   
	    <? if ($pro_leadtime<>0){ ?>
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label">Lead Time</label>
	      </div>		
	     </div>
	     <div class="col-lg-9">
	      <div class="input-group">
	       <input type="text" name="leadtime" class="form-control" placeholder="Type Lead Time ..." pattern=".*[^ ].*" value="<?echo $leadtime?>"/>
	      </div>		
	     </div>		   	   
	    <? } ?>
	    <!----Lead Time-->	
	    <!----Shipping Cost-->
	    <? if ($pro_shippingcost<>0){ ?>
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label">Shipping Cost</label>
	      </div>		
	     </div>
	     <div class="col-lg-9">
	      <div class="input-group">
	       <input type="text" name="shippingcost" class="form-control" placeholder="Type Shipping Cost ..." pattern=".*[^ ].*" value="<?echo $shippingcost?>"/>
	      </div>		
	     </div>	   	   
	   <? } ?>
	    <!----Shipping Cost-->	
	    <!----Shipping Description-->
	    <? if ($pro_shippingdesc<>0){ ?>
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label"> Shipping Description</label>
	      </div>		
	     </div>
	     <div class="col-lg-9">	      
	       <textarea id="summernote3" placeholder="Type text here..." name="shippingdesc" class="form-control" rows="8"><?echo $shippingdesc?></textarea> 	     		
	     </div>		      
	   <? } ?>
	    <!----Shipping Description-->		   
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
 <input type="hidden" name="pro_shipping" class="form-control" value="0">
<? } ?>
</br>
<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Save Product</button>
 <!--<button class="btn btn-info" name="sbutton">Save & Add Product to Same Category</button>-->
</div>
</form>

<!-------------------------pfeaturedesc increment------------------------------->		
<?include ("ibottomdashboard.php")?>