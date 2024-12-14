<?php
include("header.html")
?>
<link rel="stylesheet" href="register.css">
<form action="action_register.php" method="post">
<div class="imgcontainer">
    <img src="profile.jpg" alt="Avatar" class="avatar">
  </div>
<div class="container">
    <label for="username"><b>نام</b></label>
    <input type="text" placeholder="وارد کردن نام کابری" name="username" required>
    <label for="username"><b>نام خانوادگی</b></label>
    <input type="text" placeholder="وارد کردن نام خانوادگی" name="username" required>
    <label for="username"><b>نام کاربری</b></label>
    <input type="text" placeholder="وارد کردن نام کابری" name="username" required>
    <label for="username"><b>شماره تلفن</b></label>
    <input type="text" placeholder="وارد کردن نام کابری" name="username" required>

    <label for="email"><b>ایمیل</b></label>
    <input type="email" placeholder="وارد کردن ایمیل" name="email" required>

    <label for="passw"><b>رمز عبور</b></label>
    <input type="password" placeholder="وارد کردن رمز عبور" name="passw" required>

    <label for="repassw"><b>تکرار رمز عبور</b></label>
    <input type="password" placeholder="تکرار رمز عبور" name="repassw" required>

    <button type="submit">ورود</button>
  </div>
</form>
<?php
include("footer.html")
?>