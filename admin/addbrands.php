<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$pname="brands"; $pnamesub="";
$youarein1="Brands"; $youarein1link="brands.php";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youareinname="Add Brands";
$mainheading="Add Brands";
$linkheading="Add Brands";
$linkheading="Add Brands";
$subheading="";
$bodyheading="List of all Brands";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="brands";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<form id="basicForm" method="post" action="savebrands.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Brands Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="brandsname" placeholder="Type Brands Name..." required>
    </div>		
   </div>
   <div class="col-lg-3">
    <div class="form-group">
     <label class="form-control-label">Brands Logo&nbsp;<span class="tx-danger">*&nbsp;<? echo $brandslogosize?></span></label>
     <input type="file" style="padding:5px;" name="brandslogo" required placeholder="Upload Image..."  accept='image/*'/  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
    </div>
   </div>
   <div class="col-lg-3">
    <div class="form-group">
     <label class="form-control-label"><span class="tx-danger">&nbsp;</span></label>
     <img id="output" style="width:80px;height:60px;margin-left:0px;" class="border-0" src="img/defaultimg.png"/>	
    </div>
   </div>		

   <? if($pro_brandsimg<>0){?>
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Brands Image&nbsp;<span class="tx-danger"></span></label>
     <label class="custom-file"><input type="file" id="file" name="brandsimg" class="custom-file-input" >
	 <span class="custom-file-control"></span>
	 </label>
	 <? echo $brandsimgsize?>
    </div>		
   </div> 
   <?}?>   
   <? if($pro_brandsbanner<>0){?>
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Brands Banner&nbsp;<span class="tx-danger"></span></label>
     <label class="custom-file"><input type="file" id="file" name="brandsbanner" class="custom-file-input" >
	 <span class="custom-file-control"></span>
	 </label>
	 <? echo $brandsbannersize?>
    </div>		
   </div>
   <?}?>
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Brands Url&nbsp;-&nbsp;[&nbsp;https://website.com/&nbsp;] &nbsp;</label>
     <input class="form-control" type="text" name="brandsurl" placeholder="Type Brands Url ..." >
    </div>		
   </div>
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Brands Description&nbsp;</label>
     <textarea id="summernote" placeholder="Type text here..." name="brandsdesc" class="form-control" ></textarea>
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