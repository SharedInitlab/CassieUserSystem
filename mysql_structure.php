<link rel="stylesheet" href="http://current.bootstrapcdn.com/bootstrap-v204/css/bootstrap-combined.min.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://current.bootstrapcdn.com/bootstrap-v204/js/bootstrap.min.js"></script>
<?php
header("Content-Type: text/html; charset=utf-8");
require_once("config.php");
$sql = "SELECT users.id AS id, users.name AS name,users.url AS url, users.twitter AS twitter, objects.value AS mac FROM users JOIN objects ON users.id = objects.userid WHERE objects.type = 'mac' ORDER BY users.id ASC";
$res = mysql_query($sql);

echo "<table class='table table-bordered'>";
echo "<caption>Initlab users</caption>";
echo "<thead>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>name</th>";
echo "<th>url</th>";
echo "<th>twitter</th>";
echo "<th>MAC</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";
while($row = mysql_fetch_object($res)) {
	echo "<tr>";
	echo "<td>" . $row -> id . "</td>";
	echo "<td>" . $row -> name . "</td>";
	echo "<td>" . $row -> url . "</td>";
	echo "<td>" . $row -> twitter . "</td>";
	echo "<td>" . $row -> mac . "</td>";
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
