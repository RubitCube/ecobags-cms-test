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
?>
<?
 $productdetails_where="productno =$productno ";
 $productdetails_result = $obj->select_all_values('productdetails', $productdetails_where,'');
 foreach($productdetails_result as $productdetails_row){
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
  $dimension = $productdetails_row["dimension"];
  $materials = $productdetails_row["materials"];
  $productcolor = $productdetails_row["productcolor"];
 }
 $productprices_where="productno =$productno";
 $productprices_result = $obj->select_all_values('productprices', $productprices_where,'');
 foreach($productprices_result as $productprices_row){
  $wholesaleprice = $productprices_row["wholesaleprice"];
  $distrubutorprice = $productprices_row["distrubutorprice"];
  $retailerprice = $productprices_row["retailerprice"];
  $enduserprice = $productprices_row["enduserprice"];
  $specialofferprice = $productprices_row["specialofferprice"];
 }

 ?>
<?
if($categoryno<>0){ 
if($pname=="category"){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="View Product Details "; $youarein3link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";
 $youarein6=""; $youarein6link=""; 
 $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";
 $youarein9="";$youarein9link="";
 $mainheading="Modify Product: ".$master_categoryname; 
 }
}}

//for sub and category
if($categoryno<>0 && $subcategoryno<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Product"; $youarein3link="product.php?productno=".$productno."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; ;
 $youarein4="View Product Details"; $youarein4link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
  $mainheading="Modify Product : ".$master_categoryname." - ".$master_subcategory;
}
}


$youareinname="Modify Product : ".$productcode;
$linkheading="Modify Product :";
$linkheading="Modify Product";
$subheading="";
$bodyheading="List of all Product";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 

<form id="basicForm" method="post" action="updateproduct.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
 <input type="hidden" name="brandsno" value="<?echo $brandsno?>">
 <input type="hidden" name="productno" value="<?echo $productno?>">
 <input type="hidden" name="productdetailsno"  value="<?echo $productdetailsno?>">
 <input type="hidden" name="categoryno" value="<?echo $categoryno?>">
 <input type="hidden" name="subcategoryno" value="<?echo $subcategoryno?>">
 <input type="hidden" name="subcategory2no" value="<?echo $subcategory2no?>">
 <input type="hidden" name="subcategory3no" value="<?echo $subcategory3no?>">
 <input type="hidden" name="subcategory4no" value="<?echo $subcategory4no?>">
 <input type="hidden" name="subcategory5no" value="<?echo $subcategory5no?>">
 <input type="hidden" name="subcategory6no" value="<?echo $subcategory6no?>">
 <input type="hidden" name="productcodesuffix" class="form-control" value="<?echo $productcodesuffix?>">
 <input type="hidden" name="pagename" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
