<?php
include("header.html")
?>
<form action="action_register.php" method="post">
    <table class="table2">
        <tr>
            <td class="register_table_text">نام </td>
            <td><input type="text" id="realname" name="realname"></td>
        </tr>
        <tr>
            <td class="register_table_text"> نام خانوادگی</td>
            <td><input type="text" id="username" name="username"></td>
        </tr>
        <tr>
            <td class="register_table_text">نام کاربری</td>
            <td><input type="text" id="password" name="password"></td>
        </tr>
        <tr>
            <td class="register_table_text">رمز عبور</td>
            <td><input type="text" id="password" name="password"></td>
        </tr>
        <tr>
            <td class="register_table_text">تکرار رمز عبور</td>
            <td><input type="text" id="repassword" name="repassword"></td>
        </tr>
        <tr>
            <td class="register_table_text">ایمیل</td>
            <td><input type="text" id="email" name="email"></td>
        </tr>
        <tr>
            <td class="register_table_text">شماره تلفن</td>
            <td><input type="text" id="email" name="email"></td>
        </tr>
        <tr>
            <td class="register_table_text"><input type="submit" value="ثبت نام">
            <input type="reset" value="ریست"></td>
        </tr>
    </table>
</form>
<?php
include("footer.html")
?>