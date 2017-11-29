from mongoengine import *

connect('test')

class User(Document):
    userid = SequenceField(primary_key=True)
    name = StringField(max_length=20)
    age = IntField(min_value=6,max_value=17)
    weight = FloatField(max_value=60)

users_data = [{"name":"Mike","age":12,"weight":30.5},
{"name":"John","age":13,"weight":32.5},
{"name":"Lily","age":12,"weight":34.5},
{"name":"Lisa","age":12,"weight":31.8},
]

for d in users_data:
    User(**d).save()
    
for d in User.objects:
    print(d.userid,d.name,d.age,d.weight)

print(User.objects.sum('age') / User.objects.count())
print(User.objects(age__lt=13).sum('age'))
print(User.objects.average('age'))
print(User.objects.distinct('age'))
d = User.objects(age=12).only('name').first()
print(d.userid,d.name,d.age,d.weight)
d = User.objects(age=12).exclude('name').first()
print(d.userid,d.name,d.age,d.weight)
d = User.objects(age=12).exclude('name').all_fields().first()
print(d.userid,d.name,d.age,d.weight)

for d in User.objects(weight__gt=31):
    print(d.userid,d.name,d.age,d.weight)

class Waiter(Document):
    name = StringField(max_length=20)
    custom = ReferenceField(User)

w = Waiter()
w.name = 'Wtr A'
w.custom = d
w.save()
w = Waiter.objects.first()
print(w.name,w.custom.name)

class Member(EmbeddedDocument):
    name = StringField(max_length=20)

class Team(Document):
    name = StringField(max_length=30)
    members = ListField(EmbeddedDocumentField(Member))

ma = Member(name='Lisa')
mb = Member(name='Mike')
t = Team(name='victory',members=[ma,mb])
t.save()
t = Team.objects[0]
for m in t.members:
    print(m.name)

class Ud(Document):
    age = IntField(required=True)
    year_of_birth = IntField()

    def clean(self):
        import datetime
        d = datetime.datetime.now()
        self.year_of_birth = d.year - self.age

ud = Ud(age=10)
ud.save()
print(Ud.objects[0].year_of_birth)

u = User.objects[0]
print(u.id,u.userid,u.pk,u.id is u.pk,u.pk is u.userid)

class Uf(Document):
    name = StringField()
    photo = FileField()

fp = open('test.jpg','rb')
uf = Uf(name='Lisa')
uf.photo.put(fp,content_type = 'image/jpeg')
uf.save()

p = Uf.objects[0].photo.read()
fp = open('lisa.jpg','wb+')
fp.write(p)