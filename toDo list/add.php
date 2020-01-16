<?php

//get user task information
$task = $_POST["task"];


//functions
function validation ($sendData) {
    if ($sendData=='') {
        echo "Input task";
        exit();
    }

}