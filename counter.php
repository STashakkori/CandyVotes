<?php

include_once('database.php');
//$db=MySqlDatabase::getInstance();

$OPTION = (int)isset($_GET["option"])?((int)$_GET["option"]):-1;

//mysqli_query($db,"UPDATE votes SET tally=tally+1 WHERE choice=$OPTION");

$func = isset($_GET["func"])?($_GET["func"]):"";
function queryValues($db){
	$count = array();
	$query=mysqli_query($db,"SELECT tally,choice FROM votes");
	while($row = mysqli_fetch_array($query))
	  {
	 	 $ndx = $row["choice"];
		 $tally = $row["tally"];
		 $count[$ndx] = $tally;
	  }
	  echo json_encode($count);
}
if($func!=="") call_user_func($func,$db);

//echo($jsonstring);

/*
$FILE = "./counter.dat";

if(file_exists($FILE) && $OPTION>-1 && $OPTION<6){	 	
  $count = (array)json_decode(file_get_contents($FILE,true));
  $count[$OPTION]= $count[$OPTION]+1;
  $jsonstring =json_encode($count);
  file_put_contents($FILE,$jsonstring);
  //echo "<p style = 'color:#FF692E; margin:0px;'>" . $name_mapping[$OPTION] . $count[$OPTION] . " votes.</p>";
}
else if($OPTION>-1 && $OPTION<6){
	$datafile = array(0,0,0,0,0,0);
	$datafile[$OPTION]+=1;
	$jsonstring =json_encode($datafile);
    file_put_contents($FILE,$jsonstring);
}
else{
	
}
*/


?>
