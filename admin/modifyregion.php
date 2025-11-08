<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
$regionno=$_REQUEST["regionno"];
?>
<?include("icallregion.php")?>
<?
$pname="region"; $pnamesub="";
$youarein1="Region"; $youarein1link="region.php";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youarein9=""; $youarein9link="";
$youareinname="Modify Region : ".$region;
$mainheading="Modify Region : ".$region;
$linkheading="Modify Region";
$subheading="";
$bodyheading="Update your Region details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="region";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$regionno=$_REQUEST["regionno"];
$where="regionno =$regionno";
$result_region = $obj->select_all_values('region', $where,'');
foreach($result_region as $region_row)
{
    $regionno = $region_row['regionno'];
	$region = $region_row['region'];
	$status = $region_row["status"];
	$addeddate =$region_row["addeddate"];
	$addeddate = date("d M Y", strtotime($addeddate));
}?>
<form action="updateregion.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
 <input type="hidden" name="regionno" class="form-control" value="<?echo $regionno?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 	
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Region Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="region" placeholder="Type Region Name..." required value="<?echo $region?>">
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