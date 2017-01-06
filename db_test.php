<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'd8r6r710fjdvhd';
$dbuser = 'tndwbpredotanl';
$dbpass = '751311b31e7d11462f823967d27664dff96ea124999b5a3566b8f9f53f62bd0d';
$dbhost = 'ec2-107-20-163-238.compute-1.amazonaws.com';

if(!function_exists(pg_connect))
	echo "Pg is not included in PHP\n\r";
$connStr = "host=$dbhost  port=5432 dbname=$dbname user=$dbuser password=$dbpass";
$connect = pg_connect($connStr) 
  or die("Unable to Connect to '$dbhost'\n\r" .
  pg_last_error() . "\n\r");

$test_query = "SHOW TABLES FROM $dbname";
$result = pg_query($connect, $test_query);
$tblCnt = 0;
while($tbl = pg_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}

?>
