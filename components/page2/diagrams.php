<section class="diagrams" id="diagrams_on_page2">



	<?php
	//async function elementUpdate(selector) {
	//  try {
	//	var html = await (await fetch(location.href)).text();
	//	var newdoc = new DOMParser().parseFromString(html, 'text/html');
	//	document.querySelector(selector).outerHTML = newdoc.querySelector(selector).outerHTML;
	//	console.log('Элемент '+selector+' был успешно обновлен');
	//	return true;
	//  } catch(err) {
	//	console.log('При обновлении элемента '+selector+' произошла ошибка:');
	//	console.dir(err);
	//	return false;
	//  }
	//}
	
	
	# Loading config data from *.ini-file
	$ini = parse_ini_file ('cfg/db_config.ini');

	# Assigning the ini-values to usable variables
	$db_host = $ini['db_host'];
	$db_name = $ini['db_name'];
	$db_table = $ini['db_table'];
	$db_user = $ini['db_user'];
	$db_password = $ini['db_password'];

	# Prepare a connection to the mySQL database
	$connection = new mysqli($db_host, $db_user, $db_password, $db_name);

	?>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<!-- This loads the 'corechart' package. -->	
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([['pDataTime', 'p1']]);} // End bracket from drawChart
	</script>
<div style= "width: 400px")>
<?php require('components/page2/p1.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p2.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p3.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p4.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p5.php');?>
</div>
<div style= "width: 400px")>
<?php require('components/page2/p6.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p7.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p8.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p9.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p10.php');?>
</div>
<div style= "width: 400px")>
<?php require('components/page2/p11.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p12.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p13.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p14.php');?>
</div>
<div style= "width: 300px")>
<?php require('components/page2/p15.php');?>
</div>
</section>
