<?php
session_start();
require('connect.php');

function dd($value)
{
	echo "<pre>",print_r($value,true),"</pre>";
	die();
}


function executeQuery($sql, $data)
{
	global $conn;
	$stmt = $conn->prepare($sql);
	$values = array_values($data);
	$types = str_repeat('s', count($values));
	$stmt->bind_param($types, ...$values);
	$stmt->execute();
	return $stmt;

}


function selectAll($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table";
	if (empty($conditions)){
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	} else {
		//$sql = "SELECT * FROM users WHERE username ='Awa' AND admin=1";
		$i =0;
		foreach ($conditions as $key => $value) {
			if($i === 0) {
				$sql = $sql. " WHERE $key=?";
			} else {
				$sql = $sql." AND $key=?";
			}
			$i++;
		}
		//dd($sql);
		$stmt = executeQuery($sql, $conditions);
		//$stmt = executeQuery($sql,$conditions);
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;

	}
}



function selectOne($table, $conditions)
{
	global $conn;
	$sql = "SELECT * FROM $table";
		//$sql = "SELECT * FROM users WHERE username ='Awa' AND admin=1";
	$i =0;
	foreach ($conditions as $key => $value) {
		if($i === 0) {
			$sql = $sql. " WHERE $key=?";
		} else {
			$sql = $sql." AND $key=?";
		}
		$i++;
	}



	//dd($sql);
	$sql = $sql ." LIMIT 1";
	$stmt = executeQuery($sql, $conditions);
	//$stmt = executeQuery($sql,$conditions);
	$records = $stmt->get_result()->fetch_assoc();
	return $records;

	
}

/*
$conditions = [
	'admin' => 0,
	'username' => 'aftab'
];

$users = selectOne('users', $conditions);
dd($users);

*/

function create($table, $data)
{
	global $conn;
	$sql = "INSERT INTO users SET ";
		//$sql = "SELECT * FROM users WHERE username ='Awa' AND admin=1";
	$i =0;
	foreach ($data as $key => $value) {
		if($i === 0) {
			$sql = $sql . " $key=?";
		} else {
			$sql = $sql.", $key=?";
		}
		$i++;
	}
	//dd($sql);
	//$stmt = executeQuery($sql,$data);
	$stmt = executeQuery($sql, $data);
	$id = $stmt->insert_id;
	return $id;



}



function update($table, $id, $data)
{
	global $conn;
	$sql = "UPDATE $table SET ";
		//$sql = "SELECT * FROM users WHERE username ='Awa' AND admin=1";
	$i =0;
	foreach ($data as $key => $value) {
		if($i === 0) {
			$sql = $sql . " $key=?";
		} else {
			$sql = $sql.", $key=?";
		}
		$i++;
	}
	//dd($sql);
	//$stmt = executeQuery($sql,$data);
	$sql = $sql . " WHERE id=?";
	$data['id'] = $id;
	$stmt = executeQuery($sql, $data);
	return $stmt->affected_rows;



}

/*
$data = [
	'username' => 'Awa Melvine',
	'admin' => 1,
	'email' => 'melvine@gmail.com',
	'Password' => 'melvine'

];

$id = update('users', 5, $data);  //specify correct id,( check db)
dd($id);

*/


function delete($table, $id)
{
	global $conn;
	$sql = "DELETE FROM $table WHERE id=?";
	$stmt = executeQuery($sql, ['id' => $id]);
	return $stmt->affected_rows;
}


/*
$id = delete('users',2);
dd($id);
*/

