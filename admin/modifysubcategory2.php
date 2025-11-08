<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?
if($pname=="category" && $page=="subcategory2.php")
{
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4=""; $youarein4link="";
 $youareinname="Modify Sub Category Level 2 : ".$master_subcategory2;
}
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$mainheading="Modify Sub Category Level 2: ".$master_categoryname." - ".$master_subcategory;
$linkheading="Modify Sub Category Level 2";
$subheading="";
$bodyheading="Update your Sub Category Level 2 details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="subcategory2";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$subcategory2no=$_REQUEST["subcategory2no"];
$where="subcategory2no =$subcategory2no";
$result_subcategory2 = $obj->select_all_values('subcategory2', $where,'');
foreach($result_subcategory2 as $subcategory2_row)
{
    $subcategory2no = $subcategory2_row['subcategory2no'];
	$subcategory2 = $subcategory2_row['subcategory2'];
	$subcategory2img = $subcategory2_row['subcategory2img'];
	$subcat2desc = $subcategory2_row['subcat2desc'];
	$subcategory2priority = $subcategory2_row["subcategory2priority"];
	$status = $subcategory2_row["status"];
	$addeddate =$subcategory2_row["addeddate"];
	$addeddate = date("d M Y", strtotime($addeddate));
}?>
<form action="updatesubcategory2.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
<input type="hidden" name="brandsno" value="<?echo $brandsno?>">
 <input type="hidden" name="categoryno" value="<?echo $categoryno?>">
 <input type="hidden" name="subcategoryno" value="<?echo $subcategoryno?>">
 <input type="hidden" name="subcategory2no" value="<?echo $subcategory2no?>">
 <input type="hidden" name="subcategory3no" value="<?echo $subcategory3no?>">
 <input type="hidden" name="subcategory4no" value="<?echo $subcategory4no?>">
 <input type="hidden" name="subcategory5no" value="<?echo $subcategory5no?>">
 <input type="hidden" name="subcategory6no" value="<?echo $subcategory6no?>">
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 	
 <input type="hidden" name="ppimg" class="form-control" value="<?echo $subcategory2img?>">
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Sub Category Level 2 Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="subcategory2" placeholder="Type Sub Category 2 Name..." required value="<?echo $subcategory2?>">
    </div>		
   </div>	
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Upload Image&nbsp;</label>
     <label class="custom-file">
     <input type="file" id="file" name="subcategory2img" class="custom-file-input" >
     <span class="custom-file-control"></span>
     </label><?  echo$subcategory2imgsize?>
    </div>
   </div>	
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Sub Category Level 2 Description &nbsp;</label>
     <textarea id="summernote" placeholder="Type text here..." name="subcat2desc" class="form-control" ><?echo $subcat2desc?></textarea>	
    </div>		
   </div>
   <!-----------------inputs start--------------------------->
  </div>	
  <div class="form-layout-footer">
   <button class="btn btn-info">Submit Form</button>
  </div>	
 </div>
</form>		
	
<?include ("ibottom.php")?>