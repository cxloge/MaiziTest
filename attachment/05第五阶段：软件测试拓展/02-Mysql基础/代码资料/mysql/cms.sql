CREATE DATABASE IF NOT EXISTS cms DEFAULT CHARACTER SET utf8;
USE cms;
-- 管理员表cms_admin
CREATE TABLE cms_admin(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
password CHAR(32) NOT NULL,
email VARCHAR(50) NOT NULL DEFAULT 'admin@qq.com',
role ENUM('普通管理员','超级管理员') DEFAULT '普通管理员'
);
INSERT cms_admin(username,password,email,role) VALUES('admin','admin','admin@qq.com',2);

INSERT cms_admin(username,password) VALUES('king','king'),

('麦子','maizi'),

('queen','queen'),

('test','test');

-- 创建分类表cms_cate
CREATE TABLE cms_cate(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
cateName VARCHAR(50) NOT NULL UNIQUE,
cateDesc VARCHAR(200) NOT NULL DEFAULT ''
);

INSERT cms_cate(cateName,cateDesc) VALUES('国内新闻','聚焦当今最热的国内新闻'),
('国际新闻','聚焦当今最热的国际新闻'),
('体育新闻','聚焦当今最热的体育新闻'),
('军事新闻','聚焦当今最热的军事新闻'),
('教育新闻','聚焦当今最热的教育新闻');

-- 创建新闻表cms_news
CREATE TABLE cms_news(
id INT UNSIGNED AUTO_INCREMENT KEY,
title VARCHAR(50) NOT NULL UNIQUE,
content TEXT,
clickNum INT UNSIGNED DEFAULT 0,
pubTime INT UNSIGNED,
cId TINYINT UNSIGNED NOT NULL COMMENT '新闻所属分类，对应分类表中的id',
aId TINYINT UNSIGNED NOT NULL COMMENT '哪个管理员发布的，对应管理员表中的id'
);
INSERT cms_news(title,content,pubTime,cId,aId) VALUES('亚航客机失联搜救尚无线索 未发求救信号','马来西亚亚洲航空公司一架搭载155名乘客的客机28日早晨从印度尼西亚飞往新加坡途中与空中交通控制塔台失去联系，下落不明。',1419818808,1,2),
('北京新开通四条地铁线路 迎接首位客人','12月28日凌晨，随着北京地铁6号线二期、7号线、15号线西段、14号线东段的开通试运营，北京的轨道交通运营里程将再添62公里，共计达到527公里。当日凌晨5时许，北京地铁7号线瓷器口换乘站迎来新线开通的第一位乘客。',1419818108,2,1),
('考研政治题多次出现习近平讲话内容','新京报讯 （记者许路阳 (微博)）APEC反腐宣言、国家公祭日、依法治国……昨日，全国硕士研究生招生考试进行首日初试，其中，思想政治理论考题多次提及时事热点，并且多次出现习近平在不同场合的讲话内容。',1419818208,3,2),
('深度-曾雪麟：佩兰别重蹈卡马乔覆辙','12月25日是前国足主帅曾雪麟的85岁大寿，恰逢圣诞节，患有尿毒症老爷子带着圣诞帽度过了自己的生日。此前，腾讯记者曾专访曾雪麟，尽管已经退休多年，但老爷子仍旧关心着中国足球，为国足揪心，对于国足近几位的教练，他只欣赏高洪波。对即将征战亚洲杯的国足，老爷子希望佩兰不要重蹈卡马乔的覆辙',1419818308,2,4),
('国产JAD-1手枪枪架投入使用 手枪可变"冲锋枪"','日前，JAD-1型多功能手枪枪架通过公安部特种警用装备质量监督检验中心检验，正式投入生产使用。此款多功能枪架由京安盾(北京)警用装备有限公司开发研制，期间经广东省江门市公安特警支队试用，获得好评。',1419818408,4,4),
('麦子学院荣获新浪教育大奖','麦子学院最大的职业IT教育平台，获奖了',1419818508,1,5),
('麦子学院荣获腾讯教育大奖','麦子学院最大的职业IT教育平台，获奖了',1419818608,1,5),
('麦子学院新课上线','麦子学院PHP课程马上上线了，小伙伴快来报名学习哈',1419818708,1,5);

