<?php defined('SYSPATH') or die('No direct script access.');

class Redbean
{
        function __construct()
        {
                //require_once APPPATH.'vendors/redbean/rb.php';
                $config = Kohana::$config->load('redbean');
                R::setup($config->connectstring,$config->user,$config->pass);
        }
}