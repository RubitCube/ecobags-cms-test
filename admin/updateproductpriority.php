<?include 'iconnect.php' ?>
<?
$newOrder = $_POST['ID'];
$counter = 1;
foreach ($newOrder as $recordIDValue) { 
 $product_result=$obj->execute("update product set productpriority='$counter' where productno = '$recordIDValue'");	
 $product_result=$obj->execute("update productcategory set productpriority='$counter' where productno = '$recordIDValue'");	
 $counter ++;
}
?>
  <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
   <div id="added" class="alert alert-success fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4  class="addedfont">Priority Successfully Set!</h4>
   </div>
  </div>