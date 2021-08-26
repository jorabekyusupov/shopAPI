<?php

namespace App\Mixins;

class ResponseMixin
{
    public function successJson()
    {
       return function($data = null) {
        return [
            'success' => true,
            'data' => $data,
            'msg'   => 'ok'



        ];
       };
    }
    public function errorJson()
    {
       return function($code, $msg) {
        return [
            'success' => false,
            'data' => $code,
            'msg'   => $msg



        ];
       };
    }
}
