 <?$productsetting_result = $obj->select_table('productsetting');
 foreach($productsetting_result as $productsetting_row)
 {
  $pro_brand = $productsetting_row["pro_brand"];
  $pro_brand_com = $productsetting_row["pro_brand_com"];
  $pro_productcode = $productsetting_row["pro_productcode"];
  $pro_productcodesuffix = $productsetting_row["pro_productcodesuffix"];
  $pro_productcodename = $productsetting_row["pro_productcodename"];
  $pro_productcodeauto = $productsetting_row["pro_productcodeauto"];
  $pro_productcode_com = $productsetting_row["pro_productcode_com"];  
  
  $pro_itemsize = $productsetting_row["pro_itemsize"];
  $pro_itemsize_com = $productsetting_row["pro_itemsize_com"];
  
  $pro_weight = $productsetting_row["pro_weight"];
  $pro_weight_com = $productsetting_row["pro_weight_com"];
  
  $pro_packing = $productsetting_row["pro_packing"];
  $pro_packing_com = $productsetting_row["pro_packing_com"];
  
  $pro_countryoforigin = $productsetting_row["pro_countryoforigin"];
  $pro_countryoforigin_com = $productsetting_row["pro_countryoforigin_com"];  
  
  $pro_stock = $productsetting_row["pro_stock"];
  $pro_stock_com = $productsetting_row["pro_stock_com"];  
  
  $pro_specialoffer = $productsetting_row["pro_specialoffer"];
  $pro_newarrivals = $productsetting_row["pro_newarrivals"];
  $pro_hotdeals = $productsetting_row["pro_hotdeals"];
  $pro_featuredproduct = $productsetting_row["pro_featuredproduct"];
  $pro_bestseller = $productsetting_row["pro_bestseller"];
  
  $pro_price = $productsetting_row["pro_price"];
  $pro_wholesaler = $productsetting_row["pro_wholesaler"];
  $pro_wholesaler_com = $productsetting_row["pro_wholesaler_com"];
  $pro_distrubutor = $productsetting_row["pro_distrubutor"];
  $pro_distrubutor_com = $productsetting_row["pro_distrubutor_com"];
  $pro_retailer = $productsetting_row["pro_retailer"];
  $pro_retailer_com = $productsetting_row["pro_retailer_com"];
  $pro_enduser = $productsetting_row["pro_enduser"];
  $pro_enduser_com = $productsetting_row["pro_enduser_com"];
  $pro_specialofferprice = $productsetting_row["pro_specialofferprice"];
  
  $pro_featuredesc = $productsetting_row["pro_featuredesc"];
  
  $pro_feature = $productsetting_row["pro_feature"];
  
  $pro_shortfeature = $productsetting_row["pro_shortfeature"];
  
  $pro_desc = $productsetting_row["pro_desc"];
  $pro_shortdesc  = $productsetting_row["pro_shortdesc"];
  $pro_specdesc = $productsetting_row["pro_specdesc"];
  $pro_specdesc1 = $productsetting_row["pro_specdesc1"];
  $pro_adddesc = $productsetting_row["pro_adddesc"];  
  
  $pro_warranty = $productsetting_row["pro_warranty"];
  $pro_shipping = $productsetting_row["pro_shipping"];
  $pro_shippedfrom = $productsetting_row["pro_shippedfrom"];
  $pro_leadtime = $productsetting_row["pro_leadtime"];
  $pro_shippingdesc = $productsetting_row["pro_shippingdesc"];
  $pro_shippingcost = $productsetting_row["pro_shippingcost"];
  
  $pro_keywords = $productsetting_row["pro_keywords"];
  
  $pro_productmultiple = $productsetting_row["pro_productmultiple"];
  $pro_imagecommon = $productsetting_row["pro_imagecommon"];
  $pro_imagesmultiple = $productsetting_row["pro_imagesmultiple"];
  $pro_imagesize = $productsetting_row["pro_imagesize"];  
  
  $pro_pdfcommon = $productsetting_row["pro_pdfcommon"];
  $pro_productpdf = $productsetting_row["pro_productpdf"];
  $pro_productpdfmuliple = $productsetting_row["pro_productpdfmuliple"];
  $pro_colors = $productsetting_row["pro_colors"];
  $pro_categoryimg = $productsetting_row["pro_categoryimg"];
  $pro_categoryimg_com = $productsetting_row["pro_categoryimg_com"];
  $pro_categorybanner = $productsetting_row["pro_categorybanner"];
  $pro_subcategoryimg = $productsetting_row["pro_subcategoryimg"];
  $pro_subcategoryimg_com = $productsetting_row["pro_subcategoryimg_com"];
  $pro_symbols = $productsetting_row["pro_symbols"];
  $pro_brandsimg = $productsetting_row["pro_brandsimg"];
  $pro_brandsbanner = $productsetting_row["pro_brandsbanner"];
  $pro_storage = $productsetting_row["pro_storage"];
  $pro_renewed = $productsetting_row["pro_renewed"];
  $pro_dimension = $productsetting_row["pro_dimension"];
  $pro_singlecolor = $productsetting_row["pro_singlecolor"];
  $pro_material = $productsetting_row["pro_material"];
  
 }
 ?>