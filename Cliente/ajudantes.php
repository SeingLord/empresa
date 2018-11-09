<?php 
    function tem_post(){
        if(count($_POST)>0){
            return true;
        }else {
            return false;
        }
    }

?>