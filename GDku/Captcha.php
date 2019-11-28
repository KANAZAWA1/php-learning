<?php
session_start();
$code = rand(1111,9999);
$_SESSION['code'] = $code;


//1. 创建画布 
$im = imageCreateTrueColor(100, 50);      	//建立空白背景
$white = imageColorAllocate ($im, 255, 255, 255);	//设置绘图颜色
$black  = imageColorAllocate ($im, 0, 0, 0);
//2. 开始绘画
imageFill($im, 0, 0, $white);                    		//绘制背景
imageLine($im, 0, rand(0, 10), 100, rand(0, 10), $black);        	//画线
imageLine($im, 0, rand(10, 20), 100, rand(10, 20), $black);
imageLine($im, 0, rand(20, 30), 100, rand(20, 30), $black);
imageLine($im, 0, rand(30, 40), 100, rand(30, 40), $black);
imageLine($im, 0, rand(40, 50), 100, rand(40, 50), $black);
imageString($im, 50, 25, 15, $code, $black);  	//添加字串
//3. 输出图像
header('Content-type: image/png');
imagePng ($im);     //以 PNG 格式将图像输出
//4. 释放资源
imageDestroy($im);  

?>