-- 创建身份表 provinces
CREATE TABLE provinces(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
proName VARCHAR(10) NOT NULL UNIQUE
);
INSERT provinces(proName) VALUES('北京'),
('上海'),
('深圳'),
('广州'),
('重庆');

-- 创建用户表cms_user
CREATE TABLE cms_user(
id INT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
password CHAR(32) NOT NULL,
email VARCHAR(50) NOT NULL DEFAULT 'user@qq.com',
regTime INT UNSIGNED NOT NULL,
face VARCHAR(100) NOT NULL DEFAULT 'user.jpg',
proId TINYINT UNSIGNED NOT NULL COMMENT '用户所属省份'
);

INSERT cms_user(username,password,regTime,proId)

VALUES('张三','zhangsan',1419811708,1),
('张三丰','zhangsanfeng',1419812708,2),
('章子怡','zhangsan',1419813708,3),
('long','long',1419814708,4),
('ring','ring',1419815708,2),
('queen','queen',1419861708,3),
('king','king',1419817708,5),
('blek','blek',1419818708,1),
('rose','rose',1419821708,2),
('lily','lily',1419831708,2),
('john','john',1419841708,2);

-- 查询
SELECT * FROM cms_admin;

SELECT cms_admin.* FROM cms_admin;

-- 查询管理员编号和名称

SELECT id,username FROM cms_admin;

SELECT username,id,role FROM cms_admin;

-- 表来自于哪个数据库下db_name.tbl_name
SELECT id,username,role FROM cms.cms_admin;

-- 字段来自于哪张表

SELECT cms_admin.id,cms_admin.username FROM cms.cms_admin;

-- 给表名起别名

SELECT id,username FROM cms_admin AS a;

SELECT id,username FROM cms_admin a;

SELECT a.id,a.username,a.email,a.role FROM cms_admin AS a;

-- 给字段起别名

SELECT id AS '编号',username AS '用户名',email AS '邮箱',role '角色' FROM cms_admin;

SELECT a.id AS i,a.username AS u,a.email as e,a.role AS r FROM cms_admin AS a; 

SELECT id AS proId,proId AS id,username FROM cms_user;

SELECT 1,2,3,4,5,id,username FROM cms_user;


-- WHERE条件
-- 查询编号为1的用户
SELECT id,username,email FROM cms_user WHERE id=1;

SELECT id,username,email FROM cms_user WHERE username='king';

-- 查询编号不为1的用户
SELECT  * FROM cms_user WHERE id!=1;

SELECT  * FROM cms_user WHERE id<>1;

-- 添加age字段
ALTER TABLE cms_user ADD age TINYINT UNSIGNED DEFAULT 18;

INSERT cms_user(username,password,regTime,proId,age)

VALUES('test1','test1',1419811708,1,NULL);

-- 查询表中记录age值为NULL
SELECT * FROM cms_user WHERE age=NULL;

SELECT * FROM cms_user WHERE age<=>NULL;

SELECT * FROM cms_user WHERE age<=>18;

-- IS NULL 或者IS NOT NULL
SELECT * FROM cms_user WHERE age IS NULL;

-- 查询编号在3~10之间的用户
SELECT * FROM cms_user WHERE id BETWEEN 3 AND 10;

-- 查询编号为1，3，5，7，9，11，13，100
SELECT * FROM cms_user WHERE id IN(1,3,5,7,9,11,13,100,1000);

-- 查询proId为1 和3的用户

SELECT * FROM cms_user WHERE proId IN(1,3);

