<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Config;

use BasicApp\Config\Events\PagerEvent;

class Pager extends \CodeIgniter\Config\BaseConfig
{

    public $templates = [];

    public $perPage;

    public function __construct()
    {
        $event = PagerEvent::trigger($this->templates, $this->perPage);
    
        $this->templates = $event->templates;

        $this->perPage = $event->perPage;
    }

}