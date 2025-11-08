<?include("iconnect.php")?>
<?
$pname="dashboard"; $pnamesub="dashboard";
$youarein1="Settings"; $youarein1link="";
$youarein2=""; $youarein2link="";
$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";
$youareinname="Dashboard";
$mainheading="Dashboard";
$linkheading="Dashboard";
$subheading="";
$bodyheading="List of all Dashboards";
$mainheadingdesc="An overview of overall Jobs";
$addicon="Yes"; $pdficon="Yes"; $excelicon="Yes"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="dashboard";
$dropdown1="assignjob";
$dropdown2="";  $dropdown3="";  $dropdown4="";  $dropdown4="";  $dropdown5="";  $dropdown6="";  $dropdown7="";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itopheaddashboard.php")?> 
<?
exit;
 $callreport_wheree="addeddate LIKE '%$currentdate%'";
 $callreport_tcountresult=$obj->totalrecords_condition('callreport','*', $callreport_wheree);
 foreach($callreport_tcountresult as $callreport_row ){
  $callreport_tcountc=$callreport_row['count(*)'];
 }
 
 $callreport_wheree1="addeddate <>''";
 $callreport_tcountresult2=$obj->totalrecords_condition('callreport','*', $callreport_wheree1);
 foreach($callreport_tcountresult2 as $callreport_row1 ){
  $callreport_tcountc1=$callreport_row1['count(*)'];
 }

 ?>
 

<div class="row row-sm">
 <div class="col-sm-6 col-xl-3">
  <div class="bg-teal rounded overflow-hidden">
   <div class="pd-25 d-flex align-items-center">
     <img src="img/icon-clients.png" width="57" height="47">
    <div class="mg-l-20">
     <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white mg-b-10">Today's Call Reports</p>
     <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?echo number_format($callreport_tcountc)?></p>
     <span class="tx-13 tx-roboto tx-white"><?echo number_format($callreport_tcountc1)?>&nbsp;&nbsp;Call Reports in Total</span>
    </div>
   </div>
  </div>
 </div>

<?
 $clients_where="addeddate LIKE '%$currentdate%'";
 $clients_countresult=$obj->totalrecords_condition('clients','*', $clients_where);
 foreach($clients_countresult as $clients_row ){
  $clients_tcount=$clients_row['count(*)'];
 }
 ?>
 <?
 $clients_where01="addeddate <>''";
 $clients_countresult2=$obj->totalrecords_condition('clients','*', $clients_where01);
 foreach($clients_countresult2 as $clients_row01 ){
  $clients_tcount001=$clients_row01['count(*)'];
 }
 ?>
 <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
  <div class="bg-danger rounded overflow-hidden">
   <div class="pd-25 d-flex align-items-center">
    <img src="img/icon-clients.png" width="57" height="47">
    <div class="mg-l-20">
     <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white mg-b-10">New Clients</p>
     <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?echo $clients_tcount?></p>
     <span class="tx-13 tx-roboto tx-white"><?echo $clients_tcount001?>&nbsp;&nbsp;Clients in Total</span>
    </div>
   </div>
  </div>
 </div> 
 
 <?
 $technicians_where="addeddate LIKE '%$currentdate%'";
 $technicians_countresult=$obj->totalrecords_condition('technicians','*', $technicians_where);
 foreach($technicians_countresult as $technicians_tcount_row ){
  $technicians_tcount=$technicians_tcount_row['count(*)'];
 }
 ?>
 <?
 $technicians_where1="addeddate <>''";
 $technicians_countresult2=$obj->totalrecords_condition('technicians','*', $technicians_where1);
 foreach($technicians_countresult2 as $technicians_tcount1_row ){
  $technicians_tcount2=$technicians_tcount1_row['count(*)'];
 }
 ?>
 
 <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
  <div class="bg-primary rounded overflow-hidden">
   <div class="pd-25 d-flex align-items-center">
    <img src="img/icon-amc.png" width="50" height="47">
    <div class="mg-l-20">
     <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white mg-b-10">New Technicians</p>
     <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?echo $technicians_tcount?></p>
     <span class="tx-13 tx-roboto tx-white"><?echo $technicians_tcount2?>&nbsp;&nbsp;Technicians in Total</span>
    </div>
   </div>
  </div>
 </div>
 
 <?
 $assignjob_where="addeddate LIKE '%$currentdate%'";
 $assignjob_countresult=$obj->totalrecords_condition('assignjob','*', $assignjob_where);
 foreach($assignjob_countresult as $assignjob_countresult_row ){
  $assignjob_count=$assignjob_countresult_row['count(*)'];
 }
 ?>
  <?
 $assignjob_where1="addeddate LIKE '%$currentdate%' and workstatus='Open'";
 $assignjob_countresult1=$obj->totalrecords_condition('assignjob','*', $assignjob_where1);
 foreach($assignjob_countresult1 as $assignjob_countresult_row1 ){
  $assignjobOpen_count1=$assignjob_countresult_row1['count(*)'];
 }
 ?>
 <?
 $assignjob_where2="addeddate LIKE '%$currentdate%' and workstatus='Close'";
 $assignjob_countresult2=$obj->totalrecords_condition('assignjob','*', $assignjob_where2);
 foreach($assignjob_countresult2 as $assignjob_countresult_row2 ){
  $assignjobClose_count1=$assignjob_countresult_row2['count(*)'];
 }
 ?>
 <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
  <div class="bg-br-primary rounded overflow-hidden">
   <div class="pd-25 d-flex align-items-center">
    <img src="img/icon-leads.png" width="50" height="47">
    <div class="mg-l-20">
     <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white mg-b-10">Assigned Jobs</p>
     <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?echo $assignjob_count?></p>
     <span class="tx-13 tx-roboto tx-white"><?echo $assignjobOpen_count1?> Active Jobs</span>&nbsp;&nbsp;<span class="tx-13 tx-roboto tx-white"><?echo $assignjobClose_count1?> Active Jobs</span>
    </div>
   </div>
  </div>
 </div>
