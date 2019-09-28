<?php

$outfile = fopen("out.txt", "w");


for ($i=1;$i<$argc;$i++) {
    if (!strpos($argv[$i],".txt",0))
        die("Not a txt file");
}
for ($i=1;$i<$argc;$i++) {
    if (!strpos($argv[$i],".txt",0))
        die("Not a txt file");
    $myfile = fopen($argv[$i], "r");
    $j = $i;
    $flag = 1;
    while($j>0) {
        $line = fgets($myfile);
        if ($line=="") {
            $flag = 0;
            break;
        }
        $j--;
    }
    // echo $line;

    fclose($myfile);
    $outline = $line;
    if ($flag==1)
        fwrite($outfile,$outline);
    else fwrite($outfile,"\n");
    // fclose($outfile);
}
fwrite($outfile,"180010002\n");

?>