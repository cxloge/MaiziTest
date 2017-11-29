import datetime
from mongoengine import *
connect('test')

class Level(Document):
    name = StringField(max_length=20)
    r = IntField(unique=True,required=True)
    c = IntField(required=True)

    def insert_lvl(self,parent_r):
        r_c = self.get_pos(parent_r)
        if r_c:
            r,c = r_c
            self.move_after(r)
            self.r = r
            self.c = c
            self.save()

    def get_pos(self,parent_r):
        res = Level.objects(r=parent_r)
        if res:
            lvln = res.first()
        else:
            return None
        lvls = Level.objects(r__gt=lvln.r).order_by('r')
        if lvls:
            for lvl in lvls:
                if lvl.c <= lvln.c:
                    return lvl.r,lvln.c + 1
            else:
                return lvl.r + 1,lvln.c + 1
        return lvln.r + 1,lvln.c + 1

    def move_after(self,r):
        lvls = Level.objects(r__gte=r).order_by('-r')
        if lvls:
            for lvl in lvls:
                lvl.update(inc__r=1)

    def move_before(self,r):
        lvls = Level.objects(r__gte=r).order_by('+r').update(dec__r=1)

    def clean(self):
        if self.r is None:
            self.r = 0
            res = Level.objects.order_by('-r')
            if res:
                self.r = res.first().r + 1
        if self.c is None:
            self.c = 0

class User(Document):
    name = StringField(max_length=20,unique=True)
    password = StringField(max_length=256)
    user_type = IntField(default=1)
    power = ListField(ReferenceField(Level))

class News(Document):
    title = StringField(max_length=200,required=True)
    txt = StringField(required=True)
    author = StringField(max_length=20)
    category = ReferenceField(Level,reverse_delete_rule=CASCADE)
    releaser = ReferenceField(User)
    release_date = DateTimeField(default=datetime.datetime.now())
    is_released = BooleanField(default=False)
