from sqlite3 import connect,Row
import binascii

db_name = 'test.db'

def encrypt(mydata):
    crc = str(binascii.crc32(mydata.encode()))
    while len(crc) < 10:
        crc = '0'+ crc
    return mydata + crc

def check(mydata):
    if len(mydata) < 11:
        return None
    crc_res = str(binascii.crc32(mydata[:-10].encode()))
    while len(crc_res) < 10:
        crc_res = '0'+ crc_res
    if crc_res == mydata[-10:]:
        return mydata[:-10]


con = connect(db_name)
con.create_function('checkk',1,check)

cur = con.cursor()

sql_scrpit = """
drop table if exists testa;
create table if not exists testa(id integer,name text);
insert into testa (id,name) values (3,"%s");
insert into testa (id,name) values (4,"%s");
"""
names = ['Lily','Green']
names = tuple(encrypt(i) for i in names)
sql_scrpit = sql_scrpit % names
print(sql_scrpit)
cur.executescript(sql_scrpit)

cur.execute('select id,checkk(name) from testa')
for item in cur:
    print(item)

cur.execute('update testa set name=? where id=?',('dfddkkjd1122334455',4))
cur.execute('select id,checkk(name) from testa')
for item in cur:
    print(item)

con.commit()
con.close()