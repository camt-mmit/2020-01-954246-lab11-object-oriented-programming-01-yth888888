<?php
/*ID: 602110194
Name: Yu tianhe
Wechat: yth137175083*/
$f=fopen($_SERVER['argv'][1],'r');
fscanf($f,"%d",$n);
for($i=0;$i<$n;$i++){
    $pw[$i]=trim(fgets($f));
    $ltr[$i]=preg_match_all("/[a-zA-Z]/",$pw[$i]);
    $num[$i]=preg_match_all("/\d/",$pw[$i]);
    $smb[$i]=preg_match_all("/[\$@&]/",$pw[$i]);
    if((preg_match("/(?=.*[a-zA-Z])(?=.*\d)(?=.*[\$@&])/",$pw[$i]))&&($ltr[$i]>=2)&&($num[$i]>=2)&&($smb[$i]>=2)&&(strpos($pw[$i]," ")===false)){
        $s[]=$pw[$i];
    }else{
        $ns[]=$pw[$i];
    }
}fclose($f);
echo"Satisfied:\n";
for($j=0;$j<count($s);$j++){
    echo"   ",$s[$j],"\n";
}echo"Non-satisfied:\n";
for($k=0;$k<count($ns);$k++){
    echo"   ",$ns[$k],"\n";
}
?>