<?if (isset($_REQUEST["action"])) {
 $action=$_REQUEST["action"];?>
<? if ($action=="added") {?> 
 <div class="alert alert-success mg-t-2 mg-b-10-force" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true" style="color:black">&times;</span>
  </button>
  <i class="fas fa-check-circle alert-icon tx-22-force mg-t-5 mg-xs-t-0"></i>
  <strong class="d-block d-sm-inline-block-force">Well done!</strong> Data successfully added to database.
 </div><? } ?> 

<? if ($action=="existing") {?> 
 <div class="alert alert-info mg-t-2 mg-b-10-force" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true" style="color:black">&times;</span>
  </button>
  <i class="fas fa-exclamation-triangle alert-icon tx-22-force mg-t-5 mg-xs-t-0"></i>
  <strong class="d-block d-sm-inline-block-force">Already Added!</strong> Its already added to database.
 </div>
<? } ?> 

<? if ($action=="updated") {?> 
 <div class="alert alert-success mg-t-2 mg-b-10-force" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true" style="color:black">&times;</span>
  </button>
  <i class="fas fa-check-circle alert-icon tx-22-force mg-t-5 mg-xs-t-0"></i>
  <strong class="d-block d-sm-inline-block-force">Data Updated!</strong> Data successfully updated to database.
 </div>
<? } ?> 



<? if ($action=="deleted") {?> 
 <div class="alert alert-danger mg-t-2 mg-b-10-force" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true" style="color:black">&times;</span>
  </button>
  <i class="fa fa-times-circle alert-icon tx-22-force mg-t-5 mg-xs-t-0"></i>
  <strong class="d-block d-sm-inline-block-force">Data Deleted!</strong> Data successfully deleted from database.
 </div>
<? } ?> 

<? if ($action=="error") {?> 
 <div class="alert alert-danger mg-t-2 mg-b-10-force" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true" style="color:black">&times;</span>
  </button>
  <i class="fas fa-check-circle alert-icon tx-22-force mg-t-5 mg-xs-t-0"></i>
  <strong class="d-block d-sm-inline-block-force">Error in data inserting!</strong> 
 </div>
<? } ?> 


<? if ($action=="validated") {?> 
 <div class="alert alert-danger mg-t-2 mg-b-10-force" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true" style="color:black">&times;</span>
  </button>
  <i class="fas fa-check-circle alert-icon tx-22-force mg-t-5 mg-xs-t-0"></i>
  <strong class="d-block d-sm-inline-block-force">Please Select at least one of technicians duty in field!</strong> 
 </div>
<? } ?> 
<? } ?> 