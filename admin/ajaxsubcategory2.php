<? include("../dbobjects.php");
$obj= new dboperation();
$obj->connect(); 
?>
<?
$categoryno = $_GET['categoryno'];
$subcategoryno = $_GET['subcategoryno'];
$subcategory_sql = "SELECT * FROM subcategory2 where  categoryno=$categoryno and subcategoryno=$subcategoryno and status='Active'";
$subcategory_countresult=$obj->execute($subcategory_sql);
$subcategoryrow_count = $subcategory_countresult->rowCount();
if($subcategoryrow_count<>0)
{

	echo"<div class='col-lg-3'>
	     <div class='form-group control-label'>
	      <label class='form-control-label'>Product Sub Category 2 &nbsp;<span class='tx-danger'>*</span></label>
	     </div>	
		 </div>	
		<div class='col-lg-9'>
	    <div class='input-group'>
		<select class='form-control select2-show-search' name='subcategory2no'  id='subcategory2no' data-placeholder='Choose one' onchange='showsubcategory3();' required>	
		<option label='Choose one'></option>";
		$count=0;
		$subcategory2_sql="SELECT * FROM subcategory2 where categoryno=$categoryno and subcategoryno=$subcategoryno and status='Active'";
		foreach ($obj->execute($subcategory2_sql) as $subcategory_row) 
		{
		$count++; 
		$subcategory2no = $subcategory_row["subcategory2no"];	
		$subcategory2 = $subcategory_row["subcategory2"];
		echo"<option value='$subcategory2no'>$subcategory2</option>";
		}
		echo"
		</select>
		</div>
		</div>";				
}//category
?>