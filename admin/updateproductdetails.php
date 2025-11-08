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
 for($i=1;$i<=1;$i++) { 
 
 $productcodesuffix = trim($_POST["productcodesuffix"]);
 //$pname = trim($_POST["pname"]);
 //$pname=str_replace("'","&#39;",$pname);
 $productcode = trim($_POST["productcode".$i]);
 $productcode=str_replace("'","&#39;",$productcode);
 $storagespace = trim($_POST["storagespace".$i]);
 $storagespace=str_replace("'","&#39;",$storagespace);
 $itemsize = $_POST['itemsize'.$i];
 $itemsize=str_replace("'","&#39;",$itemsize);	
 $itemweight = $_POST['itemweight'.$i];	
 $itemweight=str_replace("'","&#39;",$itemweight);
 $packingsize = $_POST['packingsize'.$i];	
 $packingsize=str_replace("'","&#39;",$packingsize);
 $countryoforigin = $_POST['countryoforigin'.$i];	
 $countryoforigin=str_replace("'","&#39;",$countryoforigin);
 $stock = $_POST['stock'.$i];	
 $stock=str_replace("'","&#39;",$stock);
 $specialoffer = $_POST['specialoffer'];	
 $newarrivals = $_POST['newarrivals'.$i];		
 $renewed = $_POST['renewed'.$i];
 $hotdeals = $_POST['hotdeals'.$i];	
 $featuredproduct = $_POST['featuredproduct'.$i];
 $bestseller = $_POST['bestseller'.$i];	
 $enduserprice = $_POST['enduserprice'.$i];
 $status = $_POST['status'];
 $pcode = $productcodesuffix.$productcode; 



/*----------------------------------------product starts----------------------------------------*/

$productdetails_tablename="productdetails";
$productdetails_fields="productcode='$productcode', pcode='$pcode',storagespace='$storagespace', itemsize='$itemsize', itemweight='$itemweight', packingsize='$packingsize', countryoforigin='$countryoforigin', stock='$stock', specialoffer='$specialoffer', newarrivals='$newarrivals',  hotdeals='$hotdeals', featuredproduct='$featuredproduct', bestseller='$bestseller', renewed='$renewed',status='$status', modifiedby='0', modifieddate='$modifieddateupdate'";
$productdetails_condition="productno=$productno and productdetailsno='$productdetailsno'";
$productdetails_result=$obj->updategeneral($productdetails_tablename, $productdetails_fields, $productdetails_condition);
/*----------------------------------------product ends----------------------------------------*/	



/*----------------------------------------productprices starts----------------------------------------*/
if ($specialoffer<>"No"){
$specialofferprice = trim($_POST["specialofferprice"]);
} else {
$specialofferprice = "0";
}
	
  $productprices_tablename="productprices ";
  $productprices_fields="specialofferprice='$specialofferprice', enduserprice='$enduserprice',brandsno='$brandsno', categoryno='$categoryno', modifiedby='0', modifieddate='$modifieddateupdate'";
 $productprices_condition="productno=$productno and productdetailsno='$productdetailsno'";
  $productprices_result=$obj->updategeneral($productprices_tablename, $productprices_fields, $productprices_condition);
  
 }
/*----------------------------------------productprices ends----------------------------------------*/
header("Location:viewproduct.php?productno=$productno&productdetailsno=$productdetailsno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=updated&plink=direct&page=$page&pname=$pagename");	
ob_flush();
  
?>
