<? include("../dbobjects.php");
$obj= new dboperation();
$obj->connect(); 
?>
<?
	$regionno = $_GET['regionno'];
	echo"<select class='form-control' name='communityno' id='communityno' role='combobox' aria-multiline='false' >
    <option value='0' selected='true' disabled='true'>Select Community</option>	";
	if($regionno==100){
		 echo"<option value='0' selected='true'>Select Emirates</option>";
		}else{
		echo"<option value='0' selected='true'>Select Community</option>";
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
	
?>