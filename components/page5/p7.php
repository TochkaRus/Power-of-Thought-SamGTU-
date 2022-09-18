<!-- The charts below is only available in the 'bar' package -->
	<script type="text/javascript">
			google.charts.load('current', {'packages':['bar']});
			google.charts.setOnLoadCallback(drawBar);

			function drawBar() {
				var data = google.visualization.arrayToDataTable([			
				['pDataTime', 'p7'],
	<?php

	# This query connects to the database and get the last readings
	$sql = "SELECT p7, pDataTime FROM $db_table ORDER BY pIndex";

	$result = $connection->query($sql);  

	# This while - loop formats and put all the retrieved data into ['pDataTime', 'p7'] way.
		while ($row = $result->fetch_assoc()) {
			$timestamp_rest = $row["pDataTime"];
			echo "['".$timestamp_rest."',".$row['p7']."],";
			}
	?>
	]);

	// Bar graph
	var bar_options = {
			width: 200,
			title: 'Абсолютная отметка, м',
			backgroundColor: 'transparent',
			chartArea:{left:0,top:100, bottom: 50,width:'100%',height:'75%'},
			bar: { groupWidth: '25%', style: ''  },
			legend: { position: 'none' },
			colors: ['#0000FF'],    // any HTML string color ('red', '#cc00cc')
			fontName: 'Tahoma', // i.e. 'Times New Roman'
			fontSize: 14,
			hAxis: { textStyle: {
				fontName: 'Tahoma', // i.e. 'Times New Roman'
				fontSize: 8, // 12, 18 whatever you want (don't specify px)
			}},
			vAxis: { textStyle: {
				fontName: 'Tahoma', // i.e. 'Times New Roman'
				fontSize: 0.1, // 12, 18 whatever you want (don't specify px)
			}}
	};   

	// Bar chart
	var chart = new google.visualization.BarChart(document.getElementById('barchart_values7'));
	chart.draw(data, bar_options);
	} // End bracket from drawBar


	</script>
	<div id="barchart_values7" style="width: 200px; min-height: 2000px;"></div>