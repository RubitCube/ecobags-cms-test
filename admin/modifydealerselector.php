<?include("iconnect.php")?>
<?
$dealerselectorno=$_REQUEST["dealerselectorno"];
include ("icalldealerselector.php");
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
<?
$pname="dealerselector"; $pnamesub="";
$youarein1="Dealer Selector"; $youarein1link="dealerselector.php";
$youarein2=""; $youarein2link="";
$youareinname="Modify Dealer Selector : ". $master_dealername;
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$mainheading="Modify Dealer Selector : ". $master_dealername;
$linkheading="Modify Dealer Selector";
$subheading="";
$bodyheading="Update your Dealer Selector details";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="dealerselector";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<?include ("iaction.php")?> 
<?
$dealerselectorno=$_REQUEST["dealerselectorno"];
$where="dealerselectorno =$dealerselectorno";
$result_dealerselector = $obj->select_all_values('dealerselector', $where,'');
foreach($result_dealerselector as $dealerselector_row)
{
 $dealerselectorno = $dealerselector_row['dealerselectorno'];
 $o_regionno = $dealerselector_row['regionno'];
 $o_communityno = $dealerselector_row['communityno'];
 $dealername = $dealerselector_row['dealername'];
 $decompanyname = $dealerselector_row['companyname'];
 $address = $dealerselector_row["address"];
 $phone = $dealerselector_row['phone'];
 $email = $dealerselector_row["email"];
 $website = $dealerselector_row["website"];
 $location = $dealerselector_row["location"];
}?>
<!-----Ajax community------------------------------------------------>
<script type="text/javascript">
var xmlHttp // xmlHttp variable
function GetXmlHttpObject()
{
	// This function we will use to call our xmlhttpobject.
	var objXMLHttp=null // Sets objXMLHttp to null as default.
	if (window.XMLHttpRequest) {
	// If we are using Netscape or any other browser than IE lets use xmlhttp.
	objXMLHttp=new XMLHttpRequest() // Creates a xmlhttp request.
	} else if (window.ActiveXObject) {
	// ElseIf we are using IE lets use Active X.
	objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP") // Creates a new Active X Object.
	} // End ElseIf.
	return objXMLHttp // Returns the xhttp object.
} // Close Function

$(document).ready(function() {
	$("#div_community_dynamic").hide();
	 $("#div_community_dynamic_mobile").hide();
 });

function showcommunity()
{
	var regionno = document.getElementById('regionno').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	var resultcommunity=this.responseText;
	$("#div_community").hide();
	document.getElementById('div_community_dynamic').innerHTML=resultcommunity;
	$("#div_community_dynamic").show();
	}
	};
	xmlhttp.open("GET","ajaxcommunity.php?regionno="+regionno,true);
	xmlhttp.send();
	return true;
}
</script>
<!-----Ajax community------------------------------------------------>
<form action="updatedealerselector.php" id="selectForm" enctype="multipart/form-data" method="post" autocomplete="off"> 
 <input type="hidden" name="dealerselectorno" class="form-control" value="<?echo $dealerselectorno?>"> 
 <input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
 <div class="form-layout form-layout-1">
  <div class="row mg-b-25"> 
   <!-----------------inputs start--------------------------->
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Select Region &nbsp;<span class="tx-danger">*</span></label>
    <select name="regionno" id="regionno"  class="form-select form-control tinputborder" onchange="showcommunity();">
    <option value="0" selected>Select Region </option>
    <?
	$orderby="where status='Active' ORDER BY region ASC";
	$result=$obj->select_table_orderby("region",$orderby);
	$count=0;
	foreach($result as $row){ 
	$count++;
	$regionno =$row["regionno"];
	$region =$row["region"];
	?>
	<option value="<?echo $regionno?>" <?if ($regionno==$o_regionno){ ?>Selected<?}?>><?echo $region?></option>
	<? } ?>
    </select>
    </div>		
   </div>
   
    <div class="col-lg-6">
			
    <div class="form-group">
     <label class="form-control-label">Select Emirates /Community &nbsp;<span class="tx-danger">*</span></label>
	  <!---------------Display first view---------------------------------->
	   <div class="col my-auto py-2 py-lg-0" id="div_community">   
		<select class="form-control" type="select" name="communityno" id="communityno1" role="combobox">
	     <?if($o_regionno==100){
			 echo"<option value='0' selected='true'>Select Emirates</option>";
			}else{
			echo"<option value='0' selected='true'>Select Community</option>";
			}?>
		   <?
			$orderby="where status='Active' and regionno=$o_regionno ORDER BY communityname ASC";
			$result=$obj->select_table_orderby("community",$orderby);
			$count=0;
			foreach($result as $row){ 
			$count++;
			$communityno =$row["communityno"];
			$communityname =$row["communityname"];
			?>
			<option value="<?echo $communityno?>" <?if ($communityno==$o_communityno){ ?>Selected<?}?>><?echo $communityname?></option>
	        <? } ?>
		</select>
	   </div>
    <!---------------Display first view---------------------------------->
    <!---------------Dynamic  view---------------------------------->
	<div class="col my-auto py-2 py-lg-0" id="div_community_dynamic">  
   
    </div>
	<!---------------Dynamic  view---------------------------------->
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Dealer Name &nbsp;<span class="tx-danger">*</span></label>
    <input class="form-control" type="text" value="<?echo $dealername?>"  name="dealername" placeholder="Type Dealer Name..." required>
    </div>		
   </div>
	
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Company Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="companyname" value="<?echo $decompanyname?>"  placeholder="Type Company Name..." required>
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Address &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="address" value="<?echo $address?>" placeholder="Type Address..." required>
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Phone&nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="phone" value="<?echo $phone?>" placeholder="Type Phone..." required>
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Email&nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="email" value="<?echo $email?>" placeholder="Type Email..." required>
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Website Address&nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="website" value="<?echo $website?>" placeholder="Type Website Address..." required>
    </div>		
   </div>
   
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Location&nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="location" value="<?echo $location?>" placeholder="Type Embedded Gmap Location..." required>
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