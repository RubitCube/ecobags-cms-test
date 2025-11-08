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
$productdetailsno = trim($_POST["productdetailsno"]);
 $productcolorsno = trim($_POST["productcolorsno"]);
 
/*--------------------------------------product features with desc starts---------------------------------------------*/	
	 
 $colorname = $_POST['colorname'];
 $colorname=str_replace("'","&39;",$colorname);
 $colorcode = $_POST['colorcode'];
 $colorcode=str_replace("'","&39;",$colorcode);
  if($colorcode<>"" || $colorname<>"") {
  $productcolors_tablename="productcolors ";
  $productcolors_fields="colorname='$colorname', colorcode='$colorcode',modifiedby='0', modifieddate='$modifieddateupdate'";
  $productcolors_condition="productno=$productno and productcolorsno='$productcolorsno'";
  $productcolors_result=$obj->updategeneral($productcolors_tablename, $productcolors_fields, $productcolors_condition);
  }


header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
