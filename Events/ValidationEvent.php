<?php

namespace BasicApp\Config\Events;

class ValidationEvent extends \BasicApp\Event\BaseEvent
{

    public $ruleSets = [];

    public $templates = [];

    public function __construct(array $ruleSets, array $templates)
    {
        parent::__construct();

        $this->ruleSets = $ruleSets;

        $this->templates = $templates;
    }
    
}