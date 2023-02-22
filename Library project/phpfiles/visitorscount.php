<?php   

$count=file_get_contents("count.txt");
$count=explode("=",$count);
$count[1]=$count[1]+1;
$fp=fopen("count.txt","w+");
fwrite($fp,"count=".$count[1]);
fclose($fp);
print "the number of visitors are=".$count[1];
?>
 