<?php

    if($tt == 5 ){
        return $grade = " A+";
    }elseif($tt >= 4){
        return $grade = "A ";
    }elseif($tt >= 3.5){
        return $grade = " A-";
    }elseif($tt >= 3){
        return $grade = "B";
    }elseif($tt >= 2){
        return $grade = " c ";
    }elseif($tt >= 1){
        return $grade = " D ";
    }elseif($tt > 0){
        return $grade = "pass korar jonno opekkha korun";
    }else{
        return $grade = "No grade not show at this time";
    }