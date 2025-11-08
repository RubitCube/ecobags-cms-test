<?include("iconnect.php")?>
<? 
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
$brandsno=$_REQUEST["brandsno"];
$categoryno=$_REQUEST["categoryno"];
$subcategoryno=$_REQUEST["subcategoryno"];
$subcategory2no=$_REQUEST["subcategory2no"];
$subcategory3no=$_REQUEST["subcategory3no"];
$subcategory4no=$_REQUEST["subcategory4no"];
$subcategory5no=$_REQUEST["subcategory5no"];
$subcategory6no=$_REQUEST["subcategory6no"];
$productno = trim($_REQUEST["productno"]);
$productcolorsno = trim($_REQUEST["productcolorsno"]);


 $productimages_where="productcolorsno=$productcolorsno and productno=$productno";
 $productimages_result = $obj->select_all_values('productimages', $productimages_where,'');
 foreach($productimages_result as $productimages_row){
  $pimg = $productimages_row["pimg"];
   unlink("../productimages/".$pimg);
 }
$productimages_wherecondition="productcolorsno=$productcolorsno and productno=$productno";
$productimages_result=$obj->delete_condition("productimages", $productimages_wherecondition);

$productcolors_wherecondition="productcolorsno=$productcolorsno";
$productcolors_result=$obj->delete_condition("productcolors", $productcolors_wherecondition);


header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=deleted&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>





















