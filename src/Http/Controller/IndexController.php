<?php

namespace Xczn\GoViewServe\Http\Controller;

class IndexController
{
    public function getOssInfo(){
        return response()->json([
            'msg'=>'返回成功',
            'code'=>200,
            'data'=>[
                'BucketName'=>'v2-cloud',
                'bucketURL'=>'http://127.0.0.1:8000/'
            ]
        ]);
    }
}
