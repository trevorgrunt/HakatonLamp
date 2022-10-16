<?php

class Controller_Login extends Controller
{	
	function action_index()
	{
		function generateCode($length=6) {
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
			$code = "";
			$clen = strlen($chars) - 1;
			while (strlen($code) < $length) {
					$code .= $chars[mt_rand(0,$clen)];
			}
			return $code;
		}
		include_once("bdconnect.php");
		//$data["login_status"] = "";
		if(isset($_POST['submit']))
		{
			// Вытаскиваем из БД запись, у которой логин равняеться введенному
			$query = mysqli_query($connect,"SELECT UserAdminID, user_hash FROM UserAdmin WHERE Login='".mysqli_real_escape_string($connect,$_POST['login'])."' LIMIT 1");
			$data = mysqli_fetch_assoc($query);
			
			var_dump($data);
			// Сравниваем пароли
			if($data['user_hash'] === md5(md5($_POST['password'])))
			{	
				echo $_POST['password'];
				// Генерируем случайное число и шифруем его
				$hash = md5(generateCode(10));
				if(!empty($_POST['not_attach_ip']))
				{
					// Если пользователя выбрал привязку к IP
					// Переводим IP в строку
					$insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
				}
				// Записываем в БД новый хеш авторизации и IP
				mysqli_query($connect, "UPDATE UserAdmin SET user_hash='".$hash."' ".$insip." WHERE UserID='".$data['UserID']."'");
				// Ставим куки
				setcookie("UserAdminID", $data['UserID'], time()+60*60*24*30, "/");
				setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!
				// Переадресовываем браузер на страницу проверки нашего скрипта
				
				$data["login_status"] = "access_granted";
				
				session_start(); echo $_SESSION['admin'];
				$_SESSION['admin'] = $password;
				header('Location:/admin');exit();
			}
			else
			{
				$data["login_status"] = "access_denied";
			}
		}
		else
		{
			$data["login_status"] = "";
		}
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}	
}
