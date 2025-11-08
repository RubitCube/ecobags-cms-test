<?include("iconnect.php")?>
<?
$pname="shippingcharges"; $pnamesub="";
$youarein1=""; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youareinname="Shipping Charges";
$mainheading="Shipping Charges";
$linkheading="Shipping Charges";
$subheading="";
$bodyheading="List of all Shipping Charges";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";$priorityicon="No";
$linkname="shippingcharges";
$linknamepriority="priorityshippingcharges";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
$dropdown="Shipping Charges";
$dropdown1="shippingcharges";
$dropdown2=""; $dropdown3=""; $dropdown4=""; $dropdown4=""; $dropdown5=""; $dropdown6=""; $dropdown7="";
?>
<?include ("itophead.php")?> 
<?
$shippingcharges_tcount1=$obj->totalrecords_condition_nowhere('shippingcharges','*');
foreach($shippingcharges_tcount1 as $shippingcharges_row )
{
	$shippingcharges_tcount=$shippingcharges_row['count(*)'];
}
if($shippingcharges_tcount<>'0')	
{ 
?> 
<?include ("isubheading.php")?>  
<?include ("iaction.php")?> 
<div class="table-wrapper">
 <table id="datatable1" class="table display table-responsive nowrap">
  <thead>
   <tr>
    <th style="width:4%">#</th>
    <th style="width:10%">Emirates</th>
    <th style="width:25%">Estimated Delivery Time</th>
    <th style="width:15%">Order Value</th>
    <th style="width:15%">Shipment cost (Incl. of taxes)</th>
    <th style="width:8%">Actions</th>
   </tr>
  </thead>
  <tbody>
  <!----tbody starts---->
<?
 $orderby="ORDER BY shippingchargesno ASC";
 $result=$obj->select_table_orderby("shippingcharges",$orderby);
 $count=0;
 foreach($result as $row){ 
  $count++;
  $shippingchargesno =$row["shippingchargesno"];
  $emiratesno =$row["emiratesno"];
  $deliverytime =$row["deliverytime"];
  $ordervalue =$row["ordervalue"];
  $shipmentcost =$row["shipmentcost"];
  
$masteremirates_where="emiratesno =$emiratesno";
$masteremirates_result= $obj->select_all_values('emirates', $masteremirates_where,'');
foreach($masteremirates_result as $masteremirates_row){	
 $emirates =$masteremirates_row["emirates"];	
}
  ?>
   <tr>
    <td ><?echo $count?></td>
	<td ><?echo $emirates?></td>	
	<td ><?echo $deliverytime?></td> 
	<td ><?echo $ordervalue?></td> 
	<td ><?echo $shipmentcost?></td> 
	<td >
	 <?if ($modifyicon<>"No") { ?><a href="modifyshippingcharges.php?shippingchargesno=<?echo $shippingchargesno?>&pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fas fa-edit" title="Modify Shipping Charges"></i></a> <? } ?>&nbsp; &nbsp; &nbsp;&nbsp;
	 <?//if ($deleteicon<>"No") { ?><!--<a onclick="return confirm('Are you sure you want to delete?')"   href="deleteshippingcharges.php?shippingchargesno=<?echo $shippingchargesno?>"><i class="fas fa-trash" title="Delete Shipping Charges" style="color: red;"></i></a>-->&nbsp; &nbsp; &nbsp; <? //} ?>
	</td>	
   </tr>
  <?}?>
   <!----tbody ends---->
  </tbody> 
 </table>
</div>	
<?}
else 
{ 
?>
<?include ("isubheadingempty.php")?>
<?include ("inodata.php")?>
<?}?>
<?include ("ibottom.php")?>