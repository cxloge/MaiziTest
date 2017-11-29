-- 更新用户名为4位的用户，让其已有年龄-3

UPDATE cms_user SET age=age-3 WHERE username LIKE '____';

-- 更新前3条记录，让已有年龄+10
UPDATE cms_user SET age=age+10 LIMIT 3;

UPDATE cms_user SET age=age+10 LIMIT 0,3;

-- 按照id降序排列，更新前3条

UPDATE cms_user SET age=age+10 ORDER BY id DESC LIMIT 3;

-- 删除用户性别为男的用户，按照年龄降序排列，删除1前一条记录

DELETE FROM cms_user WHERE sex='男' ORDER BY age DESC LIMIT 1;


-- 查询cms_user id,username
-- provinces,proName
SELECT cms_user.id,username,proName FROM cms_user,provinces;

-- cms_user的proId对应省份表中的id
SELECT cms_user.id,username,proName FROM cms_user,provinces

WHERE cms_user.proId=provinces.id;

-- 查询cms_user表中id,username,email,sex
-- 查询provinces表proName
SELECT u.id,u.username,u.email,u.sex,p.proName

FROM cms_user AS u

INNER JOIN provinces AS p

ON u.proId=p.id;

SELECT u.id,u.username,u.email,u.sex,p.proName

FROM provinces AS p

CROSS JOIN cms_user AS u

ON u.proId=p.id;


SELECT u.id,u.username,u.email,u.sex,p.proName

FROM provinces AS p

JOIN cms_user AS u

ON u.proId=p.id;

-- 查询cms_user id,username,sex
-- 查询provinces proName
-- 条件是cms_user的性别为男的用户

SELECT u.id,u.username,u.sex,p.proName 

FROM cms_user AS u

JOIN

provinces AS p

ON u.proId=p.id

WHERE u.sex='男';

-- 根据proName分组
SELECT u.id,u.username,u.sex,p.proName,COUNT(*) AS totalUsers,GROUP_CONCAT(username)

FROM cms_user AS u

JOIN

provinces AS p

ON u.proId=p.id

WHERE u.sex='男'

GROUP BY p.proName;

-- 对分组结果进行筛选,选出组中人数>=1的
SELECT u.id,u.username,u.sex,p.proName,COUNT(*) AS totalUsers,GROUP_CONCAT(username)

FROM cms_user AS u

JOIN

provinces AS p

ON u.proId=p.id

WHERE u.sex='男'

GROUP BY p.proName

HAVING COUNT(*)>=1;

--　　按照id升序排列

SELECT u.id,u.username,u.sex,p.proName,COUNT(*) AS totalUsers,GROUP_CONCAT(username)

FROM cms_user AS u

JOIN

provinces AS p

ON u.proId=p.id

WHERE u.sex='男'

GROUP BY p.proName

HAVING COUNT(*)>=1

ORDER BY u.id ASC;


-- 限制显示条数 前2条
SELECT u.id,u.username,u.sex,p.proName,COUNT(*) AS totalUsers,GROUP_CONCAT(username)

FROM cms_user AS u

JOIN

provinces AS p

ON u.proId=p.id

WHERE u.sex='男'

GROUP BY p.proName

HAVING COUNT(*)>=1

ORDER BY u.id ASC

LIMIT 0,2;

--　查询cms_news中的id,title,
--  查询cms_cate 中的cateName
SELECT n.id,n.title,c.cateName FROM 

cms_news AS n

JOIN 

cms_cate AS c

ON n.cId=c.id;

-- cms_news id,title
-- cms_admin username,role

SELECT n.id,n.title,a.username,a.role

FROM 

cms_news AS n

JOIN

cms_admin AS a

ON n.aId=a.id;

-- cms_news id ,title
-- cms_cate cateName
-- cms_admin username,role

SELECT n.id,n.title,c.cateName,a.username,a.role

FROM cms_cate AS c

JOIN 

cms_news AS n

ON n.cId=c.id

JOIN 

cms_admin AS a

ON n.aId=a.id;

-- 插入错误的数据

INSERT cms_user(username,password,regTime,proId)

VALUES('TEST2','TEST2','1381203974',20);



-- 左外连接
SELECT u.id,u.username,u.email,u.sex,p.proName

FROM cms_user AS u

LEFT JOIN provinces AS p

ON u.proId=p.id;


SELECT u.id,u.username,u.email,u.sex,p.proName

FROM provinces AS p

LEFT JOIN cms_user AS u

ON u.proId=p.id;

SELECT u.id,u.username,u.email,u.sex,p.proName

FROM provinces AS p

RIGHT JOIN cms_user AS u

ON u.proId=p.id;




SELECT u.id,u.username,u.email,u.sex,p.proName

FROM provinces AS p

