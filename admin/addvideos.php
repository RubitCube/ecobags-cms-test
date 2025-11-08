<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$pname="videos"; $pnamesub="";
$youarein1="Videos"; $youarein1link="videos.php";
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
$youareinname="Add Videos";
$mainheading="Add Videos";
$linkheading="Add Videos";
$subheading="";
$bodyheading="List of all Videos";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="videos";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<form id="basicForm" method="post" action="savevideos.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off">
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Videos Title &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="videotitle" placeholder="Type Videos Name..." required>
    </div>		
   </div>
   
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Videos Link &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="videolink" placeholder="Type Videos Name..." required>
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