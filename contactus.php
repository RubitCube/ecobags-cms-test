<?include ("itophead.php")?>
<?include ("itopshamsnaturals.php")?>
<?include ("iinnerbannershamsnaturals.php")?> 

<!---------------------- Profile Heading Starts ------------------------->
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
     /* Responsive tweaks */
     .contactimg {
       max-width: 100%;
       height: auto;
       border-radius: 10px;
     }
     @media (max-width: 768px) {
       .contactimg {
         margin-top: 20px;
       }
     }
   </style>

   <div class="row mx-0 text-center text-md-start">
     <div class="col-12 col-md-6 px-0 my-auto"> 
       <h1 class="thead mb-0">GET IN TOUCH</h1>
       <h1 class="tsubhead mb-0 pb-2 pb-md-3 pb-lg-4">LEAVE A MESSAGE</h1>
     </div>   
   </div>
 </div>
</div>
<!------------------- Profile Heading Ends --------------------------------->

<!---------------- Contact Us Starts ---------------------->
<div class="container-fluid fluid0 pb-5 bodybg">
 <div class="container px-4 pb-2">
  <div class="d-flex flex-wrap flex-lg-nowrap pb-5 align-items-start justify-content-between">

   <!-- Left Section: Contact Form + Cards -->
   <div class="col-12 col-lg-7 ps-0 pe-lg-5">
    <div class="row"> 
      <?php
        if (isset($_POST['submit'])) { 
          if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret = '6LfpsRMjAAAAAAcOK17rdMR_dspsrYwtxFPTVqUO';
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if ($responseData->success) { 
              include("contactusform3.php");
            } else {
              include("contactusform2.php");
            } 
          }  
        } else {
          include("contactusform.php");
        }
      ?>
      <script>
        $("form").submit(function(event) {
          var recaptcha = $("#g-recaptcha-response").val();
          if (recaptcha === "") {
            event.preventDefault();
            alert("Please check the reCAPTCHA");
          }
        });
      </script>
    </div>

    <!-- Contact Details Text Cards Section -->
    <div class="container mt-5 mb-5">
      <div class="row justify-content-center g-4">

        <!-- UAE Contact Card -->
        <div class="col-12 col-md-6 mb-4">
          <div class="card shadow-sm border-0 h-100 p-4 text-center text-md-start">
            <h5 class="text-uppercase fw-bold text-success mb-3">DUBAI ADDRESS:</h5>
            <p class="mb-1 fw-semibold">SHAMS BAG INDUSTRIES LLC</p>
            <p class="mb-1">
              Warehouse No. 1,<br>
              Al Qusais Industrial Area 4,<br>
              Dubai, UAE.
            </p>  
            <p class="mb-1">
            📞 +971 42 673449<br> <!-- As per client amendments on 05112025 : 2. Please remove Landline Text in dubai address keep only Only the icon  of phone enough. -->
            📞 +971 55 1906177
            </p>
            <hr>
            <h6 class="text-uppercase fw-semibold text-success mb-3">WAREHOUSE ADDRESS:</h6>
            <h6 class="text-uppercase fw-semibold text-success mb-3">SAIFZONE SHARJAH </h6>
            <p class="mb-1 fw-semibold">SHAMS BAG INDUSTRIES LLC</p>
            <p class="mb-1">
              Q4-003, Saif Zone,<br>
              Sharjah, UAE
            </p>    
          </div>
        </div>

        <!-- Poland Contact Card -->
        <div class="col-12 col-md-6 mb-4">
          <div class="card shadow-sm border-0 h-100 p-4 text-center text-md-start">
            <h5 class="text-uppercase fw-bold text-success mb-3">POLAND ADDRESS: </h5>
            <p class="mb-1 fw-semibold">SHAMS NATURALS SP. Z.O.O</p>
            <p class="mb-1">
              Marcina Kasprzaka 31, Room 119,<br>
              Warsaw, Post Code 00-123,<br>
              Poland
            </p>
            <p class="mb-1"> <!--As per client amendments on 05112025 : In Poland phone number, no need to add the Text.-->
              📞 +48 578 625 210<br>
              📞 +48 795 876 741
            </p>
            <hr>
            <h6 class="text-uppercase fw-semibold text-success mb-3">WAREHOUSE ADDRESS:</h6>
            <h6 class="text-uppercase fw-semibold text-success mb-3">POLAND</h6>
            <p class="mb-1">
              Lodz, 93-231, at 3B Dostawcza Street.<br> <!--As per client amendments on 05112025 :In Poland warehouse address, Start with Lodz. No need the sentence the storage of goods shall take place in the warehouse located in the city.
  -->
            </p>
          </div>
        </div>

      </div>
    </div>
    <!-- End Contact Details Text Cards Section -->	
   </div>  
 
   <!-- Right Section: Sticky Image -->
      <div class="col-12 col-lg-5 pt-4 pt-lg-0 text-center order-2 order-lg-2">
        <div class="sticky-right">
          <img src="<?php echo $mainurlindex; ?>img/contactimg.jpg" alt="Contact" class="img-fluid contactimg">
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Add CSS for Sticky Image -->
<style>
.sticky-right {
  position: -webkit-sticky;
  position: sticky;
  top: 100px; /* distance from top while scrolling */
}
@media (max-width: 991px) {
  .sticky-right {
    position: static; /* disable stickiness on small screens */
  }
}
</style>
<!------------------------- Contact Us Ends ------------------------->

<script>
var demoTrigger = document.querySelector('.demo-trigger');
new Drift(demoTrigger, {
  paneContainer: paneContainer,
  inlinePane: false,
});
</script>

<?include ("ibottomshamsnaturals.php")?>
