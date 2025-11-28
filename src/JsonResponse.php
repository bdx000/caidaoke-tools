<?php
namespace Caidaoke;

class JsonResponse{
    public $msg     = ''; //消息信息
    public $data    = []; //返回的数据
    public $code    = 0;  //code为0是正常

    public function  setCode($code){
        switch ($code){
            case 0:
                $this->msg  = 'success';
                break;
            case 1:
                $this->msg  = 'param error';
                break;
            case 2:
                $this->msg  = 'login error';
                break;
            case 3:
                $this->msg  = 'data error';
                break;
            case 4:
                $this->msg  = 'upload error';
                break;
            case 5:
                $this->msg  = 'sign error';
                break;
            case 6:
                $this->msg  = 'save error';
                break;
            default:
                $this->msg  = "fail";
        }
        $this->code = $code;
    }

    public function setMsg($msg){
        $this->msg  = $msg;
    }
    public function setData(array $data){
        $this->data = array_merge($this->data,$data);
    }
    public function setDataString($str){
        $this->data = $str;
    }
}