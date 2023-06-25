<?php

namespace App\Service;

class MessageType
{
    public function getMessageBasedOnType($type):string
    {
        $message  = "Message type not found";
        if($type == 1){
            $message = "Message type is 1";
        }
        if($type == 2){
            $message = "Message type is 2";
        }
        if($type == 3){
            $message = "Message type is 3";
        }
        return $message;
    }
}