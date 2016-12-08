<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Msg;

class MsgController extends Controller
{
    // // 增加留言
    // public function add() {
    //     if (empty($_POST)) {
    //         return view('msg.add');   
    //     } else {
    //         $data = ['title'=>$_POST['title'], 'content'=>$_POST['content']];
    //         $rs = DB::table('msgs')->insert($data);
    //         return redirect('msg/index');
    //     }
    // }

    // // 删除留言
    // public function del($id) {
    //     $rs = DB::table('msgs')->where('id',$id)->delete();
    //     if ($rs) {
    //         return redirect('msg/index');
    //     } else {
    //         echo 'fail';
    //     }
    // }    

    // // 查看留言
    // public function index() {
    //     $msg = DB::table('msgs')->get();
    //     return view('msg.index', ['msg'=>$msg]);
    // }

    // // 修改留言
    // public function up($id) {
    //     if (empty($_POST)) {
    //         $row = DB::table('msgs')->where('id', $id)->first();
    //         return view('msg.up', ['row'=>$row]);   
    //     } else {
    //         $data = ['title'=>$_POST['title'], 'content'=>$_POST['content']];
    //         $rs = DB::table('msgs')->where('id',$id)->update($data);
    //         if ($rs) {
    //             return redirect('msg/index');
    //         } else {
    //             echo 'fail';
    //         }
    //     }
    // }
    
    // 添加
    public function add(Request $req) {
        if (empty($_POST)) {
            return view('msg.add');
        } else {
            $msg = new Msg();
            $msg->title = $_POST['title'];
            $msg->content = $_POST['content'];
            $rs = $msg->save();
            //return redirect('msg/index');
            echo 'ok';
        }
    }

    // 删除
    public function del($id) {
        $msg = Msg::where('id',$id)->delete();
        if ($msg) { 
            return redirect('msg/index');
        } else {
            echo 'fail';
        }
    }    

    // 查寻
    public function index() {
        // $msg = Msg::where('id','>',2)->orderBy('id','asc')->get();
        // $msg = Msg::where('id', '>', 1)->get();
        $msg = Msg::orderBy('id','asc')->get();
        // $msg = Msg::orderBy('id', 'desc')->get(); //倒序
        // $msg = Msg::where('id','>',1)->skip(1)->take(1)->get();
        return view('msg.index', ['msg'=>$msg]);
    }

    // 修改
    public function up(Request $req, $id) {
        if (empty($_POST)) {
            $msg = Msg::find($id);
            return view('msg.up', ['row'=>$msg]);
        } else {
            $msg = Msg::find($id);
            $msg->title = $req->input('title');
            $msg->content = $req->input('content');
            $msg->age = $req->input('age', 11); //有自动填充作用
            $rs = $msg->save();
            return redirect('msg/index');
        }
    }
}













