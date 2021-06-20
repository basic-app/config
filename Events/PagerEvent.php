<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
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