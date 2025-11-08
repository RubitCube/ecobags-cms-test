
  
   <div class="row py-4">
	 <span class="tcategoryboxheading mb-0 pt-1">PRODUCT <br>CATEGORIES</span>
	</div>
	 <?
	$where="status='Active' ";
	$result_category = $obj->select_all_values('category', $where,'');
	foreach($result_category as $category_row)
	{
		$count++;
		$categoryname = $category_row['categoryname'];
		$o_categoryno = $category_row['categoryno'];
	  ?>
		<!------ category01 starts ------>
		<div class="row categorylistborder">
		 <?if ($o_categoryno==210){ //jollood?>
		  <a href="<?echo $mainurlindex;?>Products/<?echo $o_categoryno?>/0" class="tcategorylist px-3">
		  <img src="<?echo $mainurlindex?>img/jooloodsidebarlogo.png" class="img-fluid"></a>
		<?}else{?>
		  <a href="<?echo $mainurlindex;?>Products/<?echo $o_categoryno?>/0" class="tcategorylist px-3">
		  <?echo $categoryname?></a>
		<?}?>
		</div>
		<!------ category01 ends ------>
	<?}?>
	
	<!------ NATURAL LEATHER PRODUCTS category starts -----
    <div class="row pb-3 pb-xxl-5">
	 <? if ($fname<>"productdetails.php" ) { ?>
      <a href="<?echo $mainurlindex;?>SubProducts/200/0" class="tcategorylist px-3">NATURAL LEATHER PRODUCTS</a>
	  <? } else { ?> 
      <a href="<?echo $mainurlindex;?>SubProducts/200/0" class="tcategorylistactive px-3">NATURAL LEATHER PRODUCTS</a>
     <? } ?>
	</div>
	----- NATURAL LEATHER PRODUCTS category ends ------>
	
	
	<!------ jollod category logo starts ------>
    <div class="row pb-5">
	
	</div>
	<!------ jollod category logo ends ------>
