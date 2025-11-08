<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?
 $productno = $_REQUEST["productno"];
 $productpdfno = $_REQUEST["productpdfno"];
 $product_where="productno =$productno";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $productno = $product_row["productno"];
  $pname1 = $product_row["pname"];
  $obrandsno = $product_row["brandsno"];
  $pstatus = $product_row["pstatus"];  
 }

 $productpdf_where="productpdfno=$productpdfno and productno=$productno ";
 $productpdf_result = $obj->select_all_values('productpdf', $productpdf_where,'');
 foreach($productpdf_result as $productpdf_row){
  $pdfpimg = $productpdf_row["pdfpimg"];
  $pdfname = $productpdf_row["pdfname"];
  $productdetailsno = $productpdf_row["productdetailsno"];
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
 $mainheading="Modify Product PDF: ".$master_brandsname; 
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
 $youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";$youarein7=""; $youarein7link=""; $youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Modify Product PDF : ".$master_categoryname;
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
 $mainheading="Modify Product PDF : ".$master_categoryname; 
 }
}
}
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
  $mainheading="Modify Product PDF : ".$master_categoryname." - ".$master_subcategory;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
	$pname="category"; $pnamesub="";
    $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
    $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
    $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
    $youarein4="Product"; $youarein4link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname;
	$youarein5="View Product Details"; $youarein5link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&productno=".$productno."&page=".$page."&pname=".$pname;
	$youarein6=""; $youarein6link=""; $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link=""; 
	$youarein9=""; $youarein9link="";
	$mainheading="Modify Product PDF  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2;
 }
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Product"; $youarein5link="product.php?productno=".$productno."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; ;
 $youarein6="View Product Details"; $youarein6link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
  $mainheading="Modify Product PDF : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
}
}
if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no;
 $youarein6="Product"; $youarein6link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&page=".$page."&pname=".$pname."&subcategory4no=".$subcategory4no;
 $youarein7="View Product Details"; $youarein7link="viewproduct.php?categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&productno=".$productno."&page=".$page."&pname=".$pname;
 $youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="Modify Product PDF: ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
}
}

if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0 && $subcategory5no<>0){
if($pname=="category" && $page=="product.php" || $page=="category.php" || $page=="viewproduct.php" || $page=="setpriorityproduct.php" || $page=="setpriorityproductphotos.php" || $page=="setpriorityproductpdf.php" || $page=="setpriorityproductcolors.php" || $page=="setpriorityproductdetails.php"){	
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
 $mainheading="Modify Product PDF : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
}
}

$youareinname="Modify Product PDF: ".$pname1;
$linkheading="Modify Product PDF :";
$subheading="";
$bodyheading="List of all Product PDF";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<form id="basicForm" method="post" action="updateproductpdf.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
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
 <input type="hidden" name="productpdfno" class="form-control" value="<?echo $productpdfno?>">
 <input type="hidden" name="oldpdfpimg" class="form-control" value="<?echo $pdfpimg?>">
<!--***************************************PRODUCT  PDF  STARTS *********************************************************-->
<? if ($pro_pdfcommon<>0) { ?>
 <? if ($pro_productpdf<>0) { ?>
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product PDF</h6>
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

	       <div class="col-lg-3">
	        <div class="form-group control-label">
	         <label class="form-control-label">PDF Name &nbsp;</label>
	        </div>		
	       </div>				  
	       <div class="col-lg-6">
	        <input type='text' class="form-control" placeholder="Type PDF Name..." id="pdfname" name="pdfname" value="<?echo $pdfname?>"/>
	       </div>
		   <div class="col-lg-3">
	        <div class="form-group control-label">
	         <label class="form-control-label">  &nbsp;</label>
	        </div>		
	       </div>
	       <div class="col-lg-3">
	        <div class="form-group control-label">
	         <label class="form-control-label">Upload PDF  &nbsp;</label>
	        </div>		
	       </div>				  
	       <div class="col-lg-6">	      
	       <input type="file" name="pdfpimg" id="file" class="form-control"  placeholder="Upload PDF..." accept="application/pdf">	       
	       </div>
		   <div class="col-lg-3">
	        <div class="form-group control-label">
	         <label class="form-control-label">  &nbsp;</label>
	        </div>		
	       </div>	
		   
		   <div class="col-lg-3">
	        <div class="form-group control-label">
	         <label class="form-control-label">View PDF  &nbsp;</label>
	        </div>		
	       </div>
		   <div class="col-lg-6" style="margin-top:10px;">
			<div class="form-group">			
			 <a  title="View Product Pdf" href="../productpdf/<?echo $pdfpimg;?>" target="_blank"><?if ($pdfname<>""){ ?><b><i class="fa fa-file-pdf fa-lg"></i></b><? } else { ?>VIEW PDF<? } ?></a>
			</div>		
		   </div>
           <div class="col-lg-3">
	        <div class="form-group control-label">
	         <label class="form-control-label">  &nbsp;</label>
	        </div>		
	       </div>		   
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


</br>
<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Submit Form</button>
 <!--<button class="btn btn-info" name="sbutton">Save & Modify Product to Same Category</button>-->
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