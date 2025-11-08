<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?include("iproductcategoryflag.php")?>
<?
$pname="category"; $pnamesub="";
$youarein1="Category"; $youarein1link="category.php";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9="";$youarein9link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$youareinname="Add Category";
$mainheading="Add Category";
$linkheading="Add Category";
$subheading="";
$bodyheading="List of all Category";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="category";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<form id="basicForm" method="post" action="savecategory.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off">
 <input class="form-control" type="hidden" name="categoryno" value="<?echo $categoryno?>">
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Category Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="categoryname" placeholder="Type Category Name..." required>
    </div>		
   </div>
    <div class="col-lg-6"></div>
   <? if($pro_categoryimg<>0){?>
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Category Image<? if($pro_categoryimg_com<>0){?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
     <label class="custom-file"><input type="file" id="file" name="categoryimg" class="custom-file-input" <? if($pro_categoryimg_com<>0){?>required<? } ?>>
	 <span class="custom-file-control"></span>
	 </label><br>
	 <? echo $categoryimgsize?>
    </div>		
   </div>
   <? } ?> 
   <div class="col-lg-6"></div>
   <? if($pro_categorybanner<>0){?>
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Category Banner&nbsp;<span class="tx-danger">*</span></label>
     <label class="custom-file"><input type="file" id="file" name="categorybanner" class="custom-file-input" required>
	 <span class="custom-file-control"></span>
	 </label><br>
	 <? echo $categorybannersize?>
    </div>		
   </div>
   <? } ?>
   <!--<div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Category Description&nbsp;</label>
     <textarea id="summernote" placeholder="Type text here..." name="categorydesc" class="form-control" ></textarea>
    </div>		
   </div>-->
   <!-----------------inputs ends--------------------------->
  </div>  
  <div class="form-layout-footer">
   <button class="btn btn-info">Submit Form</button>
  </div>
 </div>	  
</form>		
<?include ("ibottom.php")?>