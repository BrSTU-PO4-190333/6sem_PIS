## Commands

```bash
vagrant --version               # Проверяем установлен ли Vagrant
vagrant init ubuntu/bionic64    # Устанавливаем Ubuntu 18.04
vagrant up                      # Поднимаем виртуальную машину
vagrant status                  # Проверяем статус виртуальной машины
vagrant ssh                     # Подключаемся к виртуальной машине
sudo apt update                 # Обновляем базу пакетов Ubuntu
sudo apt install apache2 php libapache2-mod-php php-mysql mysql-server phpmyadmin
# Y                             # Жмём Y для подтвержения установки
# Space                         # Пробелом выбираем "apache"
# \/ Space                      # Жмём "стрелка вниз". Пробелом выбираем "lighttpd"
# Tab Enter                     # Жмём "Tab", чтобы курсор был на "OK". Жмём "Enter"
# Enter                         # Configure database for phpmyadmin with dbconfig-common?
# 222222 Tab Enter              # Придумываем пароль для пользователя phpmyadmin. Жмём "Tab". Курсор на "OK". Жмём "Enter"
exit                            # Выходим из ssh виртуальной машины
```

```conf
# Раскомментируем строчку в файле Vagrantfile:
config.vm.network "forwarded_port", guest: 80, host: 8080
```

```bash
vagrant reload                  # Перезагружаем виртуальную машину
```

```t
# Открываем http://localhost:8080
# Сайт работает
```

```t
# Открываем http://localhost:8080/phpmyadmin
# Логин: phpmyadmin
# Пароль: 222222
# У нас нет прав на создание БД
```

```bash
vagrant ssh                     # Подключаемся к консоли по SSH соединению
sudo mysql -u root -p           # Заходим под MySQL
# 222222                        # Вводим пароль
CREATE USER 'admin'@'localhost' IDENTIFIED BY '333333';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
exit                            # Выходим из MySQL
exit                            # Выходим из соединения SSH
```

```t
# Открываем http://localhost:8080/phpmyadmin
# Логин: admin
# Пароль: 333333
# Создаем БД "database_pis6_lab0"
```

```bash
vagrant ssh                             # Подключаемся к консоли по SSH соединению
wget https://wordpress.org/latest.zip -P /vagrant/tmp
sudo apt install unzip                  # Устанавливаем unzip
sudo unzip /vagrant/tmp/latest.zip -d /vagrant/tmp/latest-zip
sudo mkdir /vagrant/www                 # Создаем каталог
sudo mkdir /vagrant/www/html            # Создаем каталог
sudo cp -r /vagrant/tmp/latest-zip/wordpress/* /vagrant/www/html
sudo rm -rfv /var/www/html              # Удаляем каталог
sudo ln -s /vagrant/www/html /var/www   # Создаём символьную ссылку
exit                                    # Выходим из соединения SSH
```

```t
# Открываем http://localhost:8080

# English (United States)               # Выбираем язык
# Continue

# Let's go!

# Database Name: database_pis6_lab0
# Username: admin
# Password: 333333
# Database Host: localhost
# Table Prefix: pis6_lab0_
# Submit

# Run the installation

# Site Title: PIS6 lab0
# Username: superduperadmin
# Password: superduperpassword
# Confirm Password: true
# Your Email: po000406@g.bstu.by
# Search engine visibility: false
# Install WordPress

# Log In

# http://localhost:8080/wp-admin/       # Админка
# Username or Email Address: superduperadmin
# Password: superduperpassword
# Мы в админке

# http://localhost:8080                 # сайт
```

## Список использованных источников

1. ОСНОВЫ VAGRANT ► Установка Vagrant на Windows 10 - YouTube [Электронный ресурс] -
   Режим доступа: https://www.youtube.com/watch?v=fESCSA-wQEQ.
   Дата доступа: 13.02.2022.

1. Установка Apache, PHP, MySQL (LAMP) на VDS сервер (в Ubuntu) - YouTube [Электронный ресурс]
   Режим доступа: https://www.youtube.com/watch?v=FxwPQkP3OGY.
   Дата доступа: 15.02.2022.
