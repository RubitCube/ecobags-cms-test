<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?
if($pname=="category" && $page=="subcategory6.php")
{
 $pname="category"; $pnamesub="";
 $youarein1="Category"; $youarein1link="category.php?categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein2="Sub Category Level 1"; $youarein2link="subcategory.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein3="Sub Category Level 2"; $youarein3link="subcategory2.php?subcategoryno=".$subcategoryno."&categoryno=".$categoryno."&brandsno=".$brandsno."&page=".$page."&pname=".$pname;
 $youarein4="Sub Category Level 3"; $youarein4link="subcategory3.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein5="Sub Category Level 4"; $youarein5link="subcategory4.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory3no=".$subcategory3no; 
 $youarein6="Sub Category Level 5"; $youarein6link="subcategory5.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno;
 $youarein7="Sub Category Level 6"; $youarein7link="subcategory6.php?categoryno=".$categoryno."&subcategoryno=".$subcategoryno."&subcategory2no=".$subcategory2no."&subcategory3no=".$subcategory3no."&subcategory4no=".$subcategory4no."&page=".$page."&pname=".$pname."&brandsno=".$brandsno."&subcategory5no=".$subcategory5no;
 $youarein8=""; $youarein8link="";
 $youareinname="Add Sub Category Level 6";
 $youareinname="Modify Sub Category Level 6 : ".$master_subcategory6;
}
$youarein9=""; $youarein9link="";
$mainheading="Modify Sub Category Level 5: ".$master_categoryname." - ".$master_subcategory." - ".$master_subcategory2." - ".$master_subcategory3." - ".$master_subcategory4." - ".$master_subcategory5;
$linkheading="Modify Sub Category Level 6";
$subheading="";
$bodyheading="Update your Sub Category Level 6 details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="subcategory6";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$subcategory6no=$_REQUEST["subcategory6no"];
$where="subcategory6no =$subcategory6no";
$result_subcategory6 = $obj->select_all_values('subcategory6', $where,'');
foreach($result_subcategory6 as $subcategory6_row)
{
    $subcategory6no = $subcategory6_row['subcategory6no'];
	$subcategory6 = $subcategory6_row['subcategory6'];
	$subcategory6img = $subcategory6_row['subcategory6img'];
	$subcat6desc = $subcategory6_row['subcat6desc'];
	$subcategory6priority = $subcategory6_row["subcategory6priority"];
	$status = $subcategory6_row["status"];
	$addeddate =$subcategory6_row["addeddate"];
	$addeddate = date("d M Y", strtotime($addeddate));
}?>
<form action="updatesubcategory6.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
 <input type="hidden" name="brandsno" class="form-control" value="<?echo $brandsno?>"> 
 <input type="hidden" name="categoryno" class="form-control" value="<?echo $categoryno?>"> 
 <input type="hidden" name="subcategoryno" class="form-control" value="<?echo $subcategoryno?>">
 <input type="hidden" name="subcategory2no" class="form-control" value="<?echo $subcategory2no?>">
 <input type="hidden" name="subcategory3no" class="form-control" value="<?echo $subcategory3no?>"> 
 <input type="hidden" name="subcategory4no" class="form-control" value="<?echo $subcategory4no?>"> 
 <input type="hidden" name="subcategory5no" class="form-control" value="<?echo $subcategory5no?>"> 
 <input type="hidden" name="subcategory6no" class="form-control" value="<?echo $subcategory6no?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 	
 <input type="hidden" name="ppimg" class="form-control" value="<?echo $subcategory6img?>">
 <div class="form-layout form-layout-1">
  <div class="row mg-b-35"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Sub Category 6 Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="subcategory6" placeholder="Type Sub Category 6 Name..." required value="<?echo $subcategory6?>">
    </div>		
   </div>	
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Upload Image&nbsp;</label>
     <label class="custom-file">
     <input type="file" id="file" name="subcategory6img" class="custom-file-input" >
     <span class="custom-file-control"></span>
     </label><?  echo$subcategory6imgsize?>
    </div>
   </div>	
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Sub Category 6 Description &nbsp;</label>
     <textarea id="summernote" placeholder="Type text here..." name="subcat6desc" class="form-control" ><?echo $subcat6desc?></textarea>	
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