-- 查询用户名为king,queen,张三，章子怡的记录
SELECT * FROM cms_user WHERE username IN('king','queen','张三','章子怡');

SELECT * FROM cms_user WHERE username IN('KinG','QUEEN','张三','章子怡');

-- 模糊查询
-- %:代表0个一个或者多个任意字符
-- _:代表1个任意字符
-- 查询姓张的用户
SELECT * FROM cms_user WHERE username LIKE '张%';

-- 查询用户名中包含in的用户
SELECT * FROM cms_user WHERE username LIKE '%in%';

SELECT * FROM cms_user WHERE username LIKE '%';

-- 查询用户名为3位的用户

SELECT * FROM cms_user WHERE username LIKE '___';

--用户名_i%
SELECT * FROM cms_user WHERE username LIKE '_I%';

SELECT * FROM cms_user WHERE username LIKE 'king';

SELECT * FROM cms_user WHERE username NOT LIKE '_I%';

-- 查询用户名为king并且密码为king的用户
SELECT * FROM cms_user WHERE username='king' AND password='king';

-- 查询编号大于等于3的变量年龄不为NULL的用户

SELECT * FROM cms_user WHERE id>=3 AND age IS NOT NULL;

-- 查询编号大于等于3的变量年龄不为NULL的用户 并且proId为的3
SELECT * FROM cms_user WHERE id>=3 AND age IS NOT NULL AND proId=3;

-- 查询编号在5~10的用户并且用户名为4位的用户

SELECT * FROM cms_user WHERE id BETWEEN 5 AND 10 AND username LIKE '____';

-- 查询用户名以张开始或者用户所在身份为2,4的记录
SELECT * FROM cms_user WHERE username LIKE '张%' OR proId IN(2,4);

-- 按照用户所属身份分组proId
SELECT * FROM cms_user GROUP BY proId;

-- 向用户表中添加性别字段

ALTER TABLE cms_user ADD sex ENUM('男','女','保密');

UPDATE cms_user SET sex='男' WHERE id IN(1,3,5,7,9);

UPDATE cms_user SET sex='女' WHERE id IN(2,4,6,8,10);

UPDATE cms_user SET sex='女' WHERE id IN(2,4,6,8,10);

UPDATE cms_user SET sex='保密' WHERE id IN(12,11);

--按照用户性别分组
SELECT * FROM cms_user GROUP BY sex;

--按照字段位置分组
SELECT * FROM cms_user GROUP BY 7;

--按照多个字段分组

SELECT * FROM cms_user GROUP BY sex,proId;

-- 查询编号大于等于5的用户按照sex分组

SELECT * FROM cms_user WHERE id>=5 GROUP BY sex;


-- 查询id,sex,用户名详情按照性别分组
SELECT id,sex,GROUP_CONCAT(username) FROM cms_user GROUP BY sex;

--查询proId，性别详情，注册时间详情，用户名详情 安装proId
SELECT proId,GROUP_CONCAT(username),GROUP_CONCAT(sex),GROUP_CONCAT(regTime)
FROM cms_user GROUP BY proId;

UPDATE cms_user SET age=11 WHERE id=1;
UPDATE cms_user SET age=21 WHERE id=2;
UPDATE cms_user SET age=33 WHERE id=3;
UPDATE cms_user SET age=44 WHERE id=4;
UPDATE cms_user SET age=25 WHERE id=5;
UPDATE cms_user SET age=77 WHERE id=6;
UPDATE cms_user SET age=56 WHERE id=7;
UPDATE cms_user SET age=88 WHERE id=8;
UPDATE cms_user SET age=12 WHERE id=9;
UPDATE cms_user SET age=32 WHERE id=10;
UPDATE cms_user SET age=65 WHERE id=11;

--查询编号,sex,用户名详情以及组中总人数按照sex分组

SELECT id,sex,GROUP_CONCAT(username)AS users,COUNT(*) AS totalUsers FROM cms_user GROUP BY sex;

-- 统计表中所有记录

