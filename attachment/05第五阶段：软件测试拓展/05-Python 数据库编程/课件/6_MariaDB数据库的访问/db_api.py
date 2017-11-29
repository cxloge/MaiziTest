from db_set import *

sql_string_dict = {
"create":'create table genral_tab (card_id integer,name text,address text)',
"insert":
['insert into genral_tab (card_id,name,address) values (1,"LiMing","East Zone")',
'insert into genral_tab (card_id,name,address) values (2,"WangMing","West Zone")',
'insert into genral_tab (card_id,name,address) values (3,"ZhaoMing","South Zone")',
'insert into genral_tab (card_id,name,address) values (4,"DingMing","North Zone")'],
"select":'select * from genral_tab',
"update":'update genral_tab set name="QianMing" where card_id=4',
"delete":'delete from genral_tab where card_id=3',
}

con = connect(**db_name)  #建立连接
cur = con.cursor()      #获取游标

print("Create Table:\n")
cur.execute(sql_string_dict["create"])

print("Insert Data:")
print('(1,"LiMing","East Zone")')
print('(2,"WangMing","West Zone")')
print('(3,"ZhaoMing","South Zone")')
print('(4,"DingMing","North Zone")')
for sql in sql_string_dict["insert"]:
    cur.execute(sql)
print()

print("All Records:")
cur.execute(sql_string_dict["select"])
for row in cur:
    print(row)
print()

cur.execute(sql_string_dict["update"])

print("After Updated:")
cur.execute(sql_string_dict["select"])
for row in cur:
    print(row)
print()

cur.execute(sql_string_dict["delete"])

print("After delete:")
cur.execute(sql_string_dict["select"])
for row in cur:
    print(row)

con.commit()
con.close()