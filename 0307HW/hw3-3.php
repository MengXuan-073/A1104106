<?php
 
 echo "<h3>已收到您的報名—以下是您的回覆</h3>";

 $uSecret=$_POST["uSecret"];
 $uName=$_POST["uName"]; 
 $uGender=$_POST["uGender"];
 $uStudent=$_POST["uStudent"];
 $uEmail=$_POST["uEmail"];
 $uAge=$_POST["uAge"]; 
 $uBirth=$_POST["uBirth"]; 
 $uGrade=$_POST["uGrade"];

 $uColor=$_POST["uColor"];
 $uInterest=$_POST["uInterest"];
 $uLike=$_POST["uLike"];
 $uComment=$_POST["uComment"];

echo $uSecret."<br>";
echo "您的姓名 : ".$uName."<br>";
echo "您的生理性別 : ".$uGender."<br>";
echo "您的學號 : ".$uStudent."<br>";
echo "您的電子信箱 : ".$uEmail."<br>";
echo "您的年紀 : ".$uAge."<br>";
echo "您的生日 : ".$uBirth."<br>";
echo "您的年級 : ".$uGrade."<br>";

echo "您喜歡的顏色 ： ".$uColor."<br>";

echo "您的興趣 : ";
$x = count($uInterest);

if($x==0){

}else{
	for($i=0; $i < $x;$i++ ){
		if($i==$x-1){
			echo $uInterest[$i];
		}else{
			echo $uInterest[$i].",";
		}	
		}
		
	}

echo "<br>"; 

echo "您對活動的期待度 ： ".$uLike."<br>";

echo "<br>"; 

echo "任何建議或想說的話 ： ".nl2br(htmlentities($uComment))."<br>";
// nl2br 將回答者的斷行，原預設會變成空格，轉成段行
// 文字框內預設回答可以放入html語法，也就是可以插入連結或圖片，可能會導致插入病毒
// strip_tags ：可刪除所有功效  ， 或是 htmlentities
?>