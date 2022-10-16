<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
// $matchId = $_POST['MATCH_ID'];
$matchId = 9010101010	;


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
}
$ret = $db->query('SELECT * FROM matchInfo WHERE MATCH_ID = '. $matchId);


while ($row = $ret->fetchArray()) {
  if($matchId == $row['MATCH_ID']){
    header("Content-Type: application/json");
    echo json_encode(["MATCH_ID"=>$row['MATCH_ID'],"TEAM1"=>$row['TEAM1'],"TEAM2"=>$row['TEAM2'],"TEAM1_VOTE"=>$row['TEAM1_VOTE'],"TEAM2_VOTE"=>$row['TEAM2_VOTE']]);
  }
}

?>