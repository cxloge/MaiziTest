from bottle import route,run,error,static_file,request,response,template,redirect
from tools.verify_gen import get_verify
import cmstools

secret = 'df%$%^&*()_++((*&^%$:""><<<Q#TG'
@error(404)
def err(err):
    return '404'

@route('/static/<filename:re:.*.[js|css|jpg|jpeg|png]$>')
def get_tatic(filename):
    rootdir = './img'
    if filename.endswith('js'):
        rootdir = './js'
    if filename.endswith('css'):
        rootdir = './css'
    return static_file(filename,root=rootdir)

@route('/verify')
def verify():
    img,text = get_verify()
    response.set_cookie('verify_text',text,secret=secret)
    return img

@route('/',method=['GET','POST'])
def index():
    info = request.get_cookie('info',secret=secret)
    response.set_cookie('info','',secret=secret)
    if request.method == 'GET':
        name = request.get_cookie('name',secret=secret)
        id = request.get_cookie('id',secret=secret)
        user_type = request.get_cookie('user_type',secret=secret)
        print('.....',name,id,user_type)
        return template('tpls/index.tpl',
            name=name,
            id=id,
            user_type=user_type,
            info=info
            )
    elif request.method == 'POST':
        verify_text = request.get_cookie('verify_text',secret=secret)
        response.set_cookie('verify_text','',secret=secret)
        if verify_text and verify_text.lower() == \
            request.forms.getunicode('verify_text').lower().strip():
            name = request.forms.getunicode('name')
            password = request.forms.getunicode('password')
            u = cmstools.login(name,password)
            if u:
                response.set_cookie('name',u.name,secret=secret)
                response.set_cookie('id',str(u.id),secret=secret)
                response.set_cookie('user_type',u.user_type,secret=secret)
                return template('tpls/index.tpl',
                    name=name,
                    id=str(u.id),
                    user_type=u.user_type,
                    info=info)
            else:
                response.set_cookie('info',
                    "登录失败，请检查用户名或密码！",
                    secret=secret)
        else:
            response.set_cookie('info',"验证码错误，请重新登录！",
                secret=secret)
        redirect('/')

def admin_verify(go_url='/'):
    user_type = request.get_cookie('user_type',secret=secret)
    if user_type != 100:
        response.set_cookie('info',
            "你未登录或无权限此项使用管理功能！",
            secret=secret)
        redirect(go_url)

def login_verify(go_url='/'):
    name = request.get_cookie('name',secret=secret)
    id = request.get_cookie('id',secret=secret)
    if name and id:
        return id
    response.set_cookie('info',
            "请登录后使用管理功能！",
            secret=secret)
    redirect(go_url)

@route('/usermgr',method=["GET","POST"])
def usermgr():
    admin_verify()
    if request.method == "GET":
        users = cmstools.get_users()
        lvls = cmstools.get_lvls()
        user_type = request.get_cookie('user_type',secret=secret)
        name = request.get_cookie('name',secret=secret)
        id = request.get_cookie('id',secret=secret)
        return template('tpls/usermgr.tpl',
            users=users,
            lvls=lvls,
            name=name,
            id=id,
            user_type=user_type)
    if request.method == "POST":
        action = request.forms.getunicode('action')
        if action == "add":
            name = request.forms.getunicode('name')
            password = request.forms.getunicode('password')
            cmstools.add_user(name=name,password=password)
        elif action == "power":
            param_keys = [i for i in request.forms.keys()]
            # print(param_keys)
            uid_suffix = '-chkbox'
            lvl_suffix = '-vchkbox'
            user_ids = [i[:-len(uid_suffix)] for i in param_keys 
                if i.endswith(uid_suffix)]
            lvl_ids = [i[:-len(lvl_suffix)] for i in param_keys 
                if i.endswith(lvl_suffix)]
            cmstools.add_power(user_ids,lvl_ids)
        elif action == 'edit':
            name = request.forms.getunicode('name').strip()
            password = request.forms.getunicode('password').strip()
            uid = request.forms.getunicode('uid')
            cmstools.edit_user(uid,name,password)
        redirect('/usermgr')

@route('/userdel/<id>')
def userdel(id=None):
    admin_verify()
    if id:
        cmstools.del_user(id)
    redirect('/usermgr')

@route('/lvlmgr',method=["GET","POST"])
@route('/lvlmgr/<parent_lid>',method=["GET","POST"])
def lvlmgr(parent_lid=''):
    admin_verify()
    if request.method == 'GET':
        bread_nav = cmstools.get_bread_nav(parent_lid)
        name = request.get_cookie('name',secret=secret)
        current_lvls = cmstools.get_next_lvls(parent_lid)
        user_type = request.get_cookie('user_type',secret=secret)
        id = request.get_cookie('id',secret=secret)
        return template('tpls/lvlmgr.tpl',
            name=name,
            id=id,
            current_lvls=current_lvls,
            parent_lid=parent_lid,
            bread_nav=bread_nav,
            user_type=user_type)
    if request.method == 'POST':
        action = request.forms.getunicode('action')
        if action == 'add':
            name = request.forms.getunicode('name')
            parent_lid = request.forms.getunicode('parent_lid')
            cmstools.add_level(name,parent_lid)
        elif action == 'edit':
            name = request.forms.getunicode('name').strip()
            lid = request.forms.getunicode('lid')
            cmstools.edit_level(name,lid)
        url = '/lvlmgr/' + parent_lid if parent_lid else '/lvlmgr'
        redirect(url)

