<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

global $head,$style,$body,$end;

$head = '<html><head>';
$style = <<<EOF
<style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-algin:right; color:#eee;
    margin: -40px 0px -50px 0px; }
</style>
EOF;
$body = "</head><body>";
$end = "</body></html>";

function tag ($tag,$txt,$href=0){
    if($href == 0){
        return "<{$tag}>".$txt."</{$tag}>";
    }else{
        return "<{$tag} href='{$href}'>".$txt."</{$tag}>";
    }

}

class HelloController extends Controller
{
  
    public function index(Request $request){

        $items = DB::select('select * from adm');

        return view('hello.index',['items'=>$items]);

        // return view('hello.index',['data'=>$request->data]);

        // $data = [
        //     ['name' => 'マドカ ダイゴ' , 'mail' => 'tiga-1996guts@east.tpc.jp'],
        //     ['name' => 'アスカ シン' , 'mail' => 'dyna-1997super@earth.tpc.jp'],
        //     ['name' => '高山 我夢' , 'mail' => 'gaia-1998xig@ariel.guard.earth']
        // ];

        // return view('hello.index',['data' => $data ,'massage' => 'コントローラーメッセージだ！']);



    }

    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $this->validate($request,$validate_rule);
        return view('hello.index',['msg'=>'正しく入力されたみたいだぜ！一歩前進だな！']);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request){
        
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age'  => $request->age,
        ];

        DB::insert('insert into adm (name , mail ,age) values (:name, :mail, :age)', $param);

        return redirect('/hello');
    }

}
