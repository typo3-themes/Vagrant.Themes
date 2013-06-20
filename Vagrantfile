# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box     = "precise32"
  config.vm.box_url = "http://files.vagrantup.com/precise32.box"

  #config.vm.box     = "debian-607-x64"
  #config.vm.box_url = "http://puppet-vagrant-boxes.puppetlabs.com/debian-607-x64-vbox4210.box"

  config.vm.synced_folder "serverdata/", "/serverdata", owner: "www-data"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network :forwarded_port, guest: 80, host: 8080

  config.vm.hostname = "themes.dev"
  config.vm.network :private_network, ip: "192.168.33.16"

  # Puppet provisioning

  config.vm.provision :puppet do |puppet|
     puppet.manifests_path = "manifests"
     puppet.manifest_file  = "default.pp"
  end

  config.vm.provision :shell, :path => "bootstrap.sh"

  # Enable provisioning with chef solo, specifying a cookbooks path, roles
  # path, and data_bags path (all relative to this Vagrantfile), and adding
  # some recipes and/or roles.
  #
  # config.vm.provision :chef_solo do |chef|
  #   chef.cookbooks_path = "../my-recipes/cookbooks"
  #   chef.roles_path = "../my-recipes/roles"
  #   chef.data_bags_path = "../my-recipes/data_bags"
  #   chef.add_recipe "mysql"
  #   chef.add_role "web"
  #
  #   # You may also specify custom JSON attributes:
  #   chef.json = { :mysql_password => "foo" }
  # end

  config.vm.provider "virtualbox" do |vm, override|
    vm.name = "drk-dresden.dev"
    vm.customize ["modifyvm", :id, "--memory",          "1024"]
    vm.customize ["modifyvm", :id, "--cpuexecutioncap",   "80"]
    override.vm.network :private_network, ip: "192.168.34.16"
  end
  config.vm.provider :vmware_fusion do |vm, override|
    override.vm.box     = "precise64_fusion"
    override.vm.box_url = "http://files.vagrantup.com/precise64_vmware.box"
    override.vm.network :private_network, ip: "192.168.33.16"

    # v.gui = true
    vm.vmx["memsize"] = "1024"

  end

end
