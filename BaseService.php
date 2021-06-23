<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Config;

abstract class BaseService extends \CodeIgniter\Config\BaseService
{

    public static function resetSingle(string $name)
    {
        $name = strtolower($name);

        return parent::resetSingle($name);
    }

}