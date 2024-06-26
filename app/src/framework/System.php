<?php

namespace App;
use App\System\Database;
use App\System\Debugger;
use App\System\ENV;
use App\System\FileMaker;
use App\System\Session;
use App\System\Config;
use App\System\Translator;
use App\System\View;
use App\System\Router;

class System
{
    use ENV, FileMaker, Session, Database, Debugger, Config, Translator, View, Router;

    public static function up(): void
    {
        self::start_env();
        self::register_debugger()->debug(function (){
            self::config_loader();
            self::Translator_loader();
            self::start_session();
            self::config_view();
        });
    }

}