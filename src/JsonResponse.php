<?php
namespace Caidaoke;

class JsonResponse{
    public $msg     = ''; //消息信息
    public $data    = []; //返回的数据
    public $code    = 0;  //code为0是正常

    public function  setCode($code){
        switch ($code){
            case 0:
                $this->msg  = '成功';
                break;
            case 1:
                $this->msg  = '参数错误';
                break;
            case 2:
                $this->msg  = '登录失败';
                break;
            case 3:
                $this->msg  = '数据为空';
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