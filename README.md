# php-pdo
## php 中pdo 的封装使用
- 1. php 中访问数据库的方式pdo 非常好用并且安全，但是每次使用都进行连接的话非常耗时，在日常使用中我做了一些简单封装。
- 2. 使用封装出现错误不用手工处理，会自动终止程序，并且报错，参见Mysql.classs.php 中异常处理
- 3. 经常使用的函数主要有以下几个：
  - 3.1 prepare_execute 以预处理的方式执行 sql
  - 3.2 prepare_execute_result 以预处理的方式返回多行数据
  - 3.3 prepare_execute_result_single 以预处理方式返回单行数据
aaaa
