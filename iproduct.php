   <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 boxpadding">
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
	   <img class="Sirv image-hover" data-src="<?echo $mainurlindex;?>productimages/<?echo $pimg2;?>"><? } ?> 
	   <? } ?>
	  </div>
	 </div>
	
	 <!--pimg ends--->
     <? if ($productcode<>"") { ?>	 
	 <div class="card-body cardline">
	  <h4 class="mb-0 tproducthead pb-2">Code : <?echo $productcode;?> <h4>	
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

<!--------------- product1 starts --------------->
