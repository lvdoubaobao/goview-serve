<?php

namespace Xczn\GoViewServe\Http\Controller;

use App\Exceptions\ApiException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Xczn\GoViewServe\Http\Request\LoginRequest;
use function Symfony\Component\String\s;

class AuthController
{
    public function login(LoginRequest  $loginRequest){
        $username=$loginRequest->input('username');
        $password=$loginRequest->input('password');
        $user=User::query()->where('name',$username)->first();
        if (!$user){
            return response()->json([
                'code'=>500,
                'msg'=>'用户名密码不正确'
            ]);
        }
        if (!Hash::check($password,$user->password)){
            return response()->json([
                'code'=>500,
                'msg'=>'用户名密码不正确'
            ]);
        }
        $token=$user->createToken('all')->plainTextToken;
        return response()->json([
            'code'=>200,
            'data'=>[
                'userinfo'=>[
                    "id"=>$user->id,
                    'nickname'=>$user->nickname,
                    'password'=>'',
                    'posId'=>'',
                    'posName'=>'',
                    'userName'=>$user->name,
                    'depId'=>null,
                    'depName'=>null
                ],
                'token'=>[
                    'isLogin'=>true,
                    'loginDevice'=>'default-device',
                    'loginId'=>$user->id,
                    'loginType'=>'login',
                    'sessionTimeout'=>259200,
                    'tag'=>null,
                    'tokenActivityTimeout'=>-1,
                    'tokenName'=>'Authorization',
                    'tokenValue'=>'Bearer '.$token,
                ]
            ]
        ]);

    }
    public function password(){

    }

}
