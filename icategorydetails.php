 <?
    $where=" status='Active' order by priority asc";
	$result_category = $obj->select_all_values('category', $where,'');
	foreach($result_category as $category_row)
	{
    $categoryno = $category_row['categoryno'];
    $categoryname = $category_row['categoryname'];
    $categoryimg = $category_row['categoryimg'];
	
	
?>	
     <div class="col-12 col-md-6 col-lg-4 px-lg-2 categorybox categoryboxpadding" data-aos="fade-up"> 
	 <? if ($categoryno==200) { ?>	
	 <?$subcategory_sql="SELECT * FROM subcategory WHERE  categoryno=$categoryno and status='Active'";
     $subcategory_sql_countresult2=$obj->execute($subcategory_sql);
     $subcategory_tcount=$subcategory_sql_countresult2->rowCount();
	 if($subcategory_tcount<>0){
	  $where="categoryno=$categoryno and status='Active'";
	  $orderby="ORDER BY subcategorypriority ASC";
	  $result=$obj->select_all_values("subcategory",$where,$orderby);
	  foreach($result as $subcategory_row)
	  { 
	   $subcategoryno =$subcategory_row["subcategoryno"];
	  }
	 }else{
	  $subcategoryno=0;
	  }
	  ?>
	  
	 <a href="<?echo $mainurlindex?>SubProducts/<?echo $categoryno?>/<?echo $subcategoryno?>" style="color:#000000;">
	 <?}else{?>
	 <a href="<?echo $mainurlindex?>Products/<?echo $categoryno?>/0" style="color:#000000;">
	 <? }?>
      <div class="row">
       <img src="<?echo $mainurlindex?>categoryimg/<? echo $categoryimg?>" class="img-fluid categoryimg">
      </div>
	  <div class="row">
	   <div class="col-12">
	    <div class="details01 px-4">
	     <div class="row pt-2 pb-2">
	      <h5 class="producthead mb-0"><?echo $categoryname?></h5>
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