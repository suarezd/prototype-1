<?php

namespace LaFourchette;

use LaFourchette\Entity\Vm;
use LaFourchette\Notify\NotifyAbstract;

class Notify
{

    protected $notify = array();


    public function addNotifyMessage($name, $notifyMessage)
    {
        $this->notify[$name] = $notifyMessage;
    }

    public function send($name, Vm $vm)
    {
        $message = $this->factory($name);

        $content = $message->getContent($vm);
        $subject = $message->getSubject($vm);

        mail('lchenay@lafourchette.com', $subject, $content);
    }

    /**
     * @param $name name of template
     * @return NotifyAbstract
     * @throws \Exception
     */
    public function factory($name)
    {
        if (!isset($this->notify[$name])) {
            throw new \Exception(sprintf('Unknown message %s', $name));
        }

        return $this->notify[$name];
    }
}