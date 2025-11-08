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
 
$productfeatureshead_wherecondition="productno=$productno";
$productfeatureshead_result=$obj->delete_condition("productfeatureshead", $productfeatureshead_wherecondition);
/*--------------------------------------product features with desc starts---------------------------------------------*/	
$fcount = $_POST["fcount"];
 for($i=1; $i<=$fcount; $i++) {
	 
 $pfeaturehead = $_POST['pfeaturehead'.$i];
 $pfeaturehead=str_replace("'","&#39;",$pfeaturehead);
 $pfeaturedesc = $_POST['pfeaturedesc'.$i];
 $pfeaturedesc=str_replace("'","&#39;",$pfeaturedesc);
  if($pfeaturedesc<>"" || $pfeaturehead<>"") {
   $productfeatureshead_fields130="productfeaturesheadno, productno, pfeaturehead, pfeaturedesc,  modifiedby, modifieddate";
   $productfeatureshead_values130="'0', '$productno', '$pfeaturehead', '$pfeaturedesc','$addedbydbupdate', '$addeddatesave'";
   $productfeatureshead_result130 = $obj->insert("productfeatureshead", $productfeatureshead_fields130, $productfeatureshead_values130);
  }
 }
/*--------------------------------------product features with desc ends----------------------------------------*/

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pname");	
ob_flush();
?>
