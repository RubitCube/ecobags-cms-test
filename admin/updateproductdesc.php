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
 
$productdesc_wherecondition="productno=$productno";
$productdesc_result=$obj->delete_condition("productdesc", $productdesc_wherecondition);

/*----------------------------------------product description starts----------------------------------------*/	
$desc1 = $_POST['desc1'];
if($desc1<>"") {
 $desc1 = $_POST['desc1'];
 $desc1=str_replace("'","&#39;",$desc1);
  $productdesc_fields140="productdescno, productno, desc1, addedby, addeddate, modifiedby, modifieddate";
  $productdesc_values140="'0', '$productno', '$desc1', '$addedbydbsave', '$addeddatesave',  '$addedbydbupdate', '$addeddatesave'"; 
  $productdesc_result140=$obj->insert("productdesc", $productdesc_fields140, $productdesc_values140);
}
/*----------------------------------------product description ends----------------------------------------*/		

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pagename");	

ob_flush();
?>
