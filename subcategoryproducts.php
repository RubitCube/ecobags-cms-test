<?include ("itophead.php")?>
<?include ("itopshamsnaturals.php")?>
<?include("iproductcategoryflag.php")?>

<?
if(isset($_REQUEST["categoryno"])){
 $categoryno=$_REQUEST["categoryno"];
 include("icallcategory.php"); 
}
if(isset($_REQUEST["subcategoryno"])){
 $subcategoryno=$_REQUEST["subcategoryno"];
 include("icallsubcategory.php");
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
?>

<?
 $subcategory_tcount1="SELECT * FROM subcategory WHERE categoryno=$categoryno  and status='Active' ";
 $subcategory_tcount1result2=$obj->execute($subcategory_tcount1);
 $subcategory_tcount=$subcategory_tcount1result2->rowCount();
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
    <h1 class="tbannerproductsheading mb-0"><? echo $master_categoryname?></h1>
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
     <li class="pe-3"><span class="tyouarein">»</span></li>
     <li><a href="" class="tyouareinactive"><?echo $master_categoryname?></a></li>
    </ul>
   </div>
  </div>
<? if ($subcategory_tcount<>0){?>
  <div class="row">
  <?
  $where="categoryno=$categoryno and status='Active'";
  $orderby="ORDER BY subcategorypriority ASC";
  $result=$obj->select_all_values("subcategory",$where,$orderby);
  $count=0;
  foreach($result as $subcategory_row)
  { 
   $count++;
   $subcategoryno =$subcategory_row["subcategoryno"];
   $categoryno = $subcategory_row['categoryno'];
   $subcategory =$subcategory_row["subcategory"];
   $subcategoryimg = $subcategory_row['subcategoryimg'];
   ?>
   <!-------------- products starts ------------>
   <div class="col-12 col-md-6 col-lg-4 px-lg-2 categorybox categoryboxpadding" data-aos="fade-up"> 
	 <a href="<?echo $mainurlindex?>Products/<?echo $categoryno?>/<?echo $subcategoryno?>" style="color:#000000;">
      <div class="row">
	  <? if($subcategoryimg<>""){?>
       <img src="<?echo $mainurlindex?>subcategoryimg/<? echo $subcategoryimg?>" class="img-fluid categoryimg">
	  <?}else{?>
       <img src="<?echo $mainurlindex?>img/noimage.jpg" class="img-fluid categoryimg">
	  <?}?>
      </div>
	  <div class="row">
	   <div class="col-12">
	    <div class="details01 px-4">
	     <div class="row pt-2 pb-2">
	      <h5 class="producthead mb-0"><?echo $subcategory?></h5>
	     </div>	
	     <div class="row px-2">
	      <hr class="producthr mb-0 mx-1"></hr>
	     </div>
	     <div class="row pt-2 pb-3">
	      <h6 class="productsubhead mb-0 ">VIEW MORE ></h6>
	     </div>	   
	    </div> 	   
	   </div> 
	  </div>
	 </a> 
     </div>
   <?}?>
   <!-------------- products ends -------------->     
    </div>
	<?}else{?>
	  <div class="row">
       <div class="col-12 float-left pb-5 mb-5">
        <div><p class="ttext mb-0 pb-3 pe-xl-5">No Active Products.....</p><br><br><br></div>
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