</div>	

<!--------------------------------Master tables view-------------------------------->
<div class="row row-sm mg-t-20">
 <div class="col-8">
 <!-------------------upcoming payments starts---------------->
  <?$thirtydays = date('Y-m-d', strtotime('-30 days'));  ?>
  <div class="card bd-0 shadow-base pd-30 mg-t-0">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Jobs Pending</h6>
    </div>
     <a href="assignjob.php" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">View Jobs pending</a>
   </div>

   <table class="table table-valign-middle mg-b-0">
    <thead>
    <tr>
	<th style="width:15%;">Client Name</th>
	<th style="width:15%;">Assigned Date</th>
	<th style="width:15%;">Job Number</th>
	<th style="width:15%;">Work in Charge</th>
	<th style="width:15%;">Work to be Done</th>
	<th style="width:20%;">Remarks</th>
    </tr>
    </thead>
    <tbody>
	<?
	$count=0;
	$assignjob_where="workstatus='Open'";
	$assignjob_orderby="order by assignjobno desc";
	$assignjob_result = $obj->select_all_values('assignjob', $assignjob_where, $assignjob_orderby);
	foreach($assignjob_result as $assignjob_row)
	{
	$count++;
	$assignjobno =$assignjob_row["assignjobno"];
	$clientsno = $assignjob_row["clientsno"];
	include("icallclients.php");
	include("icalldesignation.php");
	$assigneddate =$assignjob_row["assigneddate"];
	$assigneddate = date("d M Y", strtotime($assigneddate)); 
	$jobnumber = $assignjob_row["jobnumber"];
	$worktobedone =$assignjob_row["worktobedone"];
	$worktobedonemodal =$assignjob_row["worktobedone"];
	$workincharge = $assignjob_row["workincharge"];
	include("icalltechnicians.php");
	include("icallsalutation.php");
	$addremarks =$assignjob_row["addremarks"];
	$workstatus =$assignjob_row["workstatus"];
	?> 
     <tr>      
	<td><?echo $clientname?> &nbsp;&nbsp;
	 <a href="#" class="tx-18 tx-uppercase pd-y-12 pd-x-10 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo-<?echo $count?>"><i class="fa fa-plus" aria-hidden="true"></i></a></td>
      <td><?echo $assigneddate?></td>
      <td><?echo $jobnumber?></td>
      <td><? echo $salutation?>.&nbsp;<? echo $tecname?></td>
      <td ><?echo $worktobedone?></td>
	   <td ><?echo $addremarks?></td>
     </tr>
	
    <!-------------------------------- BASIC MODAL STARTS-------------------------------->
	<div id="modaldemo-<?echo $count?>" class="modal fade">
	<div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document" style="width: 500px;">
	<div class="modal-content bd-0 tx-14">
	<div class="modal-header pd-y-20 pd-x-25">
	<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Address Preview</h6>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body pd-25">
	<h4 class="lh-3 mg-b-5"><a class="tx-inverse hover-primary"><?echo $clientname?></a></h4>
	<h6 class="lh-3 mg-b-20"><a class="tx-inverse hover-primary"><?echo nl2br($clientaddress)?></a></h6>
	<p class="mg-b-5"><span class="font-weight-bold">Conatact Person</span>: <?echo $salutation?> <?echo $contactperson?> [<?echo $designation?>]</p>
	<p class="mg-b-5"><span class="font-weight-bold">Phone</span>: <?echo $clientphone?></p>
	<p class="mg-b-5"><span class="font-weight-bold">Mobile</span>: <?echo $clientmobile?></p>
	<p class="mg-b-5"><span class="font-weight-bold">Email</span>: <?echo $clientemail?></p>
	<p class="mg-b-5"><span class="font-weight-bold">Whatsapp</span>: <?echo $clientwhatsapp?></p>
	<p class="mg-b-5"><span class="font-weight-bold">Skype ID</span>: <?echo $clientskypeid?></p>
	<p class="mg-b-5"><span class="font-weight-bold">Remarks</span>: <?echo $clientremarks?></p>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
	</div>
	</div>
	</div>
	</div>
	<!-------------------------------- BASIC MODAL ENDS-------------------------------->
   <? } ?>	
    </tbody>	 
   </table>
  </div>
  <br>
