<?
$where="subcategory2no ='$subcategory2no' and subcategoryno ='$subcategoryno' and categoryno='$categoryno' and brandsno='$brandsno'";
$result_subcategory2= $obj->select_all_values('subcategory2', $where,'');
foreach($result_subcategory2 as $row_mastersubcategory2)
{	
 $master_subcategory2no =$row_mastersubcategory2["subcategory2no"];	
 $master_subcategory2=$row_mastersubcategory2["subcategory2"];	
 $master_subcategory2img =$row_mastersubcategory2["subcategory2img"];	
 $master_categoryno =$row_mastersubcategory2["categoryno"];	
 $master_subcategoryno =$row_mastersubcategory2["subcategoryno"];
 $master_status =$row_mastersubcategory2["status"];
}

?>