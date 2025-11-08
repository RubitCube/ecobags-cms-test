
 <div class="mx-0 pl-3">
  <form class="form-horizontal " role="form" autocomplete="off" action="contactus.php" method="post" name="myform" enctype="multipart/form-data" onsubmit="return(validate());">
	 
  <div class="row">	
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">	
    <!--<p class="ttexthead pb-2  px-1 mx-0 mb-0"><strong>Leave Your Message</strong></p>-->
    <p class="ttext py-1  px-1 mx-0">If you have any questions about the services we provide simply use the form below. <br>We try and respond to all queries and comments within 24 hours.</p>
   </div>
  </div>
  <div class="row px-0 py-2">
   <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-0  pr-3 pl-0 mx-0">	  
    <div class="form-group row mx-0 px-0 py-2 mx-0">	
     <input class="form-control tinputborder" type="text" placeholder="Type your Name" name="name" >
    </div>
   </div>
   <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-0  pr-3 pl-0 mx-0">	  
    <div class="form-group row mx-0 px-0 py-2 mx-0">	
     <input class="form-control tinputborder" type="text" placeholder="Type your Mobile" name="mobile" >
    </div>
   </div>
   <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-0  pr-3 pl-0 mx-0">
    <div class="form-group row mx-0 px-0 py-2 mx-0">	
     <input class="form-control tinputborder" type="email" placeholder="Type your Email" name="email" required>
    </div>
   </div>
  </div>
	 
  <div class="row px-0 py-2">
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-0 pr-3 pl-0 mx-0">	
    <textarea class="form-control tinputborder" rows="10" placeholder="Type your Additional Requirements" name="additionalrequirements"></textarea>
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
