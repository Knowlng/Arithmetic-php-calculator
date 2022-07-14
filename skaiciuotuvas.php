<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form method="GET" action="skaiciuotuvas.php">
        <input required='required' name="skaicius1" placeholder="1 skaičius" value="<?php echo isset($_GET["skaicius1"]) ? $_GET["skaicius1"] : "" ; ?>" />
        <input required='required' name="skaicius2" placeholder="2 skaičius" value="<?php echo isset($_GET["skaicius2"]) ? $_GET["skaicius2"] : "" ; ?>" />
        <input required='required' name="zenklas" placeholder="aritmetinis simbolis" value="<?php echo isset($_GET["zenklas"]) ? $_GET["zenklas"] : "" ; ?>" />
        <button name="patvirtinti" type="submit">Skaičiuoti</button>
    </form>

    <div>
        <?php
        if(isset($_GET["patvirtinti"])) {
            $skaicius1 = $_GET["skaicius1"];
            $skaicius2 = $_GET["skaicius2"];
            $zenklas = $_GET["zenklas"];
        

            if($zenklas == "+") {
                $suma = $skaicius1 + $skaicius2;
                echo "<div class='rezultatas'>".$suma."</div>";
            } else if ($zenklas == "-") {
                $skirtumas = $skaicius1 - $skaicius2;
                echo "<div class='rezultatas'>".$skirtumas."</div>";
            } else if ($zenklas == "*" || $zenklas == "x" ) {
                $daugyba = $skaicius1 * $skaicius2;
                echo "<div class='rezultatas'>".$daugyba."</div>";
            } else if ($zenklas == "/") {
                $dalyba = $skaicius1 / $skaicius2;
                echo "<div class='rezultatas'>".$dalyba."</div>";
            }
        }

        ?>



    </div>
</body>