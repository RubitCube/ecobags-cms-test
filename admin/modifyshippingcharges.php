<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?$shippingchargesno=$_REQUEST["shippingchargesno"];?>
<?
$pname="shippingcharges"; $pnamesub="";
$youarein1="Shipping Charges"; $youarein1link="shippingcharges.php";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youareinname="Modify Shipping Charges";
$mainheading="Modify Shipping Charges";
$linkheading="Modify Shipping Charges";
$linkheading="Modify Shipping Charges";
$subheading="";
$bodyheading="List of all Shipping Charges";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="shippingcharges";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?
$where="shippingchargesno =$shippingchargesno";
$result_shippingcharges = $obj->select_all_values('shippingcharges', $where,'');
foreach($result_shippingcharges as $row){
  $shippingchargesno =$row["shippingchargesno"];
  $emiratesno1 =$row["emiratesno"];
  $deliverytime =$row["deliverytime"];
  $ordervalue =$row["ordervalue"];
  $shipmentcost =$row["shipmentcost"];
}
?>
<?include ("itophead.php")?> 
<form id="basicForm" method="post" action="updateshippingcharges.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
<input type="hidden" name="shippingchargesno" class="form-control" value="<?echo $shippingchargesno?>">   
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group"> 
     <label class="form-control-label">Emirates <?echo $emiratesno1?>&nbsp;<span class="tx-danger">*</span></label>
	 <select class="form-control select2-show-search" name="emiratesno" data-placeholder="Choose one" required autofocus>
	 <option label="Choose Emirates"></option>
       <? $emiratesno_result=$obj->execute("SELECT * FROM emirates");
          foreach($emiratesno_result as $emiratesno_row){
			$emiratesno=  $emiratesno_row['emiratesno'];			
		  $shippingcharges_wherecondition = "emiratesno<>$emiratesno and shippingchargesno<>$shippingchargesno";
		  $shippingcharges_tcount1=$obj->totalrecords_condition('shippingcharges', '*', $shippingcharges_wherecondition);
		  foreach($shippingcharges_tcount1 as $shippingcharges_row ){
		   $shippingcharges_tcount=$shippingcharges_row['count(*)'];
		  } 
		if($shippingcharges_tcount<>'0')	{ 
       ?>
        <option value="<? echo $emiratesno_row['emiratesno']?>" <?if ($emiratesno1==$emiratesno) { ?>Selected<? } ?>><? echo $emiratesno_row['emirates']?></option>
       <? } ?>
       <? } ?>
     </select>  
    </div>		
   </div>
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Estimated Delivery Time&nbsp;<span class="tx-danger"></span></label>
    <input type="text" name="deliverytime" class="form-control" placeholder="Type Estimated Delivery Time..."  autofocus pattern=".*[^ ].*" value="<?echo $deliverytime?>"/>
    </div>		
   </div>

   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Order Value Break Point&nbsp;<span class="tx-danger">*</span></label>
      <input type="number"  min="1" name="ordervalue" class="form-control" placeholder="Type Order Value ..." required autofocus pattern=".*[^ ].*" value="<?echo $ordervalue?>"/>
    </div>		
   </div>

  <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Shipment Cost&nbsp;<span class="tx-danger">*</span></label>
     <input type="number"  min="1" name="shipmentcost" class="form-control" placeholder="Type Shipment Cost ..." required autofocus pattern=".*[^ ].*" value="<?echo $shipmentcost?>"/>
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