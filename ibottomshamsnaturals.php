<!------------------ Bottom Desktop Starts ---------------------->
<div class="container-fluid bottombg d-none d-md-none d-lg-block">
    <div class="container">
        <div class="row pb-5 pb-lg-2 pt-lg-4">
            <div class="col-12 col-xl-9 my-auto">
                <ul class="ps-0 bottomlinks d-flex mb-0" style="list-style:none;">

                    <? if ($fname<>"index.php" ) { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>ShamsNaturals-Home"
                            class="tbottomtext">Home</a></li>
                    <? } else { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>ShamsNaturals-Home"
                            class="tbottomtextactive">Home</a></li>
                    <? } ?>

                    <li class="px-4 tbottomtext">/</li>

                    <? if ($fname<>"aboutus.php" ) { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>ShamsNaturalsCompany-Profile"
                            class="tbottomtext">About Us</a></li>
                    <? } else { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>ShamsNaturalsCompany-Profile"
                            class="tbottomtextactive">About Us</a></li>
                    <? } ?>

                    <li class="px-4 tbottomtext">/</li>


                    <? if ($fname<>"newarrivals.php" ) { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>NewarrivalProducts"
                            class="tbottomtext">New Arrivals</a></li>
                    <? } else { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>NewarrivalProducts"
                            class="tbottomtextactive">New Arrivals</a></li>
                    <? } ?>

                    <li class="px-4 tbottomtext">/</li>

                    <? if ($fname<>"dealerselector.php" ) { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>DealerSelector"
                            class="tbottomtext">Dealer Selector</a></li>
                    <? } else { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>DealerSelector"
                            class="tbottomtextactive">Dealer Selector</a></li>
                    <? } ?>

                    <li class="px-4 tbottomtext">/</li>


                    <? if ($fname<>"contactus.php" ) { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>ContactShamsNaturals"
                            class="tbottomtext tbottomtextlast">Contact</a></li>
                    <? } else { ?>
                    <li class="hover-underline-animation"><a href="<?echo $mainurlindex;?>ContactShamsNaturals"
                            class="tbottomtextactive tbottomtextlast">Contact</a></li>
                    <? } ?>
                </ul>
            </div>
            <div class="col-12 col-xl-3 my-auto d-none d-xl-block">
                <a href="index.php"><img src="<?echo $mainurlindex;?>img/shamsnaturals-botlogo.jpg"
                        class="img-fluid logoimg float-end"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="">
            </div>
        </div>

        <div class="row py-lg-5">
            <div class="col-12 col-xxl-10">
                <h3 class="bottomhead mb-0 pb-2"><u>Product Categories</u></h3>
                <div class="row ps-3">
                    <?
	$category_wherecondition = "categoryno <>0";
	$category_tcount1=$obj->totalrecords_condition('category', '*', $category_wherecondition);
	foreach($category_tcount1 as $category_row )
	{
	 $category_tcount=$category_row['count(*)'];
	 $get_category_tcount=$category_tcount/3;
	 $totcategory_items=round($get_category_tcount);	
	} 
   ?>
                    <!-----------category-starts---------------------------------------->
                    <div class="col-6 col-xxl-2">
                        <ul class="bottomlinks itemlist mb-0 ps-0" style="list-style:none;">
                            <?
		$menucount=1;
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
		?>
                            <? if($menucount==4){?>
                        </ul>
                    </div>
                    <? if($categoryno==200){?>
                    <div class="col-6 col-xxl-4">
                        <?}else{?>
                        <div class="col-6 col-xxl-3 ps-xxl-5">
                            <?}?>

                            <ul class="bottomlinks itemlist mb-0 ps-0" style="list-style:none;">
                                <?$menucount=1;?>
                                <?}?>
                                <!------- subcategory listing starts --------->
                                <? if($categoryno==200){?>
                                <?$subcategory_sql="SELECT * FROM subcategory WHERE  categoryno=$categoryno and status='Active'";
		 $subcategory_sql_countresult2=$obj->execute($subcategory_sql);
		 $subcategory_tcount=$subcategory_sql_countresult2->rowCount();
		 if($subcategory_tcount<>0){
		  $where="categoryno=$categoryno and status='Active'";
		  $orderby="ORDER BY subcategorypriority ASC";
		  $result=$obj->select_all_values("subcategory",$where,$orderby);
		  foreach($result as $subcategory_row)
		  { 
		   $subcategoryno =$subcategory_row["subcategoryno"];
		  }
		 }else{
		  $subcategoryno=0;
		  }
		  ?>
                                <li class="pb-3 hover-underline-animation"><a
                                        href="<?echo $mainurlindex?>SubProducts/<?echo $categoryno?>/<?echo $subcategoryno?>"
                                        class="tbottomtexts">
                                        <?echo $category?>
                                    </a></li>
                                <?}?>
                                <!------- subcategory listing ends --------->
                                <!------- category listing starts --------->
                                <? if($categoryno<>200){?>
                                <li class="pb-3 hover-underline-animation">
                                    <a href="<?echo $mainurlindex?>Products/<?echo $categoryno?>/0"
                                        class="tbottomtexts">
                                        <?if ($categoryno==210){ //jollood?>
                                        <img src="<?echo $mainurlindex?>img/jooloodsidebarlogo.png"
                                            class="img-fluid pe-4">
                                        <?}else{?>
                                        <?echo $category?>
                                        <?}?>
                                    </a>
                                </li>
                                <?}?>
                                <!------- category listing ends --------->
                                <?$menucount++;?>
                                <?}?>
                            </ul>
                        </div>
                        <!-----------category-ends---------------------------------------->
                    </div>
                </div>


                <div class="col-12 col-xxl-2">

                    <!--<div class="row pb-2 pt-3 pt-xxl-4 pt-xxl-3">
                        <h3 class="socialhead mb-0">Social Media Links</h3>
                    </div>-->
                    <!-- Floating Social Icons -->
                    <div class="floating-social" id="floatSocial">
                        <a href="https://www.facebook.com/shams.naturals" target="_blank" class="social-icon facebook">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="https://www.instagram.com/shams_naturals7" target="_blank" class="social-icon instagram">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="https://www.youtube.com/@SHAMSNATURALS" target="_blank" class="social-icon youtube">
                            <i class='bx bxl-youtube'></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=971551906177" target="_blank" class="social-icon whatsapp">
                            <i class='bx bxl-whatsapp'></i>
                        </a>
                    </div>

                    

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr class="">
                </div>
            </div>
            <div class="row py-4">
                <div class="col-12 col-md-10 col-xl-10 my-auto">
                    <p class="icopyright mb-0">Copyright ©
                        <?echo date("Y")?> www.shamsnaturals.com. All rights reserved.
                    </p>
                </div>
                <!-- <div class="col-12 col-md-2 col-xl-2 px-0 my-auto">
                    <div class="row">
                        <div class="col-12 float-end">
                            <a target="_blank" href="https://www.ciber.ae">
                                <div class="d-flex align-items-center float-end">
                                    <div class="ms-4">
                                        <p class="mb-0 idesignby text-end">design by</p>
                                        <p class="mb-0 idesignby">
                                            <font class="idesignby">www.ciber.ae</font>
                                        </p>
                                    </div>
                                    <div class="btn-lg-square  rounded-circle float-end ps-2">
                                        <img src="<?echo $mainurlindex;?>img/ciber.svg" class="my-auto" style="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!----------------- Bottom copyright End ----------------->
    <!------------- Bottom Mobile Starts ------------->
    <div class="container-fluid bottombg px-0 pt-4 d-block d-lg-none">
        <div class="container">
            <div class="row quicklink pb-1 pb-lg-4">
                <div class="col-6">
                    <h4 class="bottomhead mb-0">Quick Links</h4>
                </div>
            </div>
            <div class="row quicklink pb-2 pb-lg-4">
                <div class="col-12">
                    <ul class="ps-0 mb-0" style="list-style:none;">
                        <? if ($fname<>"index.php" ) { ?>
                        <li class="pb-2"><a href="<?echo $mainurlindex;?>ShamsNaturals-Home"
                                class="hover-underline-animation tbottomtexts">Home</a></li>
                        <? } else { ?>
                        <li class="pb-2"><a href="<?echo $mainurlindex;?>ShamsNaturals-Home"
                                class="hover-underline-animation tbottomtextactives">Home</a></li>
                        <? } ?>

                        <? if ($fname<>"aboutus.php" ) { ?>
                        <li class="pb-2"><a href="<?echo $mainurlindex;?>ShamsNaturalsCompany-Profile"
                                class="hover-underline-animation tbottomtexts">About Us</a></li>
                        <? } else { ?>
                        <li class="pb-2"><a href="<?echo $mainurlindex;?>ShamsNaturalsCompany-Profile"
                                class="hover-underline-animation tbottomtextactives">About Us</a></li>
                        <? } ?>


                        <? if ($fname<>"newarrivals.php" ) { ?>
                        <li class="pb-2"><a href="<?echo $mainurlindex;?>NewarrivalProducts"
                                class="hover-underline-animation tbottomtexts">New Arrivals</a></li>
                        <? } else { ?>
                        <li class="pb-2"><a href="<?echo $mainurlindex;?>NewarrivalProducts"
                                class="hover-underline-animation tbottomtextactives">New Arrivals</a></li>
                        <? } ?>

                        <? if ($fname<>"dealerselector.php" ) { ?>
                        <li class="pb-2"><a href="<?echo $mainurlindex;?>DealerSelector"
                                class="hover-underline-animation tbottomtexts">Dealer Selector</a></li>
                        <? } else { ?>
                        <li class="pb-2"><a href="<?echo $mainurlindex;?>DealerSelector"
                                class="hover-underline-animation tbottomtextactives">Dealer Selector</a></li>
                        <? } ?>


                        <? if ($fname<>"contactus.php" ) { ?>
                        <li><a href="<?echo $mainurlindex;?>ContactShamsNaturals"
                                class="hover-underline-animation tbottomtexts">Contact</a></li>
                        <? } else { ?>
                        <li><a href="<?echo $mainurlindex;?>ContactShamsNaturals"
                                class="hover-underline-animation tbottomtextactives">Contact</a></li>
                        <? } ?>

                    </ul>
                </div>
            </div>


            <div class="row quicklink pb-1 pb-lg-4 pt-3">
                <div class="col-12">
                    <h4 class="bottomhead mb-0">Product Categories</h4>
                </div>
            </div>
            <div class="row quicklink pb-4 pb-lg-4">
                <div class="col-12">
                    <ul class="mb-0 ps-0" style="list-style:none;">
                        <?
	$category_where="status='Active'";
	$category_orderby="ORDER BY priority ASC";
	$category_result=$obj->select_all_values("category", $category_where, $category_orderby);
	$count=0;
	foreach($category_result as $category_row){ 
	$count++;
	$categoryno =$category_row["categoryno"];
	$category =$category_row["categoryname"];
	?>
                        <!------- subcategory listing starts --------->
                        <? if($categoryno==200){?>
                        <?$subcategory_sql="SELECT * FROM subcategory WHERE  categoryno=$categoryno and status='Active'";
		 $subcategory_sql_countresult2=$obj->execute($subcategory_sql);
		 $subcategory_tcount=$subcategory_sql_countresult2->rowCount();
		 if($subcategory_tcount<>0){
		  $where="categoryno=$categoryno and status='Active'";
		  $orderby="ORDER BY subcategorypriority ASC";
		  $result=$obj->select_all_values("subcategory",$where,$orderby);
		  foreach($result as $subcategory_row)
		  { 
		   $subcategoryno =$subcategory_row["subcategoryno"];
		  }
		 }else{
		  $subcategoryno=0;
		  }
		  ?>
                        <li class="pb-2"><a
                                href="<?echo $mainurlindex?>SubProducts/<?echo $categoryno?>/<?echo $subcategoryno?>"
                                class="tbottomtexts hover-underline-animation">
                                <?echo $category?>
                            </a></li>
                        <?}?>
                        <!------- subcategory listing ends --------->
                        <!------- category listing starts --------->
                        <? if($categoryno<>200){?>
                        <li class="pb-2"><a href="<?echo $mainurlindex?>Products/<?echo $categoryno?>/0"
                                class="tbottomtexts hover-underline-animation">
                                <?if ($categoryno==210){ //jollood?>
                                <img src="<?echo $mainurlindex?>img/jooloodsidebarlogo.png" class="img-fluid pe-4">
                                <?}else{?>
                                <?echo $category?>
                                <?}?>
                            </a></li>
                        <?}?>
                        <!------- category listing ends --------->
                        <?}?>
                    </ul>
                </div>
            </div>

            <div class="row py-md-3 pt-lg-4 pt-xxl-2 pb-2">
            </div>


            <!--<div class="row quicklink pt-3 pb-2 pb-lg-4">
                <div class="col-6">
                    <h4 class="bottomhead mb-0">Follow Us On</h4>
                </div>
            </div>-->

            <div class="row quicklink pb-4 pb-lg-4">
                <div class="col-12">
                    <div class="d-flex justify-content-start align-items-center gap-3 flex-wrap social-mobile">
                    <a href="https://www.facebook.com/shams.naturals" target="_blank" class="social-icon facebook">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://www.instagram.com/shams_naturals7" target="_blank" class="social-icon instagram">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://www.youtube.com/@SHAMSNATURALS" target="_blank" class="social-icon youtube">
                        <i class='bx bxl-youtube'></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971551906177" target="_blank" class="social-icon whatsapp">
                        <i class='bx bxl-whatsapp'></i>
                    </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-------------- Bottom Mobile End ----------------->
    <!-----------------Footer mobile Starts---------------------->
    <div class="container-fluid footer d-block d-md-block d-lg-none py-3">
        <div class="container ps-0 ps-md-3 pt-3">
            <!-------------------------mobile-------------------------->
            <div class="row pb-3">
                <div class="col-12 col-md-6">
                    <h4 class="icopyrightmob my-auto">© copyright www.shamsnaturals.com
                        <?echo date("Y")?><br> All Rights Reserved
                    </h4>
                </div>
            </div>
            <!-- <div class="row pb-2 ">
                <div class="col-12 ">
                    <div class="d-flex align-items-center ">
                        <div class="ms-lg-4">
        <p class="mb-0 idesignbymob text-end">design by</p>
        <p class="mb-0 idesignbymob"><a target="_blank" href="https://www.ciber.ae"><font class="idesignbymob">www.ciber.ae</font></a></p>
       </div>
                        <div class="btn-lg-square  rounded-circle float-end ps-2">
                            <img src="<?echo $mainurlindex;?>img/cibermob.svg" class="my-auto" style="">
                        </div>
                    </div>
                </div>
            </div> -->
            <!--------------------mobile----------------------->
        </div>
    </div>
    <!----------------- Footer mobile Ends ---------------------->




    <!--<style>
    /* Modern Social Icons  Amedenments rcvd from client on 05/11/2025 client explicitly wants the icons in full color (not black-and-white initially, nor only on hover), you’ll need static color versions of each platform icon.
        .social-icon {
        font-size: 1.9rem;
        color: #000000ff;
        transition: all 0.3s ease;
        background: #000000ff;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        }

        .social-icon:hover {
        color: #fff;
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .facebook:hover {
        background-color: #1877f2;
        }

        .instagram:hover {
        background: linear-gradient(45deg, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5);
        }

        .youtube:hover {
        background-color: #ff0000;
        }

        .whatsapp:hover {
        background-color: #25d366;
        }

        /* Mobile adjustments /*
        @media (max-width: 576px) {
            .social-icon {
                width: 38px;
                height: 38px;
                font-size: 1.6rem;
            }
            .d-flex.gap-3 {
                gap: 0.8rem !important;
            }
        } */

        /* Client Amendments added on 05/11/2025 02:10 PM IST Full Color Social Icons (Static Colors) */
        /* Floating Social Bar */
        <!-- Include Boxicons -->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

        <style>
            /* 🌐 Floating Social Bar (Vertical on All Screens, Scrolls with Page) */
            .floating-social {
                position: absolute;
                top: 200px; /* Adjust as needed */
                right: 15px;
                z-index: 999;
                display: flex;
                flex-direction: column;
                gap: 12px;
                transition: top 0.3s ease;
            }

            /* Social Icon Styling */
            .social-icon {
                font-size: 1.8rem;
                color: #fff;
                border-radius: 50%;
                width: 46px;
                height: 46px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
                text-decoration: none;
            }

            /* Brand Colors */
            .facebook { background-color: #1877f2; }
            .instagram { background: linear-gradient(45deg, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5); }
            .youtube { background-color: #ff0000; }
            .whatsapp { background-color: #25d366; }

            /* Hover Animation */
            .social-icon:hover {
                transform: scale(1.1) translateX(-4px);
                box-shadow: 0 6px 14px rgba(0, 0, 0, 0.3);
            }

            /* Keep Vertical Layout for All Screens */
            @media (max-width: 768px) {
                .floating-social {
                    right: 10px;
                    gap: 10px;
                }
                .social-icon {
                    width: 42px;
                    height: 42px;
                    font-size: 1.6rem;
                }
            }
            </style>

        <script>
        AOS.init({
            duration: 1200,
        })
    </script>

    <!-- JS: makes it move with scroll -->
    <script>
        window.addEventListener('scroll', function() {
            const floatSocial = document.getElementById('floatSocial');
            floatSocial.style.top = (window.scrollY + 200) + 'px';
        });
    </script>

    <!-- Back to Top --
<a href="#" class="btn btn-lg gotop btn-lg-square rounded-2 back-to-top"><strong><i class="bi bi-chevron-double-up"></i></strong></a>
<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?echo $mainurlindex;?>lib/wow/wow.min.js"></script>
    <script src="<?echo $mainurlindex;?>lib/easing/easing.min.js"></script>
    <script src="<?echo $mainurlindex;?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?echo $mainurlindex;?>lib/counterup/counterup.min.js"></script>
    <script src="<?echo $mainurlindex;?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?echo $mainurlindex;?>lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?echo $mainurlindex;?>lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?echo $mainurlindex;?>js/jquery-3.5.1.min.js"></script>
    <script src="<?echo $mainurlindex;?>js/popper.min.js"></script>
    <script src="<?echo $mainurlindex;?>js/bootsnav.js"></script>
    <script src="<?echo $mainurlindex;?>js/modern-megamenu.js"></script>
    <script src="<?echo $mainurlindex;?>lib/effects.js"></script>
    <!-- Template Javascript -->
    <script src="<?echo $mainurlindex;?>js/main.js"></script>
    </body>

    </html>