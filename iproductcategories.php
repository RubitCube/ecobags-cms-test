<?
 $category_sql="SELECT * FROM category WHERE  status='Active'";
 $category_sql_countresult2=$obj->execute($category_sql);
 $category_tcount=$category_sql_countresult2->rowCount();
?>
<? if ($category_tcount<>0){?>  
<!--------------- ourproducts heading ends --------------->
<div class="container-fluid fluid0">
 <div class="container">
  <div class="row">
   <div class="col-6 col-lg-3 pcategoryboxbg d-none d-lg-block">
    <?include ("icategorybox.php")?>	
   </div>
   <div class="col-12 col-lg-9 pt-4 ps-lg-4">
    <div class="row">
	
    <!------------ categorydetails starts ------------> 
    <?include ("icategorydetails.php")?>
    <!------------ categorydetails ends ------------>
 
    </div>
   </div>
  </div>
 </div> 
</div>
<!---------------------- ourproducts ends ------------------------------>
<? }?>  


