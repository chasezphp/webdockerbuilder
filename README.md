# webdockerbuilder
## HOST OS CENTOS7
## HOST PREPARATION 
```
$ yum -y install httpd git epel-release yum-utils http://rpms.remirepo.net/enterprise/remi-release-7.rpm
$ yum-config-manager --enable remi-php71 
$ yum -y install php php-mysqli php-mcrypt php-cli php-gd php-curl php-mysql php-fileinfo 
$ cd /var/www/html/
$ git clone https://github.com/learnbyseven/webdockerbuilder.git
$ Or In case not using copy the conents under /var/www/html/
//Disabling selinux 
$ setenforce 0
//Adding apache user to docker group so it can execute docker build command 
$ usermode -aG docker apache
$ systemctl start httpd
```
### Finish 
