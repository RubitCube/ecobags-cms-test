<? include("../dbobjects.php");
$obj= new dboperation();
$obj->connect(); 
?>
<?
$categoryno = $_GET['categoryno'];
$subcategory_sql = "SELECT * FROM subcategory where  categoryno=$categoryno and status='Active'";
$subcategory_countresult=$obj->execute($subcategory_sql);
$subcategoryrow_count = $subcategory_countresult->rowCount();
if($subcategoryrow_count<>0)
{

	echo"<div class='col-lg-3'>
	     <div class='form-group control-label'>
	      <label class='form-control-label'>Product Sub Category &nbsp;<span class='tx-danger'>*</span></label>
	     </div>	
		 </div>	
		<div class='col-lg-9'>
	    <div class='input-group'>
		<select class='form-control select2-show-search' name='subcategoryno'  id='subcategoryno' data-placeholder='Choose one' onchange='showsubcategory2();' required>	
		<option label='Choose one'></option>";
		$count=0;
		$subcategory2_sql="SELECT * FROM subcategory where  categoryno=$categoryno and status='Active'";
		foreach ($obj->execute($subcategory2_sql) as $subcategory_row) 
		{
		$count++; 
		$subcategoryno = $subcategory_row["subcategoryno"];	
		$subcategory = $subcategory_row["subcategory"];
		echo"<option value='$subcategoryno'>$subcategory</option>";
		}
		echo"
		</select>
		</div>
		</div>";				
}//category
?>