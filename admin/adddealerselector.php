<?include("iconnect.php")?>
<?include("iproductsettings.php")?>
<?
$pname="dealerselector"; $pnamesub="";
$youarein1="Dealer Selector"; $youarein1link="dealerselector.php";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youareinname="Add Dealer Selector";
$mainheading="Add Dealer Selector";
$linkheading="Add Dealer Selector";
$linkheading="Add Dealer Selector";
$subheading="";
$bodyheading="List of all Dealer Selector";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="dealerselector";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 

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
<form id="basicForm" method="post" action="savedealerselector.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
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
	<option value="<?echo $regionno?>"><?echo $region?></option>
	<? } ?>
    </select>
    </div>		
   </div> 
   
    <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Dealer Name &nbsp;<span class="tx-danger">*</span></label>
    <input class="form-control" type="text" name="dealername" placeholder="Type Dealer Name..." required>
    </div>		
   </div>
   
      
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Select Emirates &nbsp;<span class="tx-danger">*</span></label>
	 
	  <!---------------Display first view---------------------------------->
	   <div id="div_community">
		<select class="form-select form-control tinputborder" type="select" id="communityno1">
		  <option value="0" selected="true">Emirates</option>	
		</select>
	   </div>
    <!---------------Display first view---------------------------------->
     <!---------------Dynamic  view---------------------------------->
	<div id="div_community_dynamic">  
   
    </div>
	<!---------------Dynamic  view---------------------------------->
    </div>		
   </div>
	
 	
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Company Name &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="companyname" placeholder="Type Company Name..." required>
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Address &nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="address" placeholder="Type Address..." required>
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Phone&nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="phone" placeholder="Type Phone..." required>
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Email&nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="email" placeholder="Type Email..." required>
    </div>		
   </div>
   
   <div class="col-lg-6">
    <div class="form-group">
     <label class="form-control-label">Website Address&nbsp;<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="website" placeholder="Type Website Address..." required>
    </div>		
   </div>
   
   <div class="col-lg-12">
    <div class="form-group">
     <label class="form-control-label">Location&nbsp;[ Add embed Google Map code here ]<span class="tx-danger">*</span></label>
     <input class="form-control" type="text" name="location" placeholder="Type Embedded Gmap Location..." required>
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