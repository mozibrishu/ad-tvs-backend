<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class SQLiteDB extends SQLite3
{
  function __construct()
  {
     $this->open('information.sqlite');
  }
}

$db = new SQLiteDB();
if(!$db){
  echo $db->lastErrorMsg();
}else{
  echo 'working';
}

$sql ="CREATE TABLE if not exists matchInfo (MATCH_ID NUMBER NOT NULL, TEAM1 CHAR(50) NOT NULL, TEAM2 CHAR(50) NOT NULL, TEAM1_VOTE NUMBER NOT NULL,TEAM2_VOTE NUMBER NOT NULL)";


$ret = $db->exec($sql);
if(!$ret){
  echo $db->lastErrorMsg();
}
$uniqueNumber = true;

if($uniqueNumber){
  // $sql ="INSERT INTO matchInfo (MATCH_ID,TEAM1,TEAM2,TEAM1_VOTE,TEAM2_VOTE) VALUES ('$matchId','$team1', '$team2', '$team1_vote','$team2_vote')";
  $sql = "INSERT INTO matchInfo ('MATCH_ID', 'TEAM1','TEAM2', 'TEAM1_VOTE','TEAM2_VOTE') VALUES (101,'শ্রীলংকা','নামিবিয়া',1,1), (102,'আবুধাবি','নেদারল্যান্ড',1,1), (103,'ওয়েস্ট ইন্ডিজ','স্কটল্যান্ড',1,1), (104,'জিম্বাবুয়ে','আয়ারল্যান্ড',1,1), (105,'নামিবিয়া','নেদারল্যান্ড',1,1), (106,'শ্রীলংকা','আবুধাবি',1,1), (107,'স্কটল্যান্ড','আয়ারল্যান্ড',1,1), (108,'ওয়েস্ট ইন্ডিজ','জিম্বাবুয়ে',1,1), (109,'নেদারল্যান্ড','শ্রীলংকা',1,1), (110,'নামিবিয়া','আবুধাবি',1,1), (111,'আয়ারল্যান্ড','ওয়েস্ট ইন্ডিজ',1,1), (112,'স্কটল্যান্ড','জিম্বাবুয়ে',1,1), (113,'অস্ট্রেলিয়া','নিউজিল্যান্ড',1,1), (114,'ইংল্যান্ড','আফগানিস্তান',1,1)" ;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
    $db->close();
      echo 'success';
      exit();
   }
   $db->close();
} else{
  echo 'used';
}
