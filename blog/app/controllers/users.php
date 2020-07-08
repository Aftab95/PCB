<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");


/*
if (isset($_POST['register-btn'])) {
	unset($_POST['register-btn'], $_POST['PasswordConf']);
	$_POST['admin'] = 0;
	$_POST['Password'] = password_hash($_POST['Password'], PASSWORD_DEFAULT);

	$user_id = create('users', $_POST);
	$user =  selectOne('users', ['id' => $user_id]);

	dd($user);
}
*/
$errors = array();
$username = '';
$email = '';
$Password = '';
$PasswordConf = '';
$table = 'users';

function loginUser($user)
{
	$_SESSION['id'] = $user['id'];
	$_SESSION['username'] = $user['username'];
	$_SESSION['admin'] = $user['admin'];
	$_SESSION['message'] = 'you are now logged in';
	$_SESSION['type'] = 'success';
	if($_SESSION['admin']) {
		header('location:' . BASE_URL . '/admin/dashboard.php');
	} else{
		header('location:' . BASE_URL . '/index.php');
	}	
	exit();


}


if (isset($_POST['register-btn'])) {
	$errors = validateUser($_POST);


	//dd($errors);
	if (count($errors) === 0){
		unset($_POST['register-btn'], $_POST['PasswordConf']);
		$_POST['admin'] = 0;
		$_POST['Password'] = password_hash($_POST['Password'], PASSWORD_DEFAULT);

		$user_id = create($table, $_POST);
		$user =  selectOne($table, ['id' => $user_id]);

		//dd($user);

		//log  user in
		loginUser($user);
		

	} else {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$Password = $_POST['Password'];
		$PasswordConf = $_POST['PasswordConf'];


	}
}

if (isset($_POST['login-btn'])) {
	$errors = validateLogin($_POST);

	if(count($errors) === 0) {
		$user = selectOne($table, ['username' => $_POST['username']]);

		if ($user && password_verify($_POST['Password'], $user['password'])) {

			loginUser($user);

		} else {
			array_push($errors, 'wrong credentials');
		}
		
	}

	$username = $_POST['username'];
	$Password = $_POST['Password'];

}