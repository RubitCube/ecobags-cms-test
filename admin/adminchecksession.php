<?
 session_start();
global $HTTP_SESSION_VARS;
global $adminusername;
if(!isset($_SESSION["adminusername"]))
{
?>
<script language="JavaScript"> window.open("index.php", "_self")</script>
<?
ob_flush();
}       
?>
