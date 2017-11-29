import hashlib
from bson.objectid import ObjectId
from cms import Level,News,User

SALT = '&**&^#@@hjkjk^GGIO))(&^&^^}{HYJjg>?<MM?!@@'

def make_pw(name,password):
    pw = hashlib.sha512(SALT.join((name,password)).encode())
    pw = pw.hexdigest()
    return pw

def add_user(name,password):
    pw = make_pw(name,password)
    u = User(name=name,password=pw)
    u.save()
    return u

def add_admin_user(name,password):
    admin_users = User.objects(user_type=100)
    if not admin_users:
        u = add_user(name,password)
        u.user_type = 100
        u.save()

def edit_user(uid,name,password):
    res = User.objects(id=ObjectId(uid))
    if res:
        u = res.first()
        if name:
            u.name = name
        if password:
            u.password = make_pw(name,password)
        u.save()

def ch_pw(uid,opw,npw,name):
    opw = make_pw(name,opw)
    res = User.objects(id=ObjectId(uid)).filter(password=opw)
    if not res:
        return False
    u = res.first()
    npw = make_pw(u.name,npw)
    u.password = npw
    u.save()
    return u

def login(name,pw):
    pw = make_pw(name,pw)
    res = User.objects(name=name).filter(password=pw)
    if not res:
        return False
    return res.first()

def get_users():
    users = User.objects(user_type__ne=100)
    return users if users else []

def del_user(uid):
    User.objects(id=ObjectId(uid)).delete()

def get_power(uid):
    res = User.objects(id=ObjectId(uid))
    if res:
        u = res.first()
        if u.user_type == 100:
            return get_sub_lvls('')
        else:
            return u.power if u.power else []
    return []

def add_power(uids,powerids):
    uids = [ObjectId(i) for i in uids]
    users = User.objects(id__in=uids)
    powerids = [ObjectId(i) for i in powerids]
    powers = Level.objects(id__in=powerids)
    # print(uids,powerids)
    if not users or not powers:
        return
    for user in users:
        user.power.clear()
        for power in powers:
            user.power.append(power)
            user.save()
    return True

def add_level(name,parent_lid=''):
    if parent_lid == '':
        Level(name=name).save()
    else:
        plvl = Level.objects(id=ObjectId(parent_lid)).first()
        lvl = Level(name=name)
        lvl.insert_lvl(plvl.r)

def edit_level(name,lid):
    res = Level.objects(id=ObjectId(lid))
    if not res:
        return
    lvl = res.first()
    lvl.name = name
    lvl.save()

def get_lvls():
    res = Level.objects.order_by('r')
    return res if res else []

def get_sub_lvls(lid):
    if lid == '':
        res = Level.objects(c=0).order_by('r')
        return res if res else []
    res = Level.objects(id=ObjectId(lid))
    if res:
        v = res.first()
        # rc = v.get_pos(v.r)
        # if rc:
        #     re,c = rc
        #     res = Level.objects(r__gt=v.r).filter(r__lt=re).order_by('r')
        #     return res
        lvls = Level.objects(r__gt=v.r).order_by('r')
        sub_lvls = []
        for sub_lvl in lvls:
            if sub_lvl.c > v.c:
                sub_lvls.append(sub_lvl)
            else:
                break
        return sub_lvls if sub_lvls else []
    return []

def del_level(lid):
    res = Level.objects(id=ObjectId(lid))
    if res:
        lvl = res.first()
        r = lvl.r
        lvl.delete()
        lvl.move_before(r)

def del_levels(lid):
    if lid:
        sub_lvls = get_sub_lvls(lid)
        sub_lvls = [str(i.id) for i in sub_lvls]
        sub_lvls.append(lid)
        for lid in sub_lvls:
            del_level(lid)

# def get_users_lvls(uid):
#     user = User.objects(id=uid).first()
#     lvls = []
#     for power in user.power:
#         lvls.extend(get_sub_lvls(power.id))

def get_parent_lvl(lid):
    res = Level.objects(id=ObjectId(lid))
    if res:
        v = res.first()
        res = Level.objects(r__lt=v.r).order_by('-r')
        if res:
            for lvl in res:
                if lvl.c == v.c - 1:
                    return lvl

def get_bread_nav(lid):
    if lid:
        res = Level.objects(id=ObjectId(lid))
        if res:
            lvl = res.first()
            ids = [(lid,lvl.name),]
            # print(lid)
            for i in range(lvl.c):
                # print(i,lvl.c)
                slvl = get_parent_lvl(lid)

                lid = str(slvl.id)
                ids.append((lid,slvl.name))
            ids.reverse()
            return ids if ids else []
    return []


def get_brother_lvls(lid):
    pv = get_parent_lvl(str(ObjectId(lid)))
    if pv:
        sub = get_sub_lvls(str(pv.id))
        if sub:
            r = [v for v in sub if v.c == pv.c + 1]
            return r if r else []
    return []

def get_next_lvls(parent_lid):
    if parent_lid:
        plvl = Level.objects(id=ObjectId(parent_lid)).first()
        if plvl:
            sub_lvls = get_sub_lvls(parent_lid)
            # son_lid = ''
            if sub_lvls:
                r = [v for v in sub_lvls if v.c -1 == plvl.c]
                return r if r else []
            #     for lvl in sub_lvls:
            #         if lvl.c - 1 == plvl.c:
            #             son_lid = str(lvl.id)
            #             break
            # if son_lid:
            #     return get_brother_lvls(son_lid)
    else:
        res = Level.objects(c=0).order_by('r')
        return res if res else []
    return []

def lid_to_lvl(lid):
    if lid:
        res = Level.objects(id=ObjectId(lid))
        if res:
            return res.first()

def add_news(title,txt,lid,uid):
    v = Level.objects(id=ObjectId(lid)).first()
    u = User.objects(id=ObjectId(uid)).first()
    if v in u.power or u.user_type == 100:
        news = News(title=title,txt=txt,author=u.name)
        news.category = v
        news.save()

def has_power(news,powers):
    v = news.category
    all_powers = set()
    all_powers = all_powers.union(powers)
    for p in powers:
        all_powers = all_powers.union(get_sub_lvls(str(p.id)))
    if v in all_powers:
        return True

def get_one_news(nid,uid,user_type):
    news = News.objects(id=ObjectId(nid)).first()
    u = User.objects(id=ObjectId(uid)).first()
    if news.author == u or has_power(news,u.power) or user_type==100:
        return news

def edit_news(nid,uid,title,txt):
    news = get_one_news(nid,uid)
    if news:
        news.title = title
        news.txt = txt
        news.save()

def del_news(nid,uid):
    news = News.objects(id=ObjectId(nid))
    u = User.objects(id=ObjectId(uid)).first()
    if news.category in u.power:
        u.delete()

def check_news(nid,uid,user_type):
    news = News.objects(id=ObjectId(nid)).first()
    u = User.objects(id=ObjectId(uid)).first()
    if news and u and has_power(news,u.power) or user_type==100:
        news.is_released = True
        news.save()

def get_news(lid='',limit=10,page=0):
    if not lid:
        return []
    if lid:
        sub_lvls = get_sub_lvls(lid)
    else:
        sub_lvls = Level.objects(c=0)
    if sub_lvls:
        sub_ids = [ObjectId(lid),]
        sub_ids.extend([i.id for i in sub_lvls])
        start = page * limit
        res = News.objects(category__in=sub_ids).order_by('-release_date')
        if res:
            return res[start:limit + 1]
    return []

def get_last_news(limit=3):
    r = News.objects(id__in=sub_ids).order_by('-release_date')[0:limit]
    return r if r else []

