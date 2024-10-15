<?php

namespace Core\Main;

class Settings {
    private $arSettings;

    public function __construct()
    {
        if(file_exists('../../.settings.php')) {
            self::$arSettings = require_once('../../.settings.php');
        }
        //include, inlcude_once, require, require_once
    }

    public function getDbParams(string $dbname = 'default') : mixed
    {
        return self::$arSettings['connections']['value'][$dbname] || false;
    }

    public function getSessionParams() : mixed
    {
        return self::$arSettings['session'] || [];
    }

}

//$test= new Setting(); - инстанцирование класса //
