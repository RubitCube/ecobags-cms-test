<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
$categoryno=$_REQUEST["categoryno"];
?>
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
$youarein9=""; $youarein9link="";
$youareinname="Modify Category : ".$master_categoryname;
$mainheading="Modify Category : ".$master_categoryname;
$linkheading="Modify Category";
$subheading="";
$bodyheading="Update your Category details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="category";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$categoryno=$_REQUEST["categoryno"];
$where="categoryno =$categoryno";
$result_category = $obj->select_all_values('category', $where,'');
foreach($result_category as $category_row)
{
    $categoryno = $category_row['categoryno'];
	$categoryname = $category_row['categoryname'];
	$categoryimg = $category_row['categoryimg'];
	$categorybanner = $category_row['categorybanner'];
	$categorydesc = $category_row['categorydesc'];
	$priority = $category_row["priority"];
	$status = $category_row["status"];
	$addeddate =$category_row["addeddate"];
	$addeddate = date("d M Y", strtotime($addeddate));
}?>
<form action="updatecategory.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
 <input class="form-control" type="hidden" name="brandsno" value="<?echo $brandsno?>">
 <input type="hidden" name="categoryno" class="form-control" value="<?echo $categoryno?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 	
 <input type="hidden" name="ppimg" class="form-control" value="<?echo $categoryimg?>">
 <input type="hidden" name="ppimg2" class="form-control" value="<?echo $categorybanner?>">
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Category Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control"  <?if ($categoryno==200 || $categoryno==210){?> readonly <? }?>type="text" name="categoryname" placeholder="Type Category Name..." required value="<?echo $categoryname?>">
    </div>		
   </div>
    <div class="col-lg-6"></div>
	
   <? if($pro_categoryimg<>0){?>
   <div class="col-lg-3">
    <div class="form-group">
     <label class="form-control-label">Category Image<? if($pro_categoryimg_com<>0){?>&nbsp;<span class="tx-danger">*</span><? } ?></label>
	  <input type="file" style="padding:5px;" name="categoryimg"  placeholder="Upload Image..."  accept='image/*'/  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"><br><? echo $categoryimgsize?>
    </div>		
   </div>
   
   <div class="col-lg-1">
    <div class="form-group">
     <label class="form-control-label">View Image&nbsp;</label>
     <?if ($categoryimg<>""){?><img src="../categoryimg/<? echo $categoryimg ?>" style="height:50px;" class="thumbnail"><?	}	else	{	?><img src="img/noimage.png" style="height:50px;" class="thumbnail"><?}?>
    </div>		
   </div>
   
    <div class="col-lg-2">
    <div class="form-group">
     <label class="form-control-label"><span class="tx-danger">&nbsp;</span></label>
     <img id="output" style="width:80px;height:60px;margin-left:0px;" class="border-0" src="img/defaultimg.png"/> </div>
   </div>
   <? }?>
   <div class="col-lg-6"></div>
   <? if($pro_categorybanner<>0){?>
    <div class="col-lg-3">
    <div class="form-group">
     <label class="form-control-label">Category Banner&nbsp;<span class="tx-danger">*</span></label>
     <input type="file" style="padding:5px;" name="categorybanner"  placeholder="Upload Image..."  accept='image/*'/  onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])">
	<br><? echo $categorybannersize?>
    </div>		
   </div>
   
    <div class="col-lg-1">
    <div class="form-group">
     <label class="form-control-label">View Banner&nbsp;</label>
     <?if ($categorybanner<>""){?><img src="../categorybanner/<? echo $categorybanner ?>" style="height:50px;" class="thumbnail"><?	}	else	{	?><img src="img/noimage.png" style="height:50px;" class="thumbnail"><?}?>
    </div>		
   </div>
   
    <div class="col-lg-2">
    <div class="form-group">
     <label class="form-control-label"><span class="tx-danger">&nbsp;</span></label>
     <img id="output2" style="width:80px;height:60px;margin-left:0px;" class="border-0" src="img/defaultimg.png"/> </div>
   </div>
    <? }?>
  <!-- <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Category Description&nbsp;</label>
     <textarea id="summernote" placeholder="Type text here..." name="categorydesc" class="form-control" ><?echo $categorydesc?></textarea>
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