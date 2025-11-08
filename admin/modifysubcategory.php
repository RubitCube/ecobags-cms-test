<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?include("iproductcategoryflag.php")?>
<?
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
$youareinname="Modify Sub Category Level 1 : ".$master_subcategory;
$mainheading="Modify Sub Category Level 1 : ".$master_categoryname;
$linkheading="Modify Sub Category Level 1";
$subheading="";
$bodyheading="Update your Sub Category Level 1 details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="subcategory";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$subcategoryno=$_REQUEST["subcategoryno"];
$where="subcategoryno =$subcategoryno";
$result_subcategory = $obj->select_all_values('subcategory', $where,'');
foreach($result_subcategory as $subcategory_row)
{
    $subcategoryno = $subcategory_row['subcategoryno'];
	$subcategory = $subcategory_row['subcategory'];
	$subcategoryimg = $subcategory_row['subcategoryimg'];
	$subcategorybanner = $subcategory_row['subcategorybanner'];
	$subcatdesc = $subcategory_row['subcatdesc'];
	$subcategorypriority = $subcategory_row["subcategorypriority"];
	$status = $subcategory_row["status"];
	$addeddate =$subcategory_row["addeddate"];
	$addeddate = date("d M Y", strtotime($addeddate));
}?>
<form action="updatesubcategory.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
 <input type="hidden" name="brandsno" class="form-control" value="<?echo $brandsno?>">
 <input type="hidden" name="categoryno" class="form-control" value="<?echo $categoryno?>"> 
 <input type="hidden" name="subcategoryno" class="form-control" value="<?echo $subcategoryno?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 	
 <input type="hidden" name="ppimg" class="form-control" value="<?echo $subcategoryimg?>"> 	
 <input type="hidden" name="ppimg2" class="form-control" value="<?echo $subcategorybanner?>">
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Sub Category Level 1 Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="subcategory" placeholder="Type Sub Category Level 1 Name" required value="<?echo $subcategory?>">
    </div>		
   </div>
 <div class="col-lg-6"></div>   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Upload Image&nbsp;<span class="tx-danger">*</span>&nbsp; <? echo$subcategoryimgsize?></label>
     <label class="custom-file">
     <input type="file" id="file" name="subcategoryimg" class="custom-file-input" >
     <span class="custom-file-control"></span>
     </label>
    </div>
   </div>
 <div class="col-lg-6"></div>
 <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Sub Category Banner&nbsp;<span class="tx-danger">*</span>&nbsp; <? echo$subcategorybannersize?></label>
     <label class="custom-file"><input type="file" id="file" name="subcategorybanner" class="custom-file-input" >
	 <span class="custom-file-control"></span>
	 </label><br>
    </div>		
   </div>    
  <!-- <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Sub Category Level 1 Description &nbsp;</label>
     <textarea id="summernote" placeholder="Type text here..." name="subcatdesc" class="form-control" ><?echo $subcatdesc?></textarea>	
    </div>		
   </div>-->
   <!-----------------inputs start--------------------------->
  </div>	
  <div class="form-layout-footer">
   <button class="btn btn-info">Submit Form</button>
  </div>	
 </div>
</form>		
	
<?include ("ibottom.php")?>