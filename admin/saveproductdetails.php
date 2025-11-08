<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$brandsno=$_POST["brandsno"];
$categoryno=$_POST["categoryno"];
$subcategoryno=$_POST["subcategoryno"];
$subcategory2no=$_POST["subcategory2no"];
$subcategory3no=$_POST["subcategory3no"];
$subcategory4no=$_POST["subcategory4no"];
$subcategory5no=$_POST["subcategory5no"];
$subcategory6no=$_POST["subcategory6no"];
$productno=$_POST["productno"];
$sbutton = trim($_POST["sbutton"]);
$pname1=trim($_REQUEST["prname"]);
$pname1=str_replace("'","&#39;",$pname1);

include("icallcategory.php");

//$categoryno = $_POST["categoryno"]; 	
//$subcategoryno = $_POST["subcategoryno"];
$brandsno = trim($_POST["brandsno"]);
$brandsno=str_replace("'","&#39;",$brandsno);
$productcodesuffix = "";
	
$productpriority=0;	

/*----------------------------------------product ends----------------------------------------*/	

/*----------------------------------------product details starts----------------------------------------*/
for($i=1; $i<=4; $i++) {

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
 $specialoffer = $_POST['specialoffer'.$i];	
 $newarrivals = $_POST['newarrivals'.$i];	
 $hotdeals = $_POST['hotdeals'.$i];	
  $renewed = $_POST['renewed'.$i];	
 $featuredproduct = $_POST['featuredproduct'.$i];	
 $bestseller = $_POST['bestseller'.$i];	
 $storagespace = $_POST['storagespace'.$i];	
 $status = $_POST['status'.$i];	
 $enduserprice = trim($_POST["enduserprice".$i]);
 $enduserprice=str_replace("'","&#39;",$enduserprice);
  
$sql_productdetails="SELECT MAX(productdetailsno) FROM productdetails";
$result_productdetails=$obj->execute($sql_productdetails);
 foreach($result_productdetails as $row_productdetails){
  $productdetailsno= $row_productdetails["MAX(productdetailsno)"]+10;
 } 


 if (($pro_productcode<>0) and ($pro_productcodeauto<>1)){
  $productcode = $_POST['productcode'.$i];	
  $productcode=str_replace("'","&#39;",$productcode);
 } else {	   
  $product_code_orderby = "productcode desc limit 1";
  $product_code_result = $obj->select_table('productdetails');
  foreach($product_code_result as $product_code_row){
   $productcode = $product_code_row["productcode"]+1;
  }
 }
  $pcode = $pro_productcodesuffix.$productcode; 
  
 $productdist500="*";
 $productwhere500="productcode ='$productcode'";
 $producttcount5001=$obj->totalrecords_condition('productdetails', $productdist500, $productwhere500);
 foreach($producttcount5001 as $productrow ){
  $producttcount500=$productrow['count(*)'];
 }
  
 if($productcode<>''  && $enduserprice<>0){
$product_fields100="productdetailsno, productno, productname, productcodesuffix, productcode, pcode, itemsize, itemweight, packingsize, countryoforigin, stock, specialoffer, newarrivals, hotdeals, featuredproduct, bestseller, renewed,status, addedby, addeddate, modifiedby, modifieddate,storagespace";
 $product_values100="'$productdetailsno', '$productno',  '', '$pro_productcodesuffix', '$productcode', '$pcode', '$itemsize', '$itemweight', '$packingsize', '$countryoforigin', '$stock', '$specialoffer', '$newarrivals', '$hotdeals', '$featuredproduct', '$bestseller', '$renewed','$status', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave','$storagespace'"; 
 $product_result100=$obj->insert("productdetails", $product_fields100, $product_values100);
 }
 
 
/*----------------------------------------product price starts----------------------------------------*/   
 if ($pro_price<>0) {
  $wholesaleprice = trim($_POST["wholesaleprice".$i]);
  $wholesaleprice=str_replace("'","&#39;",$wholesaleprice);
  $distrubutorprice = trim($_POST["distrubutorprice".$i]);
  $distrubutorprice=str_replace("'","&#39;",$distrubutorprice);
  $retailerprice = trim($_POST["retailerprice".$i]);
  $retailerprice=str_replace("'","&#39;",$retailerprice);
  $enduserprice = trim($_POST["enduserprice".$i]);
  $enduserprice=str_replace("'","&#39;",$enduserprice);
  $specialofferprice =  trim($_POST["specialofferprice".$i]);
  $specialofferprice=str_replace("'","&#39;",$specialofferprice);
  if($wholesaleprice<>"" || $distrubutorprice<>"" || $retailerprice<>"" || $enduserprice<>"" || $specialofferprice<>"") {
   $productprices_fields170="productpricesno, productno, productdetailsno, wholesaleprice, distrubutorprice, retailerprice, enduserprice, specialofferprice, addedby, addeddate";
   $productprices_values170="'0', '$productno', '$productdetailsno', '$wholesaleprice', '$distrubutorprice', '$retailerprice', '$enduserprice', '$specialofferprice', '$addedbydbsave', '$addeddatesave'"; 
   $productprices_result170=$obj->insert("productprices", $productprices_fields170, $productprices_values170);
  }
 } 
/*----------------------------------------product price ends----------------------------------------*/ 

} 
     $brandsno=$_POST["brandsno"];
	 $categoryno=$_POST["categoryno"];
	 $subcategoryno=$_POST["subcategoryno"];
	 $subcategory2no=$_POST["subcategory2no"];
	 $subcategory3no=$_POST["subcategory3no"];
	 $subcategory4no=$_POST["subcategory4no"];
	 $subcategory5no=$_POST["subcategory5no"];
	 $subcategory6no=$_POST["subcategory6no"];
	 
	$page=$_POST["page"];
	$pname=$_POST["pagename"];
		
  header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&page=$page&pname=$pname");	

/*********************************SINGLE PRODUCT**********************************************************-*/	
?>
