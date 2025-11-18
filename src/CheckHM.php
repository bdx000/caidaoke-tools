<?php
namespace Caidaoke;
class CheckHM{ 
    //  检查MAC地址:00.00.00.00.00.00
    static public function mac(string $mac, string $separator='.'){
        if($separator === '.'){
            return preg_match('/^[a-fA-F0-9]{2}(\.[a-fA-F0-9]{2}){5}$/', $mac);
        } else if($separator === ':'){
            return preg_match('/^[a-fA-F0-9]{2}(:[a-fA-F0-9]{2}){5}$/', $mac);
        }
        return preg_match('/^[a-fA-F0-9]{12}$/', $mac);
    }
    // 检查加密狗地址:00.00.00.00.00.00.00.00
    static public function dog(string $dog, string $separator='.'){
        if(empty($separator)){
            return preg_match('/^[a-fA-F0-9]{16}$/', $dog);
        }
        return preg_match('/^[a-fA-F0-9]{2}(\.[a-fA-F0-9]{2}){7}$/', $dog);
    }
}