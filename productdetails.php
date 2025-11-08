<?include ("itophead.php")?>

<?include ("itopshamsnaturals.php")?>
<? $productno=$_REQUEST["productno"]; ?>

<?$productcategory_where="productno =$productno and  pstatus='Active'";
   $productcategory_orderby="ORDER BY categoryno asc";
   $productcategory_result = $obj->select_all_values('productcategory', $productcategory_where, $productcategory_orderby);
   foreach($productcategory_result as $productcategory_row){
    $categoryno =$productcategory_row["categoryno"];
	//Category banner
	$where="status='Active' and categoryno='$categoryno'";
	$result_category = $obj->select_all_values('category', $where,'');
	foreach($result_category as $category_row)
	{
	 $categorybanner = $category_row['categorybanner'];
	 if($categorybanner=="")
	 {
	   $categorybannerpath=$mainurlindex."img/nocategorybanner.jpg"; 
	 }
	 else{
	   $categorybannerpath=$mainurlindex."categorybanner/".$categorybanner;
	 } 
	}
    //Category banner
	
	include("icallcategory.php");
    $subcategoryno =$productcategory_row["subcategoryno"];
	
	//subcategory banner
	$where="status='Active' and subcategoryno='$subcategoryno' and categoryno='$categoryno'";
	$result_subcategory = $obj->select_all_values('subcategory', $where,'');
	foreach($result_subcategory as $subcategory_row)
	{
	 $subcategorybanner = $subcategory_row['subcategorybanner'];
	 if($subcategorybanner=="")
	 {
	   $categorybannerpath=$mainurlindex."img/categorybanner.jpg"; 
	 }
	 else{
	   $categorybannerpath=$mainurlindex."subcategorybanner/".$subcategorybanner;
	 } 
	}
	
   //subcategory banner
	 include("icallsubcategory.php");
   }
?>
<style>
.productsheadingbg{ 
 background-image: url(<?php echo $categorybannerpath; ?>);
 background-position: top;
 background-repeat:no-repeat;
}
</style>
<?
 $product_where="productno =$productno and  pstatus='Active'";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $productno = $product_row["productno"];
  $brandsno = $product_row["brandsno"];
  $productname = $product_row["pname"];
  $pstatus = $product_row["pstatus"];  
  $pnamemask = $product_row["pnamemask"];  
 }
?>
<?
  $productdetails_where="productno =$productno  and status='Active'";
  $productdetails_result = $obj->select_all_values('productdetails', $productdetails_where,'');
  foreach($productdetails_result as $productdetails_row){
	$productdetailsno  = $productdetails_row["productdetailsno"]; 
	$productcode  = $productdetails_row["productcode"]; 
	$dimension  = $productdetails_row["dimension"]; 
	$materials  = $productdetails_row["materials"]; 
	$productcolor  = $productdetails_row["productcolor"];
  }
?>
<!------------------------- heading starts ------------------------->
<div class="container-fluid fluid0 productsheadingbg py-5">
 <div class="container py-5">
  <div class="row py-lg-5">
   <div class="col-12 ">
    <h1 class="tbannerproductsheading mb-0"><? echo $master_categoryname?><?if ($subcategoryno<>0){ ?> - <? echo $subcategory?> <? } ?></h1>
   </div>
  </div>
 </div>
