<div class="form_auth_block">
  <div class="form_auth_block_content">
    <p class="form_auth_block_head_text">Авторизация</p>
    <form id="auth_form" class="form_auth_style" action="#" method="post">
      <input id="auth_login" type="text" name="auth_login" placeholder="Введите Ваш логин" required >
	  <label>• • •</label>
      <input id="auth_password" type="password" name="auth_password" placeholder="Введите пароль" required >
      <button id="auth_submit_button" class="form_auth_button" type="button" onclick="submit_button()" name="form_auth_submit">Войти</button>
    </form>
  </div>
</div>
<?php
# Loading config data from *.ini-file
	$ini = parse_ini_file ('cfg/db_config.ini');

	# Assigning the ini-values to usable variables
	$db_host = $ini['db_host'];
	$db_name = $ini['db_name'];
	$db_table_auth = $ini['db_table_auth'];
	$db_user = $ini['db_user'];
	$db_password = $ini['db_password'];

	# Prepare a connection to the mySQL database
	$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
	
	# This query connects to the database and get the last readings
	$sql = "SELECT pLogin, pPassword, pBlocked FROM $db_table_auth ORDER BY pIndex";

	$result = $connection->query($sql);
	
	$array_auth_login = array();
	$array_auth_password = array();
	$array_auth_blocked = array();
	While ($row = $result->fetch_assoc()) {
			$Login = $row["pLogin"];
			$Password = $row["pPassword"];
			$Blocked = $row["pBlocked"];
			array_push($array_auth_login, $Login);
			array_push($array_auth_password, $Password);
			array_push($array_auth_blocked, $Blocked);
	}
?>
<script>

function submit_button() {
	const loginForm = document.getElementById("auth_form");
	const loginButton = document.getElementById("auth_submit_button");

	loginButton.addEventListener("click", (e) => {
		e.preventDefault();
		const username = document.getElementById("auth_login").value;
		const password = document.getElementById("auth_password").value;
		<?$IndexNum = 0;?>
		if (<? echo ("username === '".$array_auth_login[$IndexNum]."' && password === '".$array_auth_password[$IndexNum]."' && '0' === '".$array_auth_blocked[$IndexNum]."'") ?>) {
			location.replace('index2.php');
		} else if (<? echo ("username === '".$array_auth_login[($IndexNum+1)]."' && password === '".$array_auth_password[($IndexNum+1)]."' && '0' === '".$array_auth_blocked[($IndexNum+1)]."'") ?>) {
			location.replace('index2.php');
		} else if (<? echo ("username === '".$array_auth_login[($IndexNum+2)]."' && password === '".$array_auth_password[($IndexNum+2)]."' && '0' === '".$array_auth_blocked[($IndexNum+2)]."'") ?>) {
			location.replace('index2.php');
		} else if (<? echo ("username === '".$array_auth_login[($IndexNum+3)]."' && password === '".$array_auth_password[($IndexNum+3)]."' && '0' === '".$array_auth_blocked[($IndexNum+3)]."'") ?>) {
			location.replace('index2.php');
		} else if (<? echo ("username === '".$array_auth_login[($IndexNum+4)]."' && password === '".$array_auth_password[($IndexNum+4)]."' && '0' === '".$array_auth_blocked[($IndexNum+4)]."'") ?>) {
			location.replace('index2.php');
		} else {
			location.replace('index.php');
		}
	})
};
</script>