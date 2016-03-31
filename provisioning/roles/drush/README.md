# Drush

This is a role to install and configure Drush inside the guest VM according to your project standards and needs.

* http://www.drush.org/

## Instructions

Enable this role in the main playbook.yml to install and configure Drush inside your host VM.

## Variables

- `drush_site_audit_version`: version of the "Site audit" drush extension
  (default: `7.x-1.15`)
- `drush_security_review_version`: version of the "Security review" module
  (default: `f23529937f6827fd18539c84d36a0b7053a2ffaa`)

Note: these settings work well with Drupal 7. If you are working with Drupal 8,
then use `8.x-2.0` or later for Site audit and `8.x-1.x` (branch name) for
Security review. If you want to use both D7 and D8, then it will take
additional work.

## Author Information

NorthPoint Digital
