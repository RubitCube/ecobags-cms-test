<?
$where="subcategory5no ='$subcategory5no' and  subcategory4no ='$subcategory4no' and  subcategory3no ='$subcategory3no' and subcategory2no ='$subcategory2no' and subcategoryno ='$subcategoryno' and categoryno='$categoryno' and brandsno='$brandsno'";
$result_subcategory5= $obj->select_all_values('subcategory5', $where,'');
foreach($result_subcategory5 as $row_mastersubcategory5){	
 $master_subcategory5no =$row_mastersubcategory5["subcategory5no"];	
 $master_subcategory5=$row_mastersubcategory5["subcategory5"];	
 $master_subcategory5img =$row_mastersubcategory5["subcategory5img"];	
 $master_categoryno =$row_mastersubcategory5["categoryno"];	
 $master_subcategoryno =$row_mastersubcategory5["subcategoryno"];
 $master_status =$row_mastersubcategory5["status"];
}
?>