<?php
    $is_narcissistic = narcissistic(7);
    echo $is_narcissistic;

    function narcissistic(int $value): bool {
        echo $value . "
";
        $value_str = strval($value);
        $exploded = str_split($value_str);
        $sum = 0;
        
        for ($i = 0; $i < strlen($value_str); $i++) {
            $exploded[$i] = $exploded[$i] ** strlen($value_str);
            $sum = $sum + $exploded[$i];
        }
        
        if ($sum == $value) {
            return true;
        } else {
            return false;
        }
    }
?>