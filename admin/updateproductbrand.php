<?include("iconnect.php")?>
<? 
$page=$_POST["page"];
$pname=$_POST["pname"];
$brandsno=$_POST["brandsno"];
$categoryno=$_POST["categoryno"];
 if($categoryno==""){$categoryno=0;}
$subcategoryno=$_POST["subcategoryno"];
 if($subcategoryno==""){$subcategoryno=0;}
$subcategory2no=$_POST["subcategory2no"];
 if($subcategory2no==""){$subcategory2no=0;}
$subcategory3no=$_POST["subcategory3no"];
 if($subcategory3no==""){$subcategory3no=0;}
$subcategory4no=$_POST["subcategory4no"];
 if($subcategory4no==""){$subcategory4no=0;}
$subcategory5no=$_POST["subcategory5no"];
 if($subcategory5no==""){$subcategory5no=0;}
$subcategory6no=$_POST["subcategory6no"];
 if($subcategory6no==""){$subcategory6no=0;}
$productno = trim($_POST["productno"]);
$pstatus="Active";
/*----------------------------------------delete productcategory---------------------------------------*/	
$productcategory_wherecondition="productno=$productno";
$productcategory_result=$obj->delete_condition("productcategory", $productcategory_wherecondition);
/*----------------------------------------delete productcategory---------------------------------------*/

/*----------------------------------------insert new row in  productcategory-----------------------------*/	
$productcategory_fields150="productcategoryno,	productno, brandsno,categoryno, subcategoryno, subcategory2no, subcategory3no, subcategory4no, subcategory5no, subcategory6no, productpriority, pstatus";
$productcategory_values150="'0', '$productno', '$brandsno','$categoryno', '$subcategoryno', '$subcategory2no', '$subcategory3no', '$subcategory4no', '$subcategory5no', '$subcategory6no', '0', '$pstatus'"; 
$productcategory_result150=$obj->insert("productcategory", $productcategory_fields150, $productcategory_values150);
		  
/*----------------------------------------insert new row in  productcategor-------------------------------*/	
 $product_tablename="product";
 $product_fields="brandsno='$brandsno'";
 $product_condition="productno=$productno";
 $product_result=$obj->updategeneral($product_tablename, $product_fields, $product_condition);
/*----------------------------------------product description ends----------------------------------------*/		
if($categoryno<>0 && $subcategoryno<>0 )
{
	header("Location:product.php?brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&productno=$productno&action=updated&plink=direct&page=$page&pname=$pname");
	ob_flush();
}
if($categoryno<>0 && $subcategoryno==0)
{
	header("Location:product.php?brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&productno=$productno&action=updated&plink=direct&page=$page&pname=$pname");
	ob_flush();
}

?>
