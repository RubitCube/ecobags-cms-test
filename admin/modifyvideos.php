<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
$videosno=$_REQUEST["videosno"];
?>
<?include("icallvideos.php")?>
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
$youarein9=""; $youarein9link="";
$youareinname="Modify Videos : ".$videotitle;
$mainheading="Modify Videos : ".$videotitle;
$linkheading="Modify Videos";
$subheading="";
$bodyheading="Update your Videos details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="videos";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$videosno=$_REQUEST["videosno"];
$where="videosno =$videosno";
$result_videos = $obj->select_all_values('videos', $where,'');
foreach($result_videos as $videos_row)
{
    $videosno = $videos_row['videosno'];
    $videotitle = $videos_row['videotitle'];
    $videolink = $videos_row['videolink'];
	$status = $videos_row["status"];
	$addeddate =$videos_row["addeddate"];
	$addeddate = date("d M Y", strtotime($addeddate));
}?>
<form action="updatevideos.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
 <input type="hidden" name="videosno" class="form-control" value="<?echo $videosno?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 	
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
  <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Videos Title &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="videotitle" value="<?echo $videotitle?>" placeholder="Type Videos Name..." required>
    </div>		
   </div>
   
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Videos Link &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="videolink" value="<?echo $videolink?>" placeholder="Type Videos Name..." required>
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