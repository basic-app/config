<?php

namespace BasicApp\Config\Events;

class PagerEvent extends \BasicApp\Event\BaseEvent
{

    public $templates = [];

    public $perPage;

    public function __construct(array $templates, ?int $perPage)
    {
        parent::__construct();

        $this->templates = $templates;

        $this->perPage = $perPage;
    }

}