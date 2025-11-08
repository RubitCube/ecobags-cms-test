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
$productimagesno = trim($_POST["productimagesno"]);
$oldpimg = trim($_POST["oldpimg"]);
$productdetailsno = trim($_POST["productdetailsno"]);
 $productcolorsno = trim($_POST["productcolorsno"]);
 /********************update productimages******************/ 
	$photo=$productno."_pic_".$now;
  if(!empty($_FILES["pimg"]))	{
   $newfilename= $photo;
   $filename =strtolower(basename($_FILES['pimg']['name']));
   $ext = substr($filename, strrpos($filename, '.') + 1);
   $ext=".".$ext;
   $newname = '../productimages/'.$newfilename.$ext;
   if((move_uploaded_file($_FILES['pimg']['tmp_name'],$newname))) {
    $pimg=$newfilename.$ext;
    $uploaded=1;
	 @unlink("../productimages/".$oldpimg);
     $productimages_wherecondition="productimagesno=$productimagesno";
    $productimages_result=$obj->delete_condition("productimages", $productimages_wherecondition);
	$productimages_wherecondition="productimagesno=$productimagesno";
    $productimages_result=$obj->delete_condition("productimages", $productimages_wherecondition);
    $productimages_fields110="productimagesno, productno, productcolorsno, pimg, addedby, addeddate, modifiedby, modifieddate";
    $productimages_values110="'0', '$productno', '$productcolorsno', '$pimg', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
    $productimages_result110=$obj->insert('productimages',$productimages_fields110, $productimages_values110);
   } else {
    $pimg="";
   }
  } else {
   $pimg="";
  }
/*----------------------------------------product images ends----------------------------------------*/ 

header("Location:viewproduct.php?productno=$productno&productdetailsno=$productdetailsno&&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
