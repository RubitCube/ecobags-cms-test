<?
$where="subcategory4no ='$subcategory4no' and subcategory3no ='$subcategory3no' and subcategory2no ='$subcategory2no' and subcategoryno ='$subcategoryno' and categoryno='$categoryno' and brandsno='$brandsno'";
$result_subcategory4= $obj->select_all_values('subcategory4', $where,'');
foreach($result_subcategory4 as $row_mastersubcategory4){	
 $master_subcategory4no =$row_mastersubcategory4["subcategory4no"];	
 $master_subcategory4=$row_mastersubcategory4["subcategory4"];	
 $master_subcategory4img =$row_mastersubcategory4["subcategory4img"];	
 $master_categoryno =$row_mastersubcategory4["categoryno"];	
 $master_subcategoryno =$row_mastersubcategory4["subcategoryno"];
 $master_status =$row_mastersubcategory4["status"];
}
?>