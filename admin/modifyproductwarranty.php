<?include("iconnect.php")?>
<?$productno = $_REQUEST["productno"];
 $product_where="productno =$productno";
 $product_result = $obj->select_all_values('product', $product_where,'');
 foreach($product_result as $product_row){
  $pname1 = $product_row["pname"];
 }
$pleft="main";
$pname="product";
$pnamesub="";
$mainheading="Modify Product Warranty : ".$pname1;
$subheading="";
$youarein1="<a href='product.php'><font class=youarina>Products</font></a>";
$youarein2="<a href='viewproduct.php?productno=$productno'><font class=youarina>Product Details</font></a>";
$youarein3="";
$youarein4="";
$youarein5="";
$youarein6="";
$youarein7="";
$youarein8="";
$youareinpage="Modify Product Warranty";?>
<?include("itopadd.php")?> 
<?
 $productwarranty_where="productno =$productno";
 $productwarranty_result = $obj->select_all_values('productwarranty', $productwarranty_where,'');
 foreach($productwarranty_result as $productwarranty_row){
  $warranty = $productwarranty_row["warranty"];
 }
 ?>
<form id="basicForm" method=post action="updateproductwarranty.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
 <input type="hidden" name="productno" class="form-control" value="<?echo $productno?>">
 
 <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-11">
   <div class="panel panel-default">
    <div class="panel-heading"><h4 class="panel-title">Product Warranty Information</h4> 
     <p>Please provide the Product Warranty Information...</p>
    </div>
    <div class="panel-body">   
     <div class="col-md-12">
	  <div class="panel panel-default">
       <div class="col-md-12 ">
        <p><a href="http://jhollingworth.github.io/bootstrap-wysihtml5/" target="_blank"></a></p>        		  
        <textarea id="wysiwyg" placeholder="Type text here..." name="warranty" class="form-control" autofocus rows="20"><?echo $warranty?></textarea>		   
       </div>  
	  </div> 
	  <script>
	  jQuery(document).ready(function(){  
	   "use strict";   
	   // HTML5 WYSIWYG Editor
	   jQuery('#wysiwyg').wysihtml5({color: true,html:true}); 
	   // CKEditor
	   jQuery('#ckeditor').ckeditor();
	   jQuery('#inlineedit1, #inlineedit2').ckeditor();
	  
	   // Uncomment the following code to test the "Timeout Loading Method".
	   // CKEDITOR.loadFullCoreTimeout = 5;
	   window.onload = function() {
	    // Listen to the double click event.
	    if ( window.addEventListener )
		document.body.addEventListener( 'dblclick', onDoubleClick, false );
	    else if ( window.attachEvent )
		document.body.attachEvent( 'ondblclick', onDoubleClick );
	   };

	   function onDoubleClick( ev ) {
	    // Get the element which fired the event. This is not necessarily the
	    // element to which the event has been attached.
	    var element = ev.target || ev.srcElement;
	   // Find out the div that holds this element.
	    var name;
	    do {
	     element = element.parentNode;
	    }
	    while ( element && ( name = element.nodeName.toLowerCase() ) && ( name != 'div' || element.className.indexOf( 'editable' ) == -1 ) && name != 'body' );
        if ( name == 'div' && element.className.indexOf( 'editable' ) != -1 )
	    replaceDiv( element );
	   }
       var editor;
       function replaceDiv( div ) {
        if ( editor )
        editor.destroy();
        editor = CKEDITOR.replace( div );
       }
	  });
	 </script>
     </div>	
    </div>  
   </div>
  </div>  

	
<script src="js/wysihtml5-0.3.0.min.js"></script>
<script src="js/bootstrap-wysihtml5.js"></script>
<script src="js/ckeditor/ckeditor.js"></script>
<script src="js/ckeditor/adapters/jquery.js"></script>
<script>
 $(".textarea").each(function(){$(this).wysihtml5();});
</script>
<script src="lib/js/wysihtml5-0.3.0.js"></script>
<script src="lib/js/jquery-1.7.2.min.js"></script>
<script src="lib/js/prettify.js"></script>
<script src="src/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" charset="utf-8">
 $(prettyPrint);
</script>
</div>

<div class="row">
 <div class="col-xs-6 col-sm-4 col-md-6">
  <button class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-white">Reset</button>
 </div>
</div>
</form>

<?php	include 'ibottomadd.php';?>

</html>