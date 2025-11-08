<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?include("iproductsettings.php")?>
<?
 $productno = $_REQUEST["productno"];
 $product_where="productno =$productno";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $productno = $product_row["productno"];
  $pname1 = $product_row["pname"];
  $pstatus = $product_row["pstatus"];  
 }
 $productcategory_where="productno =$productno";
 $productcategory_result = $obj->select_all_values('productcategory', $productcategory_where,'');
 foreach($productcategory_result as $productcategory_row){
  $ocategoryno = $productcategory_row["categoryno"];
 }

if($categoryno<>0){ 
 if($pname=="category" && $page=="viewproduct.php"){
	$pname="category"; $pnamesub="";
	$youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	$youarein2="Product"; $youarein2link="product.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	$youarein3="View Product Details "; $youarein3link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
	$youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link=""; $youarein7=""; $youarein7link="";$youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
	$mainheading="Modify Product Category : ".$master_categoryname; 
 }
 if($pname=="sortcategorywise" || $page=="sortcategorywiseproductlist.php" || $page=="viewproduct.php"){
 $pname="sortcategorywise"; $pnamesub="";
 $youarein1="Category Wise"; $youarein1link="sortcategorywise.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
 $youarein2="Product"; $youarein2link="sortcategorywiseproductlist.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="View Product Details "; $youarein3link="viewproduct.php?categoryno=".$categoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";$youarein5=""; $youarein5link="";$youarein6=""; $youarein6link="";
 $youarein7=""; $youarein7link="";$youarein8=""; $youarein8link="";$youarein9=""; $youarein9link="";
 $mainheading="View Product Details : ".$master_categoryname;
}
}
if($categoryno<>0 && $subcategoryno<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein3link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Product"; $youarein3link="product.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname; 
 $youarein4="View Product Details"; $youarein4link="viewproduct.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&productno=".$productno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname; 
 $youarein5=""; $youarein5link=""; $youarein6=""; $youarein6link=""; 
 $youarein7=""; $youarein7link="";$youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Modify Product Category : ".$master_categoryname." - ".$master_subcategory;
}
}
if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
  $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Product"; $youarein4link="product.php?productno=".$productno."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $youarein5="View Product Details"; $youarein5link="viewproduct.php?productno=".$productno."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;  
 $youarein6=""; $youarein6link="";$youarein7=""; $youarein7link="";$youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Modify Product Short Features Points: ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2;
}
}
if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1 "; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Product"; $youarein5link="product.php?subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; 
 $youarein6="View Product Details"; $youarein6link="viewproduct.php?productno=".$productno."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;  
 $youarein7=""; $youarein7link="";$youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Modify Product Short Features Points  : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
}
}
if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;	
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
 $youarein6="Product"; $youarein6link="product.php?subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; 
 $youarein7="View Product Details"; $youarein7link="viewproduct.php?productno=".$productno."&subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $youarein8="";$youarein8link="";$youarein9="";$youarein9link="";
 $mainheading="Modify Product Category: ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
 }
}
if($categoryno<>0 && $subcategoryno<>0 && $subcategory2no<>0 && $subcategory3no<>0 && $subcategory4no<>0 && $subcategory5no<>0){
if($pname=="category" && $page=="viewproduct.php"){
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;	
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
 $youarein6="Sub Category Level 5"; $youarein6link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no; 
 $youarein7="Product"; $youarein7link="product.php?subcategory5no=".$subcategory5no."&subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname; 
 $youarein8="View Product Details"; $youarein8link="viewproduct.php?productno=".$productno."&subcategory5no=".$subcategory5no."&subcategory4no=".$subcategory4no."&subcategory3no=".$subcategory3no."&subcategory2no=".$subcategory2no."&categoryno=".$categoryno."&brandsno=".$brandsno."&subcategoryno=".$subcategoryno."&page=".$page."&pname=".$pname;
 $youarein9="";$youarein9link="";
 $mainheading="Modify Product Category : ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
 }
}
$youareinname="Modify Product Category : ".$pname1;
$linkheading="Modify Product Category :";
$subheading="";
$bodyheading="List of all Product";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<!-----Category and category sucategory------------------------------------------------>
<script type="text/javascript">
var xmlHttp // xmlHttp variable
function GetXmlHttpObject()
{
	// This function we will use to call our xmlhttpobject.
	var objXMLHttp=null // Sets objXMLHttp to null as default.
	if (window.XMLHttpRequest) {
	// If we are using Netscape or any other browser than IE lets use xmlhttp.
	objXMLHttp=new XMLHttpRequest() // Creates a xmlhttp request.
	} else if (window.ActiveXObject) {
	// ElseIf we are using IE lets use Active X.
	objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP") // Creates a new Active X Object.
	} // End ElseIf.
	return objXMLHttp // Returns the xhttp object.
} // Close Function

