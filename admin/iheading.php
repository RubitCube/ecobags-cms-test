 <div class="pd-x-30 pd-t-30">  
  <div class="row">
  <div class="col-9"> 
  <h4 class="tx-gray-800 mg-b-5"><?echo $mainheading?></h4>
  <p class="mg-b-0"><?echo $mainheadingdesc?></p>
  </div>
  <div class="col-3 pt-1" > 
  <?if ($priorityproducticon<>"No") { ?>
     <a style="background-color:white;padding:12px;"  title="Set Priority Product" href="setpriorityproduct.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force " >SET PRIORITY</span>
	 </a>
    <? } ?> 
  <?if($sortproducticon<>"No"){?>&nbsp;&nbsp;
     <a style="background-color:white;padding:12px;"  title="Set Priority Product" href="setpriorityproduct.php?brandsno=<?echo $brandsno?>&categoryno=<?echo $categoryno?>&subcategoryno=<?echo $subcategoryno?>&subcategory2no=<?echo $subcategory2no?>&subcategory3no=<?echo $subcategory3no?>&subcategory4no=<?echo $subcategory4no?>&subcategory5no=<?echo $subcategory5no?>&subcategory6no=<?echo $subcategory6no?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force " >Sort</span>
	 </a>
    <? } ?>
	</div>
  </div>
 </div>