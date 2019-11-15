<?php
//sign.php文件
namespace Tool;
class Sign
{
    public function generateSign($data, $signType = "MD5") {
		$sign = '';
		if ("MD5" == $signType) {
			$sign = md5($data);
		}
		return $sign;
	}
}