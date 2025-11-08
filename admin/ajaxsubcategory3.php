<? include("../dbobjects.php");
$obj= new dboperation();
$obj->connect(); 
?>
<?

$categoryno = $_GET['categoryno'];
$subcategoryno = $_GET['subcategoryno'];
$subcategory2no = $_GET['subcategory2no'];
$subcategory_sql = "SELECT * FROM subcategory3 where  categoryno=$categoryno and subcategoryno=$subcategoryno and subcategory2no=$subcategory2no and status='Active'";
$subcategory_countresult=$obj->execute($subcategory_sql);
$subcategoryrow_count = $subcategory_countresult->rowCount();
if($subcategoryrow_count<>0)
{

	echo"<div class='col-lg-3'>
	     <div class='form-group control-label'>
	      <label class='form-control-label'>Product Sub Category 3 &nbsp;<span class='tx-danger'>*</span></label>
	     </div>	
		 </div>	
		<div class='col-lg-9'>
	    <div class='input-group'>
		<select class='form-control select2-show-search' name='subcategory3no'  id='subcategory3no' data-placeholder='Choose one' onchange='showsubcategory4();' required>	
		<option label='Choose one'></option>";
		$count=0;
		$subcategory2_sql="SELECT * FROM subcategory3 where  categoryno=$categoryno and subcategoryno=$subcategoryno and subcategory2no=$subcategory2no and status='Active'";
		foreach ($obj->execute($subcategory2_sql) as $subcategory_row) 
		{
		$count++; 
		$subcategoryno = $subcategory_row["subcategory3no"];	
		$subcategory = $subcategory_row["subcategory3"];
		echo"<option value='$subcategoryno'>$subcategory</option>";
		}
		echo"
		</select>
		</div>
		</div>";				
}//category
?>