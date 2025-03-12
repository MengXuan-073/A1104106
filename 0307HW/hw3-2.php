<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>迎新活動報名表單</title>
</head>
<body bgcolor="#f5fffa">
<H3>活動行程表</H3>

<table border="1" width="80%">
	<tr><td bgcolor="#a9a9a9">時間</td><td bgcolor="#a9a9a9">活動</td><td bgcolor="#a9a9a9">地點</td></tr>
	<tr><td>18:00~18:30</td><td>簽到與分組</td><td>理學院-1樓 &nbsp; B111階梯教室</td></tr>
	<tr><td bgcolor="#dcdcdc" colspan="4"><center>中場休息&享用buffet</center></td></tr>
	<tr><td>18:30~19:30</td><td>活動一 <BR> 系所介紹與小組有獎徵答</td><td>理學院-地下一樓 &nbsp;B101 </td></tr>
	<tr><td bgcolor="#dcdcdc" colspan="4"><center>中場休息</center></td></tr>
	<tr><td>19:30~20:30</td><td>活動二 &nbsp; 瘋狂邏輯大風車</td><td>理學院-一樓 &nbsp; 川堂</td></tr>
	<tr><td bgcolor="#dcdcdc" colspan="4"><center>賦歸</center></td></tr>
</table>
<BR>

<hr width="85%" size="2" noshade09:align="center" color="green">

<H2>填寫表單</H2>

<form action="hw3-3.php" method="POST"><br>

<input type="hidden" name="uSecret" value="報名者"><br>

您的姓名 : <input type="text" name="uName" required><br>

您的生理性別 : 男性<input type="radio" name="uGender" value="male">
							女性<input type="radio" name="uGender" value="female"><br>

您的學號 : <input type="text" name="uStudent" pattern="[A-Za-z0-9]+" ><br>

您的電子信箱 : <input type="email" name="uEmail"><br> 

您的年紀 : <input type="number" name="uAge" min="18" max="60"><br>

您的生日 : <input type="date" name="uBirth"><br>

您的年級 : 
        <select name="uGrade">
        <option value="大一">大一</option>  
        <option value="大二">大二</option>  
        <option value="大三">大三</option>
        <option value="大四">大四</option>       
        </select><br></p>

請選擇你喜歡的顏色 ： <input type="color" name="uColor"><br> 

請輸入你的興趣 : 
        室內活動<input type="checkbox" name="uInterest[]" value="室內活動">
        室外活動<input type="checkbox" name="uInterest[]" value="室外活動">
        睡覺<input type="checkbox" name="uInterest[]" value="睡覺">
        遊戲<input type="checkbox" name="uInterest[]" value="遊戲"><br><br>
 
對活動的期待度 : <input type="range" name="uLike"><br> 

任何建議或想說的話 ： <br>
<textarea cols="40" row=15 name="uComment"></textarea><br>

<input type="submit"><input type="reset">
</form>

</body>
</html>