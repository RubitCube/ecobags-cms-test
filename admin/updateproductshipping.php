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
 
 
$productshipping_wherecondition="productno=$productno";
$productshipping_result=$obj->delete_condition("productshipping", $productshipping_wherecondition);

/*----------------------------------------product shipping starts----------------------------------------*/	
 $shippingfrom = trim($_POST['shippingfrom']);
 $shippingfrom=str_replace("'","&#39;",$shippingfrom);
 $leadtime = trim($_POST['leadtime']);
 $leadtime=str_replace("'","&#39;",$leadtime);
 $shippingcost = trim($_POST['shippingcost']);
 $shippingcost=str_replace("'","&#39;",$shippingcost);
 $shippingdesc = trim($_POST['shippingdesc']);
 $shippingdesc=str_replace("'","&#39;",$shippingdesc);
 $productshipping_fields100="productshippingno, productno, shippingfrom, leadtime, shippingcost, shippingdesc, addedby, addeddate, modifiedby, modifieddate";
 $productshipping_values100="'0', '$productno', '$shippingfrom', '$leadtime', '$shippingcost', '$shippingdesc', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
 $productshipping_result100=$obj->insert("productshipping",$productshipping_fields100,$productshipping_values100);
/*----------------------------------------product shipping ends----------------------------------------*/	
header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pname");	
ob_flush();
?>
