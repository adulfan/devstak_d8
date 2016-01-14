# DevStack

A Base Vagrant Lamp Stack. A great `README.md` template for your projects as a guide for your own readme's, which assists in project on-boarding education. This document describes getting started on the project. Topics include initial setup, high level project requirements and development tool needs. See more on our use of this file: [http://techbytes.northpointdigital.com/writing-great-project-readme/](http://techbytes.northpointdigital.com/writing-great-project-readme/)

## System Summary

* devstack.vm ([devstack.vm](http://devstack.vm))
* Parallels VM for local development (Ansible provisioned, vagrant driven)

## Project URLS

* DevStack [https://github.com/northpoint/devstack](https://github.com/northpoint/devstack)
* Ticket Tracker
* Continuous Integration
* Local: [http://devstack.vm](http://devstack.vm)
* Dev: [http://devstack-dev.com](http://devstack-dev.com)
* QA: [http://devstack-qa.com](http://devstack-qa.com)
* UAT: [http://devstack-uat.com](http://devstack-uat.com)
* Prod: [http://devstack.com](http://devstack.com)
* ...

## Team Communication

* [HipChat](https://www.hipchat.com)
* Google Drive
* ...

## Development Targets (Supported Browsers)

* IE9+
* Safari (recent - 1)
* Chrome (recent - 1)
* Firefox (recent - 1)
* iOS Safari (recent - 1)
* Android Chrome (recent - 1)
* ...

## Development Prerequisites

* Mac OS X 10.11 (El Capitan)
* XCode 7
* XCode command line tools

### Local Development - Mac OS X Desktop

* XCode - In Apple's AppStore (required; for CLI dev tools)
* [Homebrew](http://brew.sh) (required)
* [Ansible](http://www.ansible.com) (required)
* [Parallels](http://www.parallels.com/) (required)
* [Vagrant](https://www.vagrantup.com) (required)
* ...

### Local Development Stack in guest Vagrant VM

* **Vagrant VM with Parallels provider and Ansible provisioner**
* [Ubuntu](http://www.ubuntu.com) 14.04LTS (trusty64)
* ...

## Onboarding - Getting Started

This section assumes you are starting from scratch on a clean Mac OS X 10.11.x installation. Adjust as needed for your local development system.

The steps below will install the tools needed to run the entire site for this project. Describe the steps needed to start developing on this project.

* Install XCode from the AppStore
  * **NOTE:** and run it at least once. installs developer/cli tools; git, etc...
* Install [Parallels](http://www.parallels.com/try/pd/).
  * **NOTE**: you will need at least the Pro version to work with Vagrant.
  * **NOTE**: you will be prompted by `./bootstrap` for this later if its not already installed.
* [Fork](https://github.com/northpoint/devstack#fork-destination-box) this repository.
* Open the "Terminal" application.
* `git clone git@github.com:<username>/devstack.git ~/Sites/devstack`
  * **NOTE:** or use your favorite Git GUI
* `cd ~/Sites/devstack`
* `git remote add upstream git@github.com:northpoint/devstack.git` to add the "upstream" repository.
  * **NOTE:** You will need an upstream remote in order to keep your `devstack` project fork up to date with changes done by other developers.
* `./bootstrap` (runs bootstrap script)
* If hosting on Acquia, download your drush aliases file and follow the instructions so that it extracts to ~/.acquia
  * **NOTE:** you might need to ask your team lead for access to insight and also upload your SSH key to your insight account.
* `cd ~/Sites/devstack`
* `vagrant up`
* `vagrant ssh`
* `cd /var/www/devstack/docroot/`
  * **NOTE:** put your site codebase in here
* If on Acquia/Drupal, sync the DB local from Acquia Cloud via drush: `drush -y sql-sync --create-db @project.dev @project.vm`
* If on Acquia/Drupal, sync the files local from Acquia Cloud via drush: `drush -y rsync @project.dev:%files/ @project.vm:%files`
* Visit the site via [http://devstack.vm](http://devstack.vm) or
  [https://devstack.vm](https://devstack.vm) for HTTPS.
* Alternatively, use [http://devstack.vm:6081](http://devstack.vm:6081)
  to proxy through varnish cache. This assumes that you have enabled varnish:
  see [Customizing the VM](#customizing-the-vm) below.
* When installing your site, these are the database connection parameters:

      * Name: `devstack.vm`
      * Host: `devstack.vm`
      * Username: `vagrant`
      * Password: `vagrant`
      * Database: `devstack`

  From the VM, you can connect to `mysql` with `mysql -uvagrant -pvagrant devstack`.
  From the host, use `mysql -hdevstack.vm -uvagrant -pvagrant devstack`.

* To SSH into your VM use:

      * `cd ~/Sites/devstack`
      * `vagrant ssh`


## Customizing the VM

This project includes several components that are disabled by default:  memcache, varnish, drupal, wordpress, to name a few. To enable these, simply edit [provisioning/playbook.yml](provisioning/playbook.yml) and un-comment the appropriate lines. For example, to enable varnish, remove the `#` character from the line

```
# - include: varnish.yml
```

If you make any such changes after provisioning the VM, then run `vagrant up --provision` or (if the VM is already running) `vagrant provision`.

If you need a standard component that is not already included, then work with one of the Ansible gurus and submit a pull request to the DevStack repository.

For project-specific customization, edit the files under [provisioning/roles/project](provisioning/roles/project).

## Day to Day Development

Once you have everything you need to do you work, here you can describe any day-to-day needs, process, etc. needed to work on this project.

Any special needs to getting updates, building backend or frontend work?

## Migration

Is there a migration? Does it need to be used locally for any reason? Describe any potential needs here.

## Uninstalling - Offboarding

Once the project is complete, or someone on your team is jumping to a different project, are there any special needs to uninstalling anything for this project? Sometimes not needed, sometimes needed. It can be best to script this as well.

# Troubleshooting

Nothing is perfect... there will be issues. Stay calm and document any potential known caveats that might come up. Describe how to handle the ones that are known.
