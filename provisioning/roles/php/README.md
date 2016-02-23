# PHP

This is a role to install and configure the PHP inside the guest VM according to your project standards and needs.

* http://php.net

* Install php5
* libapache2-mod-php5
* php-pear
* php5-cli
* php5-common
* php5-curl
* php5-dev
* php5-gd
* php5-imagick
* php5-imap
* php5-intl
* php5-json
* php5-ldap
* php5-mcrypt
* php5-memcached
* php5-mhash
* php5-mysqlnd
* php5-pspell
* php5-recode
* php5-redis
* php5-xdebug
* php5-xhprof
* php5-xmlrpc
* php5-xsl
* libgv-php5
* Opcache web viewer

## Instructions

Enable this role in the main playbook.yml to install and configure PHP inside your host VM.

## Uage with Drupal

If you are using XHprof with Drupal you can simply install devel and or the XHprof module as they provide the integration and viewing of profiling data.

### Drupal Devel

* https://www.drupal.org/project/devel

drush dl devel
drush -y en devel

Then visit the devel settings:

admin/config/development/devel

### Drupal XHprof

 * https://www.drupal.org/project/xhprof

drush dl XHProf
drush en XHProf -y

Then visit the XHprof settings:

admin/config/development/xhprof

Also see:

* https://www.drupal.org/node/946182

## Author Information

NorthPoint Digital
