% rebase('tpls/base.tpl')
<div>
    %if name:
    你好，{{name}}|<a href="/chgpw/{{id}}">个人中心</a>|<a href="/logout">退出</a>
    %end
</div>

%if name and power:
    % include('tpls/nav.tpl',user_type=user_type)
    <div>
        %for p in power:
        <a href="/ctxmgr/{{str(p.id)}}">{{p.name}}</a>
        %end
        <br/> 
        %for lid,lname in bread_nav:
        >><a href="/ctxmgr/{{lid}}">{{lname}}</a>
        %end
        %for nv in next_lvls:
        <a href="/ctxmgr/{{str(nv.id)}}">{{nv.name}}</a>
        %end
    </div>
    <div>
        <table>
            %for new in news:
            <tr>
                <td>{{new.title}}</td>
                <td>{{new.txt[:40]}}</td>
                <td><input type="checkbox" {{"checked" if new.is_released else ""}}  form="save_check" name="{{str(new.id)}}-rels" value="{{str(new.id)}}" />审核通过</td>
                <td><a href="/delctx/{{str(new.id)}}">删除</a></td>
                <td><a href="/editctx/{{lid}}/{{str(new.id)}}">修改</a></td>
            </tr>
            %end
        </table>
        %if news:
        <form id="save_check" method="POST">
            <input type="hidden" name="lid" value="{{lid}}" />
            <input type="hidden" name="action" value="release" />
            <input type="submit" value="保存所有审核" />
        </form>
        %end
    </div>

    <div>
    <form method="POST">
        <input type="text" name="title" size="100" placeholder="请输入标题" />
        <input type="hidden" name="uid" value="{{id}}" />
        <br/>
        <textarea name="txt" cols="73" rows="10" placeholder="在此输入内容"></textarea>
        <input type="hidden" name="lid" value="{{lid}}" />
        <input type="hidden" name="action" value="add">
        <br/>
        <input type="submit" value="保存" />
    </form>
    </div>
%end