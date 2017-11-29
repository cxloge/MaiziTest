% rebase('tpls/base.tpl')
<script type="text/javascript">
    $(function(){
        $(".editbutton").click(function(){
            idstr = $(this).attr('name');
            $('#'+idstr).show();
            $(".editbutton").hide()
        });
    });
</script>
<div>
    %if name:
    你好，{{name}}|<a href="/chgpw/{{id}}">个人中心</a>|<a href="/logout">退出</a>
    %end
</div>
% include('tpls/nav.tpl',user_type=user_type)
<div>
    <table>
        %for u in users:
        <tr>
            <td><input type="checkbox" name="{{str(u.id)}}-chkbox" value="{{str(u.id)}}" form="save_power" /></td>
            <td>{{u.name}}</td>
            <td>{{','.join([lvl.name for lvl in u.power])}}</td>
            <td><a href="/userdel/{{str(u.id)}}">删除</a></td>
            <td><button class="editbutton" name="{{str(u.id)}}" type="button">修改</button></td>
            <td><span id="{{str(u.id)}}" style="display:none;">
            <form method="POST">
                <input type="text" size="8" name="name" value="{{u.name}}" placeholder="姓名" />
                <input type="password" size="8" name="password" value="" placeholder="密码" />
                <input type="hidden" name="uid" value="{{str(u.id)}}" />
                <input type="hidden" name="action" value="edit" />
                <input type="submit" value="保存" />
            </form>
            </span></td>
        </tr>
        %end
    </table>
    <table>
        %for lvl in lvls:
        <tr>
            <td><input type="checkbox" name="{{str(lvl.id)}}-vchkbox" value="{{str(lvl.id)}}"  form="save_power" /></td>
            %for i in range(lvl.c):
                <td></td>
            %end
            <td>{{lvl.name}}</td>
        </tr>
        %end
    </table>
    <form method="POST" id="save_power">
    <input type="hidden" name="action" value="power" />
    <input type="submit" value="保存权限" />
    </form>
</div>
<div>
<form action="" method="POST">
    <input type="text" name="name" required="required" />
    <input type="password" name="password" required="required" />
    <input type="hidden" name="action" value="add" />
    <input type="submit" value="添加" />
</form>
</div>