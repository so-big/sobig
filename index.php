<?php
  
?>
<html>
<meta http-equiv="Content-Language" content="th" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div  style="display: none" id = "hideAll">
<?php include 'nevbar.html';?> 
<style>
	table, th, td {
		border:0px solid #ffffff;
		border-collapse: collapse;
		vertical-align: top;
	}
</style>
 
<div style="overflow: hidden;margin-top:5px;margin-left: calc(50% - 512px);width:1018px;border-radius: 10px;border:3px solid #000000;border-collapse: collapse;">
<!-- table section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<table style="width:1024px;margin-left: calc(50% - 512px);background-color:white;height:auto;margin:10px 3px 10px 3px;">
  <tr>
    <td style="height: 1px; background-color:#ffffff;width:170px;">
			<?php include 'leftbar.html';?>
	</td>
    <td style="height: 1px;background-color:#ffffff;"> 
		<div style="  margin-left:7px;width:820px; min-height:100%;border-radius: 10px;border:1px solid #000000;border-collapse: collapse;">
			<div id="field1" style=" margin-left:17px;height:100%;width:800px; border-radius: 10px;">
				<? include "request.php";?>
			</div>
			<div id="field2" style=" overflow:hidden;display :none;margin-left:17px;height:100%;width:800px; border-radius: 10px;">
				<? 
					//open when present
					include "research.php";
				?>
			</div>
			<div id="field3" style="display :none;margin-left:17px;height:100%;width:800px; border-radius: 10px;">
				<? include "pastjob.php";?>
			</div>
			<div id="field4" style="display :none;margin-left:17px;height:100%;width:800px; border-radius: 10px;">
				<? include "Search_main.php";?>
			</div>
			<div id="field5" style="display :none;margin-left:17px;height:100%;width:800px; border-radius: 10px;">
				<? include "Search_result.php";?>
			</div>
			<div id="specialfield" style="display :none;margin-left:17px;height:100%;width:800px; border-radius: 10px;">
				<? 
					if ($_GET['page']=="login_user") {
					  include "login_user.php";
					}
					if ($_GET['page']=="login_admin") {
					  include "login_admin.php";
					}
					if ($_GET['page']=="profile_admin") {
					  include "profile_admin.php";
					}
					if ($_GET['page']=="profile_user") {
					  include "profile_user.php";
					}
					if ($_GET['page']=="researchtable_admin") {
					  include "researchtable_admin.php";
					}
					if ($_GET['page']=="researchtable_user") {
					  include "researchtable_user.php";
					}
					if ($_GET['page']=="researchtable_info") {
					  include "researchtable_info.php";
					}
				?>
			</div>
		</div>
	</td>
  </tr>
</table>

<a style="margin-left:20px;">Copyright © jatsada thongdonkum. (big)</a>
<div style="margin-top:5px;"></div>
</div>
</div>
</html>
<script>
//var state is page state in leftbar.php
//alert(state);
//menu_check();

document.getElementById("hideAll").style.display = "block"; 
</script>