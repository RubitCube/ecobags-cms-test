<?include ("itophead.php")?>
<?include ("itopshamsnaturals.php")?>
<?include ("iinnerbannershamsnaturals.php")?> 
<?
$newarrivals_sql="SELECT distinct (productcategory.productno) FROM productcategory INNER JOIN productdetails ON productcategory.productno = productdetails.productno WHERE productdetails.newarrivals='Yes' and productcategory.pstatus='Active' and productdetails.status='Active' ";
$newarrivals_sql_countresult2=$obj->execute($newarrivals_sql);
$newarrivals_tcount=$newarrivals_sql_countresult2->rowCount();
?>

<script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>

<div class="container-fluid fluid0">
 <div class="container py-5">
  <div class="row">
   <div class="col-12">
    <h1 class="thead mb-0">DISCOVER OUR</h1>
    <h1 class="tsubhead mb-0 pb-2 pb-md-3 pb-lg-4">NEW ARRIVALS</h1>
   </div>
  </div>
<?if($newarrivals_tcount>0){?>   
  <div class="row">  
  <?
   	$productcategory_sql="SELECT distinct (productcategory.productno) FROM productcategory INNER JOIN productdetails ON productcategory.productno = productdetails.productno WHERE productdetails.newarrivals='Yes' and productcategory.pstatus='Active' and productdetails.status='Active' ";
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

  <!-------------- card box 2 starts -------------->
   <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 boxpadding px-2">
   <a href="<?echo $mainurlindex;?>Productdetails/<?echo $productno?>">
    <div class="card">	
	<!--pimg starts--->
	 <? if ($productimages_tcount<>0) { ?>
     <div class="card-header pb-1">	 
      <div class="figure">
       <img class="Sirv image-main" src="<?echo $mainurlindex;?>productimages/<?echo $pimg;?>" data-src="<?echo $mainurlindex;?>productimages/<?echo $pimg;?>">
       <?
		 $productimages_where="productno=$productno";
		 $productimages_orderby="ORDER BY priority  desc LIMIT 1";
		 $productimages_result = $obj->select_all_values('productimages', $productimages_where, $productimages_orderby);
		 foreach($productimages_result as $productimages_row){
		  $productimagesno =$productimages_row["productimagesno"];
		  $pimg2=$productimages_row["pimg"];
		?>
	   <img class="Sirv image-hover" data-src="<?echo $mainurlindex;?>productimages/<?echo $pimg2;?>">
	   <? } ?>
      </div>	
	 </div>
	 <?}?>
	 <!--pimg starts--->
    <? if ($productcode<>"") { ?>		 
	 <div class="card-body cardline">
	  <h4 class="mb-0 tproducthead py-2">Code : <?echo $productcode;?> </h4>	
	 </div>
	  <? } ?>
	 <div class="card-footer ">
	  <div class="row mx-0 px-0 pt-1">	  
	   <p class="mb-0 tproductmore py-3">View Details</p>
	  </div>
	 </div>
    </div>
	</a>
   </div>
   <!-------------- card box 2 ends --------------> 
    <? } ?>
   <?}else{?>
  <div class="row">
   <div class="col-12 float-left pb-5 mb-5">
	<div><p class="ttext mb-0 pb-3 pe-xl-5">No Active products .....</p><br><br><br></div>
   </div>
  </div> 
<?}?>

 </div>
</div>
<?include ("ibottomshamsnaturals.php")?>