RIGHT JOIN cms_user AS u

ON u.proId=p.id;


-- 创建部门表department(主表)
-- id depName 

CREATE TABLE IF NOT EXISTS department(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
depName VARCHAR(20) NOT NULL UNIQUE
)ENGINE=INNODB;

INSERT department(depName) VALUES('教学部'),
('市场部'),
('运营部'),
('督导部');

-- 创建员工表employee(子表)
-- id ,username ,depId
CREATE TABLE IF NOT EXISTS employee(
id SMALLINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
depId TINYINT UNSIGNED
)ENGINE=INNODB;

INSERT employee(username,depId) VALUES('king',1),
('queen',2),
('张三',3),
('李四',4),
('王五',1);

SELECT e.id,e.username,d.depName FROM

employee AS e

JOIN

department AS d

ON e.depId=d.id;

-- 删除督导部

DELETE FROM department WHERE depName='督导部';



-- 创建部门表department(主表)
-- id depName 

CREATE TABLE IF NOT EXISTS department(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
depName VARCHAR(20) NOT NULL UNIQUE
)ENGINE=INNODB;

INSERT department(depName) VALUES('教学部'),
('市场部'),
('运营部'),
('督导部');

-- 创建员工表employee(子表)
-- id ,username ,depId
CREATE TABLE IF NOT EXISTS employee(
id SMALLINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
depId TINYINT UNSIGNED,
FOREIGN KEY(depId) REFERENCES department(id)
)ENGINE=INNODB;

INSERT employee(username,depId) VALUES('king',1),
('queen',2),
('张三',3),
('李四',4),
('王五',1);

-- 删除主表中的记录
DELETE FROM department WHERE id=1;

-- 删除employee中的属于1部门的人
DELETE FROM employee WHERE depId=1;

INSERT employee(username,depId) VALUES('test',11);

-- 删除员工表
DROP TABLE employee;

CREATE TABLE IF NOT EXISTS employee(
id SMALLINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
depId TINYINT UNSIGNED,
CONSTRAINT emp_fk_dep FOREIGN KEY(depId) REFERENCES department(id)
)ENGINE=INNODB;


INSERT employee(username,depId) VALUES('king',3),
('queen',2),
('张三',3),
('李四',4),
('王五',2);

-- 删除外键
ALTER TABLE employee DROP FOREIGN KEY emp_fk_dep;

-- 添加外键

ALTER TABLE employee ADD CONSTRAINT emp_fk_dep FOREIGN KEY(depId) REFERENCES department(id);

----------------
CREATE TABLE IF NOT EXISTS department(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
depName VARCHAR(20) NOT NULL UNIQUE
)ENGINE=INNODB;

INSERT department(depName) VALUES('教学部'),
('市场部'),
('运营部'),
('督导部');

