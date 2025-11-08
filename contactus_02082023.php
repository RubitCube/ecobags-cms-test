<?include ("itophead.php")?>
<?include ("itopshamsnaturals.php")?>
<?include ("iinnerbannershamsnaturals.php")?> 
<!----------------------profile heading starts ------------------------->
<div class="container-fluid fluid0 headingbg pt-5">
 <div class="container">
 <style>
.tdealershiphead {
 font-family: "Poppins", sans-serif;
 color: #417137!important;
 font-size: 20px;
 font-weight: 500;
 line-height: 30px;
 text-transform: uppercase;
}
 </style>
 
   <div class="row mx-0">
   <div class="col-12 col-md-6 col-lg-6 px-0 my-auto"> 
    <h1 class="tdealershiphead mb-0 pb-4">For Dealership Inquiries please contact</h1>
    <p class="ttext mb-0">Shamjit,</p>
	<p class="ttext mb-0">Shams Naturals,</p>
	<p class="ttext mb-0">Al Qusais Industrial Area 4,</p>
	<p class="ttext mb-0 pb-4">Dubai, UAE</p>
	<p class="mb-0 pb-2 ttextcontact"><a href="tel:+97142673449" class="ttextcontact"><i class='bx bxs-phone-call iconlist pe-3'></i>+971 4 267 3449</a></p>
	
	<p class="mb-0 pb-2 ttextcontact"><a href="tel:+971551906177 " class="ttextcontact"><i class='bx bxs-mobile iconlist pe-3' ></i>+971 55 190 6177 </a></p>
    
    <p class="mb-0 pb-5 ttextcontact"><a href="mailto:info@shamsnaturals.com ?subject=Enquiry from www.shamsnaturals.com"><i class='bx bxs-envelope iconlist pe-3' ></i><span class="ttextcontact">info@shamsnaturals.com </span></a></p>
	
   </div>   
  </div>
 
 
  <div class="row mx-0">
   <div class="col-12 col-md-6 col-lg-6 px-0 my-auto"> 
    <h1 class="thead mb-0">GET IN TOUCH</h1>
    <h1 class="tsubhead mb-0 pb-2 pb-md-3 pb-lg-4">LEAVE A MESSAGE</h1>
   </div>   
  </div>
  
 </div>
</div>
<!------------------- profile heading ends --------------------------------->
<!---------------- contact us starts ---------------------->
<div class="container-fluid fluid0 pb-5 bodybg">
 <div class="container px-4 pb-2">
  <div class="row pb-5">
   <div class="col-12 col-sm-12 col-md-12 col-xxl-7 ps-0 pe-xxl-5">
    <div class="row"> 
      <?php
  if( isset($_POST['submit'])) { 
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6LelFj4iAAAAAMzq1mWSwq-oSgQAgd7JibNQlPIm';
   $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
   if($responseData->success) { 
     //echo $succMsg = 'Your contact request have submitted successfully.';
     include("contactusform3.php");
    } else {
     //echo $errMsg = 'Robot verification failed,  please try again.';
     include("contactusform2.php");
    } 
  }  
  }else {//if page accessed for fist time 
   include("contactusform.php");
  } 
  ?>
	<script>
		 $("form").submit(function(event) {
		   var recaptcha = $("#g-recaptcha-response").val();
		   if (recaptcha === "") {
			  event.preventDefault();
			  alert("Please check the recaptcha");
		   }
		});
	  </script>
    </div>	
   </div>  
 
   <div class="col-12 col-sm-12 col-md-12 col-xxl-5 pt-4 pt-lg-0 d-none d-xxl-block"> 
    <img src="<?echo $mainurlindex;?>img/contactimg.jpg" class="img-fluid contactimg">
   </div>    
  </div>
  
  
  <div class="row">
   <div class="col-12 col-md-6 col-lg-5 col-xxl-4 pb-4 pb-md-0 ps-0">
    <h1 class="mb-0 pb-3 taddresstext">WE ARE HERE</h1>
	<p class="ttextbold mb-0 pb-2">Shams Naturals,</p>
	<p class="ttext mb-0 pb-2">Al Qusais Industrial Area 4,</p>
	<p class="ttext mb-0 pb-2">Dubai, UAE</p>
   </div>
   <div class="col-12 col-md-6 col-lg-7 col-xxl-2 contactboxadd d-none d-xxl-block my-auto">
	<img src="<?echo $mainurlindex;?>img/icon-location.jpg" class="img-fluid">
   </div>
   
   <div class="col-12 col-md-6 col-lg-7 col-xxl-4 contactboxpadding">
    <h1 class="mb-0 pb-3 taddresstext">CONTACT US</h1>
    <p class="mb-0 pb-2 ttextcontact"><a href="tel:+97142673994" class="ttextcontact"><i class='bx bxs-phone-call iconlist pe-3'></i>+971 4 267 3994</a></p>
	
	<p class="mb-0 pb-2 ttextcontact"><a href="tel:+971551906177 " class="ttextcontact"><i class='bx bxs-mobile iconlist pe-3' ></i>+971 55 190 6177 </a></p>
    
    <p class="mb-0 pb-2 ttextcontact"><a href="mailto:info@shamsnaturals.com ?subject=Enquiry from www.shamsnaturals.com"><i class='bx bxs-envelope iconlist pe-3' ></i><span class="ttextcontact">info@shamsnaturals.com </span></a></p>
      
    <p class="mb-0 pb-2 ttextcontact"><a href="http://www.shamsnaturals.com/" target="_blank" class="mb-0 ttextcontact"><i class='bx bx-globe iconlist pe-3'></i>www.shamsnaturals.com</a></p>   
   </div>
   <div class="col-12 col-md-6 col-lg-7 col-xxl-2 pe-0 d-none d-xxl-block my-auto">
	<img src="<?echo $mainurlindex;?>img/icon-contact.jpg" class="img-fluid">
   </div>
  
  </div>
 </div>
</div> 
 
<!------------------------- contact us ends ------------------------->
<script>
var demoTrigger = document.querySelector('.demo-trigger');
new Drift(demoTrigger, {
  paneContainer: paneContainer,
  inlinePane: false,
});
</script>
<?include ("ibottomshamsnaturals.php")?>