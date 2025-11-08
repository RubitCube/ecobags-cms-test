 <div class="widget-2 mg-b-10" style="padding:0px; margin-right: 0px;">
  <div class="card-header" style="padding:0px; margin-right: 0px;">
   <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"><?//echo $bodyheading?></h6>
   <div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
    <?if ($addicon<>"No") { 
	$linkheadingtable="Assign Technicians";?>
     <a href="add<?echo $linkname?>.php<?echo $linkquery1?><?if ($linkquery2<>""){?><?echo $linkquery2?><?}?><?echo $linkquery3?><?echo $linkquery4?><?echo $linkquery5?><?echo $linkquery6?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force"></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force"> <?echo $linkheadingtable?></span></a>
    <? } ?>	
    
   </div>
  </div>
 </div>