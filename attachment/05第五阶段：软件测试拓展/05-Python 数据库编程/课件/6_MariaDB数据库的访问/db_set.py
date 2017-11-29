# from sqlite3 import connect
from mysql.connector import connect

# db_name = ":memory:"
# db_name = {"database":":memory:"}
db_name = {
    "host":"localhost",
    "port":3306,
    "user":"root",
    "password":"123456",
    "database":"test",
}