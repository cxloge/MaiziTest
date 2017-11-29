% rebase('tpls/base.tpl')
<div>
    %if name:
    你好，{{name}}|<a href="/chgpw/{{id}}">个人中心</a>|<a href="/logout">退出</a>
    %end
</div>
% include('tpls/nav.tpl',user_type=user_type)
<div>
<form action="" method="POST">
    <p>旧密码：　<input type="password" name="opassword" required="required" /></p>
    <p>新密码：　<input type="password" name="npassword"  required="required" /></p>
    <p>验证密码：<input type="password" name="kpassword" required="required" /></p>
    <p><input type="submit" value="修改密码" /></p>
</form>
</div>