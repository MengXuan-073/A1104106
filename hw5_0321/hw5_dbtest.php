<html>

<head>
	<meta charset="utf-8">
</head>

<?php

	$link = mysqli_connect(
	            'localhost',  
	            'root',  
	            '',
	            'hw5_0321');

 // 	if ( !mysqli_select_db($link, "hw5_0321") )
 // 	die("無法開啟  資料庫!<br/>");
 // else
 //    echo "資料庫:  開啟成功!<br/>"; 

// $sql = "SELECT * FROM mystudent";
mysqli_set_charset($link, 'utf8');


// if ( $result = mysqli_query($link, $sql) ) {
// 	echo "<table border='1'>";

// 	while( $row = mysqli_fetch_assoc($result) ){ 
// 		echo "<tr>";
//    		echo "<td>".$row["sno"]."</td>". "<td>".$row["name"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["birthday"]."</td>"."<br/>"."<td>".$row["username"]."</td>". "<td>".$row["password"]."</td>";
//    		echo "</tr>";
// 	}
// 	echo "</table>";

// }

// 讀取 mystudent 資料表
$sql1 = "SELECT * FROM mystudent";
if ($result1 = mysqli_query($link, $sql1)) {
    echo "<h2>學生資料表（mystudent）</h2>";
    echo "<table border='1'>";
    echo "<tr><th>學號</th><th>姓名</th><th>地址</th><th>生日</th><th>帳號</th><th>密碼</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result1)) {
        echo "<tr>";
        echo "<td>".$row["sno"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["birthday"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "</tr>";
    }
    echo "</table><br/>";
} else {
    echo "查詢 mystudent 失敗：" . mysqli_error($link) . "<br/>";
}

// 讀取 user 資料表
$sql2 = "SELECT * FROM user";
if ($result2 = mysqli_query($link, $sql2)) {
    echo "<h2>使用者 ( user )</h2>";
    echo "<table border='1'>";
    echo "<tr><th>編號</th><th>使用者名稱</th><th>密碼</th></tr>";

    while ($row = mysqli_fetch_assoc($result2)) {
        echo "<tr>";
        echo "<td>".$row["sno"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "</tr>";
    }
    echo "</table><br/>";
} else {
    echo "查詢 course 失敗：" . mysqli_error($link) . "<br/>";
}

 

?>


</html>