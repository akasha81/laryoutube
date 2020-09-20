<?php namespace App\Modules;  class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider { public function boot() { //получаем список модулей, которые надо подгрузить $modules = config("module.modules"); if($modules) { while (list(,$module) = each($modules)){ //Подключаем роуты для модуля if(file_exists(__DIR__.'/'.$module.'/Routes/routes.php')) { $this->loadRoutesFrom(__DIR__.'/'.$module.'/Routes/routes.php');
                 }
                
                 if(is_dir(__DIR__.'/'.$module.'/Views')) {
                     $this->loadViewsFrom(__DIR__.'/'.$module.'/Views', $module);
                 }
            
                 if(is_dir(__DIR__.'/'.$module.'/Migration')) {
                     $this->loadMigrationsFrom(__DIR__.'/'.$module.'/Migration');
                 }
                 
                 //trans('Test::messages.welcome')
                 if(is_dir(__DIR__.'/'.$module.'/Lang')) {
                     $this->loadTranslationsFrom(__DIR__.'/'.$module.'/Lang', $module);
                 }
             }
         }
     }

     public function register() 
     {

     }
 }