</div>
<!------------------------- heading ends ------------------------->
<div class="container-fluid fluid0 bgwhite py-3 pb-lg-5 px-2 mb-5">
 <div class="container pb-lg-5 px-0">
  <div class="row px-0 mx-0 pb-5 "> 
   <div class="col-12 float-end d-none d-lg-block">
     <ul class="d-flex float-end" style="list-style:none;">
     <li class="pe-3"><a href="<?echo $mainurlindex;?>ShamsNaturals-Home" class="tyouarein">Home</a></li>

	  <?if($subcategoryno<>0 && $categoryno<>0){?> 
	  <li class="pe-3"><span class="tyouarein">»</span></li>
      <li class="pe-3"><a href="<?echo $mainurlindex;?>SubProducts/<?echo $categoryno?>/<?echo $subcategoryno?>"   class="tyouarein"><? echo $master_categoryname?></a></li>
	  <?}?> 
	  
	  <?if($subcategoryno==0 && $categoryno<>0){?>
	  <li class="pe-3"><span class="tyouarein">»</span></li>
      <li class="pe-3"><a  href="<?echo $mainurlindex;?>Products/<?echo $categoryno?>/0" class="tyouarein"><? echo $master_categoryname?></a></li>
	  <?}?> 
	 
	 <?if ($subcategoryno<>0 && $categoryno<>0){?> 
	  <li class="pe-3"><span class="tyouarein">»</span></li>
      <li class="pe-3"><a  href="<?echo $mainurlindex;?>Products/<?echo $categoryno?>/<?echo $subcategoryno?>" class="tyouarein"><? echo $subcategory?></a></li>
	 <?}?>
	 	 
     <?if ($productcode<>""){ ?>
	 <li class="pe-3"><span class="tyouarein">»</span></li>
     <li><a class="tyouareinactive"><? echo $productcode?></a></li>
	 <? } ?> 
    </ul>
   </div>
  </div>
 
 
 
  <div class="row  px-0 mx-0"> 
   <!------------ Product Image Slider Section Desktop Starts ------------>
   <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5 pb-4 d-none d-lg-block">
	<link rel="stylesheet" href="<?echo $mainurlindex?>css/main.css">
    <div class="px-0 pb-4 productborderd">
     <div class="container px-3">
      <!------------ Product Image Starts ------------>
	  <?
	 $productimages_wherecondition = "productno =$productno";
	  $productimages_tcount1=$obj->totalrecords_condition('productimages', '*', $productimages_wherecondition);
	  foreach($productimages_tcount1 as $productimages_row ){
	   $productimages_tcount=$productimages_row['count(*)'];
	  }
	 if ($productimages_tcount<>0) { 	
	?>
      <!------------ Product Image Starts ------------>
	   <?$productimages_where="productno=$productno";
		 $productimages_orderby="ORDER BY priority  asc LIMIT 1";
		 $productimages_result = $obj->select_all_values('productimages', $productimages_where, $productimages_orderby);
		 foreach($productimages_result as $productimages_row){
		  $productimagesno =$productimages_row["productimagesno"];
		  $pimg=$productimages_row["pimg"];	 
		 ?>
      <div class="show" href="<?echo $mainurlindex?>productimages/<?echo $pimg;?>" style="position: relative;">
       <img src="<?echo $mainurlindex?>productimages/<?echo $pimg;?>" id="show-img" class="img-fluid py-3" style="width: 100%; height: 100%;">
	  </div> 
      <!------------ Product Image Ends ------------>
	 <?}?> 
	 
      <!------------ Product Image Thumbnails Starts ------------>
      <div class="small-img">
       <img src="<?echo $mainurlindex?>img/icon-next.png" class="icon-left" alt="" id="prev-img">
       <div class="small-container">
        <div id="small-img-roll">
		<?$productimages_where="productno=$productno";
		 $productimages_orderby="ORDER BY priority  asc";
		 $productimages_result = $obj->select_all_values('productimages', $productimages_where, $productimages_orderby);
		 foreach($productimages_result as $productimages_row){
		  $productimagesno =$productimages_row["productimagesno"];
		  $pimg=$productimages_row["pimg"];	 
		 ?>
         <img src="<?echo $mainurlindex?>productimages/<?echo $pimg;?>" class="show-small-img" alt="now">
		 <?}?> 
        </div>
       </div>
       <img src="<?echo $mainurlindex?>img/icon-next.png" class="icon-right" alt="" id="next-img">
      </div> 
      <!------------ Product Image Thumbnails Ends ------------>
	  
	 <?}?>
	 </div>
     <script src="<?echo $mainurlindex?>scripts/zoom-image.js"></script>
     <script src="<?echo $mainurlindex?>scripts/main.js"></script>  
    </div>
   </div>
   <!------------ Product Image Slider Section Desktop Ends ------------>
   
   
   <!------------ Product Image Slider Section Mobile Starts ------------>
   <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5 pb-3 pb-lg-4 d-block d-lg-none">   
    <!--------- Product Name Mobile Starts ------------>
    <div class="row mx-0 d-block d-lg-none pt-3">
     <h1 class="tproductdetailshead mb-0 pb-2 px-0">Code : <?echo $productcode;?> </h1>
	</div>
	<div class="row mx-0 d-block d-lg-none pb-2">   
     <hr class="hrline01"> 
    </div>
    <!--------- Product Name Mobile Ends ------------>

	<!--------------- image slider mobile starts ------------------->
    <div class="row multiple-items d-block d-md-block d-lg-none mx-0 py-3 pt-lg-0">		
     <?
	 $productimages_wherecondition = "productno =$productno";
	  $productimages_tcount1=$obj->totalrecords_condition('productimages', '*', $productimages_wherecondition);
	  foreach($productimages_tcount1 as $productimages_row ){
	   $productimages_tcount=$productimages_row['count(*)'];
	  }
	 if ($productimages_tcount<>0) { 	
	?>
      <!------------ Product Image Starts ------------>
	   <?$productimages_where="productno=$productno";
		 $productimages_orderby="ORDER BY priority  asc ";
		 $productimages_result = $obj->select_all_values('productimages', $productimages_where, $productimages_orderby);
		 foreach($productimages_result as $productimages_row){
		  $productimagesno =$productimages_row["productimagesno"];
		  $pimg=$productimages_row["pimg"];	 
		 ?> 
    <!------------ product 1 starts ------------> 
     <div class="col-12 col-sm-12 col-md-12 col-lg-4 px-0">
      <img src="<?echo $mainurlindex?>productimages/<?echo $pimg;?>" style="border:1px solid #777777;" class="img-fluid w-100">
     </div>
    <!------------ product 1 ends ------------> 
	<?}?> 
	<?}?> 
	</div>
   <!--------------- image slider mobile ends -------------------->
   </div>
   <!------------ Product Image Slider Section Mobile Ends ------------>
   
   
   
   <!------------ Product Details Section  Desktop Starts ------------>
   <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-7 ps-xl-5">
   
    <? if ($productcode<>"") { ?>	
    <!--------- Product Code Starts ------------>
    <div class="row mx-0 d-none d-lg-block">
     <h1 class="tproductdetailshead mb-0 pb-2 px-0">Code : <?echo $productcode;?> </h1>
	</div>
	<div class="row mx-0 d-none d-lg-block pb-4">   
     <hr class="hrline01"> 
    </div>
    <!--------- Product Code Ends ------------>
	<? } ?>
	
	
	
	<? if ($dimension<>"") { ?>
    <!--------- Product Dimension Starts ------------>
	<div class="row mx-0 pb-4 "> 
	 <p class="tproductdetailssubhead mb-0 pb-2 px-0"><i class='bx bxs-shopping-bags iconproductfeatures'></i> Dimension  </p>
	 <p class="ttext mb-0 px-0"><?echo $dimension;?></p>
	</div>
    <!--------- Product Dimension Ends ------------>
	 <?}?>
	 
	 <? if ($productcolor<>"") { ?>
    <!--------- Product Color Starts ------------>
	<div class="row mx-0 pb-4"> 
     <p class="tproductdetailssubhead mb-0 pb-2 px-0"><i class='bx bxs-shopping-bags iconproductfeatures'></i> Color </p>
     <p class="ttext mb-0 px-0"><?echo $productcolor;?></p>
    </div>
    <!--------- Product Color Ends ------------>
   <?}?>
	 
	<? if ($materials<>"") { ?>
	<!--------- Product Dimension Starts ------------>
	<div class="row mx-0 pb-4 "> 
	 <p class="tproductdetailssubhead mb-0 pb-2 px-0"><i class='bx bxs-shopping-bags iconproductfeatures'></i> Material  </p>
	 <p class="ttext mb-0 px-0"> <?echo $materials;?></p>
	</div>
    <!--------- Product Dimension Ends ------------>
	<?}?>

	<?
	$productdesc_wherecondition = "productno =$productno";
	$productdesc_tcount1=$obj->totalrecords_condition('productdesc', '*', $productdesc_wherecondition);
	foreach($productdesc_tcount1 as $productdesc_row ){
	$productdesc_tcount=$productdesc_row['count(*)'];
	}
	?>
    <? if ($productdesc_tcount<>0) { ?>
    <!--------- Product Dimension Starts ------------>
	<div class="row mx-0"> 
	 <p class="tproductdetailssubhead mb-0 pb-2 px-0"><i class='bx bxs-shopping-bags iconproductfeatures'></i> Description  </p>
	 
	 <p class="ttext mb-0 px-0"> 
	 <?  
	   $productdesc_where="productno =$productno";
	   $productdesc_result = $obj->select_all_values('productdesc', $productdesc_where,'');
	   foreach($productdesc_result as $productdesc_row){
		$desc1 = $productdesc_row["desc1"];
	  ?> 
	  <?echo $desc1?>
	  <?}?></p>
	</div>
    <!--------- Product Dimension Ends ------------> 
   <?}?>
	
   <!--------- Product Details Section Desktop Ends --------->
   </div>
  </div>
 </div>
