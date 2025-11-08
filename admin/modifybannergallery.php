<?include("iconnect.php")?>
<?
$bannergalleryno=$_REQUEST["bannergalleryno"];
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?
if($pname=="bannergallery" && $page=="bannergallery.php")
{
	$pname="bannergallery"; $pnamesub="bannergallery";
	$youarein1="Banner Gallery"; $youarein1link="bannergallery.php";
	$youarein2=""; $youarein2link="";
	$youareinname="Modify Banner Gallery";
}
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$mainheading="Modify Banner Gallery";
$linkheading="Modify Banner Gallery";
$subheading="";
$bodyheading="Update Banner Gallery";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";$addiconinboundtours="No";
$linkname="bannergallery";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?
$bannergalleryno=$_REQUEST["bannergalleryno"];
$where="bannergalleryno =$bannergalleryno";
$result_bannergallery = $obj->select_all_values('bannergallery', $where,'');
foreach($result_bannergallery as $row)
{
    $bannergalleryno = $row["bannergalleryno"];
	$pimg = $row["pimg"];
	$mimg = $row["mimg"];
	$status = $row["status"];
}?>

   <form action="updatebannergallery.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
	<input type="hidden" name="bannergalleryno" class="form-control" value="<?echo $bannergalleryno?>"> 
	<input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 
	<input type="hidden" name="ppimg" class="form-control" value="<?echo $pimg?>">
	<input type="hidden" name="mmimg" class="form-control" value="<?echo $mimg?>">
	<div class="form-layout form-layout-1">
	<div class="row mg-b-25"> 		
	<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">Desktop Banner Photo:</label>
	<label class="custom-file">
	<input type="file" id="file" name="pimg" class="custom-file-input"><font class=ttdtext>	<? echo $bannersize?></font>
	<span class="custom-file-control"></span>
	</label>
	</div>
	</div>	
	<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">View Desktop Banner </label>
	<?if ($pimg<>""){?><img src="../bannergallery/<? echo $pimg ?>" class="wd-100"  class="thumbnail"><?	}	else	{	?><img src="img/nobanner.jpg" class="wd-100"><?}?>
	</div>
	</div>
	<!--<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">Mobile Banner Photo:</label>
	<label class="custom-file">
	<input type="file" id="file" name="mimg" class="custom-file-input"><font class=ttdtext>	(Image size: width : 1000 pixels; height : 739 pixels)</font>
	<span class="custom-file-control"></span>
	</label>
	</div>
	</div>	
	<div class="col-lg-6">
	<div class="form-group">
	<label class="form-control-label">View Mobile Banner </label>
	<?if ($mimg<>""){?><img src="../bannergallery/<? echo $mimg ?>" class="wd-100"  class="thumbnail"><?	}	else	{	?><img src="img/nobanner.jpg" class="wd-100"><?}?>
	</div>
	</div>-->	
	</div>	
	<div class="form-layout-footer">
	<button class="btn btn-info">Submit Form</button>
	</div>
	</div>
	</form>		

	<?include ("ibottom.php")?>
	
