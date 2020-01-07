# Docker Serv

#### 介绍
基于docker的部署环境,本地部署及ECS上部署用

#### 目录结构
bin - docker启动配置及脚本
config - docker容器的应用所需配置文件
dockerfile - docker容器的构建配置dockerfile文件

#### 使用教程

1. 确保 docker-compose.yml 中目录挂载的目录或文件存在 
1. 本地执行bin下的docker-compose.yml即可

#### 建议
1. windows 下建议放在e盘下创建docker文件夹放置当前docker仓库,并在e盘下创建data文件夹放mysql和应用日志等文件夹
2. linux 下建议放在/data下创建docker文件夹放置当前docker仓库,并在/data下放mysql和应用日志等文件夹
3. 针对不同域名的应用可以在 config/nginx/conf.d 下放置不同的 host_xxx.conf 做区分
4. nginx针对php不同版本的访问要求，可以参考 config/nginx/conf.d/default.conf 里对php的请求转发 fastcgi_pass 设置
#### 注意
1. 请确保使用者要熟悉 docker & docker-compose
