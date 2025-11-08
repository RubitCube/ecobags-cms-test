<?include("iconnect.php")?>
<?
$brandsno=$_REQUEST["brandsno"];
include ("icallbrands.php");
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?
$pname="brands"; $pnamesub="brands";
$youarein1="Brands"; $youarein1link="brands.php";
$youarein2=""; $youarein2link="";
$youareinname="Modify Brands : ". $master_brandsname;
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$mainheading="Modify Brands : ". $master_brandsname;
$linkheading="Modify Brands";
$subheading="";
$bodyheading="Update your Brands details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="brands";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$brandsno=$_REQUEST["brandsno"];
$where="brandsno =$brandsno";
$result_brands = $obj->select_all_values('brands', $where,'');
foreach($result_brands as $brands_row)
{
 $brandsno = $brands_row['brandsno'];
 $brandsname = $brands_row['brandsname'];
 $brandslogo = $brands_row['brandslogo'];
 $brandsimg = $brands_row['brandsimg'];
 $brandsbanner = $brands_row['brandsbanner'];
 $brandsurl = $brands_row['brandsurl'];
 $brandsdesc = $brands_row['brandsdesc'];
 $priority = $brands_row["priority"];
 $status = $brands_row["status"];
}?>
<form action="updatebrands.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
 <input type="hidden" name="brandsno" class="form-control" value="<?echo $brandsno?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 	
 <input type="hidden" name="ppimg" class="form-control" value="<?echo $brandslogo?>">
 <input type="hidden" name="ppimg2" class="form-control" value="<?echo $brandsbanner?>">
 <input type="hidden" name="ppimg3" class="form-control" value="<?echo $brandsimg?>">
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Brands Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="brandsname" placeholder="Type Brands Name..." required value="<?echo $brandsname?>">
    </div>		
   </div>
   <div class="col-lg-3">
    <div class="form-group">
     <label class="form-control-label">Brands Logo&nbsp;<span class="tx-danger">*&nbsp;<? echo $brandslogosize?></span></label>
     <input type="file" style="padding:5px;" name="brandslogo"  placeholder="Upload Image..."  accept='image/*'/  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
    </div>
   </div>
   <div class="col-lg-1">
    <div class="form-group">
     <label class="form-control-label">View Logo&nbsp;</label>
     <?if ($brandslogo<>""){?><img src="../brandslogo/<? echo $brandslogo ?>" style="height:50px;" class="thumbnail"><?	}	else	{	?><img src="img/noimage.png" style="height:50px;" class="thumbnail"><?}?>
    </div>		
   </div>
   <div class="col-lg-2">
    <div class="form-group">
     <label class="form-control-label"><span class="tx-danger">&nbsp;</span></label>
     <img id="output" style="width:80px;height:60px;margin-left:0px;" class="border-0" src="img/defaultimg.png"/>	
    </div>
   </div>	
   <!--<div class="col-lg-5">
    <div class="form-group">
     <label class="form-control-label">Brands Image&nbsp;<span class="tx-danger"></span></label>
     <label class="custom-file"><input type="file" id="file" name="brandsimg" class="custom-file-input">
	 <span class="custom-file-control"></span>
	 </label>
	 <? echo $brandsimgsize?>
    </div>		
   </div>
   <div class="col-lg-1">
    <div class="form-group">
     <label class="form-control-label">View Image&nbsp;</label>
     <?if ($brandsimg<>""){?><img src="../brandsimg/<? echo $brandsimg ?>" style="height:50px;" class="thumbnail"><?	}	else	{	?><img src="img/noimage.png" style="height:50px;" class="thumbnail"><?}?>
    </div>		
   </div>
      
   <div class="col-lg-4">
    <div class="form-group">
     <label class="form-control-label">Brands Banner&nbsp;</label>
     <label class="custom-file"><input type="file" id="file" name="brandsbanner" class="custom-file-input" >
	 <span class="custom-file-control"></span>
	 </label>
	 <? echo $brandsbannersize?>
    </div>		
   </div>
   <div class="col-lg-2">
    <div class="form-group">
     <label class="form-control-label">View Banner&nbsp;</label>
     <?if ($brandsbanner<>""){?><img src="../brandsbanner/<? echo $brandsbanner ?>" style="height:50px;" class="thumbnail"><?	}	else	{	?><img src="img/nobanner.jpg" style="height:50px;" class="thumbnail"><?}?>
    </div>		
   </div>  --> 
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Brands Url&nbsp;-&nbsp;[&nbsp;https://website.com/&nbsp;] &nbsp;</label>
     <input class="form-control" type="text" name="brandsurl" placeholder="Type Brands Url ..." value="<?echo $brandsurl?>">
    </div>		
   </div>
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Brands Description&nbsp;</label>
     <textarea id="summernote" placeholder="Type text here..." name="brandsdesc" class="form-control" ><?echo $brandsdesc?></textarea>
    </div>		
   </div>
   <!-----------------inputs ends--------------------------->
  </div>	
  <div class="form-layout-footer">
   <button class="btn btn-info">Submit Form</button>
  </div>
 </div>  
</form>		
<?include ("ibottom.php")?>