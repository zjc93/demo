<html>
    <head>
        <title> pls work</title>
    </head>
    
    <body>
<?php
function isPrime ($n){

    if ($n == 0) {
        return false;
    }
                
    if ( $n == 1) {
        return false;
    }
               
    for ($i = 2; $i <= floor(sqrt($n)); $i++ ) {
        if ( $n % $i == 0) {
            return false;
        }
    }
    return true;
    
}

?>        
       <h1>
<?php echo (isPrime (27)) ? 'true' : 'false';
?>
</h1> 
    </body>

</html>