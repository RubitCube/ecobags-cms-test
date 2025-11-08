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
  $o_brandsno = $product_row["brandsno"];
  $pstatus = $product_row["pstatus"];  
 }
?>
   <?
   $j=1;
 $productdetails_where="productno =$productno  order by `priority` asc";
 $productdetails_result = $obj->select_all_values('productdetails', $productdetails_where,'');
 foreach($productdetails_result as $productdetails_row){
	$j++;
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
  if($newarrivals==""){$newarrivals="-";}
  $status = $productdetails_row["status"];
  $renewed = $productdetails_row["renewed"];
  $dimension = $productdetails_row["dimension"];
  if($dimension==""){$dimension="-";}
  $materials = $productdetails_row["materials"];
  if($materials==""){$materials="-";}
  $productcolor = $productdetails_row["productcolor"];
  if($productcolor==""){$productcolor="-";}
 }?>
<?
//###############for category#############

if($brandsno<>0){
if($pname=="sortbrandwise"){
if($pname=="sortbrandwise" && $page=="viewproduct.php" || $page=="sortbrandwiseproductlist.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){
 $pname="sortbrandwise"; $pnamesub="";
 $youarein1="Brand Wise"; $youarein1link="sortbrandwise.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="sortbrandwiseproductlist.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3=""; $youarein3link="";$youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";
 $youarein9="";$youarein9link="";
 $mainheading="View Product Details : ".$master_brandsname; 
 }
 }
}



if($categoryno<>0){
if($pname=="category"){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3=""; $youarein3link="";$youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="View Product Details : ".$master_categoryname;
}
}
if($pname=="sortcategorywise"){
if($pname=="sortcategorywise" && $page=="viewproduct.php" || $page=="sortcategorywiseproductlist.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){
 $pname="sortcategorywise"; $pnamesub="";
 $youarein1="Category Wise"; $youarein1link="sortcategorywise.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="sortcategorywiseproductlist.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3=""; $youarein3link="";$youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";
 $youarein9="";$youarein9link="";
 $mainheading="View Product Details : ".$master_categoryname; 
 }
}
}
//for sub and category
if($categoryno<>0 && $subcategoryno<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Product"; $youarein3link="product.php?productno=".$productno."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; ;
 $youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
  $mainheading="View Product Details : ".$master_categoryname." - ".$master_subcategory;
}
}


//###############for #############

