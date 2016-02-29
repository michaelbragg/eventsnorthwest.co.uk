#!/bin/sh
#
# Provision the vagrant environment

# Copy site .conf file accross
sudo cp /vagrant/config/environments/development.conf /etc/apache2/sites-available/eventsnorthwest.dev.conf
sudo rm -rf /var/www
sudo mkdir -p /var/www
sudo ln -fs /vagrant /var/www/eventsnorthwest.dev
# Enable new virtual host
sudo ln -fs /etc/apache2/sites-available/eventsnorthwest.dev.conf /etc/apache2/sites-enabled/eventsnorthwest.dev.conf
# Restart Apache
sudo service apache2 restart
# Setup database
mysql -u root -proot -e "create database eventsnw"
mysql -u root -proot eventsnw < /vagrant/config/environments/development.sql
# Install Composer Dependencies
php /usr/local/bin/composer.phar update --working-dir="/var/www/eventsnorthwest.dev" --no-interaction
# Node
npm -v
#npm install --prefix="/var/www/eventsnorthwest.dev/html/app/themes/xxxxx/"
#bower install --config.directory="/var/www/eventsnorthwest.dev/html/app/themes/xxxxx/libs" -p
