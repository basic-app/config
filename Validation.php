<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Config;

use BasicApp\Config\Events\ValidationEvent;

class Validation
{

    public $ruleSets = [];

    public $templates = [];

    public function __construct()
    {
        $event = ValidationEvent::trigger($this->ruleSets, $this->templates);
    
        $this->ruleSets = $event->ruleSets;

        $this->templates = $event->templates;
    }

}