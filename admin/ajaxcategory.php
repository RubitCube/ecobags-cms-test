<? include("../dbobjects.php");
$obj= new dboperation();
$obj->connect(); 
?>
<?
$brandsno = $_GET['brandsno'];
$category_sql = "SELECT * FROM category where brandsno=$brandsno ";
$category_countresult=$obj->execute($category_sql);
$categoryrow_count = $category_countresult->rowCount();
if($categoryrow_count<>0)
{

	echo"<div class='col-lg-3'>
	     <div class='form-group control-label'>
	      <label class='form-control-label'>Product Category &nbsp;<span class='tx-danger'>*</span></label>
	     </div>	
		 </div>	
		<div class='col-lg-9'>
	    <div class='input-group'>
		<select class='form-control select2-show-search' name='categoryno'  id='categoryno' data-placeholder='Choose one' onchange='showsubcategory();' required>	
		<option label='Choose one'></option>";
		$count=0;
		$category_sql="SELECT * FROM category where brandsno = '$brandsno' and status='Active'";
		foreach ($obj->execute($category_sql) as $category_row) 
		{
		$count++; 
		$categoryno = $category_row["categoryno"];	
		$categoryname = $category_row["categoryname"];
		echo"<option value='$categoryno'>$categoryname</option>";
		}
		echo"
		</select>
		</div>
		</div>";				
}//category
?>