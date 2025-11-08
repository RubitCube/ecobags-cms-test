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
$productpdfno = trim($_POST["productpdfno"]);
$oldpdfpimg = trim($_POST["oldpdfpimg"]);
$productdetailsno = trim($_POST["productdetailsno"]);
 
/*----------------------------------------product pdf starts----------------------------------------*/
  $pdfname = trim($_POST["pdfname"]);
  $pdfname=str_replace("'","&#39;",$pdfname);
  $photo=$productno."_pdf_".$now."_";
  if(!empty($_FILES["pdfpimg"]))	{
   $newfilename= $photo;
   $filename =strtolower(basename($_FILES['pdfpimg']['name']));
   $ext = substr($filename, strrpos($filename, '.') + 1);
   $ext=".".$ext;
   $newname = '../productpdf/'.$newfilename.$ext;
   if((move_uploaded_file($_FILES['pdfpimg']['tmp_name'],$newname))) 
   {	   
   unlink("../productpdf/".$oldpdfpimg);
   $productpdf_wherecondition="productpdfno=$productpdfno";
   $productpdf_result=$obj->delete_condition("productpdf", $productpdf_wherecondition);
    $pdfpimg=$newfilename.$ext;
    $uploaded=1;
    $productpdf_fields110="productpdfno, productno, productdetailsno, pdfname, pdfpimg, addedby, addeddate, modifiedby, modifieddate";
    $productpdf_values110="'0', '$productno', '$productdetailsno', '$pdfname', '$pdfpimg', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
    $productpdf_result110=$obj->insert('productpdf',$productpdf_fields110, $productpdf_values110);
   } else {
	$productpdf_tablename="productpdf";
	$productpdf_fields="pdfname='$pdfname'";
	$productpdf_condition="productpdfno=$productpdfno";
	$productpdf_result=$obj->updategeneral($productpdf_tablename, $productpdf_fields, $productpdf_condition);
   }
   } else {
	$productpdf_tablename="productpdf";
	$productpdf_fields="pdfname='$pdfname'";
	$productpdf_condition="productpdfno=$productpdfno";
	$productpdf_result=$obj->updategeneral($productpdf_tablename, $productpdf_fields, $productpdf_condition);
  }
/*----------------------------------------product pdf ends----------------------------------------*/ 

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
