# Laravel

This role performs a basic install of [Laravel](https://laravel.com/). After
provisioning, you should be able to see the site at
[http://devstack.vm/](http://devstack.vm/).

## Variables

- `laravel_installer_version`: version string for `laravel/installer`, passed to
  `composer`.
- `laravel_base`: parent directory for Laravel installation
- `laravel_folder`: directory name passed to the Laravel installer
- `laravel_docroot`: `{{ laravel_base }}/{{ laravel_folder }}/public` (for
  reference, not currrently used)

## Author Information

NorthPoint Digital
