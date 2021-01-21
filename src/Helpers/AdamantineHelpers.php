<?php

namespace Adamantine\Adamantine\Helpers;

trait AdamantineHelpers {
    public static function writeEnv($key, $value) {
        $_env = file_get_contents(base_path() . '/.env');
        $env = preg_split('/\s+/', $_env);;
        foreach ($env as $i) {
            $parsed_env[] = explode('=', $i);
        }
        //Check if key value already exist
        $is_in_array = array_search([$key, $value], $parsed_env);
        if(is_int($is_in_array)) throw new \Exception('Key value already exist');
        //Write the key value
        file_put_contents(base_path().'/.env', $_env.PHP_EOL.("$key=$value"));
    }

    public static function updateEnv($key, $value) {
        $_env = file_get_contents(base_path() . '/.env');
        if(empty(env($key))) {
            throw new \Exception('Key is not exist yet');
        }
        $env = preg_split('/\s+/', $_env);;
        foreach ($env as $i) {
            $parsed_env[] = explode('=', $i);
        }

        //Check if key value already exist
        $init_value = env($key);
        $is_in_array = array_search([$key, $init_value], $parsed_env);
        if(empty($is_in_array)) throw new \Exception('Key value is not exist');

        //Rewrite key-value
        $new_value = str_replace("\n$key=$init_value", "\n$key=$value", $_env);
        file_put_contents(base_path().'/.env', $new_value);
    }
}
