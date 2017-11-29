from sqlite3 import connect

db_name = 'test.db'

con = connect(db_name)
cur = con.cursor()

# cur.execute('create table star(id integer,name text,age integer,address text)')

# rows = [(1,"王俊凯",16,"重庆"),(2,"王源",15,"重庆"),(3,"易烊千玺",15,"怀化")]
# for item in rows:
#     cur.execute("insert into star (id,name,age,address) values (?,?,?,?)",item)

# cur.execute('select * from star')
# for row in cur:
#     print(row)

# cur.execute('update star set age=? where id=?',(16,3))
# cur.execute('select * from star')
# for row in cur:
#     print(row)
cur.execute('delete from star where id=?',(3,))
cur.execute('select * from star')
for row in cur:
    print(row)

con.commit()
con.close()