<!-------------------upcoming payments ends---------------->
  <?$thirtydays = date('Y-m-d', strtotime('-30 days'));  ?>
  <div class="card bd-0 shadow-base pd-30 mg-t-20">
   <div class="d-flex align-items-center justify-content-between mg-b-30">
    <div>
     <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">New Clients</h6>
     <p class="mg-b-0"><i class="fa fa-calendar" aria-hidden="true"></i> From <?echo date("jS F, Y",  strtotime($thirtydays));?> - <?echo date("jS F, Y",  strtotime($currentdatedate));?></p>
    </div>
     <a href="clients.php" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">View more clients</a>
   </div>

   <table class="table table-valign-middle mg-b-0">
    <thead>
    <tr>
    <th style="width:15%;">Client Name</th>
	<th style="width:15%;">Assigned Jobs</th>
	<th style="width:15%;">Opened Jobs</th>
	<th style="width:15%;">Closed Jobs</th>
    </tr>
    </thead>
    <tbody>
	<?
   $clients_where="clientname <>''";
   $clients_orderby="ORDER BY clientname desc limit 10";
   $result=$obj->select_all_values("clients", $clients_where, $clients_orderby);
   $count=0;
   foreach($result as $row){ 
    $count++;
	$clientsno = $row["clientsno"];
    $clientname = $row["clientname"];
    $salutationno = $row["salutationno"];
    $contactperson = $row["contactperson"];
    $designationno = $row["designationno"];
    $clientemail = $row["clientemail"];
    $clientmobile = $row["clientmobile"];
    $clientphone = $row["clientphone"];
    $clientaddress = $row["clientaddress"];
    $clientwhatsapp = $row["clientwhatsapp"];
    $clientskypeid = $row["clientskypeid"];
    $clientremarks = $row["clientremarks"];
    $clientstatus = $row["clientstatus"];
    $clientstatusremarks = $row["clientstatusremarks"];
   ?>
   <?include ("icallsalutation.php")?> 
   <?include ("icalldesignation.php")?> 
   <?
	$assignjob_where="clientsno =$clientsno";
	$assignjob_tcount1=$obj->totalrecords_condition('assignjob','*', $assignjob_where);
	foreach($assignjob_tcount1 as $assignjob_row ){
	 $assignjob_tcount=$assignjob_row['count(*)'];
	}	
   ?>
    <?
	$assignjobopen_where="clientsno =$clientsno and workstatus='Open'";
	$assignjobopen_tcount1=$obj->totalrecords_condition('assignjob','*', $assignjobopen_where);
	foreach($assignjobopen_tcount1 as $assignjobopen_row ){
	 $assignjobopen_tcount=$assignjobopen_row['count(*)'];
	}	
   ?>
   <?
	$assignjobClose_where="clientsno =$clientsno and workstatus='Close'";
	$assignjobClose_tcount1=$obj->totalrecords_condition('assignjob','*', $assignjobClose_where);
	foreach($assignjobClose_tcount1 as $assignjobclose_row ){
	 $assignjobClose_tcount=$assignjobclose_row['count(*)'];
	}	
   ?>
     <tr>      
      <td><?echo $clientname?> </td>
      <td><?echo $assignjob_tcount?></td>
      <td><?echo $assignjobopen_tcount?></td>
      <td><?echo $assignjobClose_tcount?></td>
     </tr>
    <!-------------------------------- BASIC MODAL STARTS-------------------------------->
   
    <!-------------------------------- BASIC MODAL ENDS-------------------------------->	 
   <? } ?>	 
    </tbody>
   </table>
  </div>
   
<!-------------------Jobs ends---------------->
</div>
</div>

<?include ("ibottomdashboard.php")?>