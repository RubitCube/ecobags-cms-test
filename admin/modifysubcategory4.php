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
 $youareinname="Modify Sub Category Level 4 : ".$master_subcategory4;
}

$youarein6=""; $youarein6link="";
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$mainheading="Modify Sub Category Level 4: ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3;
$linkheading="Modify Sub Category Level 4";
$subheading="";
$bodyheading="Update your Sub Category Level 4 details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="subcategory4";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$subcategory4no=$_REQUEST["subcategory4no"];
$where="subcategory4no =$subcategory4no";
$result_subcategory4 = $obj->select_all_values('subcategory4', $where,'');
foreach($result_subcategory4 as $subcategory4_row)
{
    $subcategory4no = $subcategory4_row['subcategory4no'];
	$subcategory4 = $subcategory4_row['subcategory4'];
	$subcategory4img = $subcategory4_row['subcategory4img'];
	$subcat4desc = $subcategory4_row['subcat4desc'];
	$subcategory4priority = $subcategory4_row["subcategory4priority"];
	$status = $subcategory4_row["status"];
	$addeddate =$subcategory4_row["addeddate"];
	$addeddate = date("d M Y", strtotime($addeddate));
}?>
<form action="updatesubcategory4.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
 <input type="hidden" name="brandsno" class="form-control" value="<?echo $brandsno?>"> 
 <input type="hidden" name="categoryno" class="form-control" value="<?echo $categoryno?>"> 
 <input type="hidden" name="subcategoryno" class="form-control" value="<?echo $subcategoryno?>">
 <input type="hidden" name="subcategory2no" class="form-control" value="<?echo $subcategory2no?>">
 <input type="hidden" name="subcategory3no" class="form-control" value="<?echo $subcategory3no?>"> 
 <input type="hidden" name="subcategory4no" class="form-control" value="<?echo $subcategory4no?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 	
 <input type="hidden" name="ppimg" class="form-control" value="<?echo $subcategory4img?>">
 <div class="form-layout form-layout-1">
  <div class="row mg-b-35"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Sub Category Level 4 Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="subcategory4" placeholder="Type Sub Category 4 Name..." required value="<?echo $subcategory4?>">
    </div>		
   </div>	
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Upload Image&nbsp;</label>
     <label class="custom-file">
     <input type="file" id="file" name="subcategory4img" class="custom-file-input" >
     <span class="custom-file-control"></span>
     </label><?  echo$subcategory4imgsize?>
    </div>
   </div>	
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Sub Category Level 4 Description &nbsp;</label>
     <textarea id="summernote" placeholder="Type text here..." name="subcat4desc" class="form-control" ><?echo $subcat4desc?></textarea>	
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