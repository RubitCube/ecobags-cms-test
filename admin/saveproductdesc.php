<?include("iconnect.php")?>
<? 
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
$productno = trim($_POST["productno"]);
 
/*----------------------------------------product description starts----------------------------------------*/	
$desc1 = $_POST['desc1'];
if($desc1<>"") {
 $desc1 = $_POST['desc1'];
 $desc1=str_replace("'","&#39;",$desc1);
 $productdesc_fields140="productdescno, productno, desc1, addedby, addeddate";
$productdesc_values140="'0', '$productno', '$desc1', '$addedbydbsave', '$addeddatesave'"; 
 $productdesc_result140=$obj->insert("productdesc", $productdesc_fields140, $productdesc_values140);
}
/*----------------------------------------product description ends----------------------------------------*/	

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