-- 创建员工表employee(子表)
-- id ,username ,depId
CREATE TABLE IF NOT EXISTS employee(
id SMALLINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
depId TINYINT UNSIGNED,
FOREIGN KEY(depId) REFERENCES department(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=INNODB;

INSERT employee(username,depId) VALUES('king',1),
('queen',2),
('张三',3),
('李四',4),
('王五',1);

-- 删除部门表中的第一个部门
DELETE FROM department WHERE id=1;

UPDATE department SET id=id+10;

--------------------
CREATE TABLE IF NOT EXISTS department(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
depName VARCHAR(20) NOT NULL UNIQUE
)ENGINE=INNODB;

INSERT department(depName) VALUES('教学部'),
('市场部'),
('运营部'),
('督导部');

-- 创建员工表employee(子表)
-- id ,username ,depId
CREATE TABLE IF NOT EXISTS employee(
id SMALLINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
depId TINYINT UNSIGNED,
FOREIGN KEY(depId) REFERENCES department(id) ON DELETE SET NULL ON UPDATE SET NULL
)ENGINE=INNODB;

INSERT employee(username,depId) VALUES('king',1),
('queen',2),
('张三',3),
('李四',4),
('王五',1);

-- 联合查询
SELECT username FROM employee UNION SELECT username FROM cms_user;

SELECT username FROM employee UNION ALL SELECT username FROM cms_user;

SELECT id,username FROM employee UNION ALL SELECT username,age FROM cms_user;

-- 由[NOT] IN引发的子查询

SELECT id FROM department;

SELECT id,username FROM employee WHERE depId IN(1,2,3,4);

SELECT id,username FROM employee WHERE depId IN(SELECT id FROM department);

SELECT id,username FROM employee WHERE depId NOT IN(SELECT id FROM department);

INSERT employee(username,depId) VALUES('testtest',8);



--　创建学员表student
-- id username score
CREATE TABLE IF NOT EXISTS student(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20)  NOT NULL UNIQUE,
score TINYINT UNSIGNED
);

INSERT student(username,score) VALUES('king',95),
('king1',35),
('king2',45),
('king3',55),
('king4',65),
('king5',75),
('king6',80),
('king7',90),
('king8',25);
-- 创建奖学金scholarship
-- id ,level

CREATE TABLE IF NOT EXISTS scholarship(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
level TINYINT UNSIGNED
);
INSERT scholarship(level) VALUES(90),(80),(70);



-- 查询获得1等奖学金的学员有

SELECT level FROM scholarship WHERE id=1;

SELECT id,username FROM student WHERE score>=90;

SELECT id,username FROM student WHERE score>=(SELECT level FROM scholarship WHERE id=1);

-- 查询部门表中

SELECT * FROM department WHERE id=5;

SELECT id,username FROM employee WHERE EXISTS(SELECT * FROM department WHERE id=5);

SELECT id,username FROM employee WHERE EXISTS(SELECT * FROM department WHERE id=4);

SELECT id,username FROM employee WHERE NOT EXISTS(SELECT * FROM department WHERE id=41);



-- 查询所有获得奖学金的学员

SELECT id,username,score FROM student WHERE score>=ANY(SELECT level FROM scholarship);


SELECT id,username,score FROM student WHERE score>=SOME(SELECT level FROM scholarship);

-- 查询所有学员中获得一等奖学金的学员
SELECT id,username,score FROM student WHERE score >=ALL(SELECT level FROM scholarship);

-- 查询学员表中没有获得奖学金的学员

SELECT id,username,score FROM student WHERE score<ALL(SELECT level FROM scholarship);


SELECT id,username,score FROM student WHERE score<ANY(SELECT level FROM scholarship);

SELECT id,username,score FROM student WHERE score<=ANY(SELECT level FROM scholarship);

-- 相当于IN
SELECT id,username,score FROM student WHERE score=ANY(SELECT level FROM scholarship);

SELECT id,username,score FROM student WHERE score IN(SELECT level FROM scholarship);

-- 相当于NOT IN
SELECT id,username,score FROM student WHERE score NOT IN(SELECT level FROM scholarship);

SELECT id,username,score FROM student WHERE score <> ALL(SELECT level FROM scholarship);

CREATE TABLE test1 (
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
num TINYINT UNSIGNED
);
INSERT test1(id,num) 

SELECT id,score FROM student;


CREATE TABLE test2 (
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
num TINYINT UNSIGNED
)SELECT id,score FROM student;

CREATE TABLE test3 (
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
score TINYINT UNSIGNED
)SELECT id,score FROM student;

-- ^匹配字符开始的部分
-- 查询用户名以t开始的用户
SELECT * FROM cms_user WHERE username REGEXP '^t';

-- $匹配字符串结尾的部分

SELECT * FROM cms_user WHERE username REGEXP 'g$';


-- .代表任意字符

SELECT * FROM cms_user WHERE username REGEXP '.';

SELECT * FROM cms_user WHERE username REGEXP 'r..g';

SELECT * FROM cms_user WHERE username LIKE 'r__g';

-- [字符集合] [lto]

SELECT * FROM cms_user WHERE username REGEXP '[lto]';

-- [^字符集合] 除了字符集合中的内容
SELECT * FROM cms_user WHERE username REGEXP '[^lto]';

SELECT * FROM cms_user WHERE username REGEXP '[^l]';

INSERT cms_user(username,password,regTime,proId)
VALUES('lll','lll',138212349,2),
('ttt','lll',138212349,2),
('ooo','lll',138212349,2);

SELECT * FROM cms_user WHERE username REGEXP '[a-k]';

SELECT * FROM cms_user WHERE username REGEXP '[^a-m]';

SELECT * FROM cms_user WHERE username REGEXP 'ng|qu';

SELECT * FROM cms_user WHERE username REGEXP 'ng|qu|te';

SELECT * FROM cms_user WHERE username REGEXP 'que*';


SELECT * FROM cms_user WHERE username REGEXP 't+';

SELECT * FROM cms_user WHERE username REGEXP 'que+';

SELECT * FROM cms_user WHERE username REGEXP 'que{2}';

SELECT * FROM cms_user WHERE username REGEXP 'que{3}';

SELECT * FROM cms_user WHERE username REGEXP 'que{1,3}';


SELECT CONCAT('_',TRIM(' ABC '),'_'),CONCAT('_',LTRIM(' ABC '),'_'),CONCAT('_',RTRIM(' ABC '),'_');


SELECT id,username,score, CASE WHEN score>60 THEN '不错' WHEN score=60 THEN '刚及格' ELSE '没及格' END FROM student;

INSERT student(username,score) VALUES('AAAA',12);




