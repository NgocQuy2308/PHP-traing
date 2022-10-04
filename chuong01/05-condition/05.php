<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
        <title>insert title here</title>
        <link type="text/css" href="style.css" rel="stylesheet" media="screen">
    </head>
    <body>
    <?php
        $n1   ="";
        $n2   ="";
        $nt   ="";
        if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])){
             $n1    = $_POST["number1"];
             $n2    = $_POST["number2"];
             $nt    = $_POST["caculate"];
             $flag  = true;
        if(is_numeric($n1) && is_numeric($n2) ){
            switch ($nt) {
            case "+":
                $result = $n1 + $n2;
                break;
            case "-":
                    $result = $n1 - $n2;
                break;
            case "/":
            case ":":
                $result = $n1 / $n2;
            break;
            case "*":
            case "x":
                $result = $n1 * $n2;
            break;
            case "%":
                $result = $n1 % $n2;
            break;
            default:
                $result = $n1 % $n2;
                $nt = "+" ;
                break;
            }
        } else{
            $result = "Mời nhập số nguyên";
            $flag = false;
        }
    }
    ?>
        <div class="content">
            <h1>Mô phỏng máy tính điện tử</h1>
        <form name="main-form" method="post" action="#">
            <div class ="row">
                <span>Số thứ nhất </span>
                <input type="text" name="number1" value="<?php echo $n1; ?>"/>
            </div>
            <div class ="row">
                <span>Phép toán </span>
                <input type="text" name="caculate"  value="<?php echo $nt; ?>"/>
            </div>
            <div class ="row">
                <span>Số thứ hai</span>
                <input type="text" name="number2" value="<?php echo $n2; ?>"/>
            </div>
            <div class="row">
                <input type="submit" value="Xem kết quả"/>
            </div>
            <div class="row">
            <P>
            <?php
                if ($flag == true) {
                     echo "Kết quả " . $n1 . " ". $nt . " " . $n2 . " = " . $result ; 
                } else{
                    echo $result;
                }
            ?>    
            </P>  
            </div>
            <div>
                <a href=""></a>
            </div>
        </form>
    </div>
    </body>
</html>
