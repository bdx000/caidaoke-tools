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
            case 100:
                $this->msg  = '参数错误';
                break;
            case 101:
                $this->msg  = '签名错误';
                break;
            case 300:
                $this->msg  = '登录失败';
                break;
            case 301:
                $this->msg  = '数据库错误';
                break;
            case 302:
                $this->msg  = '保存错误';
                break;
            case 303:
                $this->msg  = '数据不存在';
                break;
            case 400:
                $this->msg  = '上传错误';
                break;
            case 500:
                $this->msg  = '设备不在线';
                break;
            case 501:
                $this->msg  = '设备未注册';
                break;
            default:
                $this->msg  = "系统错误";
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