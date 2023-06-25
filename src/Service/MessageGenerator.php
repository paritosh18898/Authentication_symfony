<?php
// src/Service/MessageGenerator.php
namespace App\Service;
use App\Service\MessageType;

class MessageGenerator
{
    private $messageType;

    public function __construct(MessageType $messageType)
    {
        $this->messageType = $messageType;
    }
    // public function getHappyMessage()
    // {
    //     $messages = [
    //         'You did it! You updated the system! Amazing!',
    //         'That was one of the coolest updates I\'ve seen all day!',
    //         'Great work! Keep going!',
    //     ];

    //     $index = array_rand($messages);

    //     return $messages[$index];
    // }


    // for injecting another service messagegenerator service

    public function getHappyMessage($type):string
    {
        $message = $this->messageType->getMessageBasedOnType($type);
        return $message;
    }


}
