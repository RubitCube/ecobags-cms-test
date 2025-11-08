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
 
/*------------------------------product features without desc starts---------------------------------------------*/	
$pshortfeaturepoints = $_POST['pshortfeaturepoint'];
$pshortfeaturepoints=str_replace("'","&#39;",$pshortfeaturepoints);
$i=0;
foreach($pshortfeaturepoints as $pshortfeaturepoint){
 $pshortfeaturepoints[]=$pshortfeaturepoint;
 if($pshortfeaturepoints[$i])	{
  $productshortfeatures_fields120="productshortfeaturesno, productno, pshortfeaturepoint, addedby, addeddate";
  $productshortfeatures_values120="'0','$productno', '$pshortfeaturepoints[$i]', '$addedbydbsave', '$addeddatesave'"; 
  $productshortfeatures__result120=$obj->insert("productshortfeatures", $productshortfeatures_fields120, $productshortfeatures_values120);
  $i++;
 }
}
/*--------------------------------------product features without desc ends----------------------------------------*/	

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
