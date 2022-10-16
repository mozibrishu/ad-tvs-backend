<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
$matchId = $_POST['MATCH_ID'];
$TEAM_VOTE = $_POST['TEAM_VOTE'];

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
$ret = $db->query('UPDATE matchInfo SET '. $TEAM_VOTE .' = '. $TEAM_VOTE .' + 1 WHERE MATCH_ID = '. $matchId);


?>