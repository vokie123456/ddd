<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class MsgController extends Controller
{
    // 增加留言
    public function add() {
        if (empty($_POST)) {
            return view('msg.add');   
        } else {
            $data = ['title'=>$_POST['title'], 'content'=>$_POST['content']];
            $rs = DB::table('msgs')->insert($data);
            return redirect('msg/index');
        }
    }

    // 删除留言
    public function del($id) {
        $rs = DB::table('msgs')->where('id',$id)->delete();
        if ($rs) {
            return redirect('msg/index');
        } else {
            echo 'fail';
        }
    }    

    // 查看留言
    public function index() {
        $msg = DB::table('msgs')->get();
        return view('msg.index', ['msg'=>$msg]);
    }

    // 修改留言
    public function up($id) {
        if (empty($_POST)) {
            $row = DB::table('msgs')->where('id', $id)->first();
            return view('msg.up', ['row'=>$row]);   
        } else {
            $data = ['title'=>$_POST['title'], 'content'=>$_POST['content']];
            $rs = DB::table('msgs')->where('id',$id)->update($data);
            if ($rs) {
                return redirect('msg/index');
            } else {
                echo 'fail';
            }
        }
    }
}













