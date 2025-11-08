 <div class="widget-2 mg-b-10" style="padding:0px; margin-right: 0px;">
  <div class="card-header" style="padding:0px; margin-right: 0px;">
   <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"><?echo $bodyheading?></h6>
   <div class="btn-group" role="group"  style="padding:0px; margin-right: 0px;">
   <?if ($priorityicon<>"No") { ?>
     <a title="Set Priority <?echo $linkheading?>" href="set<?echo $linknamepriority?>.php?pname=<?echo $pname?>&page=<?echo $fname?>"><i class="fa  fa-sort-numeric-asc mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">SET PRIORITY</span></a>
    <? } ?>	
    <?if ($addicon<>"No") { ?>
     <a title="Add <?echo $linkheading?>" href="add<?echo $linkname?>.php<?echo $linkquery1?><?if ($linkquery2<>""){?><?echo $linkquery2?><?}?><?echo $linkquery3?><?echo $linkquery4?><?echo $linkquery5?><?echo $linkquery6?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-success tx-16-force" ></i></li> <span class="tx-success tx-uppercase tx-bold tx-15-force">ADD <?echo $linkheading?></span></a>
    <? } ?>	
    <?if ($modifytopicon<>"No") { ?>
     <a href="modify<?echo $linkname?>.php<?echo $linkquery1?><?if ($linkquery2<>""){?><?echo $linkquery2?><?}?><?echo $linkquery3?><?echo $linkquery4?><?echo $linkquery5?><?echo $linkquery6?>"><i class="fa fa-plus mg-l-30 mg-r-5 tx-pink tx-16-force"></i></li> <span class="tx-pink tx-uppercase tx-bold tx-15-force">MODIFY</span></a>
    <? } ?>
    <?if ($pdficon<>"No") { ?>
     <a href="pdf<?echo $linkname?>.php"><i class="fa fa-file-pdf-o mg-l-30 mg-r-5 tx-info tx-16-force"></i></li> <span class="tx-info tx-uppercase tx-bold tx-15-force">PDF</span></a>
    <? } ?>
    <?if ($excelicon<>"No") { ?>
     <a href="excel<?echo $linkname?>.php"><i class="fa fa-file-excel-o mg-l-30 mg-r-5 tx-orange tx-16-force"></i></li> <span class="tx-orange tx-uppercase tx-bold tx-15-force">EXCEL</span></a>
    <? } ?>
   </div>
  </div>
 </div>