from mysql.connector import connect

db_name = {
    'host':'localhost',
    'database':'test',
    'user':'root',
    'password':'123456',
}

con = connect(**db_name)
cur = con.cursor()

row = (5,'QinFang',"West Zone")
cur.execute('insert into genral_tab (card_id,name,address) values (%s,%s,%s)',row)

cur.execute('select * from genral_tab')
for row in cur:
    print(row)

print("修改数据……")
cur.execute('update genral_tab set address=%s where card_id=%s',("East zone",5))
cur.execute('select * from genral_tab')
for row in cur:
    print(row)

print("参数化查询……")
cur.execute('select * from genral_tab where card_id=%s',(1,))
for row in cur:
    print(row)

# print("删除数据……")
# cur.execute('delete from genral_tab where card_id=%s',(5,))
# cur.execute('select * from genral_tab')
# for row in cur:
#     print(row)

print("删除数据……")
cur.execute('delete from genral_tab where card_id=%(card_id)s',{'card_id':5,})
cur.execute('select * from genral_tab')
for row in cur:
    print(row)

con.commit()
con.close()