<?php
// src/EventSubscriber/MessageSubscriber.php
namespace App\EventSubscriber;

use KevinPapst\AdminLTEBundle\Event\MessageListEvent;
use KevinPapst\AdminLTEBundle\Model\MessageModel;
use KevinPapst\AdminLTEBundle\Model\UserModel;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;
use App\Entity\User;

class MessageSubscriber implements EventSubscriberInterface
{
    protected $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            MessageListEvent::class => ['onMessages', 100],
        ];
    }

    public function onMessages(MessageListEvent $event)
    {
        if (null === $this->security->getUser()) {
            return;
        }

        /* @var $myUser User */
        $myUser = $this->security->getUser();

        $userModel = new UserModel();
        $userModel->setName($myUser->getUsername());
        $message = new MessageModel($userModel, 'Hello world');
        $event->addMessage($message);

        /*
         * You can also set the total number of messages which could be different from those displayed in the navbar
         * If no total is set, the total will be calculated on the number of messages added to the event
         */
        $event->setTotal(15);
    }
}