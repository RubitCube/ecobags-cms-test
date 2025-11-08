<?
if($fname=="products.php"){
 $ban="innerbanner01.jpg";
 $banm="minnerbanner01.jpg";
}
if($fname=="productdetails.php"){
 $ban="innerbanner02.jpg";
 $banm="minnerbanner02.jpg";
}
if($fname=="aboutus.php" || $fname=="videos.php"){
 $ban="innerbanner03.jpg";
 $banm="minnerbanner03.jpg";
}
if($fname=="newarrivals.php"){
 $ban="innerbanner04.jpg";
 $banm="minnerbanner04.jpg";
}
if($fname=="dealerselector.php"){
 $ban="innerbanner05.jpg";
 $banm="minnerbanner05.jpg";
}
if($fname=="contactus.php"){
 $ban="innerbanner06.jpg";
 $banm="minnerbanner06.jpg";
}

?>
<div class="container-fluid fluid0 d-none d-lg-block px-0">
 <img src="<?echo $mainurlindex;?>img/<?echo $ban;?>"  alt="" title="" >
</div>
<div class="container-fluid fluid0 d-lg-none px-0">
 <img src="<?echo $mainurlindex;?>img/<?echo $banm;?>" " alt="" title="">
</div>

