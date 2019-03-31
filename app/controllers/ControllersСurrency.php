<?php
    namespace App\Controllers;
    class ControllersСurrency extends Controller{
        static $default = array(
            'apiKey' => 'apiKey=' . '51b66066c0116ab81c40',
            'apiPath' => 'https://free.currencyconverterapi.com/api/',

            
            'title' => 'Easy Сurrency Сonverter',
        );

        function __construct(){

            $data = self::$default;
            $this->view('currency.php', $data);
            
        }
        public function Сurrency(){
            
        }
        
    }