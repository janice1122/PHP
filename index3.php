<HTML>

    <head>
    <meta charset="utf-8">
    <title>系烤報名網頁</title>
    </head>
    
    <body text="green" bgcolor="#BBFFFF" >
    <form method ="post" action ="week3.php">
    <center>
    <a name="#top">
    <font size="8" color="white" face="標楷體">~~肚子餓了嗎~~</font></p>
    <font size="8" color="white" face="標楷體">一年一度的系烤來啦</font></p>
    </center>
    
    <UL>
    <LI>時間：2023/4/5 16：00-21：00
    <LI>地點：高雄大學烤肉區
    <LI>收費標準：100/人(有繳系費)、150/人(沒繳系費)
    <LI>活動內容：烤肉、摸彩
    </UL></br>
    
    <HR width="60%" color="white"></br>
    
    
    <img src="week2/1.jfif" width="30%" >
    
    <img src="week2/2.jpg" width="28.15%"></br></br>
    
    <table border="2" width="40%" >
    <tr><td bgcolor="F5F5DC">時間</td><td bgcolor="F5F5DC">活動流程</td></tr>
    <tr><td>16：00 - 16：30</td><td>報到</td></tr>
    <tr><td>16：30 - 21：00</td><td>烤肉</td></tr>
    <tr><td>20：00 - 20：30</td><td>摸彩</td></tr>
    </table></br>


    <form action="1.php" method="post">
    報名表：</br>

    請輸入您的學號：<input type="text" name="id"></br>
    請輸入您的姓名：<input type="text" name="name" placeholder="請輸入全名" required></br>
    
    葷素調查：</br>
    <input type="radio" name="eat" value="meat">葷</br>
    <input type="radio" name="eat" value="veggie">素</br>
   
    有沒有繳系費：</br>
    <input type="radio" name="cost" value="paid">有</br>
    <input type="radio" name="cost"value="unpaid">無</br>

    飲食調查(請勾選不吃的東西)：</br>
    <input type="checkbox" name="chicken">雞肉</br>
    <input type="checkbox" name="pork">豬肉</br>
    <input type="checkbox" name="beef">牛肉</br>
    <input type="checkbox" name="seafood">海鮮</br>
    <input type="checkbox" name="egg">雞蛋</br>
    <input type="checkbox" name="bean">豆類製品</br>
    <input type="checkbox" name="no">無</br>

    其他建議：</br>
    
    <textarea name ="advice" cols="10" rows="10">
    </textarea><br/>
    <input type="submit">
    <input type="reset"></br>
    
    </form>
    
    </form>
    <a href="#top">回到頂端
    
    
    </body>
    
    
    
    </HTML>