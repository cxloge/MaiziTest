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
    <p>
        <a href="/lvlmgr">top</a>
        %for lid,lname in bread_nav:
        >><a href="/lvlmgr/{{lid}}">{{lname}}</a>
        %end
    </p>
    <table>
        %for lvl in current_lvls:
        <tr>
            <td><a href="/lvlmgr/{{str(lvl.id)}}">{{lvl.name}}</a></td>
            <td><a href="/lvldel/{{'/'.join((str(lvl.id),parent_lid)) if parent_lid else str(lvl.id)}}">删除</a></td>
            <td><button class="editbutton" name="{{str(lvl.id)}}" type="button">修改</button></td>
            <td><span id="{{str(lvl.id)}}" style="display:none;">
            <form method="POST">
                <input type="text" size="8" name="name" value="{{lvl.name}}" placeholder="分类名称" />
                <input type="hidden" name="lid" value="{{str(lvl.id)}}" />
                <input type="hidden" name="action" value="edit" />
                <input type="submit" value="保存" />
            </form>
            </span></td>
        </tr>
        %end
    </table>
</div>
<div>
<form action="" method="POST">
    <input type="text" name="name" required="required" />
    <input type="hidden" name="action" value="add" />
    <input type="hidden" name="parent_lid" value="{{parent_lid}}" />
    <input type="submit" value="添加" />
</form>
</div>