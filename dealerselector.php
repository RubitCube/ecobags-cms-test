<?include ("itophead.php")?>
<?include ("itopshamsnaturals.php")?>
<?include ("iinnerbannershamsnaturals.php")?> 
<!----------------------profile heading starts ------------------------->
<div class="container-fluid fluid0 headingbg pt-5">
 <div class="container">
  <div class="row mx-0">
   <div class="col-12 col-md-6 col-lg-6 px-0 my-auto"> 
    <h1 class="thead mb-0">JOIN US</h1>
    <h1 class="tsubhead mb-0 pb-2 pb-md-3 pb-lg-4">DEALER SELECTOR</h1>
   </div>   
  </div>
 </div>
</div>
<!------------------- profile heading ends --------------------------------->
<!---------------- contact us starts ---------------------->
<div class="container-fluid fluid0 bodybg">
 <div class="container px-4 pb-2">
  <div class="row pb-5">
   <div class="col-12 col-sm-12 col-md-12 col-xxl-12 ps-0">
    <div class="row"> 
      <?php
  if( isset($_POST['submit'])) { 
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6LelFj4iAAAAAMzq1mWSwq-oSgQAgd7JibNQlPIm';
   $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
   if($responseData->success) { 
     //echo $succMsg = 'Your contact request have submitted successfully.';
     include("dealerselectorform3.php");
    } else {
     //echo $errMsg = 'Robot verification failed,  please try again.';
     include("dealerselectorform2.php");
    } 
  }  
  }else {//if page accessed for fist time 
   include("dealerselectorform.php");
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
  
  </div>
 </div>
</div> 

<div class="container-fluid fluid0 bottombg"> 
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722504.3860201286!2d51.70450670969868!3d24.337497293019872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e48dfb1ab12bd%3A0x33d32f56c0080aa7!2sUnited%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1688379081834!5m2!1sen!2sin" width="100%" height="550" style="border:none; line-height: normal" allowfullscreen="" loading="lazy" class="bottombg"></iframe>
 
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