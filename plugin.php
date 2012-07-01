<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
.initlabPlugin{
	list-style: none;
	padding:0;
}

.initlabPlugin ul{
	list-style: none;
}

.initlabPlugin ul:first-child{
	margin: -20px;
}

</style>
</head>
<?php
/*
Plugin Name: Initlab Wordpress Plugin
Plugin URI:
Description: Plugin to show who is i9n the lab by checking the MAC addressesVersion: 1.0
Author: InitLab
Author URI: initlab.org
License: MIT
*/

$url = "http://db.initlab.ludost.net/pd-krok.php";
$data = json_decode(file_get_contents($url) );

echo "<ul class=\"initlabPlugin\">";
foreach ($data as $row){
	echo "<li>";
	
	if(!empty($row->url))
		echo "<a href=\"{$row->url}\" target=\"_blank\">{$row->name}</a>";
	else if(!empty($row->twitter))
		echo "<a href=\"https://twitter.com/{$row->twitter}\" target=\"_blank\">{$row->name}</a>";
	else echo "$row->name";
	
	echo "</li>";
}
echo "</ul>";
?>
