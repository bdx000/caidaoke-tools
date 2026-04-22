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

    // 生成随机字符串
    static public function GetSequeid(){ 
        $t1='1970-01-01';
		$t2= date("Y-m-d H:i:s");
		$arr[]=rand(1,9);
		$randVal = strval($arr[0]);
		$date1 = strtotime($t1);
		$date2 = strtotime($t2);
		$diff = $date2-$date1;
		$diff1 = substr($diff,0,strlen($diff) - 2);
		$diff2 = substr($diff,strlen($diff) - 1,1);
		$strDiff = $diff1.$randVal.$diff2;
		$strDiffDecHex = strval(dechex($strDiff));
		$len = strlen($strDiffDecHex);
		$beginPos = 0;
		if($len > 8){
		    $beginPos = $len - 8;
		    $strDiffDecHex = substr($strDiff, $beginPos);
		    $strDiff = $strDiffDecHex;
		}else{
		    $beginPos = 8 - $len;
		    $strDiff = $strDiffDecHex;
		    for($i = 0;$i<= $beginPos - 1;$i++){
		        $strDiff = "0".$strDiff;
		    }
		}
		return $strDiff;
    }
}