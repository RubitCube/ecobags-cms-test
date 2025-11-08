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

 /*---------------------------------------- productstorage starts----------------------------------------*/		

	$i=0;
	$storagespaces = $_POST['storagespace'];
	$storagespaces=str_replace("'","&#39;",$storagespaces);
	foreach($storagespaces as $storagespace){
	 if($storagespace<>"") {
	  $productstorage_fields130="productstorageno, productno, storagespace,  addedby, addeddate";
	  $productstorage_values130="'0', '$productno',  '$storagespace', '$addedbydbsave', '$addeddatesave'";
	  $productstorage_result130 = $obj->insert("productstorage", $productstorage_fields130, $productstorage_values130);
	  $i++;
	 }
	}

/*----------------------------------------productstorage Ends----------------------------------------*/	

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&page=$page&pname=$pname");	

ob_flush();
?>
