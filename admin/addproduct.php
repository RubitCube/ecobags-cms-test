<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?
//###############for category#############
if($categoryno<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2=""; $youarein2link="";
 $youarein3=""; $youarein3link="";$youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Add Product : ".$master_categoryname;
}
}
//for sub and category
if($categoryno<>0 && $subcategoryno<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3=""; $youarein3link="";
 $youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Add Product : ".$master_categoryname." - ".$master_subcategory;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" ||  $page=="subcategory2.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Add Product : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" ||  $page=="subcategory2.php" || $page=="subcategory3.php"  || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Add Product : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" ||  $page=="subcategory2.php" || $page=="subcategory3.php" || $page=="subcategory4.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
 $youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Add Product : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
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
	  $youarein6=""; $youarein6link="";
      $youarein7=""; $youarein7link="";
	  $youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
	  $mainheading="Add Product : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0 && $subcategory5no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory3.php" ||  $page=="subcategory2.php" ||  $page=="subcategory4.php"  ||  $page=="subcategory5.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
  $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no;
  $youarein6="Sub Category Level 5"; $youarein6link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no; 
  $youarein7=""; $youarein7link="";
  $youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
  $mainheading="Add Product : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
}
}
//###############for #############
$youareinname="Add Product";
$linkheading="Add Product :";
$subheading="";
$bodyheading="List of all Product";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<form id="basicForm" method="post" action="saveproduct.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
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
	      <label class="form-control-label"><?echo $productcodename?><? if ($pro_productcode_com<>0){ ?> &nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type='text' class="form-control" placeholder="Type Product Code..." id="productcode" name="productcode" <? if ($pro_productcode_com<>0) { ?>required<? } ?>/>
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
	      <input type="text" name="pname" class="form-control" placeholder="Type Product Name ..." required>
	     </div>		
	    </div>-->		
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
	      <label class="form-control-label">New Arrivals </label>
	     </div>
	    </div>		
	    <div class="col-lg-9" >
	     <div class="col-sm-9" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="newarrivals"  checked  id="newarrivals1" value="No">&nbsp;&nbsp;        <label for="newarrivals1">No</label>&nbsp;&nbsp;
	      <input type="radio" name="newarrivals" id="newarrivals2" value="Yes" >&nbsp;&nbsp;        <label for="newarrivals2">Yes</label>
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
	    <? if ($pro_dimension<>0){ ?>	
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Dimension &nbsp;<span class="tx-danger"></span></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <input type="text" name="dimension" class="form-control" placeholder="Type Product Dimension ..." >
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
	      <input type="text" name="productcolor" class="form-control" placeholder="Type Product Color ..." >
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
	      <input type="text" name="materials" class="form-control" placeholder="Type Product Materials ..." >
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
	      <select class="form-control select2-show-search" name="brandsno" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" required autofocus required>
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
			<option value="<?echo $brandsno?>"><?echo $brandsname?></option>
			<? } ?>
	      </select>
	     </div>		
	    </div>
	   <?}?>		
		<div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Status &nbsp;<span class="tx-danger">*</span></label>
	     </div>
	    </div>	
	    <div class="col-lg-9">
	     <div class="col-sm-9" style="margin-top:9px;margin-left:0px;">
	      <input type="radio" name="pstatus"  checked  id="pstatus1" value="Active">&nbsp;&nbsp;        <label for="pstatus1">Active</label>&nbsp;&nbsp;
	      <input type="radio" name="pstatus" id="pstatus2" value="Inactive" >&nbsp;&nbsp;        <label for="pstatus2">Inactive</label>
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
	      <label class="col-sm-4 form-control-label control-label" >Price <? if ($pro_enduser_com<>0) { ?><? if ($j==1) { ?>&nbsp;<span class="tx-danger"></span><? } ?><? } ?></label>
	       <div class="col-sm-8 mg-t-10 mg-sm-t-0">
	        <input type="number"  min="1"  step="any" name="enduserprice<?echo $j?>" class="form-control" placeholder="Type End User Price ..." <? if ($pro_enduser_com<>0) { ?><? if ($j==1) { ?><? } ?><? } ?> pattern=".*[^ ].*" />
	       </div>
	     </div>	   
	   <? } else { ?>
	    <input type="hidden"  min="1"  step="any" name="enduserprice<?echo $j?>">
	   <? } ?>
	   <!----Enduser Price-->	
	   
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

