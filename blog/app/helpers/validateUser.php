<?php 

function validateUser($user)
{

	$errors =array();

	if (empty($user['username'])) {
		array_push($errors, 'username is required');
	}

	if (empty($user['email'])) {
		array_push($errors, 'email is required');
	}

	if (empty($user['Password'])) {
		array_push($errors, 'Password is required');
	}

	if ($user['Password'] !== $user['PasswordConf']) {
		array_push($errors, 'password do not match');
	}

	$existingUser = selectOne('users', ['email' => $user['email']]);
	if (isset($existingUser)) {
		array_push($errors, 'email already exist');
	}

	return $errors;
}



function validateLogin($user)
{

	$errors =array();

	if (empty($user['username'])) {
		array_push($errors, 'Username is required');
	}

	if (empty($user['Password'])) {
		array_push($errors, 'Password is required');
	}


	return $errors;
}