$(document).ready(function() {
	$("#div_category_dynamic").hide();
	$("#div_subcategory_dynamic").hide();
 });
 function showsubcategory()
{
	var categoryno = document.getElementById('categoryno').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	var resultcommunity=this.responseText;	
	$("#div_subcategory_dynamic").hide();
	document.getElementById('div_subcategory_dynamic').innerHTML=resultcommunity;
	$("#div_subcategory_dynamic").show();
	}
	};
	xmlhttp.open("GET","ajaxsubcategory.php?categoryno="+categoryno,true);
	xmlhttp.send();
	return true;
	
}
function showsubcategory2()
{	
	var categoryno = document.getElementById('categoryno').value;
	var subcategoryno = document.getElementById('subcategoryno').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	var resultcommunity=this.responseText;	
	//alert(resultcommunity);
	$("#div_subcategory2_dynamic").hide();
	document.getElementById('div_subcategory2_dynamic').innerHTML=resultcommunity;
	$("#div_subcategory2_dynamic").show();
	}
	};
	xmlhttp.open("GET","ajaxsubcategory2.php?categoryno="+categoryno+"&subcategoryno="+subcategoryno,true);
	xmlhttp.send();
	return true;
	
}
function showsubcategory3()
{
	var categoryno = document.getElementById('categoryno').value;
	var subcategoryno = document.getElementById('subcategoryno').value;
	var subcategory2no = document.getElementById('subcategory2no').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	var resultcommunity=this.responseText;	
	//alert(resultcommunity);
	$("#div_subcategory3_dynamic").hide();
	document.getElementById('div_subcategory3_dynamic').innerHTML=resultcommunity;
	$("#div_subcategory3_dynamic").show();
	}
	};
	xmlhttp.open("GET","ajaxsubcategory3.php?categoryno="+categoryno+"&subcategoryno="+subcategoryno+"&subcategory2no="+subcategory2no,true);
	xmlhttp.send();
	return true;
	
}
function showsubcategory4()
{
	var categoryno = document.getElementById('categoryno').value;
	var subcategoryno = document.getElementById('subcategoryno').value;
	var subcategory2no = document.getElementById('subcategory2no').value;
	var subcategory3no = document.getElementById('subcategory3no').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	var resultcommunity=this.responseText;	
	//alert(resultcommunity);
	$("#div_subcategory4_dynamic").hide();
	document.getElementById('div_subcategory4_dynamic').innerHTML=resultcommunity;
	$("#div_subcategory4_dynamic").show();
	}
	};
	xmlhttp.open("GET","ajaxsubcategory4.php?categoryno="+categoryno+"&subcategoryno="+subcategoryno+"&subcategory2no="+subcategory2no+"&subcategory3no="+subcategory3no,true);
	xmlhttp.send();
	return true;
	
}
function showsubcategory5()
{
	var categoryno = document.getElementById('categoryno').value;
	var subcategoryno = document.getElementById('subcategoryno').value;
	var subcategory2no = document.getElementById('subcategory2no').value;
	var subcategory3no = document.getElementById('subcategory3no').value;
	var subcategory4no = document.getElementById('subcategory4no').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	var resultcommunity=this.responseText;	
	//alert(resultcommunity);
	$("#div_subcategory5_dynamic").hide();
	document.getElementById('div_subcategory5_dynamic').innerHTML=resultcommunity;
	$("#div_subcategory5_dynamic").show();
	}
	};
	xmlhttp.open("GET","ajaxsubcategory5.php?categoryno="+categoryno+"&subcategoryno="+subcategoryno+"&subcategory2no="+subcategory2no+"&subcategory3no="+subcategory3no+"&subcategory4no="+subcategory4no,true);
	xmlhttp.send();
	return true;
	
}
function showsubcategory6()
{
	var categoryno = document.getElementById('categoryno').value;
	var subcategoryno = document.getElementById('subcategoryno').value;
	var subcategory2no = document.getElementById('subcategory2no').value;
	var subcategory3no = document.getElementById('subcategory3no').value;
	var subcategory4no = document.getElementById('subcategory4no').value;
	var subcategory5no = document.getElementById('subcategory5no').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	var resultcommunity=this.responseText;	
	//alert(resultcommunity);
	$("#div_subcategory6_dynamic").hide();
	document.getElementById('div_subcategory6_dynamic').innerHTML=resultcommunity;
	$("#div_subcategory6_dynamic").show();
	}
	};
	xmlhttp.open("GET","ajaxsubcategory6.php?categoryno="+categoryno+"&subcategoryno="+subcategoryno+"&subcategory2no="+subcategory2no+"&subcategory3no="+subcategory3no+"&subcategory4no="+subcategory4no+"&subcategory5no="+subcategory5no,true);
	xmlhttp.send();
	return true;
	
}
</script>
<form id="basicForm" method="post" action="updateproductbrand.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
 <input type="hidden" name="productno" class="form-control" value="<?echo $productno?>">
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
<!--***************************************SINGLE PRODUCT DETAILS STARTS*************************************************-->
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Product Category</h6>
	 <p class="mg-b-0">Please provide the Product Category...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">  
	 <div class="col-lg-12">
	  <div class="row">
	   <!----form Inputs starts--->
	    <div class="col-lg-3">
	     <div class="form-group control-label">
	      <label class="form-control-label">Product Category  <? if ($categoryno<>0) { ?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	     </div>		
	    </div>
	    <div class="col-lg-9">
	     <div class="input-group">
	      <select class="form-control select2-show-search" name="categoryno"  id="categoryno" data-placeholder="Choose one" <? if ($categoryno<>0) { ?>required<? } ?> autofocus onchange="showsubcategory();">
	       <option label="Choose one"></option>
			<?
			$category_orderby="where status='Active' ORDER BY priority asc";
			$category_result=$obj->select_table_orderby("category",$category_orderby);
            foreach($category_result as $category_row)
			{ 
			  $categoryno =$category_row["categoryno"];			
			  $categoryname =$category_row["categoryname"];
			?>
			<option  value="<?echo $categoryno?>"><?echo $categoryname?></option>
			<? 
			}
			?>		
	      </select> 
	     </div>		
	    </div>
	   <!----form Inputs ends-->  
	  </div> 
	  	<!---------------Dynamic  view---------------------------------->
	    <div class="row" id="div_category_dynamic">  
	    
		</div>
		 <div class="row" id="div_subcategory_dynamic">  
	    
		 </div>
		 
		 <div class="row" id="div_subcategory2_dynamic">  
	    
		 </div>
		 <div class="row" id="div_subcategory3_dynamic">  
	    
		 </div>
		 <div class="row" id="div_subcategory4_dynamic">  
	    
		 </div>
		 <div class="row" id="div_subcategory5_dynamic">  
	    
		 </div>
		 <div class="row" id="div_subcategory6_dynamic">  
	    
		 </div>
		<!---------------Dynamic  view---------------------------------->	
	 </div>		
	</div>
   </div>	
   <!----form layout ends--->
  </div>
 </div>
 </div>
<br>
<!--***************************************SINGLE PRODUCT DETAILS ENDS**************************************************-->
<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Submit Form</button>
 <!--<button class="btn btn-info" name="sbutton">Save & Modify Product to Same Category</button>-->
</div>
</form>

	
<?include ("ibottomdashboard.php")?>