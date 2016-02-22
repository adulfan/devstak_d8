# Drupal

This is a role to install and configure Drupal inside the guest VM according to
your project standards and needs.

* https://www.drupal.org

## Instructions

Enable this role and the drush role in the main playbook.yml to install and
configure Drupal inside your host VM.  By default, the site URL will be
[http://devstack.vm/](http://devstack.vm/).

## Variables:
- `drupal_docroot`:  path on the VM to the document root
- `drupal_version`:  which version of Drupal to install per drush options,
e.g. "drupal", "drupal-7", "drupal-7.x", "drupal-6"

*Note*: If Drupal has already been downloaded, download will be skipped.
If Drupal is already installed, then installation will be skipped.

## Author Information

NorthPoint Digital
