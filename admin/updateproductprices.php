<?include("iconnect.php")?>
<? 
$productno = trim($_POST["productno"]);
$page=$_POST["page"];
$pname=$_POST["pname"];
$brandsno=$_POST["brandsno"];
$categoryno=$_POST["categoryno"];
$subcategoryno=$_POST["subcategoryno"];
$subcategory2no=$_POST["subcategory2no"];
$subcategory3no=$_POST["subcategory3no"];
$subcategory4no=$_POST["subcategory4no"];
$subcategory5no=$_POST["subcategory5no"];
$subcategory6no=$_POST["subcategory6no"];
 
/*----------------------------------------productprices starts----------------------------------------*/
$wholesaleprice = trim($_POST["wholesaleprice"]);
$distrubutorprice = trim($_POST["distrubutorprice"]);
$retailerprice = trim($_POST["retailerprice"]);
$enduserprice = trim($_POST["enduserprice"]);
$specialofferprice = trim($_POST["specialofferprice"]);
 if($wholesaleprice<>"" || $distrubutorprice<>"" || $retailerprice<>"" || $enduserprice<>"" || $specialofferprice<>"") {	
  $productprices_tablename="productprices";
  $productprices_fields="wholesaleprice='$wholesaleprice', distrubutorprice='$distrubutorprice', retailerprice='$retailerprice', enduserprice='$enduserprice',  modifiedby='0', modifieddate='$modifieddateupdate'";
  $productprices_condition="productno=$productno";
  $productprices_result=$obj->updategeneral($productprices_tablename, $productprices_fields, $productprices_condition);
 }
/*----------------------------------------productprices ends----------------------------------------*/

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pname");	
ob_flush();
?>
