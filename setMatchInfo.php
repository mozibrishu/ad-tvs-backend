<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

// $name = $_POST['name'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $division = $_POST['division'];


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
}else{
  echo 'tableOkay';
}
// $ret = $db->query('SELECT * FROM peoplesInfo');
// $uniqueNumber = true;
// while ($row = $ret->fetchArray()) {
//   if($mobile == $row['MOBILE']){
//     $uniqueNumber = false;
//   }
// }


$matchId = 2020202020;
$team1 = 'Bangladesh';
$team2 = 'Pakistan';
$team1_vote = 1000;
$team2_vote = 500;

$uniqueNumber = true;
if($uniqueNumber){
  $sql ="INSERT INTO matchInfo (MATCH_ID,TEAM1,TEAM2,TEAM1_VOTE,TEAM2_VOTE) VALUES ('$matchId','$team1', '$team2', '$team1_vote','$team2_vote')";

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
