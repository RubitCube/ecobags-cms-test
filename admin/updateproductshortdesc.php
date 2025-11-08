<?include("iconnect.php")?>
<? 
$page=$_POST["page"];
$pagename=$_POST["pagename"];
$brandsno=$_POST["brandsno"];
$categoryno=$_POST["categoryno"];
$subcategoryno=$_POST["subcategoryno"];
$subcategory2no=$_POST["subcategory2no"];
$subcategory3no=$_POST["subcategory3no"];
$subcategory4no=$_POST["subcategory4no"];
$subcategory5no=$_POST["subcategory5no"];
$subcategory6no=$_POST["subcategory6no"];
$productno = trim($_POST["productno"]);
 
$productshortdesc_wherecondition="productno=$productno";
$productshortdesc_result=$obj->delete_condition("productshortdesc", $productshortdesc_wherecondition);

/*----------------------------------------product description starts----------------------------------------*/	
$shortdesc1 = $_POST['shortdesc1'];
if($shortdesc1<>"") {
 $shortdesc1 = $_POST['shortdesc1'];
 $shortdesc1=str_replace("'","&#39;",$shortdesc1);
  $productshortdesc_fields140="productshortdescno, productno, shortdesc1, addedby, addeddate, modifiedby, modifieddate";
  $productshortdesc_values140="'0', '$productno', '$shortdesc1', '$addedbydbsave', '$addeddatesave',  '$addedbydbupdate', '$addeddatesave'"; 
  $productshortdesc_result140=$obj->insert("productshortdesc", $productshortdesc_fields140, $productshortdesc_values140);
}
/*----------------------------------------product description ends----------------------------------------*/		

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pagename");	

ob_flush();
?>
