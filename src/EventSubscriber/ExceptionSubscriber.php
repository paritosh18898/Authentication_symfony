<?php
namespace App\EventSubscriber;
use Doctrine\Common\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return [
            KernelEvents::EXCEPTION => [
                // ['processException', 10],
                // ['logException', 0],
                // ['notifyException', -10],

//  passing priority- highest number have highest priority which functions run first
                ['test1', 10],
                ['test2', 20],
                ['test3', -10],
                
            ],
        ];
    }

    public function test1(ExceptionEvent $event)
    {
        // dd("This is event subscriber test 1");
        // ...
    }
    public function test2(ExceptionEvent $event)
    {
        // dd("This is event subscriber test 2");
        // ...
    }
    public function test3(ExceptionEvent $event)
    {
        // dd("This is event subscriber test 3");
        // ...
    }
    // public function processException(ExceptionEvent $event)
    // {
    //     // ...
    // }

    // public function logException(ExceptionEvent $event)
    // {
    //     // ...
    // }

    // public function notifyException(ExceptionEvent $event)
    // {
    //     // ...
    // }
}