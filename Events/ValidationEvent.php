<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
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