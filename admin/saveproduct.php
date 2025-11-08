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
$sbutton = trim($_POST["sbutton"]);
$pname1=trim($_REQUEST["pname"]);
$pname1=str_replace("'","&#39;",$pname1);

include("icallcategory.php");

//$categoryno = $_POST["categoryno"]; 	
//$subcategoryno = $_POST["subcategoryno"];
$brandsno = trim($_POST["brandsno"]);
$brandsno=str_replace("'","&#39;",$brandsno);
$productcodesuffix = "";

 $sql_product="SELECT MAX(productno) FROM product";
 $result_product=$obj->execute($sql_product);
 foreach($result_product as $row_product){
  $productno= $row_product["MAX(productno)"]+5;
 }
 	
$pname = preg_replace('/[^a-zA-Z0-9_ -]/s','',$pname1);
$pnamemask = str_replace(" ","-",$pname);	
$pstatus = $_POST['pstatus'];	
$productpriority=0;	
 /*********************************SINGLE PRODUCT**********************************************************-*/	
 $product_fields100="productno, pname, pnamemask, brandsno,  productpriority, pstatus, addedby, addeddate";
 $product_values100="'$productno', '$pname1', '$pnamemask', '$brandsno', '$productpriority', '$pstatus', '$addedbydbsave', '$addeddatesave'"; 
  $product_result100=$obj->insert("product", $product_fields100, $product_values100);

/*----------------------------------------product ends----------------------------------------*/	



