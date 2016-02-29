# Install Vagrant and related programs on your host Mac.

## Variables

- `vagrant_min_version`: minimum required version of Vagrant (default: 1.8.1)
- `vagrant_use_nfs`: whether to share directories using NFS, useful for VirtualBox (default: no)
- `vagrant_apps`: related applications to install (default: `['vagrant-bar']`)
- `vagrant_plugins`: Vagrant plugins to install (default: `['vagrant-hostmanager', 'vagrant-parallels']`)

## Additional facts

- `vagrant_version_raw`: output of `vagrant --version`
- `vagrant_version`: parsed version information
- `vagrant_plugin_list`: installed Vagrant plugins
