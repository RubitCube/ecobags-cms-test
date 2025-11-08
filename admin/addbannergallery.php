<?include("iconnect.php")?>
<?
$pname="bannergallery"; $pnamesub="";
$youarein1="Banner Gallery"; $youarein1link="bannergallery.php";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$youareinname="Add Banner Gallery";
$mainheading="Add Banner Gallery";
$linkheading="Add Banner Gallery";
$subheading="";
$bodyheading="List of all Banner Gallery";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";$addiconinboundtours="No";
$linkname="bannergallery";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?>
	<form action="savebannergallery.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off">
	<div class="form-layout form-layout-1">
	<div class="row mg-b-25"> 		
	<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">Desktop Banner Photo:</label>
	<label class="custom-file">
	<input type="file" id="file" name="pimg" class="custom-file-input"><font class=ttdtext>	 <? echo $bannersize?></font>
	<span class="custom-file-control"></span>
	</label>
	</div>
	</div>	
	<div class="col-lg-6">
	<div class="form-group">
	</div>
	</div>
	<!--<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">Mobile Banner Photo:</label>
	<label class="custom-file">
	<input type="file" id="file" name="mimg" class="custom-file-input"><font class=ttdtext>	(<? echo $mbannersize?></font>
	<span class="custom-file-control"></span>
	</label>
	</div>
	</div>-->

	</div>	
	<div class="form-layout-footer">
	<button class="btn btn-info">Submit Form</button>
	</div>
	</div>
	</form>		

	<?include ("ibottom.php")?>
	
