<?include("iconnect.php")?>
<?
$regionno=$_REQUEST["regionno"];
include ("icallregion.php");
$page=$_REQUEST["page"];
$pname=$_REQUEST["pname"];
?>

<?
if($pname=="region" && $page=="region.php" || $page=="community.php")
{
	$pname="region"; $pnamesub="";
	$youarein1="Region"; $youarein1link="region.php";
	$youarein2=""; $youarein2link="";
	$youareinname="Add Emirates : ".$region;
}

$youarein3=""; $youarein3link="";
$youarein4=""; $youarein4link="";
$youarein5=""; $youarein5link="";
$youarein6=""; $youarein6link=""; 
$youarein7=""; $youarein7link="";
$youarein8=""; $youarein8link="";

$mainheading="Add Emirates : ".$region;
$linkheading="Add Emirates";
$subheading="";
$bodyheading="List of all Emirates";
$mainheadingdesc="";
$addicon="Yes"; $pdficon="No"; $excelicon="No"; $modifyicon="Yes"; $modifytopicon="No"; $deleteicon="No";
$linkname="community";
$linkquery1="";$linkquery2="";$linkquery3="";$linkquery4="";$linkquery5="";$linkquery6="";
?>
<?include ("itophead.php")?> 
<form id="basicForm" method=post action="savecommunity.php" name="form" class="form-horizontal"  enctype="multipart/form-data" autocomplete="off"> 
	<div class="form-layout form-layout-1">
	<div class="row mg-b-25"> 
	<input type="hidden" name="regionno" class="form-control" value="<?echo $regionno?>"> 
	<input type="hidden" name="pname" class="form-control" value="<?echo $pname?>"> 
    <input type="hidden" name="page" class="form-control" value="<?echo $page?>"> 		
	<!-------------------------community to 5 start------------------------------->
	<div class="col-lg-6" >
	<div class="form-group">
	<label class="form-control-label">Emirates Name <span class="tx-danger">*</span></label>
	<table  id="dynamic_field" style="width:100%;" cellpadding="5">  
	<tr>  
	<td><input type="text" name="communityname[]" placeholder="Enter Emirates Name" class="form-control name_list" required></td>  
	<td><a href="javascript:void(0);" id="add" class="add_button1 pull-left" style="margin-left: 20px;" title="Add Emirates Name"><i class="fa fa-plus" aria-hidden="true"></i></a>				 
	</td>  
	</tr>  
	</table>  	
	</div>		
	</div>
<!-------------------------community to 5  ends------------------------------->
	</div>	
	<div class="form-layout-footer">
	<button class="btn btn-info">Submit Form</button>
	</div>
	</form>	
<!-------------------------community increment------------------------------->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="communityname[]" placeholder="Enter Emirates Name" class="form-control name_list" required></td><td><a href="javascript:void(0);" id="'+i+'" name="remove" class="remove_button pull-left btn_remove" title="Remove Emirates Name" style="margin-left: 20px;"><i class="fa fa-minus" aria-hidden="true"></i></a></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
<!-------------------------community increment------------------------------->	
<?include ("ibottom.php")?>