$youareinname="View Product Details : ".$productcode;
$linkheading="View Product Details :";
$subheading="";
$bodyheading="List of all Product";
$mainheadingdesc="";
$linknamepriority="priorityproductphotos";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";$priorityicon="Yes";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<?include ("iaction.php")?> 
<form id="basicForm" method="post" action="" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
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
<!--***************************************SINGLE PRODUCT DETAILS STARTS*************************************************-->
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Details</h6>
	 <p class="mg-b-0">Please provide the Product Details...</p>
    </div>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
	<a title="Modify Product Details" href="modifyproduct.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i></li> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span>
	</a>	  
	</div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->		
	    <!---################################## pro_productmultiple==0  if start--##########################-->
	    <? if ($pro_productmultiple<>1) { ?> 
	     <? if (($pro_productcode<>0) and ($pro_productcodeauto<>1)){ ?>
	      <?if ($pro_productcodename<>"") { 
	        $productcodename = $pro_productcodename;
	       } else {
	        $productcodename = "Product Code";
	        }?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label"><?echo $productcodename?><? if ($pro_productcode_com<>0){ ?> :<? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
		 <?echo $productcode?>
	      
	     </div>		
	    </div>		 
	    <?}?>
	    <!--<div class="col-lg-3">
	     <div class="form-group control-label">
		  <label class="form-control-label">Product Name :</label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	     <?echo $pname1?>
	     </div>		
	    </div>-->
		
		
	    <? if ($pro_dimension<>0){ ?>	
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Dimension :</label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <?echo $dimension?>
	     </div>		
	    </div>	  
	    <? } ?>
		
		 <? if ($pro_singlecolor<>0){ ?>	
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Color :</label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <?echo $productcolor?>
	     </div>		
	    </div>	  
	    <? } ?>
		
	    <? if ($pro_itemsize<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Item Size<? if ($pro_itemsize_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type='text' class="form-control" placeholder="Type Item Size..." id="itemsize" name="itemsize"  value="<?echo $itemsize?>" <? if ($pro_itemsize_com<>0) { ?>required<? } ?>/>
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
	      <input type='number' class="form-control" placeholder="Type Stock..." id="stock" name="stock" <? if ($pro_stock_com<>0) { ?>required<? } ?>/>
	     </div>		
	    </div>	  
	    <? } else { ?>
         <input type='hidden' class="form-control" placeholder="Type Stock..." id="stock" name="stock" value=""/>
	    <? } ?>
	    <? if ($pro_specialoffer<>0) { ?>
	    <? if ($pro_specialofferprice<>0) { ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Special Offer</label>
	     </div>
	    </div>		
	    <div class="col-lg-4" >
	    <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="specialoffer"  id="specialoffer2" value="No" checked>&nbsp;&nbsp;  <label for="specialoffer2">No</label>&nbsp;&nbsp;
	      <input type="radio" name="specialoffer" id="specialoffer1" value="Yes">&nbsp;&nbsp;   <label for="specialoffer1">Yes</label>
	    </div>
	    </div> 
	    <div class="col-lg-5">
	     <div class="form-group control-label">
	      <input type="number"  min="1"  step="any" name="specialofferprice" id="specialofferprice" class="form-control" placeholder="Type Special Offer Price ..." pattern=".*[^ ].*" style="display: none;"/>
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
	      <label class="form-control-label">Special Offer</label>
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
	     <input type='hidden' class="textbox form-control" placeholder="Type Special Offer..." id="newarrivals" name="specialoffer" value=""/>
	    <? } ?>
	    <? if ($pro_newarrivals<>0){ ?>
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">New Arrivals :</label>
	     </div>
	    </div>		
	    <div class="col-lg-9" >
		 <div class="input-group">
	      <?echo $newarrivals?>
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
	      <input type="radio" name="hotdeals"  checked  id="hotdeals1" value="No">&nbsp;&nbsp;        <label for="hotdeals1">No</label>&nbsp;&nbsp;
	      <input type="radio" name="hotdeals" id="hotdeals2" value="Yes" >&nbsp;&nbsp;        <label for="hotdeals2">Yes</label>
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
	      <input type="radio" name="featuredproduct"  checked  id="featuredproduct1" value="No">&nbsp;&nbsp; <label for="featuredproduct1">No 	    </label>&nbsp;&nbsp;
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
	      <input type="radio" name="bestseller"  checked  id="bestseller1" value="No">&nbsp;&nbsp; <label for="bestseller1">No</label>&nbsp;&nbsp;
	      <input type="radio" name="bestseller" id="bestseller2" value="Yes" >&nbsp;&nbsp;<label for="bestseller2">Yes</label>
	     </div>
	    </div>    	  
	    <? } else { ?>
 	     <input type='hidden' class="textbox form-control" placeholder="Type Best Seller.." id="bestseller" name="bestseller" value=""/>
	    <? } ?> 
	    <?}?>
	    <!---################################## pro_productmultiple==0  if close--##########################-->
	    <? if ($pro_material<>0){ ?>		
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Materials :</label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <?echo $materials?>
	     </div>		
	    </div>
		<? } ?> 
	   <? if ($pro_brand<>0){ ?>			
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Brands Name  :</label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
			<?
            $where="brandsno =$o_brandsno";
			$result_brands = $obj->select_all_values('brands', $where,'');
			foreach($result_brands as $brands_row){
			$brandsname =$brands_row["brandsname"];
			?>
			<?echo $brandsname?>
			<? } ?>	
	    </div>
	   <?}?>		
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Status :</label>
	     </div>
	    </div>	
		<div class="col-lg-9" >
	    <div class="input-group">
	      <?echo $pstatus?>
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

<!--***************************************SINGLE PRODUCT DETAILS ENDS**************************************************-->
<!--***************************************MULTIPLE PRODUCT DETAILS ENDS************************************************-->
<? if ($pro_productmultiple<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Details </h6>
	 <p class="mg-b-0">Please Provide the Products Details to be Displayed...</p>
    </div>
	<div class="btn-group " role="group"  style="padding:0px; margin-right: 0px;">
	 <?if ($priorityicon<>"No") { ?>
	  <a title="Set Priority Product Details" href="setpriorityproductdetails.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	</a>
   <? } ?>
	<a title="Add Product Details" href="addproductdetails.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i><span class="tx-success tx-uppercase tx-bold " >ADD</span></a> &nbsp;  &nbsp; &nbsp;	  
	</div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25"> 
   <?
   $j=1;
 $productdetails_where="productno =$productno  order by `priority` asc";
 $productdetails_result = $obj->select_all_values('productdetails', $productdetails_where,'');
 foreach($productdetails_result as $productdetails_row){
	$j++;
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
  $renewed = $productdetails_row["renewed"];
  
 $productprices_where="productno =$productno and  productdetailsno=$productdetailsno";
 $productprices_result = $obj->select_all_values('productprices', $productprices_where,'');
 foreach($productprices_result as $productprices_row){
  $wholesaleprice = $productprices_row["wholesaleprice"];
  $distrubutorprice = $productprices_row["distrubutorprice"];
  $retailerprice = $productprices_row["retailerprice"];
  $enduserprice = $productprices_row["enduserprice"];
  $specialofferprice = $productprices_row["specialofferprice"];
 }

  $productcolors_where="productno =$productno order by priority asc";
  $productcolors_result = $obj->select_all_values('productcolors', $productcolors_where,'');
  foreach($productcolors_result as $productcolors_row){
   $productcolorsno = $productcolors_row["productcolorsno"];
   $colorname = $productcolors_row["colorname"];
   $colorcode = $productcolors_row["colorcode"];
  }
 ?>	
	 <div class="col-xl-6 mg-t-20 mg-xl-t-0 pt-4">
	 <!----menu starts--->
    <div class="row pb-3"> 
	<div class="col-12 text-right">
	<div class="btn-group " role="group"  style="padding:0px; margin-right: 0px;">
	<a title="Modify Product Details" href="modifyproductdetails.php?productno=<?echo $productno?>&productdetailsno=<?echo $productdetailsno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i></li> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
	</div>
	</div>
	</div>
   <!----menu ends--->
	  <div class="form-layout form-layout-5" style="padding:0px 19px 19px; ">
	   <? if (($pro_productcode<>0) and ($pro_productcodeauto<>1)){ ?>
	    <?if ($pro_productcodename<>"") { 
	       $productcodename = $pro_productcodename;
	      } else {
		     $productcodename = "Product Code";
	        }?>
	     <div class="row mg-t-20">
	      <label class="col-sm-4 form-control-label control-label" ><?echo $productcodename?> :</label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <?echo $productcode?>
	       </div>
	     </div>
	   <?}?>	
	   <!----pro_storage-->
		<? if ($pro_storage<>0) { ?>	
		<div class="row mg-t-20">
			  <label class="col-sm-4 form-control-label control-label" >Storage Space :</label>
			   <div class="col-sm-8 mg-t-10 mg-sm-t-0">
				<? if($storagespace==""){echo"-";}else{echo $storagespace;}?>
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
	    <label class="col-sm-4 form-control-label control-label" >Stock : </label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
         <? if($stock == 1) { ?> In Stock<? }?> 
	      <? if($stock == 0) { ?>Out Of Stock<? } ?>
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
	      <label class="col-sm-4 form-control-label control-label" >Price :</label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <?echo $enduserprice?>
	       </div>
	     </div>	   
	   <? } ?>
	   <!----Enduser Price-->		   
	   <!---- New Arrivals-->
	   <? if ($pro_newarrivals<>0){ ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >New Arrivals :</label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <?echo $newarrivals?>
	     </div>
	   </div>	   
	   <? } else { ?>
	    <input type='hidden' class="form-control" placeholder="Type New Arrivals..." id="newarrivals<?echo $j?>" name="newarrivals<?echo $j?>" value=""/>
	   <? } ?>
	   <!---- New Arrivals-->		   	   
	   <!---- SpecialOffer-->	   
	   <? if ($pro_specialoffer<>0) { ?>
	   <? if ($pro_specialofferprice<>0) { ?>		
	     <div class="row mg-t-20" >
	      <label class="col-sm-4 form-control-label control-label" >Special Offer : </label>
	       <div class="col-sm-3" style="margin-top:9px;margin-left:0px;">
	       <?echo $specialoffer?>
	       </div>
	     </div> 	      	 
         <? } ?>
	<?if($specialoffer=="Yes"){?>	  
     <div class="row mg-t-20">
	  <label class="col-sm-4 form-control-label control-label" >Special Offer Price :</label>
	   <div class="col-sm-8 mg-t-10 mg-sm-t-0">
		<?echo $specialofferprice?>			
	   </div>
	 </div>	   
     <? } ?>	
     <? } ?>	  
	   <!----Special Offer-->
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
     <? if ($pro_renewed<>0){ ?>	   
	   <!---- renewed-->
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Renewed :</label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <?echo $renewed?>
	     </div>
	   </div>	   	   
	   <!---- renewed-->
	   <? } ?>	      
	   <!---- Status-->
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Status :</label>
	     <div class="col-sm-4" style="margin-top:9px;margin-left:0px;">
	      <?echo $status?>
	     </div>
	   </div>	   	   
	   <!---- Status-->	   
	  
	   <!----Upload PDF-->
	   <? if ($pro_pdfcommon<>1) { ?>	   
	   <? if ($pro_productpdf<>0) { ?>
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" ><input type='text' class="form-control" placeholder="Type PDF Name..." id="pdfname" name="pdfname<?echo $j?>"/></label>
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
<!--***************************************MULTIPLE PRODUCT DETAILS ENDS**************************************************-->
<!--***************************************PRODUCT COLOR STARTS*******************************************************-->
<? if ($pro_colors<>0) { ?>
<?
  $productcolors_wherecondition = "productno =$productno";
  $productcolors_tcount1=$obj->totalrecords_condition('productcolors', '*', $productcolors_wherecondition);
  foreach($productcolors_tcount1 as $productcolors_row ){
   $productcolors_tcount=$productcolors_row['count(*)'];
  } 
 ?>

<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Colors </h6>
	 <p class="mg-b-0">Please Provide the Product Colors ...</p>
    </div>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
	 <?if ($priorityicon<>"No") { ?>
         <a title="Set Priority Product Colors" href="setpriorityproductcolors.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productdetailsno=<?echo $productdetailsno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY COLORS</span>
	    </a>
       <? } ?>
	  <a title="Add Product Colors" href="addproductcolors.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a> &nbsp;  &nbsp; &nbsp;      
	</div>
   </div>
   <hr>
   <!----form layout starts--->
  	<div class="form-layout ">
	 <div class="row mg-b-25">  
	  <div class="col-lg-12">
	  <div class="row">	
	    <? if($productcolors_tcount<>0) { ?>	    	 
         <!----menu strts--->
		 <?
		$r=0;
		$productcolors_where="productno =$productno order by priority asc";
		$productcolors_result = $obj->select_all_values('productcolors', $productcolors_where,'');
		foreach($productcolors_result as $productcolors_row){
			$r++;
		 $productcolorsno = $productcolors_row["productcolorsno"]; 
		 $colorname = $productcolors_row["colorname"];
		 $colorcode = $productcolors_row["colorcode"];
		?> 
		<?
		$productimages_wherecondition = "productno =$productno and productcolorsno=$productcolorsno";
		$productimages_tcount1=$obj->totalrecords_condition('productimages', '*', $productimages_wherecondition);
		foreach($productimages_tcount1 as $productimages_row ){
		$productimages_tcount=$productimages_row['count(*)'];
		} 
		?>
		 <!----form menu starts--->
		 <div class="col-lg-12">				
			<div class="row">
			 <div class="col-6 text-left mt-0"> 
			  <h6 class="tx-gray-800 "><?echo $r?> )&nbsp;<label class="form-control-label"><b> <?echo $colorname?>, <?echo $colorcode?> </b></label> </h6>	</div>		
			  <div class="col-6 text-right mt-0"> 
			  <div class="btn-group " role="group"  style="padding:0px; margin-right: 0px;">
			 <?if ($priorityicon<>"No") { ?>
			  
			 <? } ?>		   
			
			 <a title="Modify Product Colors" href="modifyproductcolors.php?productno=<?echo $productno?>&productcolorsno=<?echo $productcolorsno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY COLOR </span></a>&nbsp;&nbsp;
			 <? if($r<>1){?><a title="Delete Product Colors" onclick="return confirm('Are you sure you want to delete product colors and related product images?')"   href="deleteproductcolors.php?categoryno=<?echo $categoryno?>&productcolorsno=<?echo $productcolorsno?>&productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-close  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">DELETE</span></a> <?}?>	
			  </div>
			  </div>		
		  </div>
		</div>
		<!----form layout starts--->
	   <div class="col-lg-12">
		 <div class="row px-0 mx-0  p-0" >	
		
		  <? $productimages_where="productno =$productno  and productcolorsno=$productcolorsno order by priority asc ";
		    $productimages_result = $obj->select_all_values('productimages', $productimages_where,'');
		   foreach($productimages_result as $productimages_row){
			$pimg = $productimages_row["pimg"];
			$productimagesno = $productimages_row["productimagesno"]; 
			?>
	      <!----form Inputs starts---> 
          <div class="col-lg-2 py-3">	
			<img src="../productimages/<?echo $pimg;?>" class="img-fluid w-100 pb-2" > <br>		
			&nbsp;<a style="margin-left:90px;"  title="Modify Product Images" href="modifyproductimages.php?productno=<?echo $productno?>&productcolorsno=<?echo $productcolorsno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productimagesno=<?echo $productimagesno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit " ></i></a>&nbsp; &nbsp;&nbsp;<a title="Delete Product Colors" onclick="return confirm('Are you sure you want to delete?')"   href="deleteproductimage.php?categoryno=<?echo $categoryno?>&productimagesno=<?echo $productimagesno?>&productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-close fa-lg tx-pink " ></i></a>		
		   </div> 
		  
           <?}?> <div class="col-lg-12 pb-5"></div>					
		   <!----form Inputs starts--->	        	
		  </div>				 
		 </div>
	   <!----form layout ends--->	
		 <?}?>	 	    			    
		<? } else { ?>
	    <div class="col-lg-12 pb-5">
	     Product colors  are not yet added...		
	    </div>
		<? } ?> 
	   <!----form menu ends--->
	  </div>
	  </div>
	 </div>	
  	</div>	
   <!----form layout ends--->	
 </div>
 </div>
</div>	
<? } ?>
<!--***************************************PRODUCT COLOR ENDS*********************************************************-->


<!--***************************************PRODUCT SHORT FEATURE PONITS STARTS*********************************************-->
  <? if ($pro_shortfeature<>0) { ?>
 <?
  $productshortfeatures_wherecondition = "productno =$productno";
  $productshortfeatures_tcount1=$obj->totalrecords_condition('productshortfeatures', '*', $productshortfeatures_wherecondition);
  foreach($productshortfeatures_tcount1 as $productshortfeatures_row ){
   $productshortfeatures_tcount=$productshortfeatures_row['count(*)'];
  }
 ?>

<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
     <!------->
    <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Short Feature Points </h6>
	 <p class="mg-b-0">Please Provide the Short Product Feature Points ...</p>
    </div>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
	<?if ($productshortfeatures_tcount<>0) { ?>
	  <a title="Add Product Short Feature Points" href="addproductshortfeatures.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a> &nbsp;  &nbsp; &nbsp;
       <a title="Modify Product Short Feature Points" href="modifyproductshortfeatures.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
	  <? } else { ?>
	   <a title="Add Product Short Feature Points"  href="addproductshortfeatures.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a> &nbsp;  &nbsp; &nbsp;
	<? } ?>
	</div>
   </div>
   <hr>
   <!------->
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <? if ($productshortfeatures_tcount<>0) { ?>
	    <div class="col-lg-12 pb-1">
	     <ul style="margin-left:-25px;">	 
		  <?
		   $productshortfeatures_where="productno =$productno";
		   $productshortfeatures_result = $obj->select_all_values('productshortfeatures', $productshortfeatures_where,'');
		   foreach($productshortfeatures_result as $productshortfeatures_row){
			$pshortfeaturepoint = $productshortfeatures_row["pshortfeaturepoint"];
		  ?>	
		  <li class="control-label" style="text-align:left; font-weight: normal;margin-left:0px;"><?echo $pshortfeaturepoint?></label>
		  <? } ?>
		  </ul>		
	    </div>	
		<? } else { ?>
	    <div class="col-lg-12 pb-5">
	     Product Short Feature Points  are not yet added...		
	    </div>
		<? } ?> 
	   <!----form Inputs starts--->	  
	  </div>	
	</div>
	</div>	
   <!----form layout ends--->	
  </div>
 </div>
 </div>
  <!--*****Category*****-->


 <!--*****Category*****-->
</div>	
<? } ?>
<!--***************************************PRODUCT SHORT FEATURE PONITS ENDS***********************************************-->
<!--***************************************PRODUCT FEATURES STARTS*******************************************************-->
 <? if ($pro_featuredesc<>0) { ?>
 <?
  $productfeatureshead_wherecondition = "productno =$productno";
  $productfeatureshead_tcount1=$obj->totalrecords_condition('productfeatureshead', '*', $productfeatureshead_wherecondition);
  foreach($productfeatureshead_tcount1 as $productfeatureshead_row ){
   $productfeatureshead_tcount=$productfeatureshead_row['count(*)'];
  }
 ?>
 <div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Features</h6>
	 <p class="mg-b-0">Please Provide the Product Features ...</p>
    </div>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
	<?if ($productfeatureshead_tcount<>0) { ?>
       <a title="Add Product Features" href="addproductfeatures.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a> &nbsp;  &nbsp; &nbsp;
       <a title="Modify Product Features" href="modifyproductfeatures.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
	  <? } else { ?>
       <a title="Add Product Features" href="addproductfeatures.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a> &nbsp;  &nbsp; &nbsp;
	  <? } ?>
	</div>
   </div>
   <hr> 
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
		<? if ($productfeatureshead_tcount) { ?>
		<?
			$productfeatureshead_where="productno =$productno";
			$productfeatureshead_result = $obj->select_all_values('productfeatureshead', $productfeatureshead_where,'');
			foreach($productfeatureshead_result as $productfeatureshead_row){
			 $pfeaturehead = $productfeatureshead_row["pfeaturehead"];
			 $pfeaturedesc = $productfeatureshead_row["pfeaturedesc"];
			?>	
			<div class="col-lg-12">
			 <div class="input-group">
			   <label class="form-group control-label"><?echo $pfeaturehead?> : &nbsp;</label><label style="margin-top:3px;"><?echo $pfeaturedesc?></label>
			 </div>		
			</div>	
			<? } ?>		
        <? }  else { ?>	
			 <div class="col-lg-8"> <label >Product Features are  not yet added...</label></div>
		<? } ?>				
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
<!--***************************************PRODUCT FEATURES ENDS*********************************************************-->
<!--***************************************PRODUCT FEATURES PONITS STARTS*************************************************-->
<? if ($pro_feature<>0) { ?>
 <?
  $productfeatures_wherecondition = "productno =$productno";
  $productfeatures_tcount1=$obj->totalrecords_condition('productfeatures', '*', $productfeatures_wherecondition);
  foreach($productfeatures_tcount1 as $productfeatures_row ){
   $productfeatures_tcount=$productfeatures_row['count(*)'];
  }
 ?>
<div class="row row-sm mg-t-20">
 <div class="col-8">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Features Points</h6>
	 <p class="mg-b-0">Please Provide the Product Features Points...</p>
    </div>
	<? if ($productfeatures_tcount) { ?>
	 <div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
       <a title="Add Product Features Points" href="addproductfeaturespoints.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a> &nbsp;  &nbsp; &nbsp;
	   <a title="Modify Product Features Points" href="modifyproductfeaturespointssub.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productfeaturesheadingno=<?echo $productfeaturesheadingno?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
	</div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-8">
	  <div class="row">
	   <!----form Inputs starts--->	 
		 <?
		  $productfeaturesheading_where="productno =$productno";
		  $productfeaturesheading_result = $obj->select_all_values('productfeaturesheading', $productfeaturesheading_where,'');
		  foreach($productfeaturesheading_result as $productfeaturesheading_row){
		   $productfeaturesheadingno = $productfeaturesheading_row["productfeaturesheadingno"];
		   $productfeaturesheading = $productfeaturesheading_row["productfeaturesheading"];
		  ?>
			<div class="col-lg-12">
			 <div class="input-group">
			  <label class="form-group "><? if ($productfeaturesheading<>"") { ?> : &nbsp;</label><?echo $productfeaturesheading?><? } ?>
			 </div>		
			</div>	

		<? } ?>		
        <? }  else { ?>	
			 <div class="col-lg-12"> <label class="control-label">Product Feature Points are  not yet added...</label></div>
		<? } ?>		
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
<!--***************************************PRODUCT FEATURES PONITS ENDS***************************************************-->

<!--***************************************PRODUCT Short  DESCRIPTION  STARTS***************************************************-->
<? if ($pro_shortdesc<>0) { ?>
<?
 $productshortdesc_wherecondition = "productno =$productno";
 $productshortdesc_tcount1=$obj->totalrecords_condition('productshortdesc', '*', $productshortdesc_wherecondition);
 foreach($productshortdesc_tcount1 as $productshortdesc_row ){
 $productshortdesc_tcount=$productshortdesc_row['count(*)'];
 }
 if ($productshortdesc_tcount<>0) {
  $productshortdesc_where="productno =$productno";
  $productshortdesc_result = $obj->select_all_values('productshortdesc', $productshortdesc_where,'');
  foreach($productshortdesc_result as $productshortdesc_row){
   $shortdesc1 = $productshortdesc_row["shortdesc1"];
  }
 }
 
?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Short  Description</h6>
	 <p class="mg-b-0">Please Provide the Product Short  Description...</p>
    </div>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
	<?if ($productshortdesc_tcount<>0) { ?>	 
       <a title="Modify Product Short  Description" href="modifyproductshortdesc.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
	   <? } else { ?>
	   <a title="Add Product Short  Description"  href="addproductshortdesc.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a> &nbsp;  &nbsp; &nbsp;
	<? } ?>
	</div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	   <? if ($productshortdesc_tcount<>"0") { ?>   
        <div class="col-lg-12"> <label ><?echo $shortdesc1?></label></div>		
		<? } else {?>
		<div class="col-lg-12"> <label >Product Short  Description is not yet added...</label></div>
		<? } ?>
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
<!--***************************************PRODUCT Short DESCRIPTION ENDS******************************************************-->
<!--***************************************PRODUCT  DESCRIPTION  STARTS***************************************************-->
<? if ($pro_desc<>0) { ?>
<?
 $productdesc_wherecondition = "productno =$productno";
 $productdesc_tcount1=$obj->totalrecords_condition('productdesc', '*', $productdesc_wherecondition);
 foreach($productdesc_tcount1 as $productdesc_row ){
 $productdesc_tcount=$productdesc_row['count(*)'];
 }
 if ($productdesc_tcount<>0) {
  $productdesc_where="productno =$productno";
  $productdesc_result = $obj->select_all_values('productdesc', $productdesc_where,'');
  foreach($productdesc_result as $productdesc_row){
   $desc1 = $productdesc_row["desc1"];
  }
 }
 
?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Description</h6>
	 <p class="mg-b-0">Please Provide the Product Description...</p>
    </div>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
	<?if ($productdesc_tcount<>0) { ?>	 
       <a title="Modify Product Description" href="modifyproductdesc.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
	   <? } else { ?>
	   <a title="Add Product Description"  href="addproductdesc.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a> &nbsp;  &nbsp; &nbsp;
	<? } ?>
	</div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	   <? if ($productdesc_tcount<>"0") { ?>   
        <div class="col-lg-12"> <label ><?echo $desc1?></label></div>		
		<? } else {?>
		<div class="col-lg-12"> <label >Product Description is not yet added...</label></div>
		<? } ?>
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
<!--***************************************PRODUCT  PHOTOS  STARTS *******************************************************-->
<? if ($pro_productmultiple<>1) { ?>
 <? if ($pro_imagecommon<>0) { ?> 
 <?
  $productimages_wherecondition = "productno =$productno";
  $productimages_tcount1=$obj->totalrecords_condition('productimages', '*', $productimages_wherecondition);
  foreach($productimages_tcount1 as $productimages_row ){
   $productimages_tcount=$productimages_row['count(*)'];
  } 
 ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Photos</h6>
	 <p class="mg-b-0">Please Provide the Product Photos...</p>
    </div>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
	   <?if ($priorityicon<>"No") { ?>
         <a title="Set Priority Product Photos" href="setpriorityproductphotos.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productdetailsno=<?echo $productdetailsno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	    </a>
       <? } ?>
      <?if ($addicon<>"No") { ?>	   
	    <a title="Add Product Photos" href="addproductimages.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productdetailsno=<?echo $productdetailsno?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span>
		</a>
	  <? } ?>
	</div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->  
	    <? if ($productimages_tcount<>0) { ?>
		 <?
		  $productimages_where="productno =$productno  order by priority asc";
		  $productimages_result = $obj->select_all_values('productimages', $productimages_where,'');
		  foreach($productimages_result as $productimages_row){
		   $pimg = $productimages_row["pimg"];
		   $productimagesno = $productimages_row["productimagesno"]; 
		  ?>
		   <?if($pimg<>"") {?>
		   <div class="col-lg-2 py-3" >	
			<img src="../productimages/<?echo $pimg;?>" class="img-fluid w-100 pb-2" > <br>			
			<a style="margin-left:100px;"  title="Modify Product Photo" href="modifyproductimages.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productimagesno=<?echo $productimagesno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit " ></i></a>&nbsp; &nbsp;&nbsp;<a title="Delete Product Photo" onclick="return confirm('Are you sure you want to delete?')"   href="deleteproductimage.php?categoryno=<?echo $categoryno?>&productimagesno=<?echo $productimagesno?>&productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-close fa-lg tx-pink " ></i></a>
			</div>			
		   <? } ?>	
           <? } ?>		   
	       <? } else { ?>
              <div class="col-lg-8"> <label >Product Photos are not yet added...</label></div>
         <? } ?>	
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
 <? } ?> 
<!--***************************************PRODUCT PHOTOS  ENDS *********************************************************-->
<!--***************************************PRODUCT  PDF  STARTS *********************************************************-->
 <? if ($pro_pdfcommon<>0) { ?>
 <? if ($pro_productpdf<>0) { ?> 
 <?
  $productpdf_wherecondition = "productno =$productno";
  $productpdf_tcount1=$obj->totalrecords_condition('productpdf', '*', $productpdf_wherecondition);
  foreach($productpdf_tcount1 as $productpdf_row ){
   $productpdf_tcount=$productpdf_row['count(*)'];
  } 
 ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product PDF</h6>
	 <p class="mg-b-0">Please Provide the Product PDF...</p>
    </div>
	<div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
	 <?if($priorityicon<>"No" && $productpdf_tcount<>0){?>
         <a title="Set Priority Product Pdf" href="setpriorityproductpdf.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span>
	    </a>
       <?}?>
	   <?if($addicon<>"No"){?>	
	    <a title="Add Product PDF" href="addproductpdf.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span>
	   </a>
	   <?}?>
	</div>	
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <? if ($productpdf_tcount) { ?>
		<?
		  $productpdf_where="productno =$productno order by priority asc";
		  $productpdf_result = $obj->select_all_values('productpdf', $productpdf_where,'');
		  foreach($productpdf_result as $productpdf_row){
		   $pdfname = $productpdf_row["pdfname"];
		   $pdfpimg = $productpdf_row["pdfpimg"];
		   $productpdfno = $productpdf_row["productpdfno"]; 
		  ?>   
		  <?if($pdfpimg<>"") {?>
		   <div class="col-lg-12 py-2">	
			<a title="View Product Pdf" href="../productpdf/<?echo $pdfpimg;?>" target="_blank"><?if ($pdfname<>""){ ?><b><?echo $pdfname?></b><? } else { ?>VIEW PDF<? } ?></a>&nbsp;&nbsp;&nbsp;<a  title="Modify Product PDF" href="modifyproductpdf.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productpdfno=<?echo $productpdfno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" ></i></a>&nbsp; <a title="Delete Product PDF" style="display:inline-block;"onclick="return confirm('Are you sure you want to delete?')"   href="deleteproductpdf.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productpdfno=<?echo $productpdfno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-close fa-lg tx-pink " ></i></a>		
		   </div>
		<? } ?>
	    <? } ?>
		<? } else { ?>
		<div class="col-lg-8"> <label >Product PDF files are not yet added...</label></div>
		<? } ?>	
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
<? } ?>
<!--***************************************PRODUCT PDF  ENDS ************************************************************-->

<!--***************************************PRODUCT  PRICE  STARTS *********************************************************-->
<? if ($pro_productmultiple<>1) { ?>
 <? if ($pro_price<>0) { ?>
  <? 
  $productprices_wherecondition = "productno =$productno";
  $productprices_tcount1=$obj->totalrecords_condition('productprices', '*', $productprices_wherecondition);
  foreach($productprices_tcount1 as $productprices_row ){
   $productprices_tcount=$productprices_row['count(*)'];
  }
if ($productprices_tcount<>0) {
 $productprices_where="productno =$productno";
 $productprices_result = $obj->select_all_values('productprices', $productprices_where,'');
 foreach($productprices_result as $productprices_row){
  $wholesaleprice = $productprices_row["wholesaleprice"];
  $distrubutorprice = $productprices_row["distrubutorprice"];
  $retailerprice = $productprices_row["retailerprice"];
  $enduserprice = $productprices_row["enduserprice"];
  $specialofferprice = $productprices_row["specialofferprice"];
 }
}
 ?> 
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Price</h6>
	 <p class="mg-b-0">Please Provide the Product Price...</p>
    </div>
	<?if ($productprices_tcount<>0) { ?>	 
       <a title="Modify Product Price" href="modifyproductprices.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
	 <? }?>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">
  <?if ($productprices_tcount<>0) {?>	
	 <div class="col-lg-12">
	  <div class="row">
	  <!----form Inputs starts--->
	   <!----Wholesale Price-->	      
	    <? if ($pro_wholesaler<>0){ ?>
		<div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Wholesale Price in AED : &nbsp;</label><label style="margin-top:3px;"><?echo $wholesaleprice?></label>
		 </div>		
		</div>  
	   <? } ?>
	    <!----Wholesale Price-->
	    <!----Distributor Price-->	   
	    <? if ($pro_distrubutor<>0){ ?>
		<div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Distributor Price in AED : &nbsp;</label><label style="margin-top:3px;"><?echo $distrubutorprice?></label>
		 </div>		
		</div>  	     	   	    
	    <? } ?>
	    <!----Distributor Price-->	
	    <!----Retailer Price-->
	   <? if ($pro_retailer<>0){ ?>
	   <div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Retailer Price in AED : &nbsp;</label><label style="margin-top:3px;"><?echo $retailerprice?></label>
		 </div>		
		</div>  	    
	   <? } ?>
	   <!----Retailer Price-->	
	   <!----Enduser Price-->
	   <? if ($pro_enduser<>0){ ?>
	   <div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Price: &nbsp;</label><label style="margin-top:3px;"><?echo $enduserprice?></label>
		 </div>		
		</div>  	       
	   <? } ?>
	   <!----Enduser Price-->		   
	  <!----form Inputs starts--->	  
	  </div>	
	 </div>
	 <? } else { ?>
		<div class="col-lg-8"> <label >Product PDF files are not yet added...</label></div>
		<? } ?>	
	</div>	
   </div>	  
   <!----form layout ends--->	
  </div>
 </div>
</div>
<? } ?>	
<? } ?>
<!--***************************************PRODUCT PRICE  ENDS ************************************************************-->

<!--***************************************PRODUCT  SHIPPING  STARTS *********************************************************-->
<? if ($pro_shipping<>0) { ?>
<?
  $productshipping_wherecondition = "productno =$productno";
  $productshipping_tcount1=$obj->totalrecords_condition('productshipping', '*', $productshipping_wherecondition);
  foreach($productshipping_tcount1 as $productshipping_row ){
   $productshipping_tcount=$productshipping_row['count(*)'];
  }
if ($productshipping_tcount<>0) {
  $productshipping_where="productno =$productno";
 $productshipping_result = $obj->select_all_values('productshipping', $productshipping_where,'');
 foreach($productshipping_result as $productshipping_row){
  $shippingfrom = $productshipping_row["shippingfrom"];
  $leadtime = $productshipping_row["leadtime"];
  $shippingcost = $productshipping_row["shippingcost"];
  $shippingdesc = $productshipping_row["shippingdesc"];
 }
}
 ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Shipping Details</h6>
	 <p class="mg-b-0">Please Provide the Product Shipping Details....</p>
    </div>
	<?if ($productshipping_tcount<>0) { ?>	 
       <a title="Modify Product Shipping Details" href="modifyproductshipping.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
      <? } else { ?>
	    <a title="Add Product Shipping Details" href="addproductshipping.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productdetailsno=<?echo $productdetailsno?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span>
	   </a>
      <? } ?>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25"> 
 <? if ($productshipping_tcount<>0) {?>	
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <!----pro_shippedfrom-->	      
	    <? if ($pro_shippedfrom<>0){ ?>
	    <div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Shipping From : &nbsp;</label><label style="margin-top:3px;"><?echo $shippingfrom?></label>
		 </div>		
		</div>
	   <? } ?>
	    <!----Shipped From-->
	    <!----Lead Time-->	   
	    <? if ($pro_leadtime<>0){ ?>
		<div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Lead Time : &nbsp;</label><label style="margin-top:3px;"><?echo $leadtime?></label>
		 </div>		
		</div>
         <? } ?>		
	    <!----Shipping Cost-->
	    <? if ($pro_shippingcost<>0){ ?>
	     <div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Shipping Cost  : &nbsp;</label><label style="margin-top:3px;"><?echo $shippingcost?></label>
		 </div>		
		</div>
	   <? } ?>
	    <!----Shipping Cost-->	
	    <!----Shipping Description-->
	    <? if ($pro_shippingdesc<>0){ ?>
	    <div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Shipping Description  : &nbsp;</label><label style="margin-top:3px;"><?echo $shippingdesc?></label>
		 </div>		
		</div>
	   <? } ?>
	    <!----Shipping Description-->		   
	    <!----form Inputs starts--->	  
	  </div>	
	 </div>
	 <? } else { ?>
		<div class="col-lg-12"> <label >Product Shipping Details are not yet added...</label></div>
	<? } ?>	
	</div>	
   </div>	  
   <!----form layout ends--->	
  </div>
 </div>
</div>
<? }?> 
<!--***************************************PRODUCT SHIPPING  ENDS ************************************************************-->
<!--***************************************PRODUCT  WARRANTY  STARTS *********************************************************-->
<? if ($pro_keywords<>0) { ?>
<?
 $productkeywords_wherecondition = "productno =$productno";
 $productkeywords_tcount1=$obj->totalrecords_condition('productkeywords', '*', $productkeywords_wherecondition);
 foreach($productkeywords_tcount1 as $productkeywords_row ){
  $productkeywords_tcount=$productkeywords_row['count(*)'];
 }
 
  $productkeywords_where="productno =$productno";
  $productkeywords_result = $obj->select_all_values('productkeywords', $productkeywords_where,'');
  foreach($productkeywords_result as $productkeywords_row){
   $pagetitle = $productkeywords_row["pagetitle"];
   $pagedesc = $productkeywords_row["pagedesc"];
   $keywords = $productkeywords_row["keywords"];
  } 

?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product SEO Keywords</h6>
	 <p class="mg-b-0">Please Provide the Product SEO Keywords....</p>
    </div>
	<?if ($productkeywords_tcount==0) {?>	   
	<a title="Add Product Shipping Details" href="addproductkeywords.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&productdetailsno=<?echo $productdetailsno?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-plus fa-lg mg-l-30 mg-r-5 tx-success " ></i><span class="tx-success tx-uppercase tx-bold ">ADD</span></a>
   <? } else { ?>
   <a title="Modify Product SEO Keywords" href="modifyproductkeywords.php?productno=<?echo $productno?>&brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>" ><i class="fas fa-edit  mg-l-30 mg-r-5 tx-pink " ></i> <span class="tx-pink tx-uppercase tx-bold ">MODIFY</span></a>
   <? } ?>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25"> 
   <?if ($productkeywords_tcount<>0) {?>	
	 <div class="col-lg-12">
	  <div class="row">
	  <!----form Inputs starts--->
	   <!----Title-->	
        <?if ($pagetitle<>""){ ?>	   
	     <div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Page Title  : &nbsp;</label><label style="margin-top:3px;"><?echo $pagetitle?></label>
		 </div>		
		</div>
		<?}?>
		<?if ($pagedesc<>""){ ?> 
	     <div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Page Description  : &nbsp;</label><label style="margin-top:3px;"><?echo $pagedesc?></label>
		 </div>		
		</div>
	    <? } ?>	
		<?if ($keywords<>""){ ?>  		
		 <div class="col-lg-12">
		 <div class="input-group">
		   <label class="form-group control-label">Keywords  : &nbsp;</label><label style="margin-top:3px;"><?echo $keywords?></label>
		 </div>		
		  </div>
		  <? } ?>	

	  <!----form Inputs starts--->	  
	  </div>	
	 </div>
	  <? } else { ?>
		  <div class="col-lg-12"> <label >Product Keywords are not yet added...</label></div>
	<? } ?>	
	  
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


<?include ("ibottomdashboard.php")?>