<!DOCTYPE html>
<html lang="fa">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>صفحه ورود</title>
<style>
  /* ====== تنظیمات عمومی ====== */
  *{
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    direction: rtl;
    background: #f9f9f9;
  }
  a {
    text-decoration: none;
    color: inherit;
  }
  /* ====== فرم ورود ====== */
  .login-container {
    background: #fff;
    padding: 40px 50px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    max-width: 400px; width: 100%;
    margin: 60px auto; /* فاصله از هدر */
    text-align: right;
  }
  h2 {
    margin: 0 0 30px;
    color: #1a237e;
    font-weight: 900;
    text-align: center;
  }
  label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #444;
  }
  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px 14px;
    margin-bottom: 20px;
    border: 1.8px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    outline-color: #ffca28;
    transition: border-color 0.3s;
  }
  input:focus {
    border-color: #ffca28;
  }
  button {
    width: 100%;
    background: #ffca28;
    border: none;
    padding: 12px 0;
    border-radius: 30px;
    font-size: 18px;
    font-weight: 700;
    color: #1a237e;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(255,202,40,0.6);
    transition: background-color 0.3s;
  }
  button:hover {
    background-color: #ffc107cc;
  }
  p {
    margin-top: 10px;
    font-size: 14px;
    color: #555;
    text-align: center;
  }
  p a {
    color: #1a237e;
    font-weight: 700;
    text-decoration: none;
  }
  p a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>

<!-- هدر -->
<?php
  include("header.html")
  ?>
<!-- فرم ورود -->
<div class="login-container">
  <h2>ورود به حساب کاربری</h2>
  <form action="#" method="post">
    <label for="username">نام کاربری</label>
    <input type="text" id="username" name="username" placeholder="نام کاربری خود را وارد کنید" required />
    <label for="password">رمز عبور</label>
    <input type="password" id="password" name="password" placeholder="رمز عبور خود را وارد کنید" required />
    <button type="submit">ورود</button>
  </form>
  <p>حساب کاربری ندارید؟ <a href="#">ثبت نام</a></p>
</div>

<!-- فوتر -->
<?php
  include("footer.html")
  ?>

</body>
</html>
