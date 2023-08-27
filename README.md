## 项目说明
已配置 nginx+php+mysql，mysql自动建库、建表、数据插入，项目启动后访问首页会打印从新建的mysql表中插入的数据

## 依赖
docker、docker-compose

## 启动
代码拷贝至服务器后，在代码根目录（docker-compose.yml所在目录）执行 docker-compose up -d --build

## 报错处理
nginx会启用8089端口，如果报port is already allocated，说明端口号被占用了，在docker-compose.yml修改下nginx的端口号

## 访问
hostname:8089

## 修改配置文件后执行
1、关闭容器：docker-compose down
2、重新编译并启动：docker-compose up -d --build

## 代码目录说明
- app：项目代码
- nginx_config nginx配置文件，项目的nginx配置文件在 conf.d/default.conf
- php：php相关配置文件，php.ini、php-fpm.conf
- sql：数据库初始化sql，建库、建表、插入初始数据 在这里处理，文件扩展名是sql就可以
- logs:nginx、php日志

## 修改说明
- 安装php扩展：在 Dockerfile 中添加，代码：docker-php-ext-install pdo pdo_mysql opcache
- 修改php配置文件 修改 php/php.ini
- mysql数据库初始化： sql脚本放在 sql目录