<?include("iconnect.php")?>
<?
 $page=$_POST["page"];
 $pagename=$_POST["pagename"];
 $brandsno=$_POST["brandsno"];
 $categoryno=$_POST["categoryno"];
 $subcategoryno=$_POST["subcategoryno"];
 $subcategory2no=$_POST["subcategory2no"];
 $subcategory3no=$_POST["subcategory3no"];
 $subcategory4no=$_POST["subcategory4no"];
 $subcategory5no=$_POST["subcategory5no"];
 $subcategory6no=$_POST["subcategory6no"];
 $productno = trim($_POST["productno"]);
 $productdetailsno = trim($_POST["productdetailsno"]);
 $productcodesuffix = trim($_POST["productcodesuffix"]);
 $pname = trim($_POST["pname"]);
 $pname=str_replace("'","&#39;",$pname);
 $brandsno2 = trim($_POST["brandsno2"]);
 $productcode = trim($_POST["productcode"]);
 $productcode=str_replace("'","&#39;",$productcode); 
 $newarrivals = $_POST['newarrivals'];
  /*$itemsize = $_POST['itemsize'];
 $itemsize=str_replace("'","&#39;",$itemsize);	
 $itemweight = $_POST['itemweight'];	
 $itemweight=str_replace("'","&#39;",$itemweight);
 $packingsize = $_POST['packingsize'];	
 $packingsize=str_replace("'","&#39;",$packingsize);
 $countryoforigin = $_POST['countryoforigin'];	
 $countryoforigin=str_replace("'","&#39;",$countryoforigin);
 $stock = $_POST['stock'];	
 $stock=str_replace("'","&#39;",$stock);
 $specialoffer = $_POST['specialoffer'];	
 $hotdeals = $_POST['hotdeals'];	
 $featuredproduct = $_POST['featuredproduct'];
 $pcode = $productcodesuffix.$productcode; 
 $bestseller = $_POST['bestseller'];*/	
 
 $pcode = $productcodesuffix.$productcode; 
 $pstatus = $_POST['pstatus'];

  $dimension = $_POST['dimension'];
  $materials = $_POST['materials'];
  $productcolor= $_POST['productcolor'];  

/*----------------------------------------product starts----------------------------------------*/

$pnamem = preg_replace('/[^a-zA-Z0-9_ -]/s','',$pname);
$pnamemask = str_replace(" ","-",$pnamem);
 
$product_tablename="product";
$product_fields="pname='$pname', pnamemask='$pnamemask',brandsno='$brandsno2', pstatus='$pstatus', modifiedby='0', modifieddate='$modifieddateupdate'";
$product_condition="productno=$productno";
$product_result=$obj->updategeneral($product_tablename, $product_fields, $product_condition);
/*----------------------------------------product ends----------------------------------------*/	


/*----------------------------------------productcategory starts----------------------------------------*/
$productcategory_tablename="productcategory";
$productcategory_fields="pstatus='$pstatus'";
$productcategory_condition="productno=$productno";
$productcategory_result=$obj->updategeneral($productcategory_tablename, $productcategory_fields, $productcategory_condition);
/*----------------------------------------productcategory ends----------------------------------------*/	

$productdetails_tablename="productdetails";
$productdetails_fields="productcode='$productcode', pcode='$pcode', itemsize='$itemsize', itemweight='$itemweight', packingsize='$packingsize', countryoforigin='$countryoforigin', stock='$stock', specialoffer='$specialoffer', newarrivals='$newarrivals',  hotdeals='$hotdeals', featuredproduct='$featuredproduct', bestseller='$bestseller', status='$pstatus', modifiedby='0', modifieddate='$modifieddateupdate',dimension='$dimension',materials='$materials',productcolor='$productcolor'";
$productdetails_condition="productno=$productno";
$productdetails_result=$obj->updategeneral($productdetails_tablename, $productdetails_fields, $productdetails_condition);




/*----------------------------------------productprices starts----------------------------------------
if ($specialoffer<>"No"){
$specialofferprice = trim($_POST["specialofferprice"]);
} else {
$specialofferprice = "0";
}
	
  $productprices_tablename="productprices";
  $productprices_fields="specialofferprice='$specialofferprice', modifiedby='0', modifieddate='$modifieddateupdate'";
  $productprices_condition="productno=$productno";
  $productprices_result=$obj->updategeneral($productprices_tablename, $productprices_fields, $productprices_condition);
/*----------------------------------------productprices ends----------------------------------------*/
header("Location:viewproduct.php?productno=$productno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pagename");	
ob_flush();
  
?>
