<section class="diagrams" id="diagrams_on_page2">
 
<?php
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
<script>
// load current chart package
google.charts.load('current', {'packages':['corechart']});
// set callback function when api loaded
google.charts.setOnLoadCallback(drawChart);

<?php
	$ActiveCOUNT = 0;
	$sqlCOUNT = "SELECT COUNT(pIndex) FROM mytable";
	$resultCOUNT = $connection-> query($sqlCOUNT);
	$PassiveCOUNT = $resultCOUNT;
	If ($PassiveCOUNT > $ActiveCOUNT){
		$ActiveCOUNT = $PassiveCOUNT;
		?>

		function drawChart() {
			// create data object with default value
			let data = google.visualization.arrayToDataTable([['pDataTime', 'p1']]);
		};
		
		google.charts.load('current', {'packages':['bar']});
		google.charts.setOnLoadCallback(drawBar);
		
		// max amount of data rows that should be displayed
			minute_value = 5;
			let maxDatas = 60 * minute_value;
		
		async function UploadData() {
			await 
			let data = google.visualization.arrayToDataTable([['pDataTime', 'p1'],
			<?php
			# This query connects to the database and get the last readings
			$sql = "SELECT p1, pDataTime FROM $db_table ORDER BY pIndex";

			$result = $connection->query($sql);  

			# This while - loop formats and put all the retrieved data into ['pDataTime', 'p1'] way.
				while ($row = $result->fetch_assoc()) {
					$timestamp_rest = $row["pDataTime"];
					echo "['".$timestamp_rest."',".$row['p1']."],";
					}
			?>
			]);
			
			// interval for adding new data every (250ms = 100, 1000ms = 1s = 400)
			setInterval(function () {
			 
			  if (data.getNumberOfRows() > maxDatas) {
				data.removeRows(0, data.getNumberOfRows() - maxDatas);
			  };
			  chart.draw(data, bar_options);
			}, 400);
		};
		
		function drawBar() {
			// Bar chart
			var chart = new google.visualization.BarChart(document.getElementById('barchart_values1'));

			// Bar graph
			var bar_options = {
				width: 300,
				title: 'Глубина по стволу, м',
				backgroundColor: 'transparent',
				chartArea:{left:100,top:100, bottom: 50,width:'100%',height:'75%'},
				bar: { groupWidth: '25%', style: ''  },
				legend: { position: 'none' },
				colors: ['#FF0000'],    // any HTML string color ('red', '#cc00cc')
				fontName: 'Tahoma', // i.e. 'Times New Roman'
				fontSize: 14,
				hAxis: { textStyle: {
					fontName: 'Tahoma', // i.e. 'Times New Roman'
					fontSize: 8, // 12, 18 whatever you want (don't specify px)
				}},
				vAxis: { textStyle: {
					fontName: 'Tahoma', // i.e. 'Times New Roman'
					fontSize: 14, // 12, 18 whatever you want (don't specify px)
				}}
			};
		} // End bracket from drawBar	
<?php
	};
	If ($resultCOUNT < count($ActiveCOUNT)){
	};
?>
</script>
<div id="barchart_values1" style="width: 300px; min-height: 2000px;"></div>