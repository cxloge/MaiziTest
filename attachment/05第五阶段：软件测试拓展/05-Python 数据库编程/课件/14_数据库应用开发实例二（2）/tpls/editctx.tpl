% rebase('tpls/base.tpl')
<div>
    %if name:
    你好，{{name}}|<a href="/chgpw/{{id}}">个人中心</a>|<a href="/logout">退出</a>
    %end
</div>

%if name and power:
% include('tpls/nav.tpl',user_type=user_type)
%end
%if name:
    <div>
    <form method="POST">
        <input type="text" name="title" size="100" value="{{news.title}}" placeholder="请输入标题" />
        <textarea name="txt">{{news.txt}}</textarea>
        <input type="submit" value="保存" />
    </form>
    </div>
%end