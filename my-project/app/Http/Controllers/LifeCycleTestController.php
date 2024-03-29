<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    //
    public function showServiceProviderTest()
    {
        $encrypt = app()->make("encrypter");
        $password = $encrypt->encrypt("password");
        
        $serviceProvider = app()->make("serviceProviderTest");
        
        dd($serviceProvider, $password, $encrypt->decrypt($password));
    }
    
    public function showServiceLifeCycleTest() 
    {
        app()->bind('lifeCycleTest', function() {
            return 'ライフサイクルテスト';
        });
        // サービスコンテナなしのパターン
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();


        // サービスコンテナありのパターン
        app()->bind("sample", Sample::class);
        $sample = app("sample");
        $sample->run();
        dd(app());
    } 
}

class Message
{
    public function send()
    {
        echo "メッセージ表示";
    }
}

class Sample
{
    public $message;
    public function __construct(Message $message) {
        $this->message = $message;        
    }

    public function run() {
        $this->message->send();
    }
}
