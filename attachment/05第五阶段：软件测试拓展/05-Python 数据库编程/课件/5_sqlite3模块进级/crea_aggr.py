from sqlite3 import connect,Row
import binascii

db_name = 'test.db'

class AbsSum:
    def __init__(self):
        self.s = 0
    def step(self,v):
        self.s += abs(v)
    def finalize(self):
        return self.s

con = connect(db_name)
con.create_aggregate('abssum',1,AbsSum)

cur = con.cursor()

sql_scrpit = """
drop table if exists testa;
create table if not exists testa(id integer,name text,score integer);
insert into testa (id,name,score) values (3,"Lily",8);
insert into testa (id,name,score) values (4,"Jhon",-7);
"""
cur.executescript(sql_scrpit)

cur.execute('select abssum(score) from testa')
for item in cur:
    print(item)

con.commit()
con.close()