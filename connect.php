<?
$user='root';
$pass='';
$db='testdb';

$db =new mysqli('localhost',$user,$pass,$db) or die("unable to conext");
echo "Great";

?>