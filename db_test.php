<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'rfgd_19040253_kayatom';
$dbuser = 'rfgd_19040253';
$dbpass = 'wessedinga16';
$dbhost = 'sql202.rf.gd';

if(!function_exists(mysql_connect))
	echo "Mysql is not included in PHP\n\r";
$connect = mysql_connect($dbhost, $dbuser, $dbpass) 
  or die("Unable to Connect to '$dbhost'\n\r" .
  mysql_error() . "\n\r");

mysql_select_db($dbname) or die("Could not open the db '$dbname'\n\r");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);
$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}

?>
