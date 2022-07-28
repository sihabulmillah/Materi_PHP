<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = $_POST["operand1"];
        $o = $_POST["operator"];
        $b = $_POST["operand2"];

        if($o == "+"){
            $hasil = $a + $b;
        }elseif($o == "-"){
            $hasil = $a - $b;
        }elseif($o == "x"){
            $hasil = $a * $b;
        }elseif($o == "/"){
            $hasil = $a / $b;
        }    
    ?>
    <form action="" method="post">
    <input type="number" name="operand1" >
    <input type="radio" name="operator" value="+"><label for="">+</label>
    <input type="radio" name="operator" value="-"><label for="">-</label>
    <input type="radio" name="operator" value="x"><label for="">x</label>
    <input type="radio" name="operator" value="/"><label for="">/</label>
    <input type="number" name="operand2"> 
    <button type="submit">Kirim</button>   
</form>
</body>
</html>