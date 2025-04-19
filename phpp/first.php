<?php

$name="Ahmad";
function test(){
    global $name;
    echo "hello my name is : $name";
}

test();

echo "hello : $name";
?>

