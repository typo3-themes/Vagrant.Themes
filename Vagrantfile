# -*- mode: ruby -*-
# vi: set ft=ruby :

print "You may be asked for your sudo password to use NFS shares\n"
print "More Information: https://docs.vagrantup.com/v2/synced-folders/nfs.html\n\n"

unless Vagrant.has_plugin?("vagrant-vbguest")
  print "please execute the following command to enable automated vbguest installation\n\n"
  print "vagrant plugin install vagrant-vbguest"
  exit
end


Vagrant.configure("2") do |config|

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box     = "debian-720-x32"
  config.vm.box_url = "http://puppet-vagrant-boxes.puppetlabs.com/debian-73-i386-virtualbox-puppet.box"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network :forwarded_port, guest: 80, host: 8080

  config.vm.hostname = "themes.dev"
  config.vm.network :private_network, ip: "192.168.31.16"



  unless ((/cygwin|mswin|mingw|bccwin|wince|emx/ =~ RUBY_PLATFORM) == nil) then
    print "detected, that you run vagrant on windows ...\n"
    unless Vagrant.has_plugin?("vagrant-winnfsd") then
      print "falling back to smb share \n"
      print "more speed possible with vagrant-winnfsd plugin\n"
      config.vm.synced_folder ".", "/serverdata", owner: "www-data", group:"www-data"
      config.vm.synced_folder ".", "/vagrant", owner: "www-data", group:"www-data"
    else
      print "vagrant-winnfsd plugin found, using nfs\n"
      print "if this doesn´t work uninstall the plugin\n"
      config.vm.synced_folder ".", "/serverdata", type: "nfs"
      config.vm.synced_folder ".", "/vagrant", type: "nfs"
    end
  else
    config.vm.synced_folder ".", "/serverdata", type: "nfs"
    config.vm.synced_folder ".", "/vagrant", type: "nfs"
  end

  config.vm.provision :shell, :path => "serverdata/provision/prepare.sh"

  # Puppet provisioning

  config.vm.provision :puppet do |puppet|
     puppet.manifests_path = "serverdata/provision/manifests"
     puppet.manifest_file  = "default.pp"
  end

  config.vm.provision :shell, :path => "serverdata/provision/bootstrap.sh"

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
    vm.name = "themes.dev"
    vm.customize ["modifyvm", :id, "--memory",          "1024"]
    vm.customize ["modifyvm", :id, "--cpuexecutioncap",   "80"]
    vm.customize ["modifyvm", :id, "--nictype1",         "Am79C973"]
    vm.customize ["modifyvm", :id, "--nictype2",         "Am79C973"]
  end
  config.vm.provider :vmware_fusion do |vm, override|
    override.vm.box     = "precise64_fusion"
    override.vm.box_url = "http://files.vagrantup.com/precise64_vmware.box"
    override.vm.network :private_network, ip: "192.168.35.16"

    # v.gui = true
    vm.vmx["memsize"] = "1024"

  end
  #config.vm.provider :lxc do |lxc, override|
  #  config.vm.box     = "debian-607-x32"
  #  config.vm.box_url = "http://dl.dropbox.com/u/40989391/vagrant-boxes/debian-squeeze-i386.box"
  #end

end
