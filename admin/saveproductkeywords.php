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
 
/*----------------------------------------product keywords starts----------------------------------------*/	
 $pagetitle = $_POST['pagetitle'];
 $pagetitle=str_replace("'","&#39;",$pagetitle);
 $pagedesc = $_POST['pagedesc'];
 $pagedesc=str_replace("'","&#39;",$pagedesc);
 $keywords = $_POST['keywords'];
 $keywords=str_replace("'","&#39;",$keywords);
 
 $productkeywords_fields150="productkeywordsno, productno, pagetitle, pagedesc, keywords, addedby, addeddate, modifiedby, modifieddate";
 $productkeywords_values150="'0', '$productno', '$pagetitle', '$pagedesc', '$keywords', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
 $productkeywords_result150=$obj->insert("productkeywords", $productkeywords_fields150, $productkeywords_values150);

/*----------------------------------------product keywords ends----------------------------------------*/	

header("Location:viewproduct.php?productno=$productno&brandsno=$brandsno&categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&page=$page&pname=$pname");	
ob_flush();
?>
