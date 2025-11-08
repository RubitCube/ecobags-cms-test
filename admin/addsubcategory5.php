<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?
if($pname=="category" && $page=="subcategory4.php")
{
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
  $youarein6=""; $youarein6link="";
 $youareinname="Add Sub Category Level 5";
}
if($pname=="category" && $page=="subcategory5.php")
{
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
 $youarein6="Sub Category Level 5"; $youarein6link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youareinname="Add Sub Category Level 5";
}
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$mainheading="Add Sub Category Level 5: ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4;
$linkheading="Add Sub Category Level 5";
$linkheading="Add Sub Category Level 5";
$subheading="";
$bodyheading="List of all Sub Category Level 5";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="subcategory5";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<form id="basicForm" method="post" action="savesubcategory5.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off">
<input type="hidden" name="brandsno" class="form-control" value="<?echo $brandsno?>"> 
 <input type="hidden" name="categoryno" class="form-control" value="<?echo $categoryno?>"> 
 <input type="hidden" name="subcategoryno" class="form-control" value="<?echo $subcategoryno?>"> 
 <input type="hidden" name="subcategory2no" class="form-control" value="<?echo $subcategory2no?>"> 
 <input type="hidden" name="subcategory3no" class="form-control" value="<?echo $subcategory3no?>"> 
 <input type="hidden" name="subcategory4no" class="form-control" value="<?echo $subcategory4no?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>">  
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
  <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
    <label class="form-control-label">Sub Category Level 5 Name &nbsp;<span class="tx-danger">*</span></label>
    <input class="form-control" type="text" name="subcategory5" placeholder="Type Sub Category 5 Name..." required>
    </div>		
   </div>	
   <div class="col-lg-6">
    <div class="form-group">
    <label class="form-control-label">Upload Image&nbsp;</label>
    <label class="custom-file">
    <input type="file" id="file" name="subcategory5img" class="custom-file-input" >
    <span class="custom-file-control"></span>
    </label>
    <? echo$subcategory2imgsize?>
    </div>
   </div>	
   <div class="col-lg-12">
    <div class="form-group">
    <label class="form-control-label">Sub Category Level 5 Description &nbsp;</label>
    <textarea id="summernote" placeholder="Type text here..." name="subcat5desc" class="form-control" ></textarea>	
    </div>		
   </div>
  <!-----------------inputs start--------------------------->
  </div>	
  <div class="form-layout-footer">
   <button class="btn btn-info">Submit Form</button>
  </div>	
</form>		
<?include ("ibottom.php")?>