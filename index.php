<head>
  <script src="sweet-alert.js"></script>
  <link rel="stylesheet" type="text/css" href="sweet-alert.css">
<meta charset="utf-8" />
<meta icon="favicon.ico" />
<title>Lightning 95</title>
<style type="text/css">
	span {color:red}
p {color:green}
mss {color:blue}
koz {color:cyan}
button {background-color:lime}
div {font-family:monospace}
</style>
</head>
<body>
<pre>
<?php
$file = file("clicks.txt");

echo("Give 95. <br>You result: ");
$wasd = rand(1, 100);
echo($wasd);
if($wasd==95)
{
echo(". <br>You win 1 hundred dollars! <koz>:D</koz><p> [̲̅$̲̅(̲̅ιοο̲̅)̲̅$̲̅] </p>"); 
$f=fopen("wins.txt","a+");
flock($f,LOCK_EX);
$count=fread($f,100);
@$count++;
ftruncate($f,0);
fwrite($f,$count);
fflush($f);
flock($f,LOCK_UN);
fclose($f); } elseif($wasd==94) {
echo(". <br>Oy, miss!<mss> 0_o</mss>");
} else {
echo(". <br>Refresh page <span>:(</span>");
}
?>
</pre>
<form action="index.php">
<button type="submit">Refresh</button>
</form>
<div>
<script language="JavaScript" src="randomwords/randwordsjs.php"></script>
</div>
<pre>
+---------Game  Legend---------+       
Total refreshes: <? $f=fopen("clicks.txt","a+");
flock($f,LOCK_EX);
$count=fread($f,100);
@$count++;
ftruncate($f,0);
fwrite($f,$count);
fflush($f);
flock($f,LOCK_UN);
fclose($f);
echo $count; ?>       
Total wins: <? $f=fopen("wins.txt","a+");
$wins=fread($f,100);
echo $wins;
fclose($f); ?>            
Bank: <?php echo("indev"); ?>   
Your cash: <? echo("indev"); ?>   
+-------------News-------------+
13.05.15
Win and Refresh counters are
finished. Added a random phrase
generator with fun database.

12.05.15
Game created, all counters 
still in development.
+------------------------------+
</pre>
<bottom>
<h6 style="font-family:monospace">Hosted by PivoNet</h6>
</bottom>
<!--| O==((#))ΞΞΞΞΞΞΞΞΞΞ95ΞΞΞΞΞΞΞ> |--!>
 
</body>
