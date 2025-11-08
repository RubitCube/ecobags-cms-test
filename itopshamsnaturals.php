<!------- link desktop starts --------->
<header id="header" class="header  nav-container d-none d-md-none d-lg-block">
 <div class="container py-2"> 
  <div class="row">
   <nav class="navbar bootsnav navbar-left pb-lg-0">
    <div class="col-lg-2 col-xl-3 col-xxl-3 my-auto pb-lg-0 pb-2">
     <div class="navbar-header text-start px-3">
      <button type="button" class="navbar-toggle navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false"><span class="hidden">MENU</span> <i class="fas fa-bars"></i></button>
	   
      <?if ($fname<>"index.php") { ?><a class="navbar-brand" href="<?echo $mainurlindex;?>ShamsNaturals-Home" ><img src="<?echo $mainurlindex;?>img/shamsnaturals-logo.jpg" class="img-fluid    d-none d-md-none d-lg-block"></a><? } else { ?><img src="<?echo $mainurlindex;?>img/shamsnaturals-logo.jpg" class="img-fluid   d-none d-md-none d-lg-block"><? } ?>
	   
      <?if ($fname<>"index.php") { ?><a class="navbar-brand" href="<?echo $mainurlindex;?>ShamsNaturals-Home" ><img src="<?echo $mainurlindex;?>img/shamsnaturals-moblogo.jpg" class="img-fluid ps-5 d-block d-lg-none"></a><? } else { ?><img src="<?echo $mainurlindex;?>img/shamsnaturals-moblogo.jpg" class="img-fluid   pe-5 d-block d-lg-none"><? } ?>	  
     </div>
    </div>
    <div class="col-lg-10 col-xl-9 col-xxl-9 my-auto pb-xxl-0 ps-xxl-0">  
	 <div class="navbox-collapse collapse ps-5 ps-lg-0 ps-xl-2 d-flex  float-end" id="navbar-menu" >
	  <ul class="nav flex ps-xxl-0 my-auto" data-in="fade-In-Down" data-out="fade-Out-Up">
       <li class="dropdown megamenu-fw">
	    <a href="<?echo $mainurlindex;?>ShamsNaturals-Home">HOME</a>
	   <li class="dropdown megamenu-fw">
	    <a href="<?echo $mainurlindex;?>ShamsNaturalsCompany-Profile">ABOUT US</a>
       </li>
       <li class="dropdown megamenu-fw">
	    <a class="dropdown-toggle" data-toggle="dropdown">PRODUCTS</a>
	    <ul class="dropdown-menu megamenu-content image-menu animated fade-Out-Up" role="menu">
		<li>
	      <div class="row mx-0 pb-3">
		   <!------- category listing starts --------->
		   <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 px-0">
		    <div class="row mx-0">
			<?
			$category_where="status='Active'";
			$category_orderby="ORDER BY priority ASC";
			$category_result=$obj->select_all_values("category", $category_where, $category_orderby);
			$count=0;
			foreach($category_result as $category_row){ 
			$count++;
			$categoryno =$category_row["categoryno"];
			$category =$category_row["categoryname"];
			$categoryimg =$category_row["pimg"];
			$cnamemask =$category_row["cnamemask"];
			
			$subcategory_wherecondition = "categoryno =$categoryno and status='Active'";
			$subcategory_tcount1=$obj->totalrecords_condition('subcategory', '*', $subcategory_wherecondition);
			foreach($subcategory_tcount1 as $subcategory_row )
			{
			 $subcategory_tcount = $subcategory_row['count(*)'];
			}
			?>	   
			<?
		   $productcategory_wherecondition = "categoryno =$categoryno  and subcategoryno=0 and pstatus='Active'";
		   $productcategory_tcount1=$obj->totalrecords_condition('productcategory', '*', $productcategory_wherecondition);
		   foreach($productcategory_tcount1 as $productcategory_row )
		   {
			 $productcategory_tcount = $productcategory_row['count(*)'];
		   }
		   ?> 
		   <?if ($subcategory_tcount==0){ ?>
		    <div class="col-menu col-sm-6 col-md-4 col-xl-4 pt-4 categoryboxbg px-0 px-xl-2 pe-2">
			  <a href="<?echo $mainurlindex?>Products/<?echo $categoryno?>/0">
			  <h4 class="tcategorylinkhead mb-0 pb-3">
			  <?if ($categoryno==210){ //jollood?>
			   <img src="<?echo $mainurlindex?>img/jooloodcategorylogo.png" class="img-fluid ">
			   <?}else{?><?echo $category?><?}?>
			  </h4>
			  </a>
		     </div>
		   <?}?>
           <?}?>
			</div>
		   </div>
			
           <!-- Natural products category-starts-->			
		   <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 px-0">
		    <div class="row mx-0"> 
			<!---
			<?
			$category_where="status='Active' and categoryno=200";
			$category_orderby="ORDER BY priority ASC";
			$category_result=$obj->select_all_values("category", $category_where, $category_orderby);
			$count=0;
			foreach($category_result as $category_row){ 
			$count++;
			$categoryno =$category_row["categoryno"];
			$category =$category_row["categoryname"];
			$categoryimg =$category_row["pimg"];
			$cnamemask =$category_row["cnamemask"];	 
			$subcategory_wherecondition = "categoryno =$categoryno and status='Active'";
			$subcategory_tcount1=$obj->totalrecords_condition('subcategory', '*', $subcategory_wherecondition);
			foreach($subcategory_tcount1 as $subcategory_row )
			{
			 $subcategory_tcount = $subcategory_row['count(*)'];
			}
			?>	
			<div class="col-menu col-sm-6 col-md-6 col-xl-6 pt-4 categoryboxbg px-0 px-xl-2">
			  <a href="<?echo $mainurlindex?>SubProducts/<?echo $categoryno?>/0"> <h4 class="tcategorylinkhead mb-0 pb-3" style="border-bottom:none;"><?echo $category?></h4></a>
			  <?if ($subcategory_tcount<>0){ ?>
			   <?
			    $submenucount=1;
				$subcategory_where="categoryno=$categoryno and status='Active'";
				$subcategory_orderby="ORDER BY subcategorypriority ASC";
				$subcategory_result=$obj->select_all_values("subcategory", $subcategory_where, $subcategory_orderby);
				$scount=0;
				foreach($subcategory_result as $subcategory_row){ 
				 $scount++;
				 $subcategoryno =$subcategory_row["subcategoryno"];
				 $subcategory =$subcategory_row["subcategory"];
				?>
			      <a href="<?echo $mainurlindex;?>Products/<?echo $categoryno?>/<?echo $subcategoryno?>" ><p class="tsubcategorylinkhead pb-4 mb-0"><i class="fa fa-angle-right pe-2" aria-hidden="true"></i><?echo $subcategory?></p></a>
				  <?$submenucount++;?>	
			   <?}?>
			   </div>
			   <?}?>
			   <?}?>
			   
			   
			   --->
				<!-- joolood logo starts-------------------> 
				 <div class="col-menu col-sm-6 col-md-6 col-xl-6 pt-4 categoryboxbg px-0 px-xl-2">
				   <a href="<?echo $mainurlindex;?>ShamsNaturalsVideos"> <h4 class="tcategorylinkhead mb-0 pb-3" style="border-bottom:none;">Videos</h4></a>
				 </div>
				<!-- joolood logo ends-------------------> 			   
			  </div>
		    </div>
			<!-- Natural products category ends--->
		    </div>	      
	       </li>		   
	    </ul>
	   </li>
	   <li class="dropdown megamenu-fw">
	    <a href="<?echo $mainurlindex;?>NewarrivalProducts">NEW ARRIVALS</a>
       </li>
	   <li class="dropdown megamenu-fw">
	    <a href="<?echo $mainurlindex;?>DealerSelector">DEALER SELECTOR</a>
       </li>
	   <li class="dropdown megamenu-fw">
	    <a href="<?echo $mainurlindex;?>ContactShamsNaturals" >CONTACT</a>
       </li>
	  </ul>
	  
	  <div class="topbtn">
	   <a class="dealerloginbtn" href="https://ecobagdealers.rubitcubedev.com/" target="_blank">Dealer Login</a>
      </div>
	 </div>
    </div>
   </nav>
  </div>   
 </div>