/*---------------------------------------mutliple-product details starts----------------------------------------*/
if ($pro_productmultiple<>0){  //has to work out
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

	//if($productcode<>''  && $enduserprice<>0){
	if($productcode<>''){
	$product_fields100="productdetailsno, productno, productname, productcodesuffix, productcode, pcode, itemsize, itemweight, packingsize, countryoforigin, stock, specialoffer, newarrivals, hotdeals, featuredproduct, bestseller,renewed, status, addedby, addeddate, modifiedby, modifieddate,storagespace";
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
	  //if($wholesaleprice<>"" || $distrubutorprice<>"" || $retailerprice<>"" || $enduserprice<>"" || $specialofferprice<>"") {
	 if($productcode<>''){
	   $productprices_fields170="productpricesno, productno, productdetailsno, brandsno,categoryno, subcategoryno,wholesaleprice, distrubutorprice, retailerprice, enduserprice, specialofferprice, addedby, addeddate";
	   $productprices_values170="'0', '$productno', '$productdetailsno', '$brandsno', '$categoryno', '$subcategoryno','$wholesaleprice', '$distrubutorprice', '$retailerprice', '$enduserprice', '$specialofferprice', '$addedbydbsave', '$addeddatesave'"; 
	   $productprices_result170=$obj->insert("productprices", $productprices_fields170, $productprices_values170);
	 }
	 // }
	 } 
	/*----------------------------------------product price ends----------------------------------------*/  
	

}// multiple product ends
 }else {   //pro_productmultiple single case

 $sql_productdetails="SELECT MAX(productdetailsno) FROM productdetails";
 $result_productdetails=$obj->execute($sql_productdetails);
  foreach($result_productdetails as $row_productdetails){
   $productdetailsno= $row_productdetails["MAX(productdetailsno)"]+10;
  } 
  if ($pro_productcode<>0){
 if (($pro_productcode<>0) and ($pro_productcodeauto<>1)){
 $productcode = $_POST['productcode'];
  $productcode=str_replace("'","&#39;",$productcode);
  } else {	   
 $product_code_orderby = "productcode desc limit 1";
 $product_code_result = $obj->select_table('productdetails');
 foreach($product_code_result as $product_code_row){
  $productcode = $product_code_row["productcode"]+1;
 }
  }
  } else {
  $productcodesuffix = ""; 	  
  $productcode = ""; 
  $pcode = ""; 
  }
  $pcode = $pro_productcodesuffix.$productcode; 
  $itemsize = $_POST['itemsize'];
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
  $newarrivals = $_POST['newarrivals'];
  $hotdeals = $_POST['hotdeals'];
  $featuredproduct = $_POST['featuredproduct'];
  $bestseller = $_POST['bestseller'];
  $status = $_POST['pstatus'];
  $dimension = $_POST['dimension'];
  $materials = $_POST['materials'];
  $productcolor= $_POST['productcolor'];  
  
 $product_fields100="productdetailsno, productno, productname, productcodesuffix, productcode, pcode, itemsize, itemweight, packingsize, countryoforigin, stock, specialoffer, newarrivals, hotdeals, featuredproduct, bestseller, status, addedby, addeddate, modifiedby, modifieddate,dimension,materials,productcolor";
 $product_values100="'$productdetailsno', '$productno',  '', '$pro_productcodesuffix', '$productcode', '$pcode', '$itemsize', '$itemweight', '$packingsize', '$countryoforigin', '$stock', '$specialoffer', '$newarrivals', '$hotdeals', '$featuredproduct', '$bestseller', '$status', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave','$dimension','$materials','$productcolor'"; 
 $product_result100=$obj->insert("productdetails", $product_fields100, $product_values100);
}

	/*------------------------------product short features without desc starts------------------------------------------*/	
		if ($pro_shortfeature<>0) {
		$i=0;
		$pshortfeaturepoints = $_POST['pshortfeaturepoint'];
		  $pshortfeaturepoints=str_replace("'","&#39;",$pshortfeaturepoints);
		foreach($pshortfeaturepoints as $pshortfeaturepoint){
		 $pshortfeaturepoints[]=$pshortfeaturepoint;
		 if($pshortfeaturepoints[$i])	{
		  $productshortfeatures_fields120="productshortfeaturesno, productno, pshortfeaturepoint, addedby, addeddate, modifiedby, modifieddate";
		  $productshortfeatures_values120="'0','$productno', '$pshortfeaturepoints[$i]', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
		  $productshortfeatures__result120=$obj->insert("productshortfeatures", $productshortfeatures_fields120, $productshortfeatures_values120);
		  $i++;
		 }
		}
		}
		/*--------------------------------------product short features without desc ends------------------------------------*/
		
		/*--------------------------------------product features with desc starts---------------------------------------*/
		if ($pro_featuredesc<>0) {	
		$pfeatureheads = $_POST['pfeaturehead'];
		$pfeatureheads=str_replace("'","&#39;",$pfeatureheads);
		foreach($pfeatureheads as $pfeaturehead){
		 $pfeatureheads[]=$pfeaturehead;
		}
		$i=0;
		$pfeaturedescs = $_POST['pfeaturedesc'];
		$pfeaturedescs=str_replace("'","&#39;",$pfeaturedescs);
		foreach($pfeaturedescs as $pfeaturedesc){
		 if($pfeaturedesc<>"" || $pfeatureheads[$i]) {
		  $productfeatures_fields130="productfeaturesheadno, productno, pfeaturehead, pfeaturedesc, addedby, addeddate, modifiedby, modifieddate";
		  $productfeatures_values130="'0', '$productno', '$pfeatureheads[$i]', '$pfeaturedesc', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'";
		  $productfeatures_result130 = $obj->insert("productfeatureshead", $productfeatures_fields130, $productfeatures_values130);
		  $i++;
		 }
		}
		}
		/*--------------------------------------product features with desc ends----------------------------------------*/
	/*------------------------------product features without desc starts---------------------------------------------*/	
    if ($pro_feature<>0) {
	/*------------------------------product features without desc starts---------------------------------------------*/	
	$productfeaturesheading = $_POST['productfeaturesheading'];
	$productfeaturesheading=str_replace("'","&#39;",$productfeaturesheading);

	 $sql_productfeaturesheading="SELECT MAX(productfeaturesheadingno) FROM productfeaturesheading";
	 $result_productfeaturesheading=$obj->execute($sql_productfeaturesheading);
	 foreach($result_productfeaturesheading as $row_productfeaturesheading){
	  $productfeaturesheadingno= $row_productfeaturesheading["MAX(productfeaturesheadingno)"]+10;
	 }
	 
	/*----------------------------------------productfeaturesheading starts----------------------------------------*/	
	 $productfeaturesheading_fields100="productfeaturesheadingno, productno,  productfeaturesheading, addedby, addeddate, modifiedby, modifieddate";
	 $productfeaturesheading_values100="'$productfeaturesheadingno', '$productno', '$productfeaturesheading', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
	 $productfeaturesheading_result100=$obj->insert("productfeaturesheading", $productfeaturesheading_fields100, $productfeaturesheading_values100);
	/*----------------------------------------product ends----------------------------------------*/	
	 
	$pfeaturepoints = $_POST['pfeaturepoint'];
	$pfeaturepoints=str_replace("'","&#39;",$pfeaturepoints);
	$i=0;
	foreach($pfeaturepoints as $pfeaturepoint){
	 $pfeaturepoints[]=$pfeaturepoint;
	 if($pfeaturepoints[$i])	{
	  $productfeatures_fields120="productfeaturesno, productno, productfeaturesheadingno,  pfeaturepoint, addedby, addeddate, modifiedby, modifieddate";
	  $productfeatures_values120="'0','$productno', '$productfeaturesheadingno', '$pfeaturepoints[$i]', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
	  $productfeatures__result120=$obj->insert("productfeatures", $productfeatures_fields120, $productfeatures_values120);
	  $i++;
	 }
	}
	/*--------------------------------------product features without desc ends----------------------------------------*/	
	 }
	/*--------------------------------------product features without desc ends----------------------------------------*/
	/*----------------------------------------product description starts----------------------------------------*/	
	if ($pro_shortdesc<>0) {
		$shortdesc1 = $_POST['shortdesc1'];
	if($shortdesc1<>"") {
	 $shortdesc1 = $_POST['shortdesc1'];
	 $shortdesc1=str_replace("'","&#39;",$shortdesc1);
	  $productshortdesc_fields140="productshortdescno, productno, shortdesc1, addedby, addeddate, modifiedby, modifieddate";
	  $productshortdesc_values140="'0', '$productno', '$shortdesc1', '$addedbydbsave', '$addeddatesave',  '$addedbydbupdate', '$addeddatesave'"; 
	  $productshortdesc_result140=$obj->insert("productshortdesc", $productshortdesc_fields140, $productshortdesc_values140);
	}
	}
	/*----------------------------------------product description ends----------------------------------------*/

	/*----------------------------------------product description starts----------------------------------------*/	
	if ($pro_desc<>0) {
		$desc1 = $_POST['desc1'];
	if($desc1<>"") {
	 $desc1 = $_POST['desc1'];
	 $desc1=str_replace("'","&#39;",$desc1);
	  $productdesc_fields140="productdescno, productno, desc1, addedby, addeddate, modifiedby, modifieddate";
	  $productdesc_values140="'0', '$productno', '$desc1', '$addedbydbsave', '$addeddatesave',  '$addedbydbupdate', '$addeddatesave'"; 
	  $productdesc_result140=$obj->insert("productdesc", $productdesc_fields140, $productdesc_values140);
	}
	}
	/*----------------------------------------product description ends----------------------------------------*/	
	/*----------------------------------------product additional tabs starts----------------------------------------*/	
	if ($pro_adddesc<>0) {
	$tabhead = $_POST['tabhead'];
	 $tabhead=str_replace("'","&#39;",$tabhead);
	$tabdesc1 = $_POST['tabdesc1'];
	if($tabdesc1<>"") {
	 $tabdesc1 = $_POST['tabdesc1'];
	 $tabdesc1=str_replace("'","&#39;",$tabdesc1);
	  $producttabs_fields140="producttabsno, productno, tabhead, tabdesc1, addedby, addeddate, modifiedby, modifieddate";
	  $producttabs_values140="'0', '$productno', '$tabhead', '$tabdesc1', '$addedbydbsave', '$addeddatesave',  '$addedbydbupdate', '$addeddatesave'"; 
	  $producttabs_result140=$obj->insert("producttabs", $producttabs_fields140, $producttabs_values140);
	}
	}
	/*----------------------------------------product additional tabs ends----------------------------------------*/		
	/*----------------------------------------product images starts----------------------------------------*/
	if ($pro_productmultiple<>1) {
	 $imax = $_POST["imax"];
	 for($i=1; $i<=$imax; $i++) {
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
		$productimages_fields110="productimagesno, productno, productdetailsno, pimg, addedby, addeddate, modifiedby, modifieddate";
		$productimages_values110="'0', '$productno', '$productdetailsno', '$pimg', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
		$productimages_result110=$obj->insert('productimages',$productimages_fields110, $productimages_values110);
	   } else {
		$pimg="";
	   }
	  } else {
	   $pimg="";
	  }
	 } 
	} 
	/*----------------------------------------product images ends----------------------------------------*/ 	
