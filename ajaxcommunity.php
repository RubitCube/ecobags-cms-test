<? include("dbobjects.php");
$obj= new dboperation();
$obj->connect(); 
?>
<?
	$regionno = $_GET['regionno'];
	
	$community_dist100="*";
	$community_where100="regionno ='$regionno' and status='Active'";
	$community_tcount1001=$obj->totalrecords_condition('community', $community_dist100, $community_where100);
	foreach($community_tcount1001 as $community_row ){
	$community_tcount100=$community_row['count(*)'];
	}
	if($community_tcount100<>0)
	{ 
		echo"<select class='form-select form-control tinputborder' name='communityno' id='communityno' onchange='showdealer();' style='padding: 13px;'>";
		if($regionno==100){ 
		echo"<option value='0' selected='true' disabled='true'>Select Emirates</option>";
		}else{
			 echo"<option value='0' selected='true' disabled='true'>Select Community</option>";
		}
		$count=0;
		$community_sql="SELECT * FROM community where regionno = '$regionno' and status='Active'";
		foreach ($obj->execute($community_sql) as $community_row) 
		{
		$count++; 
		$communityno = $community_row["communityno"];	
		$where="communityno =$communityno";
		$community_result = $obj->select_all_values('community', $where,'');
		foreach($community_result as $community_row)
		{ 
		  $communityname = $community_row["communityname"];
		   echo"<option value='$communityno'>$communityname</option>";
		}
		}
		echo"</select>";
		echo"<input type='hidden' value='$community_tcount100' id='o_communityno'>";
	}
	  else{
		/*  echo"<select class='form-select form-control tinputborder' name='communityno' id='communityno' onchange='showdealer();' style='padding: 13px;'>";
		if($regionno==100){
		 echo"<option value='0' selected='true'>Select Emirates</option>";
		 echo"<option value='0'>No Emirates Added...</option>";
		}else{
		echo"<option value='0' selected='true'>Select Community</option>";
		echo"<option value='0' >No Community Added...</option>";
		}	
		echo"</select>";  */
		echo"<input type='hidden' value='0' id='communityno'>";
		echo"<input type='hidden' value='$community_tcount100' id='o_communityno'>";
	}  
	
	
?>