<!--***************************************SINGLE PRODUCT DETAILS STARTS*************************************************-->
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Details</h6>
	 <p class="mg-b-0">Please provide the Product Details...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	  
	     <? if ($pro_productmultiple<>1) { ?> 
	     <? if (($pro_productcode<>0) and ($pro_productcodeauto<>1)){ ?>
	      <?if ($pro_productcodename<>"") { 
	        $productcodename = $pro_productcodename;
	       } else {
	        $productcodename = "Product Code";
	        }?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label"><?echo $productcodename?><? if ($pro_productcode_com<>0){ ?> &nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type='text' class="form-control" placeholder="Type Product Code..." id="productcode" value="<?echo $productcode?>" name="productcode" <? if ($pro_productcode_com<>0) { ?>required<? } ?>/>
	     </div>		
	    </div>		 
	    <?}?>
		
	  	 <!--<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Name &nbsp;<span class="tx-danger">*</span></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type="text" name="pname" class="form-control" placeholder="Type Product Name ..." required value="<?echo $pname1?>">
	     </div>		
	    </div>-->
	   <!----form Inputs starts--->	
	   
	   <? if ($pro_dimension<>0){ ?>	
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Dimension &nbsp;<span class="tx-danger"></span></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type="text" name="dimension" class="form-control" placeholder="Type Product Dimension ..."  value="<?echo $dimension?>">
	     </div>		
	    </div>
		<?}?>	   
		<? if ($pro_singlecolor<>0){ ?>	
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Color &nbsp;<span class="tx-danger"></span></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type="text" name="productcolor" class="form-control" placeholder="Type Product Color ..."  value="<?echo $productcolor?>">
	     </div>		
	    </div>
		<?}?>	   
		<? if ($pro_material<>0){ ?>	
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Materials &nbsp;<span class="tx-danger"></span></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type="text" name="materials" class="form-control" placeholder="Type Product Materials ..."  value="<?echo $materials?>">
	     </div>		
	    </div>
		<?}?>

	   <? if ($pro_brand<>0){ ?>			
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Brands  &nbsp;<span class="tx-danger">*</span></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <select class="form-control select2-show-search" name="brandsno2" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" required autofocus required>
			<option label="Choose One"></option>
			<?
			$orderby="ORDER BY brandsname ASC";
			$result=$obj->select_table_orderby("brands",$orderby);
			$count=0;
			foreach($result as $row){ 
			$count++;
			$brandsno =$row["brandsno"];
			$brandsname =$row["brandsname"];
			?>
			<option value="<?echo $brandsno?>" <?if ($brandsno==$obrandsno){ ?>Selected<?}?>><?echo $brandsname?></option>
			<? } ?>
	      </select>
	     </div>		
	    </div>
	   <?}?>			   
	    <!---################################## pro_productmultiple==0  if start--##########################-->
	    <? if ($pro_itemsize<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Item Size<? if ($pro_itemsize_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type='text' class="form-control" placeholder="Type Item Size..." id="itemsize" name="itemsize"  <? if ($pro_itemsize_com<>0) { ?>required<? } ?>/>
	     </div>		
	    </div>	  
	    <? } else { ?>
	     <input type='hidden' class="form-control" placeholder="Type Item Size..." id="itemsize" name="itemsize" value=""/>
	    <? } ?>
	    <? if ($pro_weight<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Item Weight<? if ($pro_weight_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type='text' class="form-control" placeholder="Type Item Weight..." id="itemweight" name="itemweight" <? if ($pro_weight_com<>0) { ?>required<? } ?>/>
	     </div>		
	    </div>		  
	    <? } else { ?>	
         <input type='hidden' class="form-control" placeholder="Type Item Weight..." id="itemweight" name="itemweight" value=""/>
	    <? } ?>
	    <? if ($pro_packing<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Packing Size<? if ($pro_packing_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type='text' class="form-control" placeholder="Type Packing Size..." id="packingsize" name="packingsize" <? if ($pro_packing_com<>0) { ?>required<? } ?>/>
	     </div>		
	    </div>	  
	    <? } else { ?>	
         <input type='hidden' class="form-control" placeholder="Type Packing Size..." id="packingsize" name="packingsize" value=""/>
	    <? } ?>
	    <? if ($pro_countryoforigin<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Country of Origin<? if ($pro_countryoforigin_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type='text' class="form-control" placeholder="Type Country of Origin..." id="countryoforigin" name="countryoforigin" <? if ($pro_countryoforigin_com<>0) { ?>required<? } ?>/>
	     </div>		
	    </div>	  
	    <? } else { ?>
         <input type='hidden' class="form-control" placeholder="Type Country of Origin..." id="countryoforigin" name="countryoforigin" value=""/>
	    <? } ?>
	    <? if ($pro_stock<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Stock<? if ($pro_stock_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type='number' class="form-control" value="<?echo $stock?>" placeholder="Type Stock..." id="stock" name="stock" <? if ($pro_stock_com<>0) { ?>required<? } ?>/>
	     </div>		
	    </div>	  
	    <? } else { ?>
         <input type='hidden' class="form-control" placeholder="Type Stock..." id="stock" name="stock" value=""/>
	    <? } ?>
	    <? if ($pro_specialoffer<>0) { ?>
	    <? if ($pro_specialofferprice<>0) { ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Special Offer 1</label>
	     </div>
	    </div>		
	    <div class="col-lg-4" >
	    <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="specialoffer"  id="specialoffer2" value="No" <? if($specialoffer == "No") { ?>Checked<? } ?>>&nbsp;&nbsp;  <label for="specialoffer2">No</label>&nbsp;&nbsp;
	      <input type="radio" name="specialoffer" id="specialoffer1" value="Yes" <? if($specialoffer == "Yes") { ?>Checked<? } ?>>&nbsp;&nbsp;   <label for="specialoffer1">Yes</label>
	    </div>
	    </div> 
	    <div class="col-lg-5">
	     <div class="form-group control-label">
	     <input type="number"   name="specialofferprice" id="specialofferprice" class="form-control" placeholder="Type Special Offer Price ..."  style="display: none;" value="<?echo $specialofferprice?>"/>
	     </div>
	    </div>	      
	    <script>
	     function changeOptions() {
	      var basicForm = window.document.getElementById("basicForm");
	      var specialofferprice = window.document.getElementById("specialofferprice");
	      if (basicForm.specialoffer1.checked) {
	       specialofferprice.style.display = "block";
	      } else if (basicForm.specialoffer2.checked) {
	       specialofferprice.style.display = "none";
	       }
	     }
	     window.document.getElementById("specialoffer1").onclick = changeOptions;
	     window.document.getElementById("specialoffer2").onclick = changeOptions;
	    </script>		   
	    <? } else { ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Special Offer 2</label>
	     </div>
	    </div>		
	    <div class="col-lg-4" >
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="specialoffer"  id="specialoffer2" value="No" checked>&nbsp;&nbsp;  <label for="specialoffer2">No</label>&nbsp;&nbsp;
	      <input type="radio" name="specialoffer" id="specialoffer1" value="Yes">&nbsp;&nbsp;   <label for="specialoffer1">Yes</label>
	     </div>
	    </div> 
	     <input type="hidden"  min="1"  step="any" name="specialofferprice" id="specialofferprice" value=0>	   
	    <? } ?>
	    <? } else { ?>
	     <input type='hidden'  placeholder="Type Special Offer..." id="specialofferprice" name="specialofferprice" value=""/>
	    <? } ?>
 		<?if($specialoffer=="Yes"){?>
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Special Offer Price&nbsp;</label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
		  &nbsp; <?echo $specialofferprice?>	
	    </div>		
		<?}?>
	    <? if ($pro_newarrivals<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">New Arrivals</label>
	     </div>
	    </div>		
	    <div class="col-lg-9" >
	     <div class="col-sm-9" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="newarrivals"  checked  id="newarrivals1" value="No" <?if ($newarrivals<>"Yes"){?>checked<? } ?>>&nbsp;&nbsp;        <label for="newarrivals1">No</label>&nbsp;&nbsp;
	      <input type="radio" name="newarrivals" id="newarrivals2" value="Yes" <?if ($newarrivals<>"No"){?>checked<? } ?>>&nbsp;&nbsp;        <label for="newarrivals2">Yes</label>
	     </div>
	    </div>   	  
	    <? } else { ?>
 	     <input type='hidden' class="form-control" placeholder="Type New Arrivals..." id="newarrivals" name="newarrivals" value=""/>
	    <? } ?>
	    <? if ($pro_hotdeals<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
 	      <label class="form-control-label">Hot Deals</label>
	     </div>
	    </div>	
	    <div class="col-lg-9">
	     <div class="col-sm-9" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="hotdeals"  checked  id="hotdeals1" value="No" <?if ($hotdeals<>"Yes"){?>checked<? } ?>>&nbsp;&nbsp;        <label for="hotdeals1">No</label>&nbsp;&nbsp;
	      <input type="radio" name="hotdeals" id="hotdeals2" value="Yes" <?if ($hotdeals<>"No"){?>checked<? } ?>>&nbsp;&nbsp;        <label for="hotdeals2">Yes</label>
	     </div>
	    </div>   	  
	    <? } else { ?>
 	    <input type='hidden' class="textbox form-control" placeholder="Type Hot Deals..." id="hotdeals" name="hotdeals" value=""/>
	    <? } ?>
	    <? if ($pro_featuredproduct<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Featured Product</label>
	     </div>
	    </div>	
	    <div class="col-lg-9">
	     <div class="col-sm-9" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="featuredproduct"  checked  id="featuredproduct1" value="No" >&nbsp;&nbsp; <label for="featuredproduct1">No 	    </label>&nbsp;&nbsp;
	      <input type="radio" name="featuredproduct" id="featuredproduct2" value="Yes" >&nbsp;&nbsp;<label for="featuredproduct2">Yes</label>
	     </div>
	    </div>    	  
	    <? } else { ?>
 	     <input type='hidden' class="form-control" placeholder="Type Featured Product..." id="featuredproduct" name="featuredproduct" value=""/>
	    <? } ?> 
	    <? if ($pro_bestseller<>0){ ?>	  
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Best Seller</label>
	     </div>
	    </div>	
	    <div class="col-lg-9">
	     <div class="col-sm-9" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="bestseller"  checked  id="bestseller1" value="No" <?if ($bestseller<>"Yes"){?>checked<? } ?>>&nbsp;&nbsp; <label for="bestseller1">No</label>&nbsp;&nbsp;
	      <input type="radio" name="bestseller" id="bestseller2" value="Yes" <?if ($bestseller<>"No"){?>checked<? } ?>>&nbsp;&nbsp;<label for="bestseller2">Yes</label>
	     </div>
	    </div>    	  
	    <? } else { ?>
 	     <input type='hidden' class="textbox form-control" placeholder="Type Best Seller.." id="bestseller" name="bestseller" value=""/>
	    <? } ?> 
	    <?}?>
	    <!---################################## pro_productmultiple==0  if close--##########################-->
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Status</label>
	     </div>
	    </div>	
	    <div class="col-lg-9">
	     <div class="col-sm-9" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="pstatus"  <?if ($pstatus<>"Inactive"){?>checked<? } ?>  id="pstatus1" value="Active">&nbsp;&nbsp;        <label for="pstatus1">Active</label>&nbsp;&nbsp;
	      <input type="radio" name="pstatus" id="pstatus2" value="Inactive" <?if ($pstatus<>"Active"){?>checked<? } ?>>&nbsp;&nbsp;        <label for="pstatus2">Inactive</label>
	     </div> 
	    </div>  	   
	   <!----form Inputs ends-->  
	  </div> 
	 </div>		
	</div>
   </div>	
   <!----form layout ends--->
  </div>
 </div>
 </div>
<br>
<!--***************************************SINGLE PRODUCT DETAILS ENDS**************************************************-->

<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Submit Form</button>
 <!--<button class="btn btn-info" name="sbutton">Save & Modify Product to Same Category</button>-->
</div>
</form>

	
<?include ("ibottomdashboard.php")?>