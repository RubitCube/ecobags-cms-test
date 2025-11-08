<?include ("itophead.php")?>
<?include ("itopshamsnaturals.php")?>
<?include("iproductcategoryflag.php")?>
<?
if(isset($_REQUEST["categoryno"])){
 $categoryno=$_REQUEST["categoryno"];
 $productcategory_wherecondition = " pstatus='Active' and categoryno=$categoryno";
 $productcategory_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory_wherecondition);
 foreach($productcategory_tcount1 as $productcategory_row ){
  $productcategory_tcount=$productcategory_row['count(*)'];
 }
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
}else {
 $categoryno=0;
}
?>
<?
if(isset($_REQUEST["subcategoryno"])){
 $subcategoryno=$_REQUEST["subcategoryno"];
 $productcategory_wherecondition = "pstatus='Active' and categoryno=$categoryno and subcategoryno=$subcategoryno";
 $productcategory_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory_wherecondition);
 foreach($productcategory_tcount1 as $productcategory_row ){
  $productcategory_tcount=$productcategory_row['count(*)'];
 } 
 
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
  
}else {
 $subcategoryno=0;
}
?>


<style>
.jutelistingbg{ 
 background-image: url(<?php echo $categorybannerpath; ?>);
 background-position: top;
 background-repeat:no-repeat;
}
</style>
<script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
<!--------------- ourproducts heading ends --------------->
<!------------------------- heading starts ------------------------->
<div class="container-fluid fluid0 jutelistingbg py-5">
 <div class="container py-5">
  <div class="row py-lg-5">
   <div class="col-12 ">
    <h1 class="tbannerproductsheading mb-0"><? echo $master_categoryname?><?if ($subcategoryno<>0){ ?> - <? echo $subcategory?> <? } ?></h1>
   </div>
  </div>
 </div>
</div>
<!------------------------- heading ends ------------------------->
<div class="container-fluid fluid0">
 <div class="container pb-5">
 
  <div class="row">
   <div class="col-6 col-lg-3 pcategoryboxbg d-none d-lg-block">
    <?include ("icategorybox.php")?>	
   </div>
   
   <div class="col-12 col-lg-9 pt-4 ps-lg-4">   
   <div class="row px-0 mx-0 pb-5 "> 
   <div class="col-12 float-end d-none d-lg-block">
   <ul class="d-flex float-end" style="list-style:none;">
     <li class="pe-3"><a href="<?echo $mainurlindex;?>ShamsNaturals-Home" class="tyouarein">Home</a></li>
	 <?if($subcategoryno<>0){?> 
	  <li class="pe-3"><span class="tyouarein">»</span></li>
      <li class="pe-3"><a href="<?echo $mainurlindex;?>SubProducts/<?echo $categoryno?>/<?echo $subcategoryno?>"   class="tyouarein"><? echo $master_categoryname?></a></li>
	 <?}else{?> 
	  <li class="pe-3"><span class="tyouarein">»</span></li>
      <li class="pe-3"><a  class="tyouarein"><? echo $master_categoryname?></a></li>
	 <?}?> 
	 <?if ($subcategoryno<>0){?> 
	  <li class="pe-3"><span class="tyouarein">»</span></li>
      <li class="pe-3"><a  class="tyouarein"><? echo $subcategory?></a></li>
	 <?}?> 
    </ul>
   </div>
  </div>
  
  <?if($productcategory_tcount>0){?> 
  <div class="row">
	<?
	if(isset($_REQUEST["categoryno"])){
   	$productcategory_sql="SELECT * FROM `productcategory` WHERE `categoryno`=$categoryno  and pstatus='Active' ORDER BY  productpriority asc";
	}
	if(isset($_REQUEST["subcategoryno"])){
   	$productcategory_sql="SELECT * FROM `productcategory` WHERE `categoryno`=$categoryno and subcategoryno=$subcategoryno and pstatus='Active' ORDER BY  productpriority asc";
	}
    $productcategory_sql_countresult2=$obj->execute($productcategory_sql);
	 foreach($productcategory_sql_countresult2 as $productdetails_row){ 
	  $productno =$productdetails_row["productno"]; 
	  
	  /*++++++++++++  productdetails starts+++++++++++++++++++++++++*/
	  $productdetails_where="productno =$productno  and status='Active'  order by `priority` asc LIMIT 1";
	  $productdetails_result = $obj->select_all_values('productdetails', $productdetails_where,'');
	  foreach($productdetails_result as $productdetails_row){
		$productdetailsno  = $productdetails_row["productdetailsno"]; 
		$productcode  = $productdetails_row["productcode"]; 
		$dimension  = $productdetails_row["dimension"]; 
		$materials  = $productdetails_row["materials"]; 
		$productcolor  = $productdetails_row["productcolor"];
	  }
	 /*++++++++++++  productdetails starts+++++++++++++++++++++++++*/
	 
    $productimages_wherecondition = "productno =$productno";
	$productimages_tcount1=$obj->totalrecords_condition('productimages', '*', $productimages_wherecondition);
	foreach($productimages_tcount1 as $productimages_row ){
	   $productimages_tcount=$productimages_row['count(*)'];
	}
	if ($productimages_tcount<>0) { 
		$productimages_where="productno=$productno";
		 $productimages_orderby="ORDER BY priority  asc LIMIT 1";
		 $productimages_result = $obj->select_all_values('productimages', $productimages_where, $productimages_orderby);
		 foreach($productimages_result as $productimages_row){
		  $productimagesno =$productimages_row["productimagesno"];
		  $pimg=$productimages_row["pimg"];
		 }
	}
   ?>
   <!-------------- products starts -------------->
   <?include ("iproduct.php")?>
   <!-------------- products ends -------------->
   <?}?>     
    </div>
	<?}else{?>
	  <div class="row">
       <div class="col-12 float-left pb-5 mb-5">
        <div><p class="ttext mb-0 pb-3 pe-xl-5">No Active products .....</p><br><br><br></div>
       </div>
      </div>
   <?}?>
   </div>   
  </div>  
 </div> 
</div>
<!---------------------- ourproducts ends ------------------------------>

<script>
AOS.init({
  duration: 1200,
})
</script>
<?include ("ibottomshamsnaturals.php")?>