<?php

function ageTest($age){
    if (intval($age) >= 21) {
        return true;
    } else {
        return false;
    }
}
