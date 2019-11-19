<?php
	function yy(&$a){
	    $a .= '我是引用传递.';
		echo $a;// 输出 'KANAZAWA, 我是引用传递.'
		echo "<br>";
	}
	
	$b = 'KANAZAWA ';
	yy($b);
	echo $b;    // 输出 '我是外部字符串, 我是引用传递.'
	echo "<br>";



	function DG( $n ) {
    	echo $n."&nbsp;&nbsp;"; //每次递归首先打印的
    	if($n>0)
        	DG($n-1);
    	else
        	echo " <--> ";    
    	echo $n."&nbsp;&nbsp;";  } //递归到0后开始逻辑回去

	 DG(10); 
	 echo "<br>";
	 


	 function one( $a ) {
		     echo "KANAZAWA".$a;
		 }

		
		 function two( $a ) {
		     echo "KANAZAWA1".$a;
		 }   
		//$result = "one";   //将函数名"one"赋给变量$result, 执行$result()时则调用函数one()
		$result = "two"; //将函数名"two"赋给变量$result, 执行$result()时则调用函数two()
		echo $result(5);    //变量$result的函数名值，就调用哪个函数
		
?>