SELECT COUNT(*) AS totalUsers FROM cms_user;

SELECT COUNT(id) AS totalUsers FROM cms_user;

--COUNT(字段)不统计NULL值
SELECT COUNT(age) AS totalUsers FROM cms_user;

--查询编号,性别,用户名详情，组中总人数，组中最大年龄，最小年龄，
-- 平均年龄，以及年龄总和按照性别分组

SELECT id,sex,GROUP_CONCAT(username),
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
MIN(age) AS min_age,
AVG(age) AS avg_age,
SUM(age) AS sum_age
FROM cms_user
GROUP BY sex;

-- WITH ROLLUP
SELECT id,sex,
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
MIN(age) AS min_age
FROM cms_user
GROUP BY sex WITH ROLLUP;


SELECT id,sex,
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
MIN(age) AS min_age,
SUM(age) AS sum_age
FROM cms_user
GROUP BY sex WITH ROLLUP;

--查询性别sex,用户名详情,组中总人数，最大年龄，年龄总和,根据性别分组
SELECT sex,GROUP_CONCAT(username) AS users,
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
SUM(age) AS sum_age
FROM cms_user 
GROUP BY sex;

-- 查询组中人数大于2的
SELECT sex,GROUP_CONCAT(username) AS users,
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
SUM(age) AS sum_age
FROM cms_user 
GROUP BY sex
HAVING COUNT(*)>2;

-- 查询组中人数大于2并且最大年龄大于60的

SELECT sex,GROUP_CONCAT(username) AS users,
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
SUM(age) AS sum_age
FROM cms_user 
GROUP BY sex
HAVING COUNT(*)>2 AND MAX(age)>60;

-- 查询编号大于等于2的用户
SELECT sex,GROUP_CONCAT(username) AS users,
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
SUM(age) AS sum_age
FROM cms_user 
WHERE id>=2
GROUP BY sex
HAVING COUNT(*)>2 AND MAX(age)>60;


SELECT id,sex,GROUP_CONCAT(username) AS users,
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
SUM(age) AS sum_age
FROM cms_user 
WHERE id>=2
HAVING COUNT(*)>2 AND MAX(age)>60;

-- 按照id降序排列DESC 默认的是ASC
SELECT * FROM cms_user ORDER BY id ;

SELECT * FROM cms_user ORDER BY id ASC;

SELECT * FROM cms_user ORDER BY id DESC;

-- 按照年龄升序排列
SELECT * FROM cms_user ORDER BY age ASC;

SELECT * FROM cms_user ORDER BY 1 DESC;

UPDATE cms_user SET age=12 WHERE id=5;

-- 按照年龄升序，id降序排列

SELECT * FROM cms_user ORDER BY age ASC,id DESC;

SELECT id,age,sex,GROUP_CONCAT(username),COUNT(*) AS totalUsers,SUM(age) AS sum_age 
FROM cms_user 
WHERE id>=2 
GROUP BY sex
HAVING COUNT(*)>=2
ORDER BY age DESC,id ASC;

-- 实现记录随机
SELECT * FROM cms_user ORDER BY RAND();

-- 查询表中前3条记录

SELECT * FROM cms_user LIMIT 3;

SELECT * FROM cms_user ORDER BY id DESC LIMIT 5;

-- 查询表中前一条记录
SELECT * FROM cms_user LIMIT 1;

SELECT * FROM cms_user LIMIT 0,1;

SELECT * FROM cms_user LIMIT 1,1;

SELECT * FROM cms_user LIMIT 0,5;

SELECT id,sex,age,GROUP_CONCAT(username),
COUNT(*) AS totalUsers,
MAX(age) AS max_age,
MIN(age) AS min_age,
AVG(age) AS avg_age,
SUM(age) AS sum_age
FROM cms_user
WHERE id>=1
GROUP BY sex
HAVING COUNT(*)>=2
ORDER BY age DESC
LIMIT 0,2;













