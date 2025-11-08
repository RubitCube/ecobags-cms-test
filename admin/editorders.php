<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?$ordercode=$_REQUEST["ordercode"];
  $orderno_where="ordercode =$ordercode";
  $orderno_result = $obj->select_all_values('orderno', $orderno_where,'');
  foreach($orderno_result as $orderno_row){
   $customerno = $orderno_row["customerno"];
   $orderdate = $orderno_row["orderdate"];
  $orderdate=preg_split('[ ]',$orderdate); 
  $orderd= $orderdate[0];
  $ordert= $orderdate[1];
  $orderdatee = date("d-m-Y", strtotime($orderd));
  
   $orderstatus = $orderno_row["orderstatus"];
  
  
  
   $despatchdate = $orderno_row["despatchdate"];   
   if ($despatchdate<>'0000-00-00'){
   $despatchdate = date("d-m-Y", strtotime($despatchdate));
   } else {
   $despatchdate = "";
   }
   $despatchtime = $orderno_row["despatchtime"];
   
   $deliverydate = $orderno_row["deliverydate"];   
   if ($deliverydate<>'0000-00-00'){
   $deliverydate = date("d-m-Y", strtotime($deliverydate));
   } else {
   $deliverydate = "";
   } 
   $deliverytime = $orderno_row["deliverytime"];
 }
  $customer_where="customerno ='$customerno'";
  $customer_orderby="";
  $customer_result = $obj->select_all_values('customer', $customer_where, $customer_orderby);
  foreach($customer_result as $customer_row){
   $name=$customer_row["name"];
   $billingaddress=$customer_row["billingaddress"];
   $shippingaddress=$customer_row["shippingaddress"];
   $phone=$customer_row["phone"];
   $mobile=$customer_row["mobile"];	
   $email=$customer_row["email"];	
   $city=$customer_row["city"];	
   $country=$customer_row["country"];		
  }	
  
 $pname="orders"; $pnamesub="";
 $youarein1="Orders"; $youarein1link="orders.php?ordercode=".$ordercode."&page=".$page."&pname=".$pname;
 $youarein2=""; $youarein2link="";
 $youarein3=""; $youarein3link="";
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";
 $youarein6=""; $youarein6link=""; 
 $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";
 $youarein9="";$youarein9link="";
 
 $mainheading="View Order Details: ".$ordercode;
$youareinname="View Order Details Details : ".$ordercode;
$linkheading="View Order Details Details :";
$linkheading="View Order Details Details ";
$subheading="";
$bodyheading="List of all Order ";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
 <form id="basicForm" method=post action="updateorders.php" name=form class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
 <input type="hidden" name="pagename" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
 <input type="hidden" name="ordercode" class="form-control" value="<?echo $ordercode?>"> 
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Order  Details</h6>
	 <p class="mg-b-0">Please Provide the Order s Details to be Displayed...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">    
	 <div class="col-xl-6 mg-t-20 mg-xl-t-0 pt-4">
	  <div class="form-layout " style="padding:0px 19px 19px; ">
	   <!---- Status-->
	   <div class="row mg-t-20">
	    <label class="col-sm-4 form-control-label control-label" >Order Status </label>
	     <div class="col-sm-4" style="margin-top:5px;margin-left:0px;">
	    <? if($orderstatus == "Not Delivered") { ?>
	    <input type="radio" name="orderstatus"  checked  id="orderstatus1" value="Order Dispatched" Checked>&nbsp;&nbsp;<label for="status1">Order Dispatched</label>
	   <? } else if($orderstatus == "Order Dispatched") { ?>
	    <input type="radio" name="orderstatus"  checked  id="orderstatus1" value="Order Delivered" Checked>&nbsp;&nbsp;<label for="status1">Order Delivered</label>
		<? } ?>	
	     </div>
	   </div>	   	   
	   <!---- Status-->	    
	  </div>
	 </div>	
	</div>	
   <!----form layout ends--->	
  </div>
 </div>
 </div>
</div>

</br>
<div class="form-layout-footer">
 <button class="btn btn-info" name="sbutton">Submit</button>
</div>
</form>

<?include ("ibottomdashboard.php")?>

 