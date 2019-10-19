<?php
$calcstring = $_POST["data"];
$calculationComponents = explode(" ", $calcstring );

try {
    if (sizeof($calculationComponents) == 3) {
        switch ($calculationComponents[1]) {
            case '+': echo $calculationComponents[0] + $calculationComponents[2];
                break;
            case '*': echo $calculationComponents[0] * $calculationComponents[2];
                break;
            case '/': echo $calculationComponents[0] / $calculationComponents[2];
                break;
            case '-': echo $calculationComponents[0] - $calculationComponents[2];
                break;
        }
    } else throw new Exception();

} catch (Exception $e) {
    echo "ERROR: Only two numbers allowed";
}