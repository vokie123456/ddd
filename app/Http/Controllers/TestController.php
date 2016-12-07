<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    // DB类执行添加操作
    public function add() {
        $data = ['title'=>'布尔教育', 'content'=>'laravel'];
        $rs = DB::table('msgs')->insert($data);        
        return $rs ? 'ok' : 'fail';
    }

    public function add() {
        $data = [
            ['title'=>'test1', 'content'=>'测试1'],
            ['title'=>'test2', 'content'=>'测试2'],
        ];  

        $rs = DB::table('msgs')->insert($data);      
        return $rs ? 'ok' : 'fail';
    }

    public function add1() {
        $data = ['title'=>'主键', 'content'=>'获取id'];

        $rs = DB::table('msgs')->insertGetId($data);

        var_dump($rs);
    }

    // select * from where age+1=10
    // 修改
    public function up() {
        $rs = DB::table('msgs')->where('id', 1)->increment('age', 5);
        // $rs = DB::table('msgs')->where('id', 2)->decrement('age');
        return $rs ? 'ok' : 'fail';
    }

    public function del() {
        $rs = DB::table('msgs')->where('id', 1)->delete();
        return $rs ? 'ok' : 'fail';
    }

    public function show() {
        $rs = DB::table('msgs')->get();
        // $rs = DB::table('msgs')->where('id', '>', 2)->get();
        // $rs = DB::table('msgs')->where('id','=',2)->first();
        // $rs = DB::table('msgs')->where('id','>',2)->select('id', 'title')->get();
        echo '<pre>';
        print_r($rs);
    }
    
       // 模版测试
    public function test() {
        $user = ['lisi', 'wangwu', 'maliu'];
        $data = ['title'=>'布尔教育', 'content'=>'lavarel', 'score'=>mt_rand(40,90), 'user'=>$user];
        return view('test', $data);
    }

    public function test1() {
        return view('son');
    }
}
