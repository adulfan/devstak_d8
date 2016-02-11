# Devstack

This role installs a few simple pages in the docroot just to make sure everything is working.

## Instructions

With the default setup, visit http://devstack.vm or http://devstack.vm/index.php . If everything is working, then you should see some system information for PHP and MySQL.  If that does not work, you can test apache by visiting http://devstack.vm/index.html, which should show a simple "hello".

Disable this role in the main playbook.yml once you install something more interesting.

## Author Information

NorthPoint Digital
