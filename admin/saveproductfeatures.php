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
 
/*--------------------------------------product features with desc starts---------------------------------------------*/	
$pfeatureheads = $_POST['pfeaturehead'];
$pfeatureheads=str_replace("'","&#39;",$pfeatureheads);
foreach($pfeatureheads as $pfeaturehead){
 $pfeatureheads[]=$pfeaturehead;
}
$i=0;
$pfeaturedescs = $_POST['pfeaturedesc'];
$pfeaturedescs=str_replace("'","&#39;",$pfeaturedescs);
foreach($pfeaturedescs as $pfeaturedesc){
 if($pfeaturedesc<>"" || $pfeatureheads[$i]) {
  $productfeatures_fields130="productfeaturesheadno, productno, pfeaturehead, pfeaturedesc, addedby, addeddate";
  $productfeatures_values130="'0', '$productno', '$pfeatureheads[$i]', '$pfeaturedesc', '$addedbydbsave', '$addeddatesave'";
  $productfeatures_result130 = $obj->insert("productfeatureshead", $productfeatures_fields130, $productfeatures_values130);
  $i++;
 }
}
/*--------------------------------------product features with desc ends----------------------------------------*/


header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
