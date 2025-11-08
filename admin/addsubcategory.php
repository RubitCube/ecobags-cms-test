<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?
if($pname=="category" && $page=="category.php"){
	$pname="category"; $pnamesub="";
	$youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
    $youarein2=""; $youarein2link="";
}
if($pname=="category" && $page=="subcategory.php")
{
	$pname="category"; $pnamesub="";
	$youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&page=".$page."&pname=".$pname;
	$youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;

}
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youareinname="Add Sub Category Level 1 : ".$master_categoryname;
$mainheading="Add Sub Category Level 1 : ".$master_categoryname;
$linkheading="Add Sub Category Level 1 ";
$subheading="";
$bodyheading="List of all Sub Category Level 1";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="subcategory";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<form id="basicForm" method="post" action="savesubcategory.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off">
 <input type="hidden" name="brandsno" class="form-control" value="<?echo $brandsno?>">
 <input type="hidden" name="categoryno" class="form-control" value="<?echo $categoryno?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>">  
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
  <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
    <label class="form-control-label">Sub Category Level 1 Name &nbsp;<span class="tx-danger">*</span></label>
    <input class="form-control" type="text" name="subcategory" placeholder="Type Sub Category Level 1 Name..." required>
    </div>		
   </div> 
   <div class="col-lg-6"></div>	
   <div class="col-lg-6">
    <div class="form-group">
    <label class="form-control-label">Upload Image : <? if($pro_subcategoryimg_com<>0){?>&nbsp;<span class="tx-danger">* </span><? } ?>&nbsp; <? echo$subcategoryimgsize?></label>
    <label class="custom-file">
    <input type="file" id="file" name="subcategoryimg" class="custom-file-input" <? if($pro_subcategoryimg_com<>0){?>required<? } ?>>
    <span class="custom-file-control"></span>  
    </label>
    </div>
   </div>
    <div class="col-lg-6"></div>
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Sub Category Banner&nbsp;<span class="tx-danger">*</span>&nbsp; <? echo$subcategorybannersize?></label>
     <label class="custom-file"><input type="file" id="file" name="subcategorybanner" class="custom-file-input" required>
	 <span class="custom-file-control"></span>
	 </label><br>
    </div>		
   </div>   
  <!-- <div class="col-lg-12">
    <div class="form-group">
    <label class="form-control-label">Sub Category Level 1 Description &nbsp;</label>
    <textarea id="summernote" placeholder="Type text here..." name="subcatdesc" class="form-control" ></textarea>
	</div>		
   </div>-->
  <!-----------------inputs start--------------------------->
  </div>	
  <div class="form-layout-footer">
   <button class="btn btn-info">Submit Form</button>
  </div>	
</form>		
<?include ("ibottom.php")?>