/*----------------------------------------product shipping starts----------------------------------------*/
	if ($pro_shipping<>0) {	
	 $shippingfrom = trim($_POST['shippingfrom']);
	 $shippingfrom=str_replace("'","&#39;",$shippingfrom);
	 $leadtime = trim($_POST['leadtime']);
	 $leadtime=str_replace("'","&#39;",$leadtime);
	 $shippingcost = trim($_POST['shippingcost']);
	 $shippingcost=str_replace("'","&#39;",$shippingcost);
	 $shippingdesc = trim($_POST['shippingdesc']);
	 $shippingdesc=str_replace("'","&#39;",$shippingdesc);
	 if($shippingfrom<>"" || $leadtime<>"" || $shippingcost<>"" || $shippingdesc<>"") {
	  $productshipping_fields100="productshippingno, productno, shippingfrom, leadtime, shippingcost, shippingdesc, addedby, addeddate, modifiedby, modifieddate";
	  $productshipping_values100="'0', '$productno', '$shippingfrom', '$leadtime', '$shippingcost', '$shippingdesc', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
	  $productshipping_result100=$obj->insert("productshipping",$productshipping_fields100,$productshipping_values100);
	 }
	}
	/*----------------------------------------product shipping ends----------------------------------------*/	
		
	/*----------------------------------------product warranty starts----------------------------------------*/	
	if ($pro_warranty<>0) {
	$warranty = $_POST['warranty'];
	if($warranty<>"") {
	 $warranty = $_POST['warranty'];
	 $warranty=str_replace("'","&#39;",$warranty);
	  $productwarranty_fields140="productwarrantyno, productno, warranty, addedby, addeddate, modifiedby, modifieddate";
	  $productwarranty_values140="'0', '$productno', '$warranty', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
	  $productwarranty_result140=$obj->insert("productwarranty", $productwarranty_fields140, $productwarranty_values140);
	}
	}
	/*----------------------------------------product warranty ends----------------------------------------*/		
	
	/*----------------------------------------product pdf starts----------------------------------------*/
	if ($pro_productmultiple<>0) {
	if ($pro_productpdf<>0) {
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
		echo$productpdf_fields110="productpdfno, productno,  pdfname, pdfpimg, addedby, addeddate, modifiedby, modifieddate";
		$productpdf_values110="'0', '$productno',  '$pdfname', '$pdfpimg', '$addedbydbsave', '$addeddatesave', '$addedbydbupdate', '$addeddatesave'"; 
		$productpdf_result110=$obj->insert('productpdf',$productpdf_fields110, $productpdf_values110);
	   } else {
		$pdfpimg="";
	   }
	  } else {
	   $pdfpimg="";
	  }
	 } 
	}
	}
	/*----------------------------------------product pdf ends----------------------------------------*/ 
	
	/*----------------------------------------product keywords starts----------------------------------------*/	
	if ($pro_keywords<>0) {	

	 $categoryno=$_POST["categoryno"];
	 $subcategoryno=$_POST["subcategoryno"];
	 $subcategory2no=$_POST["subcategory2no"]; 
	include("icallcategory.php");
	if($subcategoryno<>0){
	 include("icallsubcategory.php");
	} else {
	 $subcategory ="";
	}	
	if($subcategoryno<>0){
	 include("icallsubcategory2.php");
	} else {
	 $subcategory2 ="";
	 
	}	
	 $pagetitle = $_POST['pagetitle'];
	 $pagetitle=str_replace("'","&#39;",$pagetitle);
	 $pagedesc = $_POST['pagedesc'];
	 $pagedesc=str_replace("'","&#39;",$pagedesc);
	 $keywords = $_POST['keywords'];
	 $keywords=str_replace("'","&#39;",$keywords);
	 if($pagetitle<>"" || $pagedesc<>"" || $keywords<>"") {
	 $productkeywords_fields150="productkeywordsno, productno, pagetitle, pagedesc, keywords, categorydesc, subcategorydesc, subcategory2desc,addedby, addeddate";
	 $productkeywords_values150="'0', '$productno', '$pagetitle', '$pagedesc', '$keywords', '$master_category', '$subcategory', '$subcategory2','$addedbydbsave', '$addeddatesave'"; 
	 $productkeywords_result150=$obj->insert("productkeywords", $productkeywords_fields150, $productkeywords_values150);
	 }
	}
	/*----------------------------------------product keywords ends----------------------------------------*/	
	/*----------------------------------------product colors starts----------------------------------------*/ 
 	if ($pro_colors<>0) {
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
		}		 
		}
	}	
   /*----------------------------------------product colors ends----------------------------------------*/	


	/*=================category starts=========================*/

	$categoryno=$_POST["categoryno"];
	 $subcategoryno=$_POST["subcategoryno"];
	 $subcategory2no=$_POST["subcategory2no"];
	 $subcategory3no=$_POST["subcategory3no"];
	 $subcategory4no=$_POST["subcategory4no"];
	 $subcategory5no=$_POST["subcategory5no"];
	 $subcategory6no=$_POST["subcategory6no"];
	 
	  $productcategory_fields150="productcategoryno,	productno, brandsno,categoryno, subcategoryno, subcategory2no, subcategory3no, subcategory4no, subcategory5no, subcategory6no, productpriority, pstatus";
	  $productcategory_values150="'0', '$productno', '$brandsno','$categoryno', '$subcategoryno', '$subcategory2no', '$subcategory3no', '$subcategory4no', '$subcategory5no', '$subcategory6no', '0', '$pstatus'"; 
	  $productcategory_result150=$obj->insert("productcategory", $productcategory_fields150, $productcategory_values150);
		  

	
	$page=$_POST["page"];
	$pname=$_POST["pagename"];
	
	if ($sbutton<>'Saveanother'){
	header("Location:viewproduct.php?categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&productno=$productno&action=added&plink=direct&pname=$pname&page=$page");
	 ob_flush();	
	} 
	else { 
	header("Location:addproduct.php?categoryno=$categoryno&subcategoryno=$subcategoryno&subcategory2no=$subcategory2no&subcategory3no=$subcategory3no&subcategory4no=$subcategory4no&subcategory5no=$subcategory5no&subcategory6no=$subcategory6no&action=added&plink=direct&pname=$pname&page=$page");
	 ob_flush();	
	}

	?>