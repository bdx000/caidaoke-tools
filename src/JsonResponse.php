<?php
/**
 *  为了防止code与http状态码冲突，重新定义4位数状态码，并兼容前版本中的3位状态码。3位状态不再建议使用，会在后续版本中删除
 */
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
            case 1000:
                $this->msg  = '参数错误';
                break;
            case 101:
            case 1001:
                $this->msg  = '签名错误';
                break;
            case 300:
            case 3000:
                $this->msg  = '登录失败';
                break;
            case 301:
            case 3001:
                $this->msg  = '数据库错误';
                break;
            case 302:
            case 3002:
                $this->msg  = '保存错误';
                break;
            case 303:
            case 3003:
                $this->msg  = '数据不存在';
                break;
            case 400:
            case 4000:
                $this->msg  = '上传错误';
                break;
            case 500:
            case 5000:
                $this->msg  = '设备不在线';
                break;
            case 501:
            case 5001:
                $this->msg  = '设备未注册';
                break;
            case 502:
            case 5002:
                $this->msg  = '消息下发失败';
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