</header>
<!------- link desktop ends --------->

<!------- link mobile starts --------->
<header id="header" class="header nav-container d-block d-lg-none">
 <div class="container-fluid"> 
  <div class="row">
   <div class="col-lg-12 my-auto pt-1 pb-lg-5 pb-2 px-0">
    <nav class="navbar bootsnav navbar-left pb-lg-3">
	
     <div class="navbar-header text-start px-3">
      <button type="button" class="navbar-toggle navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false"><span class="hidden">MENU</span> <i class="fas fa-bars"></i></button>
	  
      <?if ($fname<>"index.php") { ?><a class="navbar-brand" href="<?echo $mainurlindex;?>ShamsNaturals-Home" ><img src="<?echo $mainurlindex;?>img/shamsnaturals-logo.jpg" class="img-fluid logotop  logotop d-none d-md-none d-lg-block"></a><? } else { ?><img src="<?echo $mainurlindex;?>img/shamsnaturals-logo.jpg" class="img-fluid  d-none d-md-none d-lg-block"><? } ?>
	   
      <?if ($fname<>"index.php") { ?><a class="navbar-brand" href="<?echo $mainurlindex;?>ShamsNaturals-Home" ><img src="<?echo $mainurlindex;?>img/shamsnaturals-moblogo.jpg" class="img-fluid    d-block d-lg-none  ms-3 pb-4"></a><? } else { ?><img src="<?echo $mainurlindex;?>img/shamsnaturals-moblogo.jpg" class="img-fluid d-block d-lg-none ms-5"><? } ?>	  
	  
	  <div class="topbtn float-end">
	   <a class="dealerloginbtn" href="https://shamsnatural.com/" target="_blank">Dealer Login</a>
      </div>
     </div>
	  
     <div class="navbox-collapse collapse ms-auto" id="navbar-menu" style="margin-right: 0!important;">
      <ul class="nav flex justify-end" data-in="fade-In-Down" data-out="fade-Out-Up">
       <li class="dropdown megamenu-fw">
	    <a href="<?echo $mainurlindex;?>ShamsNaturals-Home">Home</a>
       </li>
	   
       <li class="dropdown megamenu-fw">
	    <a href="<?echo $mainurlindex;?>ShamsNaturalsCompany-Profile">About Us</a>
	   </li>
	   
	  <li class="dropdown megamenu-fw">
	    <a href="" class="dropdown-toggle" data-toggle="dropdown">Products</a>
	    <ul class="dropdown-menu megamenu-content image-menu animated fade-Out-Up" role="menu">
	     <li>
	      <div class="row mx-0"> 
		   <!------- category listing starts --------->
		   <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-8 px-0">
		    <div class="row mx-0">
		     <div class="col-menu col-sm-12 col-md-6 col-lg-4 categoryboxbg ps-0">
			 
		      <!------- menu starts ------>
				<?
				$category_where="status='Active'";
				$category_orderby="ORDER BY priority ASC";
				$category_result=$obj->select_all_values("category", $category_where, $category_orderby);
				$count=0;
				foreach($category_result as $category_row){ 
				$count++;
				$categoryno =$category_row["categoryno"];
				$category =$category_row["categoryname"];
				$categoryimg =$category_row["pimg"];
				$cnamemask =$category_row["cnamemask"];	 
				$subcategory_wherecondition = "categoryno =$categoryno and status='Active'";
				$subcategory_tcount1=$obj->totalrecords_condition('subcategory', '*', $subcategory_wherecondition);
				foreach($subcategory_tcount1 as $subcategory_row)
				{
				 $subcategory_tcount = $subcategory_row['count(*)'];
				}
				?>	   
				<?if ($subcategory_tcount==0){?>
				<a href="<?echo $mainurlindex?>Products/<?echo $categoryno?>/0">
			      <h4 class="tcategorylinkhead mb-0 pb-3"><i class="fa fa-angle-right pe-2" aria-hidden="true"></i>
			      <?if ($categoryno==210){ //jollood?>
			       <img src="<?echo $mainurlindex?>img/jooloodcategorylogo.png" class="img-fluid ">
			      <?}else{?><?echo $category?><?}?>
				  </h4>
			    </a>
				<?}else{?>
				<a href="<?echo $mainurlindex?>SubProducts/<?echo $categoryno?>/<?echo $subcategoryno?>">
			      <h4 class="tcategorylinkhead mb-0 pb-3"><i class="fa fa-angle-right pe-2" aria-hidden="true"></i><?echo $category?></h4>
			    </a>
				<?}?>
				<?}?>
				<a href="<?echo $mainurlindex;?>ShamsNaturalsVideos"> <h4 class="tcategorylinkhead mb-0 pb-3"><i class="fa fa-angle-right pe-2" aria-hidden="true"></i>Videos</h4></a>
			  <!------- menu ends ------>
		     </div>
		    </div>
		   </div>
		   <!------- category listing ends --------->
	      </div>	      
	     </li>
	    </ul>
	   </li>
	   
	   <li class="dropdown megamenu-fw">
        <a href="<?echo $mainurlindex;?>NewarrivalProducts">New Arrivals</a>
       </li>
	   <li class="dropdown megamenu-fw">
        <a href="<?echo $mainurlindex;?>DealerSelector">Dealer Selector</a>
       </li>
       <li class="dropdown megamenu-fw">
        <a href="<?echo $mainurlindex;?>ContactShamsNaturals">Contact</a>
       </li>
      </ul>
     </div>
    </nav>	 
   </div>   
  </div>
 </div>
</header>
<!------- link mobile ends --------->
