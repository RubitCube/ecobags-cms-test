<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?
 $productdetailsno = $_REQUEST["productdetailsno"];
 $productno = $_REQUEST["productno"];
 $product_where="productno =$productno ";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $productno = $product_row["productno"];
  $pname1 = $product_row["pname"];
  $obrandsno = $product_row["brandsno"];
  $pstatus = $product_row["pstatus"];  
 }
 $productdetails_where="productno =$productno  order by `priority` asc";
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
  if($newarrivals==""){$newarrivals="-";}
  $status = $productdetails_row["status"];
  $renewed = $productdetails_row["renewed"];
  $dimension = $productdetails_row["dimension"];
  if($dimension==""){$dimension="-";}
  $materials = $productdetails_row["materials"];
  if($materials==""){$materials="-";}
  $productcolor = $productdetails_row["productcolor"];
  if($productcolor==""){$productcolor="-";}
 }
//################################################
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
 $mainheading="Add Product Images : ".$master_brandsname; 
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
 $mainheading="Add Product Images : ".$master_categoryname;
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
 $mainheading="Add Product Images : ".$master_categoryname; 
 }
}
}
if($categoryno<>0 && $subcategoryno<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="subcategory.php" || $page=="subcategory2.php" || $page=="subcategory3.php" || $page=="subcategory4.php" || $page=="subcategory5.php" || $page=="subcategory6.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){
  $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Product"; $youarein3link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="View Product Details"; $youarein4link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein5=""; $youarein5link=""; $youarein6=""; $youarein6link=""; $youarein7=""; $youarein7link="";$youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Add Product Images : ".$master_categoryname." - ".$master_subcategory;
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
	$mainheading="Add Product Images : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2;
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
 $mainheading="Add Product Images  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
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
	  $mainheading="Add Product Images  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
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
	  $mainheading="Add Product Images  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
}
}
//################################################
$youareinname="Add Product Images : ".$productcode;
$linkheading="Add Product Images :";
$subheading="";
$bodyheading="List of all Product Images";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<form id="basicForm" method="post" action="saveproductimages.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
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
 <input type="hidden" name="productno" value="<?echo $productno?>">
 <input type="hidden" name="productdetailsno" class="form-control" value="<?echo $productdetailsno?>">
<!--***************************************PRODUCT  PHOTOS  STARTS *******************************************************-->

<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Photos</h6>
	 <p class="mg-b-0">Please Provide the Product Photos...<small> <span class="tx-danger">[JPEG / WEBP /AVIF Image Size :  <?echo $pro_imagesize?> ]</span></small>	</p>
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
	     <? $imax = 6?><? } else { ?><? $imax = 1?><? } ?>
	      <? for($i=1;$i<=$imax;$i++) { ?>
	       <div class="col-lg-3">
	        <div class="form-group control-label">
	         <label class="form-control-label" style="margin-top:10px;">Upload Photos  &nbsp;<? if($i==1){?>&nbsp;<span class="tx-danger">*</span><?}?></label>
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

<!--***************************************PRODUCT PHOTOS  ENDS *********************************************************-->


</br>
<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Submit Form</button>
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
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" name="pshortfeaturepoint[]" ></td><td><a href="javascript:void(0);" id="'+i+'" name="remove" class="remove_button pull-left btn_remove" title="Remove " ><i class="fa fa-minus" aria-hidden="true"></i></a></td></tr>');  
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
	 /*************** featues points*******************/
	var t=1;  
	$('#add3').click(function(){  
           t++;  
           $('#dynamic_field3').append('<tr id="row3'+t+'"><td><input type="text" class="form-control" name="pfeaturepoint[]"  ></td><td><a href="javascript:void(0);" id="'+t+'" name="remove3" class="remove_button pull-left btn_remove3" title="Remove " ><i class="fa fa-minus" aria-hidden="true"></i></a></td></tr>');  
      });  
	  
	    $(document).on('click', '.btn_remove3', function(){  
           var button_id = $(this).attr("id");   
           $('#row3'+button_id+'').remove();  
      });  
 
	/*************** featues points*******************/
 
 });  
 </script>
<!-------------------------pfeaturedesc increment------------------------------->		
<?include ("ibottomdashboard.php")?>