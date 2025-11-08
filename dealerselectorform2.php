
 <div class="mx-0 pl-3">
  <form class="form-horizontal " role="form" autocomplete="off" action="dealerselector.php" method="post" name="myform" enctype="multipart/form-data" onsubmit="return(validate());">
	 
  <div class="row">	
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">	
    <!--<p class="ttexthead pb-2  px-1 mx-0 mb-0"><strong>Leave Your Message</strong></p>-->
    <!--<p class="ttext py-1  px-1 mx-0">If you have any questions about the services we provide simply use the form below. <br>We try and respond to all queries and comments within 24 hours.</p>-->
   </div>
  </div>
  <div class="row px-0 py-2">
  
  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-0  pr-3 pl-0 mx-0 pb-2">	
    <select name="region" id="region"  class="form-select form-control tinputborder" style="padding: 13px;">
    <option value="0" selected>Select Region <i class='bx bx-chevron-down' ></i></option>
    <?
	$orderby="where status='Active'  ORDER BY region ASC";
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
	
	<div class="form-group row mx-0 px-0 pt-3 pb-2 mx-0">	
      <input class="form-control tinputborder" type="text" placeholder="Type Dealer Name" name="dealername" >
    </div>
	
	<div class="form-group row mx-0 px-0 py-2 mx-0">	
   <input class="form-control tinputborder" type="text" placeholder="Type Phone" name="dealerphone" >
    </div>
	
	<div class="form-group row mx-0 px-0 py-2 mx-0">	
    <input class="form-control tinputborder" type="text" placeholder="Type Mobile" name="dealermobile" >
    </div>
   </div>
  
  
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-0  pr-3 pl-0 mx-0 pb-2">	
   
    <div class="form-group row mx-0 px-0 pb-4 mx-0">	
      <input class="form-control tinputborder" type="email" placeholder="Type Email" name="email" required>
    </div>
	
	<textarea class="form-control tinputborder" rows="5" placeholder="Type Address" name="dealeraddress" style="padding: 12px 12px 33px 12px;"></textarea>
	
   </div>
   
  </div>
	 
  <div class="row px-0 pt-4">	
   <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">	
    <div class="g-recaptcha float-left" data-sitekey="<?php echo SITE_KEY;?>" data-callback="submit1"></div>
   </div>
   <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-md-end">	
     <button type="submit" name="submit" class="submitbtn my-2">SUBMIT ENQUIRY</button>
   </div>
  </div>
  </form>
 </div>
