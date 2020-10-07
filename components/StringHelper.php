<?php
namespace app\components;

/**
 * Description of StringHelper
 *
 * @author admin
 */
class StringHelper
{
    public function getShort($string , $limit = 20)
    {
        return substr($string , 0 , $limit);
    }
}