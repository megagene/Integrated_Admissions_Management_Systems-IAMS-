<?php
function issetnull($model,$value){

     if(isset($model[$value])) {

        return ($model[$value]);

     } else{ return NULL;
        } 

}




?>