<?
$where="subcategory3no ='$subcategory3no' and subcategory2no ='$subcategory2no' and subcategoryno ='$subcategoryno' and categoryno='$categoryno' and brandsno='$brandsno'";
$result_subcategory3= $obj->select_all_values('subcategory3', $where,'');
foreach($result_subcategory3 as $row_mastersubcategory3){	
 $master_subcategory3no =$row_mastersubcategory3["subcategory3no"];	
 $master_subcategory3=$row_mastersubcategory3["subcategory3"];	
 $master_subcategory3img =$row_mastersubcategory3["subcategory3img"];	
 $master_categoryno =$row_mastersubcategory3["categoryno"];	
 $master_subcategoryno =$row_mastersubcategory3["subcategoryno"];
 $master_status =$row_mastersubcategory3["status"];
}
?>