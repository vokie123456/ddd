<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestFunc extends Controller
{
    public function test() {
        $array = array_collapse([[1,2,3],[4,5,6],[7,8,9]]);
        echo '<pre>';
        print_r($array);

        $value = str_limit('The PHP framework for web artisans.', 7);
        echo $value, '<br>';

        echo str_random(40), '<br>';

        echo e('<html>hello</html>'), '<br>'; //字符转换成实体

        echo app_path(), '<br>';

        echo base_path(), '<br>';

        echo config_path(), '<br>';

        echo public_path(), '<br>';

        echo database_path(), '<br>';

        echo url('msg/index'), '<br>';

        echo action('MsgController@del', [3, 'page'=>4]), '<br>';

        echo bcrypt('my-secret-password'), '<br>';

        $value = config('app.timezone');
        echo $value;
        // $value = config('app.timezone', $default);
    }
}
