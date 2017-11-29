from sqlite3 import connect,Row,Binary
import binascii

db_name = 'test.db'

con = connect(db_name)
cur = con.cursor()

sql_scrpit = """
drop table if exists testa;
create table if not exists testa(id integer,data blob);
"""
cur.executescript(sql_scrpit)

f = open('test.jpg','rb')

cur.execute('insert into testa (id,data) values (3,?)',(f.read(),))

cur.execute('select * from testa where id=3')
record = cur.fetchone()
f = open('tt.jpg',"wb+")
f.write(record[1])

con.commit()
con.close()