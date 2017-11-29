from sqlite3 import connect
db_name = 'testb.db'

con = connect(db_name)
cur = con.cursor()

sql_str = """
create table test(id integer,name text);
insert into test (id,name) values (1,'Lily');
insert into test (id,name) values (2,'Green');
"""
cur.executescript(sql_str)

cur.execute('select * from test')
for item in cur:
    print(item)

con.commit()



con.close()