<?php

namespace Core\Main;

class Setting{
    protected $arSettings;
    public function __constructor() : void
    {
        if(file_exists(filename: '../../.setting.php')){
            self::$arSettings = require_once('../../.settings.php');
            
        }
    }
          static public function getDbParams(string $dbname='default') : mixed
         {

                return self::$arSettings['connections']['value'][$dbname] || false;
         }
         static public function getSessionParams() : mixed 
         {
            return self::$arSettings['session'] || [];
         }
    
}

//$test= new Setting(); - инстанцирование класса //
