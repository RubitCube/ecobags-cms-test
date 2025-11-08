<?
$where="subcategory6no ='$subcategory6no' and subcategory5no ='$subcategory5no' and  subcategory4no ='$subcategory4no' and  subcategory3no ='$subcategory3no' and subcategory2no ='$subcategory2no' and subcategoryno ='$subcategoryno' and categoryno='$categoryno' ";
$result_subcategory6= $obj->select_all_values('subcategory6', $where,'');
foreach($result_subcategory6 as $row_mastersubcategory6){	
 $master_subcategory6no =$row_mastersubcategory6["subcategory6no"];	
 $master_subcategory6=$row_mastersubcategory6["subcategory6"];	
 $master_subcategory6img =$row_mastersubcategory6["subcategory6img"];	
 $master_categoryno =$row_mastersubcategory6["categoryno"];	
 $master_subcategoryno =$row_mastersubcategory6["subcategoryno"];
 $master_status =$row_mastersubcategory6["status"];
}
?>