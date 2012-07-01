<?php

require_once "config.php";

function get_password($id) {
	$id = (int) $id;
	$query = "SELECT password FROM %s WHERE id = %d LIMIT 1";
	$query = sprintf($query, USERS_TABLE, $id);
	$res = mysql_query($query);
	$obj = mysql_fetch_object($res);
	if(!$obj) {
		return FALSE;
	}

	return $obj->password;
}

function genRandomString() {
    $length = 10;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = "";    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $string;
}

function create_user($name, $password) {
	$query = "INSERT INTO %s(name, url, twitter, privacy, password) VALUES('%s', '', '', 0, '%s')";
	
	$salt = "$5$" . genRandomString() . "$";
	$query = sprintf($query, USERS_TABLE, $name, crypt($password, $salt));
	mysql_query($query);
}

