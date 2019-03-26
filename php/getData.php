<?php
include 'Connect.inc.php';
$url ='code.json';
$data =file_get_contents($url);
$charcater = json_decode($data);
echo $charcater[1]->name;
echo $charcater[1]->flag;
echo $charcater[1]->code;
echo $charcater[1]->dial_code;;
//$i=0;
//while($i<=$charcater.length){
// echo $charcater[i]->name;
// echo $charcater[i]->flag;
// echo $charcater[i]->code;
// echo $charcater[i]->dial_code;
//echo $i;
//$i++;

//}
 foreach($charcater as $charcaters){

//     echo $charcaters->name;
//     echo $charcaters ->code;
//     echo $charcaters ->flag;
//     echo $charcaters ->dial_code .'<br>';



try{
$sql ="INSERT INTO portfolio(CountryNAme,CountryCode,DialCode) VALUES( $charcaters->name, $charcaters ->code,$charcaters ->dial_code)";
}
catch(Exeaption $e){
    echo $e;
}
if($sql)
{
    echo "sucessfull";
}
else{
    echo "failed";
}


 }

// try{
// $sql ="INSERT INTO portfolio(id,CountryNAme,CountryCode,DialCode) VALUES(1, 'CDF', 'GH',21)";
// }
// catch(Exeaption $e){
//     echo $e;
// }
// if($sql)
// {
//     echo "sucessfull";
// }
// else{
//     echo "failed";
// }

 




?>