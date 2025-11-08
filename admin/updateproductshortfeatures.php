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
 
$productshortfeatures_wherecondition="productno=$productno";
$productshortfeatures_result=$obj->delete_condition("productshortfeatures", $productshortfeatures_wherecondition);

/*------------------------------product features without desc starts---------------------------------------------*/	
$fcount = $_POST["fcount"];
for($i=1; $i<=$fcount; $i++) {	
 $pshortfeaturepoint = $_POST['pshortfeaturepoint'.$i];
 $pshortfeaturepoint=str_replace("'","&#39;",$pshortfeaturepoint);
  if($pshortfeaturepoint<>"")	{
   $productshortfeatures_fields120="productshortfeaturesno, productno, pshortfeaturepoint, modifiedby, modifieddate";
   $productshortfeatures_values120="'0','$productno', '$pshortfeaturepoint', '$addedbydbupdate', '$addeddatesave'"; 
   $productshortfeatures__result120=$obj->insert("productshortfeatures", $productshortfeatures_fields120, $productshortfeatures_values120);
  }
}
/*--------------------------------------product features without desc ends----------------------------------------*/

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
