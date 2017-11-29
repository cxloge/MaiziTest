-- 测试插入记录INSERT
CREATE TABLE IF NOT EXISTS user(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
password CHAR(32) NOT NULL,
email VARCHAR(50) NOT NULL DEFAULT '382771946@qq.com',
age TINYINT UNSIGNED DEFAULT 18
);

INSERT INTO user VALUES(1,'KING','KING','KING@QQ.COM',20);

INSERT user VALUE(2,'QUEEN','QUEEN','QUEEN@QQ.COM',30);

INSERT user(username,password) VALUES('A','AAA');

INSERT user(password,username) VALUES('BBB','B');

INSERT user(username,id,password,email,age) VALUES('C',55,'CCC','CCC@QQ.COM',DEFAULT);

-- 一次插入多条记录
INSERT user VALUES(6,'D','DDD','D@QQ.COM',35),
(8,'E','EEE','E@QQ.COM',9),
(18,'F','FFF','F@QQ.COM',32);

-- 通过INSERT SET形式插入记录
INSERT INTO user SET id=98,username='test',password='this is a test',email='123@qq.com',
age=48;

INSERT user SET username='maizi',password='maizixueyuan' ;

CREATE TABLE IF NOT EXISTS testUser(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE
);
-- 将查询结果插入到表中
INSERT testUser SELECT id,username FROM user;
-- 字段数目不匹配
INSERT testUser SELECT * FROM user;

INSERT testUser(username) SELECT username FROM user;

-- 将用户表中所有的用户年龄更新15
UPDATE user SET age=5;

UPDATE user SET age=20,email='test@qq.com';

-- 将第一个记录的password，email，age
UPDATE user SET password='king123',email='123@qq.com',age=99
WHERE id=1;

UPDATE user SET age=age-5 WHERE id>=3;

UPDATE user SET age=DEFAULT WHERE username='A';

-- 删除testUser表中的记录

DELETE FROM testUser ;

-- 删除user表中id为1的用户
DELETE FROM user WHERE id=1;

-- 彻底清空user表
TRUNCATE TABLE user;








