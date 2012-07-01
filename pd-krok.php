<?php
require 'config.php';

header('Content-Type: application/json');

$tmp=`/home/vasil/bin/list2.sh|tr '\n' ',' |sed s/,$// `;


$data = array();
$sql ="SELECT users.id, name, url, twitter, privacy  FROM users LEFT JOIN objects ON users.id = objects.userid WHERE privacy = 0 AND objects.type='mac' AND objects.value IN (".$tmp.")";
$res = mysql_query($sql);

while ( $usr = mysql_fetch_assoc($res) )
{
	if ( !isset($data[$usr['id']]) )
	{
		$data[$usr['id']] = $usr;
		unset($data[$usr['id']]['type']);
		unset($data[$usr['id']]['value']);
	}
}

echo json_encode($data);
?>
