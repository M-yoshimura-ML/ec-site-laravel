<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainer(){
        app()->bind('lifeCycleTest', function(){
            return 'ライフサイクルテスト';
        });
        $test =app()->make('lifeCycleTest');
        //サービスコンテナなし
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();

        //サービスコンテナapp()あり
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();
        dd($test, app());
    }

    public function showServiceProvider(){
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password');

        $sample = app()->make('serviceProviderTest');
        dd($sample, $password, $encrypt->decrypt($password));
    }
}

class Sample
{
    public $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
    public function run(){
        $this->message->send();
    }
}

class Message
{
    public function send(){
        echo('メッセージ表示');
    }

}