</div>

<script>
$(document).ready(function() {
 $('.minus').click(function () {
 var $input = $(this).parent().find('input');
 var count = parseInt($input.val()) - 1;
  count = count < 1 ? 1 : count;
  $input.val(count);
  $input.change();
 return false;
 });
 $('.plus').click(function () {
  var $input = $(this).parent().find('input');
  $input.val(parseInt($input.val()) + 1);
  $input.change();
  return false;
 });
});
</script>

<script>
 $('.multiple-items').slick({
  dots: false,
  infinite: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 1999,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
   { breakpoint: 1441, settings: { slidesToShow: 1 } },
   { breakpoint: 992, settings: { slidesToShow: 1 } },
   { breakpoint: 768, settings: { slidesToShow: 1 } }, 
   { breakpoint: 500, settings: { slidesToShow: 1 } }, 
   { breakpoint: 400, settings: { slidesToShow: 1 } }
  ]
});
</script>
<script>
// gives the option the color of it's value
$(".color-option").each(function() {
  $(this).children().eq(1).css("background-color", $(this).children().eq(0).val());
});

// Uses jquery to retrieve the selected color
function getValue(){
  $("#color-result").html($('input[name=radio]:checked').val());
}
</script>
<script>
// gives the option the color of it's value
$(".color-optionmob").each(function() {
  $(this).children().eq(1).css("background-color", $(this).children().eq(0).val());
});

// Uses jquery to retrieve the selected color
function getValue(){
  $("#color-result").html($('input[name=radio]:checked').val());
}
</script>


<?include ("ibottomshamsnaturals.php")?>