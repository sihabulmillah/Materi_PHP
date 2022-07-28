<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="10"> 
    <?php for( $i = 1 ; $i <= 5; $i++){?>
        <?php if($i % 2 ==1 ):?>
        <tr bgcolor="yellowgreen">
            <?php else:?>
                <tr>
        <?php endif; ?>
            <?php for($j = 1 ; $j <= 5; $j++){?>
                <td><?= "$i,$j";?></td>
            <?php }?>    
        </tr>
    
    <?php }?>     
    </table>

</body>
</html>
<?php

// $var = 'cireng';
// switch($var){
//     case 'cireng':
//         echo "Betul, Cireng"; break;
//     case 'cimol':
//         echo "Betul, Cimol";
//     default :
//         echo "Salah, itu Cilok"; break;
// }
// $var = 8;
// echo $var > 9 ? 'Benar' : 'Salah'

?>

<?php 

$tUcup = 25000000;

switch($tUcup){
    case 27500000 :
        echo "Tabungan Ucup cukup untuk membeli motor matic"; 
        break;
    case 25000000 :
        echo "Tabungan Ucup cukup untuk membeli motor bebek";
        break;
    default :
        echo "Tabungan Ucup cukup untuk membeli motor kupling";
        break;
}


?>
