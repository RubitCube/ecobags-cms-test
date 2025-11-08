<? include("../dbobjects.php");
$obj= new dboperation();
$obj->connect(); 
?>
<?
$categoryno = $_GET['categoryno'];
$subcategoryno = $_GET['subcategoryno'];
$subcategory2no = $_GET['subcategory2no'];
$subcategory3no = $_GET['subcategory3no'];
$subcategory_sql = "SELECT * FROM subcategory4 where categoryno=$categoryno and subcategoryno=$subcategoryno and subcategory2no=$subcategory2no and subcategory3no=$subcategory3no and status='Active'";
$subcategory_countresult=$obj->execute($subcategory_sql);
$subcategoryrow_count = $subcategory_countresult->rowCount();
if($subcategoryrow_count<>0)
{

	echo"<div class='col-lg-3'>
	     <div class='form-group control-label'>
	      <label class='form-control-label'>Product Sub Category 4 &nbsp;<span class='tx-danger'>*</span></label>
	     </div>	
		 </div>	
		<div class='col-lg-9'>
	    <div class='input-group'>
		<select class='form-control select2-show-search' name='subcategory4no'  id='subcategory4no' data-placeholder='Choose one' onchange='showsubcategory5();' required>	
		<option label='Choose one'></option>";
		$count=0;
		$subcategory2_sql="SELECT * FROM subcategory4 where categoryno=$categoryno and subcategoryno=$subcategoryno and subcategory2no=$subcategory2no and subcategory3no=$subcategory3no and status='Active'";
		foreach ($obj->execute($subcategory2_sql) as $subcategory_row) 
		{
		$count++; 
		$subcategory4no = $subcategory_row["subcategory4no"];	
		$subcategory4 = $subcategory_row["subcategory4"];
		echo"<option value='$subcategory4no'>$subcategory4</option>";
		}
		echo"
		</select>
		</div>
		</div>";				
}//category
?>