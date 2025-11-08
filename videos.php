<?include ("itophead.php")?>
<?include ("itopshamsnaturals.php")?>
<?include ("iinnerbannershamsnaturals.php")?> 

<!------------------------- projects gallery heading starts ------------------------->
<div class="container-fluid fluid0">
 <div class="container">
  <div class="row">
   <div class="col-12 float-right py-xl-4 animated animatedFadeInUp fadeInUp"> 	
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7 col-xxl-6 ps-lg-0 pe-xl-4 pe-xxl-5 my-auto py-5"> 
    <h1 class="thead mb-0">Product Video Gallery</h1>
    <h2 class="tsubhead mb-0 pb-2 pb-md-3 pb-lg-4">Our Recent Videos</h2>
   </div>
   </div>
  </div>
 </div> 
</div>
<!------------------------- projects gallery heading ends ------------------------->

<!------------------------- projects gallery table starts ------------------------->
<div class="container-fluid fluid0 pb-4">
 <div class="container">
  <div class="row">
  
	<?
	$videos_where="status='Active'";
	$videos_orderby="ORDER BY addeddate DESC";
	$videos_result=$obj->select_all_values("videos", $videos_where, $videos_orderby);
	$count=0;
	foreach($videos_result as $videos_row){ 
	 $count++;
	 $videosno =$videos_row["videosno"];
	 $videotitle =$videos_row["videotitle"];
	 $videolink =$videos_row["videolink"];
	?>
   <div class="col-12 col-md-12 col-lg-6 col-xl-4  boxpadding px-2">
	<iframe width="420" height="325" src="<?echo $videolink?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>
  <?}?>
  </div>
 </div> 
</div>
<!------------------------- projects gallery table ends ------------------------->

<?include ("ibottomshamsnaturals.php")?>


