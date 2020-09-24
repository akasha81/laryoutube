<?php namespace App\Modules; /** * Сервис провайдер для подключения модулей */ 
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider 
{ public function boot() { //получаем список модулей, которые надо подгрузить
     $modules = config("module.modules"); 
     if($modules)
     // { while (list(,$module) = each($modules))
        
        foreach ($modules as  $value){ 

          //  var_dump( $value);

           echo (__DIR__.'/'. $value.'/Routes/routes.php');
         //Подключаем роуты для модуля 
        if(file_exists(__DIR__.'/'.$value.'/Routes/routes.php'))
         { $this->loadRoutesFrom(__DIR__.'/'. $value.'/Routes/routes.php');
                 }
                 //Загружаем View
                 //view('youtube::admin')
                 if(is_dir(__DIR__.'/'. $value.'/Views')) {
                     $this->loadViewsFrom(__DIR__.'/'. $value.'/Views', $value);
                 }
                 //Подгружаем миграции
                 if(is_dir(__DIR__.'/'.$value.'/Migration')) {
                     $this->loadMigrationsFrom(__DIR__.'/'.$value.'/Migration');
                 }
                 
                 
             }
         }
     }

