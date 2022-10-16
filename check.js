teamName = [{
  matchId: 101,
  team1: 'শ্রীলংকা',
  team2: 'নামিবিয়া'
},{
  matchId: 102,
  team1: 'আবুধাবি',
  team2: 'নেদারল্যান্ড'
},{
  matchId: 103,
  team1: 'ওয়েস্ট ইন্ডিজ',
  team2: 'স্কটল্যান্ড'
},
{
  matchId: 104,
  team1: 'জিম্বাবুয়ে',
  team2: 'আয়ারল্যান্ড'
}
,{
  matchId: 105,
  team1: 'নামিবিয়া',
  team2: 'নেদারল্যান্ড'
},{
  matchId: 106,
  team1: 'শ্রীলংকা',
  team2: 'আবুধাবি'
},{
  matchId: 107,
  team1: 'স্কটল্যান্ড',
  team2: 'আয়ারল্যান্ড'
},{
  matchId: 108,
  team1: 'ওয়েস্ট ইন্ডিজ',
  team2: 'জিম্বাবুয়ে'
},{
  matchId: 109,
  team1: 'নেদারল্যান্ড',
  team2: 'শ্রীলংকা'
},
{
  matchId: 110,
  team1: 'নামিবিয়া',
  team2: 'আবুধাবি'
}
,{
  matchId: 111,
  team1: 'আয়ারল্যান্ড',
  team2: 'ওয়েস্ট ইন্ডিজ'
},{
  matchId: 112,
  team1: 'স্কটল্যান্ড',
  team2: 'জিম্বাবুয়ে'
},{
  matchId: 113,
  team1: 'অস্ট্রেলিয়া',
  team2: 'নিউজিল্যান্ড'
}
,{
  matchId: 114,
  team1: 'ইংল্যান্ড',
  team2: 'আফগানিস্তান'
}]
 sql = `INSERT INTO 'tablename' ('MATCH_ID', 'TEAM1','TEAM2', 'TEAM1_VOTE','TEAM1_VOTE') VALUES `;
teamName.forEach(element => {
  sql += `(${element.matchId},'${element.team1}','${element.team2}',1,1), `
});

console.log(sql);

