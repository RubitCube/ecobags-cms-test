<?php ob_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();?>

<!DOCTYPE html>
<html lang="en">
<?  include("dbobjects.php");
$obj= new dboperation();
$obj->connect();  
?>
<?$scriptname=  $_SERVER['SCRIPT_NAME'];
$spscriptname=preg_split('[/]',$scriptname); 
$arrno=count($spscriptname);
$arr=$arrno-1;
$fname= $spscriptname[$arr];?>
<? include ("constant.php") ?>
<!-----------------------------++++++++++dont touch above starts++++++++++----------------------------->
<!---------+++++++++++++ ++++++++++++++++ CHANGE BELOW VALUES STARTS +++++++++++++ ++++++++++++++++---------->
<?
$icompanyname="Shams Naturals";
$icompanylogo="img/shamsnaturals-logo.jpg";
$icompanyemail="support2@ciber.ae";
$icompanyphone="+971 4 267 3994 ";
$icompanywhatsapp="+971 55 190 6177";
$icompanyphonelink="+97100000000";
$icompanywhatsapp="";
$mainurl ="https://shamsnaturals.com"; 
$mainurlindex ="https://shamsnaturals.com/"; 
?>
<!---------+++++++++++++ ++++++++++++++++ CHANGE BELOW VALUES ENDS +++++++++++++ ++++++++++++++++---------->