@route('/lvldel/<lid>')
@route('/lvldel/<lid>/<parent_lid>')
def lvldel(lid='',parent_lid=''):
    admin_verify()
    if lid:
        cmstools.del_levels(lid)
    url = ''.join(('/lvlmgr/',parent_lid)) if parent_lid else '/lvlmgr'
    redirect(url)

@route('/chgpw/<uid>',method=["GET","POST"])
def chgpw(uid):
    id = login_verify()
    if uid != id:
        redirect('/')
    if request.method == "GET":
        name = request.get_cookie('name',secret=secret)
        user_type = request.get_cookie('user_type',secret=secret)
        id = request.get_cookie('id',secret=secret)
        return template('tpls/chgpw.tpl',
            name=name,
            id=id,
            user_type=user_type)
    elif request.method == "POST":
        opassword = request.forms.getunicode('opassword').strip()
        npassword = request.forms.getunicode('npassword').strip()
        kpassword = request.forms.getunicode('kpassword').strip()
        name = request.get_cookie('name',secret=secret)
        if opassword and npassword and\
            npassword == kpassword and opassword != npassword:
            cmstools.ch_pw(uid,opassword,npassword,name)
            response.set_cookie('info','你密码更改，请重新登录！',secret=secret)
        redirect('/logout')


@route('/ctxmgr',method=['GET','POST'])
@route('/ctxmgr/<lid>',method=['GET','POST'])
@route('/ctxmgr/<lid>/<page>',method=['GET','POST'])
def ctxmgr(lid='',page=0):
    uid = request.get_cookie('id',secret=secret)
    login_verify()
    if request.method == 'GET':
        name = request.get_cookie('name',secret=secret)
        user_type = request.get_cookie('user_type',secret=secret)
        power = cmstools.get_power(uid)
        powers = []
        next_lvls = []
        bread_nav_dec = []
        if power:
            for p in power:
                powers.append(cmstools.get_sub_lvls(str(p.id)))
        if powers and lid:
            bread_nav = cmstools.get_bread_nav(lid)
            ids = set().union(*powers)
            ids = {str(i.id) for i in ids}
            for bn in bread_nav:
                if bn[0] in ids:
                    bread_nav_dec.append(bn)
            next_lvls = cmstools.get_next_lvls(lid)
        news = cmstools.get_news(lid)
        return template('tpls/ctxmgr.tpl',
            name=name,
            id=uid,
            lid=lid,
            user_type=user_type,
            power=power,
            bread_nav=bread_nav_dec,
            next_lvls=next_lvls,
            news=news)
    elif request.method == "POST":
        action = request.forms.getunicode('action')
        if action == "add":
            add_ctx()
        elif action == "release":
            print('.........',action)
            release()

def add_ctx():
    title = request.forms.getunicode('title')
    uid = request.forms.getunicode('uid')
    lid = request.forms.getunicode('lid')
    txt = request.forms.getunicode('txt')
    if title and uid and lid and txt:
        cmstools.add_news(title,txt,lid,uid)
    redirect('/ctxmgr/' + lid if lid else '/ctxmgr')

def release():
    key_suffix = '-rels'
    param_keys = [i for i in request.forms.keys() if i.endswith(key_suffix)]
    user_type = request.get_cookie('user_type',secret=secret)
    lid = request.forms.getunicode('lid')
    uid = request.get_cookie('id',secret=secret)
    for key in param_keys:
        nid = request.forms.getunicode(key)
        cmstools.check_news(nid,uid,user_type)
    redirect('/ctxmgr/' + lid)

@route('/delctx/<nid>')
def delctx(nid):
    uid = request.get_cookie('id',secret=secret)
    if nid and uid:
        cmstools.del_news(nid,uid)
    redirect('/ctxmgr/' + uid)

@route('/editctx/<lid>/<nid>',method=["GET","POST"])
def editctx(lid,nid):
    login_verify()
    name = request.get_cookie('name',secret=secret)
    user_type = request.get_cookie('user_type',secret=secret)
    uid = request.get_cookie('id',secret=secret)
    power = cmstools.get_power(uid)
    if request.method == "GET":
        if nid:
            news = cmstools.get_one_news(nid,uid,user_type)
            if news:
                return template('tpls/editctx.tpl',
                    id=uid,
                    lid=lid,
                    name=name,
                    power=power,
                    user_type=user_type,
                    news=news)
        redirect('/ctxmgr/' + lid)
    elif request.method == "POST":
        title = request.forms.getunicode('title')
        txt = request.forms.getunicode('txt')
        uid = request.get_cookie('id',secret=secret)
        if nid:
            cmstools.edit_news(nid,uid,title,txt)
        redirect('/ctxmgr/' + lid)



@route('/logout')
def logout():
    response.delete_cookie('id')
    response.delete_cookie('user_type')
    response.delete_cookie('name')
    redirect('/')


ADD_AMDIN = True
DEFAULT_ADMIN = {'name':'adm','password':'123'}

if __name__ == '__main__':
    if ADD_AMDIN:
        cmstools.add_admin_user(**DEFAULT_ADMIN)
    run(port=9099,debug=True,reloader=True)