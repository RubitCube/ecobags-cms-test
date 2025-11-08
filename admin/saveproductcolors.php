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

/*----------------------------------------product colors starts----------------------------------------*/ 
		 for($i=1; $i<=3; $i++) {			 
		 $sql_productcolors="SELECT MAX(productcolorsno) FROM productcolors";
		 $result_productcolors=$obj->execute($sql_productcolors);
		 foreach($result_productcolors as $row_productcolors){
		  $productcolorsno= $row_productcolors["MAX(productcolorsno)"]+1;

		 $colorname = trim($_POST["colorname".$i]);
	     $colorname=str_replace("'","&#39;",$colorname);
		 $colorcode = trim($_POST["colorcode".$i]); 
		 if($colorcode<>"" && $colorname<>"") {
		   $productcolors_fields160="productcolorsno, productno,  colorname,colorcode, addedby, addeddate";
           $productcolors_values160="'$productcolorsno', '$productno',  '$colorname','$colorcode', '$addedbydbsave', '$addeddatesave'"; 
           $productcolors_result160=$obj->insert("productcolors", $productcolors_fields160, $productcolors_values160);		 
		 }
		 
		 //save pimg
		 /*----------------------------------------product image starts----------------------------------------*/ 
		  if($colorcode<>"" || $colorname<>"") {
		$photo=$productno."_pic_".$now."_".$i;
		  if(!empty($_FILES["pimg".$i]))	{
		   $newfilename= $photo;
		   $filename =strtolower(basename($_FILES['pimg'.$i]['name']));
		   $ext = substr($filename, strrpos($filename, '.') + 1);
		   $ext=".".$ext;
		   $newname = '../productimages/'.$newfilename.$ext;
		   if((move_uploaded_file($_FILES['pimg'.$i]['tmp_name'],$newname))) {
			$pimg=$newfilename.$ext;
			$uploaded=1;
			$productimages_fields110="productimagesno, productno, productcolorsno,  pimg, addedby, addeddate, modifiedby, modifieddate";
			$productimages_values110="'0', '$productno', $productcolorsno,'$pimg', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
			$productimages_result110=$obj->insert('productimages',$productimages_fields110, $productimages_values110);
		   } else {
			$pimg="";
		   }
		  } else {
		   $pimg="";
		  } 
		  
		 }
		 }
		}
		/*----------------------------------------product image ends----------------------------------------*/ 
  
header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
