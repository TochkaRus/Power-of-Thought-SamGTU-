<?php 
	# Loading config data from *.ini-file
	$ini = parse_ini_file ('cfg/db_config.ini');

	# Assigning the ini-values to usable variables
	$db_host = $ini['db_host'];
	$db_name = $ini['db_name'];
	$db_table = $ini['db_table_contractors'];
	$db_user = $ini['db_user'];
	$db_password = $ini['db_password'];
	
	# Prepare a connection to the mySQL database
	$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
	
	# If there are any errors or the connection is not OK
	if ($connection->connect_error) {
		die ("Connection error: ".$connection->connect_error);
	}
	
	# Prepare a query to the mySQL database and get a list of readings.
	# We select only what we need
	$sql = "SELECT pIndex ,pName, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15 FROM $db_table ORDER BY pIndex";
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {?>
			<table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
			   <thead>
					<tr><th><h4 style="margin: 0 20px 0 20px">Индекс</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Наименование</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Наличие собственных оборотных средств</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Наличие оборудования</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Наличие лицензии на проведение работ3</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Наличие базы производственного обслуживания</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Организация собственного диспетчерского пункта</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Обученность персонала </h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Использование сертифициравонных материалов</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Штат специалистов</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Отзывы о работе</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Количество несчастных случаев на производстве</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Лет на рынке</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Количество реализованных проектов</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">География деятельности</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Время проведения работ</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
						<th><h4 style="margin: 0 20px 0 20px">Стоимость работ</h4><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff;"></th>
					</tr>
				</thead>
				<?php foreach($result as $r){ ?>
				<tr>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['pIndex'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['pName'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p1'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p2'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p3'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p4'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p5'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p6'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p7'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p8'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p9'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p10'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p11'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p12'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p13'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p14'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
					<td><h5 style="margin: 0 20px 0 20px"><?php echo $r['p15'];?></h5><hr style="border: none; border-top: 2px solid #3300ff; color: #3300ff; overflow: visible; text-align: left;  "></td>
			   </tr>
		   <?php }?>
		   </table>
    <?php }?>
<?php } 
	else {
		echo "<p>Данные отсутствуют. Должно быть БД: ".$db_table." пуста.</p>";
	}
?> 