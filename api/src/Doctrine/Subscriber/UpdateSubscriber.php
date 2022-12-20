<?php

namespace App\Doctrine\Subscriber;

use App\Entity\Message;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;

class UpdateSubscriber implements EventSubscriber
{
    public function getSubscribedEvents(): array
    {
        return [
            Events::preUpdate,
        ];
    }

    public function preUpdate(PreUpdateEventArgs $eventArgs): void
    {
        $this->checkChangeSet($eventArgs);
    }

    private function checkChangeSet($eventArgs)
    {
        if (!$eventArgs->getObject() instanceof Message) {
            return;
        }

        if ($eventArgs->hasChangedField('body')) {
            $eventArgs->setNewValue('body', $eventArgs->getOldValue('body'));
        }
    }
}
