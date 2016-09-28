<html>
    <head>
        <title>Hello World</title>
    </head>
    <body></body>
        <h1>
            <?php 
            function isPrime ($n){
                if ($n == 0) {
                    return false;
                }
                if ( $n == 1) {
                    return false;
                }
               
                for ($i = 2; $i <= sqrt($n); $i++ ) {
                    if ( $n % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
            
            function output_stats($array){
                $num_of_num = 0;
                $num_of_odd = 0;
                $num_of_even = 0;
                $num_of_prime = 0;
                $return_string = "";
                
                for ($k = 0; $k < count($array); $k++) {
                    $num_of_num++;
                    
                    if ( isPrime ($array[$k]) == true) {
                        $num_of_prime++;
                    }
                    if ( ($array[$k] % 2) == 0) {
                        $num_of_even++;
                    }
                    else {
                        $num_of_odd++;
                    }
                }
                
                $return_string = "Number of Numbers: ". strval($num_of_num);
                $return_string = $return_string . " Number of Even: ". strval($num_of_even);
                $return_string = $return_string . " Number of Odd: ". strval($num_of_odd);
                $return_string = $return_string . " Number of Prime: ". strval($num_of_prime);
                return ($return_string);
            }
            
            echo (output_stats(array(0,1,2,3,4,5,6,7,8,9)));
            ?>
            
            <?php
            $string_array= array("cloudwise","academy","zach","rodrick","melissa","shasta","venture","hub","cloudwise","cloudwise","you","guys","rock");
            $s = "";
            for ($i=0; $i < count($string_array); $i++) {
                $s = $s . $string_array[$i];
            }
            echo ($s . "</br>");
            
            $t = 0;
            for ($j=0; $j < count ($string_array); $j++) {
                if ($string_array[$j] == "cloudwise") {
                    $t++;
                }
            }
            echo ($t . "</br>");
            ?>
            
            <?php 
            $x = 5; 
            $y = 7;
            $z = ($x + $y);
            $a = "fire";
            $b = "truck ";
            $c = ($a . $b);
            echo ($x . "<br>"); 
            echo ($y . "<br>");
            echo ("5 + 7 =" . $z . "</br>");
            echo ($a . $b);
            echo ($c);
            ?>
            
            <?php echo ("Hello World!"); ?>
        </h1>
    </body>
</html>