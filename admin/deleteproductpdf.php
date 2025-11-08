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
$productpdfno = trim($_REQUEST["productpdfno"]);
 $productpdf_where="productpdfno =$productpdfno";
 $productpdf_result = $obj->select_all_values('productpdf', $productpdf_where,'');
 foreach($productpdf_result as $productpdf_row){
  $pdfpimg = $productpdf_row["pdfpimg"];
 unlink("../productpdf/".$pdfpimg);
 }

$productpdf_wherecondition="productpdfno=$productpdfno";
$productpdf_result=$obj->delete_condition("productpdf", $productpdf_wherecondition);

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=deleted&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
