# Laravel Homestead

This is a role to install and configure Laravel inside the host VM according to your project standards and needs.

https://laravel.com/docs/5.2/

## Instructions

* Modify `main` in bootstrap to run `setup_laravel` and `setup_homestead`
* Modify Vagrant file such that `laravel = true`
* vagrant up --provider parallels
* If you run into any issues during provisioning, try `vagrant provision` (which sometimes helps)

## Author Information

NorthPoint Digital