<!--***************************************PRODUCT COLOR STARTS*******************************************************-->
<? if ($pro_colors<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Colors </h6>
	 <p class="mg-b-0">Please Provide the Product Colors ...</p>
    </div>
   </div>
   <hr>
   
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <div class="col-lg-11">
	     <table  id="dynamic_field3" style="width:108%;" cellpadding="5">  
		 <tr> 
		    <td> <label class="form-control-label"><b>Product Color Name&nbsp;<small>[ Eg: White ]</small>&nbsp;<span class="tx-danger">*</span></b></label></td>
	        <td> <label class="form-control-label"><b>Product Color Code&nbsp;<small>[ Eg: #FFFFFF ]</small>&nbsp;<span class="tx-danger">*</span></b></label></td> 	        			
	      </tr> 
		  <? for($p=1;$p<=3;$p++) { ?>
	      <tr>  
	       <td><input type='text' class="form-control" name="colorname<?echo $p?>" placeholder="Product Color Name" <? if ($p==1) { ?>required<? } ?>></td>
	       <td><input type='color'  name="colorcode<?echo $p?>" placeholder="Product Color Code" <? if ($p==1) { ?>required<? } ?>></td>            
	      </tr> 
		  <?}?>	        		  
	     </table>  		
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
<!--***************************************PRODUCT COLOR ENDS*********************************************************-->
<!--***************************************MULTIPLE PRODUCT DETAILS ENDS**************************************************-->
<!--***************************************PRODUCT  DESCRIPTION  STARTS***************************************************-->
<? if ($pro_shortdesc<>0) { ?>
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
	    
	    <div class="col-lg-12"><label class="form-control-label"><b>Product Short Description </b>&nbsp;<span class="tx-danger">*</span></label>
	     <textarea required   placeholder="Type text here..." name="shortdesc1" rows="5" class="form-control"></textarea>		
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
<!--***************************************PRODUCT SHORT FEATURE PONITS STARTS*********************************************-->
<? if ($pro_shortfeature<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Short Feature Points</h6>
	 <p class="mg-b-0">Please Provide the Short Product Feature Points ...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <div class="col-lg-2">
	      <div class="form-group control-label">
	       <label class="form-control-label">Product Short Feature Points<? if ($pro_shortfeature<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	      </div>		
	     </div>
	    <div class="col-lg-10">
	     <table  id="dynamic_field" style="width:105%;" cellpadding="5">  
	      <tr>  
	       <td><input type='text' class="form-control" name="pshortfeaturepoint[]" required></td>  	
	       <td><a href="javascript:void(0);" id="add" class="add_button1 pull-left" title="Add">
		   <i class="fa fa-plus" aria-hidden="true"></i></a>
		   </td>  
	      </tr>  
	     </table>  		
	    </div>	
	   <!----form Inputs starts--->	  
	  </div>	
	</div>
	</div>	
   <!----form layout ends--->	
  </div>
 </div>
 </div>
</div>	
<? } ?>
<!--***************************************PRODUCT SHORT FEATURE PONITS ENDS***********************************************-->
<!--***************************************PRODUCT FEATURES STARTS*******************************************************-->
<? if ($pro_featuredesc<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Features </h6>
	 <p class="mg-b-0">Please Provide the Product Features ...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <div class="col-lg-11">
	     <table  id="dynamic_field2" style="width:110%;" cellpadding="5">  
		  <tr> 
		 <td>  <b>Product Features Heading&nbsp;<span class="tx-danger"></span></b></td>
	       <td>  <b>Product Features Description &nbsp;<span class="tx-danger"></span></b></td>		 
	       <td></td>  
	      </tr>
	      <tr>  
	       <td><input type='text' class="form-control" name="pfeaturehead[]" ></td>
	       <td><input type='text' class="form-control" name="pfeaturedesc[]" ></td>		 
	       <td><a href="javascript:void(0);" id="add2" class="add_button1 pull-left" title="Add"><i class="fa fa-plus" aria-hidden="true"></i></a></td>  
	      </tr>  
	     </table>  		
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
<!--***************************************PRODUCT FEATURES ENDS*********************************************************-->

<!--***************************************PRODUCT FEATURES PONITS STARTS*************************************************-->
<? if ($pro_feature<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Features Points</h6>
	 <p class="mg-b-0">Please Provide the Product Features ...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Feature Heading  &nbsp;<span class="tx-danger"></span></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="form-group control-label">
	      <input type="text" name="productfeaturesheading" class="form-control" placeholder="Type Feature Heading ..." pattern=".*[^ ].*" />
	     </div>		
	    </div>	
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Feature Points  &nbsp;<span class="tx-danger">*</span></label>
	     </div>		
	    </div>		
	    <div class="col-lg-9">
	     <table  id="dynamic_field3" style="width:110%;" cellpadding="5">  
	      <tr>  
	       <td><input type='text' class="form-control" name="pfeaturepoint[]" required></td>		 
	       <td><a href="javascript:void(0);" id="add3" class="add_button1 pull-left" title="Add"><i class="fa fa-plus" aria-hidden="true"></i></a></td>  
	      </tr>  
	     </table>  		
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
<!--***************************************PRODUCT FEATURES PONITS ENDS***************************************************-->
<!--***************************************PRODUCT  DESCRIPTION  STARTS***************************************************-->
<? if ($pro_desc<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Description</h6>
	 <p class="mg-b-0">Please Provide the Product Description...</p>
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
	     <textarea  placeholder="Type text here..." name="desc1" class="form-control" rows="10"></textarea>		
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
<!--***************************************PRODUCT  ADDITIONAL TABS  STARTS**********************************************-->
<? if ($pro_adddesc<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Additional Tabs</h6>
	 <p class="mg-b-0">Please Provide the Product Additional Tabs...</p>
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
	     <input type='text' class="form-control" placeholder="Type Additional Tab Heading..." id="tabhead" name="tabhead"/>		
	    </div>	
	    <div class="col-lg-12 pt-3">
	     <textarea id="summernote2" placeholder="Type text here..." name="tabdesc1" class="form-control" rows="10"></textarea>		
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
<!--***************************************PRODUCT ADDITIONAL TABS   ENDS************************************************-->
<!--***************************************PRODUCT  PHOTOS  STARTS *******************************************************-->
<? if ($pro_productmultiple<>1) { ?>
 <? if ($pro_imagecommon<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Photos</h6>
	 <p class="mg-b-0">Please Provide the Product Photos...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->  
	    <? if ($pro_imagesmultiple<>0) { ?>
	     <? $imax = 7?><? } else { ?><? $imax = 1?><? } ?>
	      <? for($i=1;$i<=$imax;$i++) { ?>
	      <div class="col-lg-3">
	        <div class="form-group control-label">
	         <label class="form-control-label" style="margin-top:10px;">Upload Photos  &nbsp;<? if($i==1){?>&nbsp;<span class="tx-danger">*</span><?}?></label>
			 <small> <span class="tx-danger">[Image Size :  <?echo $pro_imagesize?> ]</span></small>
	        </div>		
	       </div>				  
	       <div class="col-lg-8">
		   <input type="file" name="pimg<?echo $i?>" <? if ($i==1) { ?>required<? } ?> placeholder="Upload Image..."  accept='image/*'/ style="margin-top:10px;margin-left:25px;" onchange="document.getElementById('output<? echo $i ?>').src = window.URL.createObjectURL(this.files[0])">
          &nbsp; &nbsp; &nbsp; &nbsp; <img id="output<? echo $i ?>" style="width:80px;height:60px;" class="border-0" src="img/defaultimg.png"/>			
	       </div>	
	      <?}?>
	       <input type="hidden" name="imax" class="form-control" value="<?echo $imax?>">	  
	   <!----form Inputs starts--->	  
	  </div>	
	 </div>
	</div>	
   </div>
   <!----form layout ends--->	
  </div>
 </div>
</div>
 <? } else { ?>
  <input type="hidden" name="pro_imagecommon" class="form-control" value="<?echo $pro_imagecommon?>">
 <? } ?>
 <? } else { ?>
  <input type="hidden" name="pro_imagecommon" class="form-control" value="<?echo $pro_imagecommon?>">	
<? } ?>
<!--***************************************PRODUCT PHOTOS  ENDS *********************************************************-->
<!--***************************************PRODUCT  PDF  STARTS *********************************************************-->
<? if ($pro_pdfcommon<>0) { ?>
 <? if ($pro_productpdf<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product PDF </h6>
	 <p class="mg-b-0">Please Provide the Product PDF...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <? if ($pro_productpdfmuliple<>0) { ?>
	     <? $pdfimax = 5?>
	    <? } else { ?>
	     <? $pdfimax = 1?>
	    <? } ?>
	    <? for($j=1;$j<=$pdfimax;$j++) { ?>
	     <div class="col-lg-8">
	      <div class="form-group">
	       <input type='text' class="form-control" placeholder="Type PDF Name..." id="pdfname<?echo $j?>" name="pdfname<?echo $j?>"/>
	      </div>		
	     </div>	  
	     <div class="col-lg-4">	 		 
		  <input type="file" name="pdfpimg<?echo $j?>" class="form-control" placeholder="Upload PDF..."  accept="application/pdf"  style="margin-bottom:10px;">		 
	     </div>
	    <? } ?>
	     <input type="hidden" name="pdfimax" class="form-control" value="<?echo $pdfimax?>">   
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
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Price</h6>
	 <p class="mg-b-0">Please Provide the Product Price...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	  <!----form Inputs starts--->
	   <!----Wholesale Price-->	      
	    <? if ($pro_wholesaler<>0){ ?>
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label">Wholesale Price in AED <? if ($pro_wholesaler_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	      </div>		
	     </div>
	     <div class="col-lg-9">
	      <div class="input-group">
	       <input type="number"  min="1"  step="any" name="wholesaleprice" class="form-control" placeholder="Type Wholesale Price ..." <? if ($pro_wholesaler_com<>0) { ?>required<? } ?> pattern=".*[^ ].*" />
	      </div>		
	     </div>	   
	    <? } else { ?>
	     <input type="hidden"  min="1"  step="any" name="wholesaleprice<?echo $j?>">
	   <? } ?>
	    <!----Wholesale Price-->
	    <!----Distributor Price-->	   
	    <? if ($pro_distrubutor<>0){ ?>
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label">Distributor Price in AED <? if ($pro_distrubutor_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	      </div>		
	     </div>
	     <div class="col-lg-9">
	      <div class="input-group">
	       <input type="number"  min="1"  step="any" name="distrubutorprice" class="form-control" placeholder="Type Distributor Price ..." <? if ($pro_distrubutor_com<>0) { ?>required<? } ?> pattern=".*[^ ].*" />
	      </div>		
	     </div>		   	   
	    <? } else { ?>
	     <input type="hidden"  min="1"  step="any" name="distrubutorprice">
	    <? } ?>
	    <!----Distributor Price-->	
	    <!----Retailer Price-->
	   <? if ($pro_retailer<>0){ ?>
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label">Retailer Price  in AED <? if ($pro_retailer_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	      </div>		
	     </div>
	     <div class="col-lg-9">
	      <div class="input-group">
	       <input type="number"  min="1"  step="any" name="retailerprice" class="form-control" placeholder="Type Retailer Price ..." <? if ($pro_retailer_com<>0) { ?>required<? } ?> pattern=".*[^ ].*" />
	      </div>		
	     </div>	   	   
	   <? } else { ?>
	    <input type="hidden"  min="1"  step="any" name="retailerprice">
	   <? } ?>
	   <!----Retailer Price-->	
	   <!----Enduser Price-->
	   <? if ($pro_enduser<>0){ ?>
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label"> Price <? if ($pro_enduser_com<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	      </div>		
	     </div>
	     <div class="col-lg-9">
	      <div class="input-group">
	       <input type="number"  min="1"  step="any" name="enduserprice" class="form-control" placeholder="Type End User Price ..." <? if ($pro_enduser_com<>0) { ?>required<? } ?> pattern=".*[^ ].*" />
	      </div>		
	     </div>		      
	   <? } else { ?>
	    <input type="hidden"  min="1"  step="any" name="enduserprice">
	   <? } ?>
	   <!----Enduser Price-->		   
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
<!--***************************************PRODUCT PRICE  ENDS ************************************************************-->
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
	       <input type="text" name="shippingfrom" class="form-control" placeholder="Type Shipped From ..." pattern=".*[^ ].*" />
	      </div>		
	     </div>	   
	    <? } else { ?>
	     <input type="hidden" name="shippingfrom" class="form-control" placeholder="Type Shipped From ..." pattern=".*[^ ].*" />
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
	       <input type="text" name="leadtime" class="form-control" placeholder="Type Lead Time ..." pattern=".*[^ ].*" />
	      </div>		
	     </div>		   	   
	    <? } else { ?>
	     <input type="hidden" name="leadtime" class="form-control" placeholder="Type Shipped From ..." pattern=".*[^ ].*" />
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
	       <input type="text" name="shippingcost" class="form-control" placeholder="Type Shipping Cost ..." pattern=".*[^ ].*" />
	      </div>		
	     </div>	   	   
	   <? } else { ?>
	    <input type="hidden" name="shippingcost" class="form-control" placeholder="Type Shipped From ..." pattern=".*[^ ].*" />
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
	       <textarea id="summernote3" placeholder="Type text here..." name="shippingdesc" class="form-control" rows="8"></textarea> 	     		
	     </div>		      
	   <? } else { ?>
	    <input type="hidden" name="shippingdesc" class="form-control" placeholder="Type Shipped From ..." pattern=".*[^ ].*" />
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
<!--***************************************PRODUCT SHIPPING  ENDS ************************************************************-->
<!--***************************************PRODUCT  WARRANTY  STARTS *********************************************************-->
<? if ($pro_warranty<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Warranty Information</h6>
	 <p class="mg-b-0">Please Provide the Warranty Information.....</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	  <!----form Inputs starts--->
	   <!----warranty-->	      
	     <div class="col-lg-12">
	       <textarea id="summernote4" placeholder="Type text here..." name="warranty" class="form-control" rows="8"></textarea>		
	     </div>	   
	    <!----warranty -->		   
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
<!--***************************************PRODUCT  WARRANTY  STARTS *********************************************************-->
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
	       <input type="text" name="pagetitle" class="form-control" placeholder="Type Page Title ..." pattern=".*[^ ].*" /> 	     		
	     </div>		   
	    <!----Title -->	
	    <!----Description-->	      
	     <div class="col-lg-3">
	      <div class="form-group control-label">
	       <label class="form-control-label"> Page Description</label>
	      </div>		
	     </div>
	     <div class="col-lg-9">	      
	       <textarea  placeholder="Type Description..." name="pagedesc" class="form-control" rows="4"></textarea> 	     		
	     </div>		   
	    <!----Description -->
	    <!----Keywords-->	      
	     <div class="col-lg-3 pt-2">
	      <div class="form-group control-label">
	       <label class="form-control-label"> Keywords</label>
	      </div>		
	     </div>
	     <div class="col-lg-9 pt-2">	      
	       <textarea  placeholder="Type Keywords..." name="keywords" class="form-control" rows="4"></textarea>	 	     		
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
 <!--<button class="btn btn-info" name="sbutton">Save & Add Product to Same Category</button>-->
</div>
</form>

    
<!-------------------------pfeaturedesc increment-------------------------------> 
<script src="js/jquery-1.10.1.min.js"></script>  
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" name="pshortfeaturepoint[]" required></td><td><a href="javascript:void(0);" id="'+i+'" name="remove" class="remove_button pull-left btn_remove" title="Remove " ><i class="fa fa-minus" aria-hidden="true"></i></a></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });   
 
 
  
    /*************** featues points*******************/
	var p=1;  
	$('#add2').click(function(){  
           p++;  
           $('#dynamic_field2').append('<tr id="row2'+p+'"><td><input type="text" class="form-control" name="pfeaturehead[]"  ></td><td><input type="text" class="form-control" name="pfeaturedesc[]"  ></td><td><a href="javascript:void(0);" id="'+p+'" name="remove2" class="remove_button pull-left btn_remove2" title="Remove " ><i class="fa fa-minus" aria-hidden="true"></i></a></td></tr>');  
      });  
	  
	    $(document).on('click', '.btn_remove2', function(){  
           var button_id = $(this).attr("id");   
           $('#row2'+button_id+'').remove();  
      });  
 
	/*************** featues points*******************/
	 /*************** color incermnt*******************/
 /*************** featues points*******************/
	var t=1;  
	$('#add3').click(function(){  
           t++;  
           $('#dynamic_field3').append('<tr id="row3'+t+'"><td><input type="text" class="form-control" name="colorname[]"  placeholder="Product Color Name" required></td><td><input type="text" class="form-control" name="colorcode[]"  placeholder="Product Color Code" required></td><td><input type="file" name="pimg[]" class="form-control" placeholder="Upload Image..."  accept="image/*"/ style="margin-bottom:10px;"></td> <td><a href="javascript:void(0);" id="'+t+'" name="remove3" class="remove_button pull-left btn_remove3" title="Remove " ><i class="fa fa-minus" aria-hidden="true"></i></a></td></tr>'); 
      });  
	  
	    $(document).on('click', '.btn_remove3', function(){  
           var button_id = $(this).attr("id");   
           $('#row3'+button_id+'').remove();  
      });  
 
	/*************** featues points*******************/
	
	  	
	/*************** color points*******************/
	
	 /*************** featues points*******************/
	var y=1;  
	$('#add4').click(function(){  
           y++;  
           $('#dynamic_field4').append('<tr id="row4'+y+'"><td><input type="text" class="form-control" name="storagespace[]"  placeholder="Product Storage Space" required></td><td><a href="javascript:void(0);" id="'+y+'" name="remove4" class="remove_button pull-left btn_remove4" title="Remove " ><i class="fa fa-minus" aria-hidden="true"></i></a></td></tr>'); 
      });  
	  
	    $(document).on('click', '.btn_remove4', function(){  
           var button_id = $(this).attr("id");   
           $('#row4'+button_id+'').remove();  
      });  
 
	/*************** featues points*******************/
 
 });   
 </script>
<!-------------------------pfeaturedesc increment------------------------------->		
<?include ("ibottomdashboard.php")?>

 