# -*- mode: ruby -*-
# vi: set ft=ruby :

# PROJECT VARIABLES
project_name = "d8"
# OS X uses .local for Bonjour and can cause slowness in some tools
project_hostname = project_name + ".vm"
ip_address = "172.22.22.20"
project_root = "/var/www/" + project_name
project_docroot = project_root + "/docroot"
# TODO: pass platform version so users don't have to dig deep into roles?
# drupal_version?
# wordpress_version?
# laravel_version?
# symfony_version?

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure(2) do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  # For Virtualbox
  # config.vm.box = "trusty64"

  # The url from where the 'config.vm.box' box will be fetched if it
  # doesn't already exist on the user's system. VirtualBox Provider.
  # For VirtualBox
  # config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-amd64-vagrant-disk1.box"

  # For Parallels
  config.vm.box = "parallels/ubuntu-14.04"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network "forwarded_port", guest: 80, host: 8080
  # TODO: Add forwarded ports

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  # config.vm.network "private_network", ip: "192.168.33.10"

  # Use hostonly network with a static IP Address and enable
  # hostmanager so we can have a custom domain for the server
  # by modifying the host machines hosts file
  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.vm.define project_name do |node|
    node.vm.hostname = project_hostname
    node.vm.network :private_network, ip: ip_address
    # Forward default Web port to vm
    # node.vm.network "forwarded_port", guest: 80, host: 80
    # Forward default BrowserSync ports to vm
    # node.vm.network "forwarded_port", guest: 3000, host: 3000
    # node.vm.network "forwarded_port", guest: 3001, host: 3001
    # Forward default MySQL port to vm
    # node.vm.network "forwarded_port", guest: 3306, host: 3306
    # Forward default varnish port to vm
    # node.vm.network "forwarded_port", guest: 6082, host: 6082
    # Forward default browsersync port to vm
    # node.vm.network "forwarded_port", guest: 8080, host: 8080
    node.hostmanager.aliases = [ "www." + project_hostname ]
  end
  config.vm.provision :hostmanager

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"
  config.vm.synced_folder "./", project_root + "/"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end
  #
  # View the documentation for the provider you are using for more
  # information on available options.
  # http://parallels.github.io/vagrant-parallels/docs/configuration.html
  config.vm.provider "parallels" do |prl|
    prl.name = project_name
    prl.memory = 2048
    prl.cpus = 2
    # Make sure Parallels tools is installed in VM since it's not always
    prl.check_guest_tools = true
    prl.update_guest_tools = true
  end

  config.vm.provider "virtualbox" do |v|
    v.name = project_name
    # v.customize ["modifyvm", :id, "--cpus", "1"]
    v.customize ["modifyvm", :id, "--cpus", "2"]
    v.customize ["modifyvm", :id, "--cpuexecutioncap", "85"]
    v.customize ['modifyvm', :id, '--ioapic', 'on']
    v.customize ["modifyvm", :id, "--memory", "2048"]
    # v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    # v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end

  # Define a Vagrant Push strategy for pushing to Atlas. Other push strategies
  # such as FTP and Heroku are also available. See the documentation at
  # https://docs.vagrantup.com/v2/push/atlas.html for more information.
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
  # config.vm.provision "shell", inline: <<-SHELL
  #   sudo apt-get update
  #   sudo apt-get install -y apache2
  # SHELL

  # Setup provisioning with an ansible playbook
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "provisioning/playbook.yml"
    # ansible.tags = "common"
    # ansible.verbose = "vvvv"
    ansible.extra_vars = {
      "ip_address"       => ip_address,
      "project_name"     => project_name,
      "project_hostname" => project_hostname,
      "project_root"     => project_root,
      "project_docroot"  => project_docroot
    }
    ansible.groups = {
      "devstack" => [project_name]
    }
  end
end
