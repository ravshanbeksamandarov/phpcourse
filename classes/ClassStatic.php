<?php

    class TestClass
    {
        protected static $var_1 = 100;

        public static function getVar()
        {
            return self::$var_1+11;
        }
    }
    echo TestClass::$var_1;
    echo '<br>';
    echo TestClass::getVar();