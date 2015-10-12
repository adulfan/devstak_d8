# Acquia Insight

Ansible role for configuring the Acquia Cloud API on a vagrant machine.

* Provides remote drush aliases to the Acquia Cloud environment.
* Allows remote syncing databases as part of the provisioning process.

## Instructions

* Log in to the Acquia Insight control panel.
* Go to your site -> Cloud -> Drush and API.
* Under "Drush integration" click on "Download Drush aliases".
* Extract the downloaded tar file to your home directory.
* To provision only the aliases, scroll down to: "Provision only this role".

## Usage

Drush aliases let you easily access all of your site's environments with Drush
from your local computer via SSH. Example: List all sites you have access to on
Acquia Cloud:

    $ drush ac-site-list
      devcloud:sitename1
      devcloud:sitename2
      devcloud:sitename3

See a list of available commands:

    $ drush help --filter=acapi

Retrieve Drush aliases for all accessible Acquia Cloud sites:

    $ drush acquia-update
      Updating /home/[username]/.drush/mysite1.aliases.drushrc.php.                     [ok]
      Updating /home/[username]/.drush/mysite2.aliases.drushrc.php.                     [ok]
      Updating /home/[username]/.drush/mysite3.aliases.drushrc.php.                     [ok]

* Refer to "About Drush on Acquia Cloud" (https://docs.acquia.com/cloud/drush)
  for more information.

## Database Sync

To show a list of database backups available for a specific environment:

    drush @project.dev ac-database-instance-backup-list project

To download a specific database snapshot:

    drush @project.dev ac-database-instance-backup-download project [backupid] --result-file=</path/to/file>

To import a specific database snapshot directly into your local database

    drush @project.local sqlc < drush @project.dev ac-database-instance-backup-download project [backupid]

To use the regular SQL Sync drush command:

    drush sql-sync @project.dev @project.local

## Role Variables

The following default variables are defined in `defaults/main.yml`:

    # Acquia Insight Cloud API location.
    acquia_insight_capi: "{{ lookup('env', 'HOME') }}"

    # Location contain SSH keys uploaded to the Acquia control panel.
    acquia_insight_keys: "{{ lookup('env', 'HOME') }}/.ssh/"

`acquia_insight_capi` specifies the location of the drush aliases that you
extracted from the "Drush and API" section of the Acquia Insight -> Cloud
control panel.

`acquia_insight_key` specifies the name and location of the SSH key that you
uploaded to the Acquia cloud.

## Example Playbook

    - hosts: web
      roles:
         - { role: acquia_insight }

## Provision only this role

Insert into at the end of the `config.vm.provision "ansible" do |ansible|`
section of your `Vagrantfile`:

    ansible.tags = "acquia_insight"

Then re-provision as usual while the Vagrant machine is still up and running:

    vagrant provision --provision-with=ansible

## License

## Author Information

NorthPoint Digital
