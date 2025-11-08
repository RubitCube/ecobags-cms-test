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
 
/*----------------------------------------product images starts----------------------------------------*/
 $pdfimax = $_POST["pdfimax"];
 for($i=1; $i<=$pdfimax; $i++) {	 
 $pdfname = trim($_POST["pdfname".$i]);
  $pdfname=str_replace("'","&#39;",$pdfname);
  $photo=$productno."_pdf_".$now."_".$i;
  if(!empty($_FILES["pdfpimg".$i]))	{
   $newfilename= $photo;
   $filename =strtolower(basename($_FILES['pdfpimg'.$i]['name']));
   $ext = substr($filename, strrpos($filename, '.') + 1);
   $ext=".".$ext;
   $newname = '../productpdf/'.$newfilename.$ext;
   if((move_uploaded_file($_FILES['pdfpimg'.$i]['tmp_name'],$newname))) {
    $pdfpimg=$newfilename.$ext;
    $uploaded=1;
    $productpdf_fields110="productpdfno, productno, pdfname, pdfpimg, addedby, addeddate, modifiedby, modifieddate";
   $productpdf_values110="'0', '$productno', '$pdfname', '$pdfpimg', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
    $productpdf_result110=$obj->insert('productpdf',$productpdf_fields110, $productpdf_values110);
   } else {
    $pdfpimg="";
   }
  } else {
   $pdfpimg="";
  }
 } 

/*----------------------------------------product images ends----------------------------------------*/ 

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
