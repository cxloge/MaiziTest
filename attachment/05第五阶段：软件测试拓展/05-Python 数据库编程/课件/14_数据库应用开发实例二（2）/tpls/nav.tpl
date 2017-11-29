    <div>
    <ul>
    %if user_type == 100:
        <li><a href="/usermgr">用户管理</a></li>
        <li><a href="/lvlmgr">分类管理</a></li>
    %else:
        <li>用户管理</li>
        <li>分类管理</li>
    %end
    <li><a href="/ctxmgr">内容管理</a></li>
    </ul>
    </div>