<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>图形验证码</title>
    </head>
    <body>
        <form action="./bj.php" method="post">
            <input type="text" name="code">
            <img src="./Captcha.php" alt="">
            <input type="submit" name="submit" value="提交">
        </form>
    </body>
</html>