<?include("iconnect.php")?>
<?
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>
 <?
  $dealerselectorno=$_REQUEST["dealerselectorno"];
  $dealerselector_where="dealerselectorno ='$dealerselectorno'";
  $dealerselector_orderby="";
  $dealerselector_result = $obj->select_all_values('dealerselector', $dealerselector_where, $dealerselector_orderby);
  foreach($dealerselector_result as $dealerselector_row){
    $dealername = $dealerselector_row['dealername'];
    $regionno = $dealerselector_row['regionno'];
	$where="regionno =$regionno";
	$result_region = $obj->select_all_values('region', $where,'');
	foreach($result_region as $region_row)
	{
	 $region= $region_row['region'];
	}
	$communityno = $dealerselector_row['communityno'];
	if($communityno<>0){
	$where="communityno=$communityno";
	$result_community = $obj->select_all_values('community', $where,'');
	foreach($result_community as $community_row)
	{
	 $communityname= $community_row['communityname'];
	}
	}
	else{
		$communityname="-";
	}
    $companyname = $dealerselector_row["companyname"];	
    $address = $dealerselector_row['address'];
    $phone = $dealerselector_row["phone"];		
    $email = $dealerselector_row['email'];
    $website = $dealerselector_row["website"];
	$location = $dealerselector_row["location"];	
	$status = $dealerselector_row["status"];
  }	
  
  
 $pname="dealerselector"; $pnamesub="";
 $youarein1="Dealer Selector"; $youarein1link="dealerselector.php?dealerselectorno=".$dealerselectorno."&page=".$page."&pname=".$pname;
 $youarein2=""; $youarein2link="";
 $youarein3=""; $youarein3link="";
 $youarein4=""; $youarein4link="";
 $youarein5=""; $youarein5link="";
 $youarein6=""; $youarein6link=""; 
 $youarein7=""; $youarein7link="";
 $youarein8="";$youarein8link="";
 $youarein9="";$youarein9link="";
 
$mainheading="View Dealer Selector Details : ".$dealername;
$youareinname="View Dealer Selector Details : ".$dealername;
$linkheading="View Dealer Selector Details :";
$linkheading="View Dealer Selector Details ";
$subheading="";
$bodyheading="List of all Product";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="product";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 

<form id="basicForm" method="post" action="#" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
 <input type="hidden" name="pagename" class="form-control" value="<?echo $pname?>"> 	
 <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 
<!--***************************************MULTIPLE PRODUCT DETAILS ENDS************************************************-->
<div class="row row-sm mg-t-20">
 <div class="col-12">
  <div class="card bd-0 shadow-base pd-30 ">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-gray-800 mg-b-5">Dealer Selector Details</h6>
	 <p class="mg-b-0">Please Provide the Dealer Selector Details to be Displayed...</p>
    </div>
   </div>
   <hr>
   <!----form layout starts--->
   <div class="form-layout ">
	<div class="row mg-b-25">   
	 <div class="col-xl-12 mg-t-20 mg-xl-t-0 pt-4">
	  <div class="form-layout " style="padding:0px 19px 19px; ">
	  
	     <div class="row mg-t-20">
	      <label class="col-sm-2 form-control-label control-label" >Region &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	       <?echo $region?>
	       </div>
		   <label class="col-sm-2 form-control-label control-label" >Community   &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	      <?echo $communityname?>
	       </div>		   		   
	     </div>
		  
		  <div class="row mg-t-20">
	      <label class="col-sm-2 form-control-label control-label" >Dealer Name &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	      <?echo $dealername?>
	       </div>
		   <label class="col-sm-2 form-control-label control-label" >Company Name &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	      <?echo $companyname?>
	       </div>		   		   
	     </div>
		 
		  <div class="row mg-t-20">
	      <label class="col-sm-2 form-control-label control-label" >Phone &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	      <?echo $phone?>
	       </div>
		   <label class="col-sm-2 form-control-label control-label" >Email &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	      <?echo $email?>
	       </div>		   		   
	     </div>
		 
		  <div class="row mg-t-20">
	      <label class="col-sm-2 form-control-label control-label" >Website Address &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	      <?echo $website?>
	       </div>
		   <label class="col-sm-2 form-control-label control-label" >Address &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	      <?echo $address?>
	       </div>		   		   
	     </div>
		 
		  <div class="row mg-t-20">
	      <label class="col-sm-2 form-control-label control-label" >Status &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	      <?echo $status?>
	       </div>
		   <label class="col-sm-2 form-control-label control-label" > Community &nbsp; : </label>
	       <div class="col-sm-4 mg-t-10 mg-sm-t-0">
	     <?echo $communityname?>
	       </div>		   		   
	     </div>
		 
		  <div class="row mg-t-20">
	       <div class="col-xl-12"><b><u> Location</u> </b></br></br>
	      <?echo $location?>
	       </div>	   		   
	     </div>
		 
	   <!----Upload PDF-->	   
	  </div>
	 </div>		
	</div>	
   <!----form layout ends--->	
  </div>
 </div>
 </div>
</div>


<!--***************************************ORDER ENDS**************************************************-->
</form>
<?include ("ibottomdashboard.php")?>