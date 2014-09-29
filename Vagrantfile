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
  #config.vm.box     = "debian-730-x32"
  #config.vm.box_url = "http://puppet-vagrant-boxes.puppetlabs.com/debian-73-i386-virtualbox-puppet.box"
  config.vm.box      = "kaystrobach/debian-7-x32"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network :forwarded_port, guest: 80, host: 8080

  config.vm.hostname = "lapo.dev"
  config.vm.network :private_network, ip: "192.168.31.10"

  config.vm.synced_folder ".", "/serverdata", type: "nfs" #, owner: "www-data", group:"www-data"

  unless ((/cygwin|mswin|mingw|bccwin|wince|emx/ =~ RUBY_PLATFORM) == nil)
    print "detected, that you run vagrant on windows ...\n"
    unless Vagrant.has_plugin?("vagrant-winnfsd") then
      print "falling back to smb share \n"
      print "more speed possible with vagrant-winnfsd plugin\n"
      config.vm.synced_folder ".", "/serverdata", owner: "www-data", group:"www-data"
    else
      print "vagrant-winnfsd plugin found, using nfs\n"
      print "if this doesn´t work uninstall the plugin\n"
    end
  end


  # shell provisioning

  config.vm.provision :shell, :path => "serverdata/provision/prepare.sh"

# Enable provisioning with chef solo, specifying a cookbooks path, roles
  # path, and data_bags path (all relative to this Vagrantfile), and adding
  # some recipes and/or roles.
  #
  config.vm.provision :chef_solo do |chef|
    chef.cookbooks_path = "serverdata/provision/chef/cookbooks"
    chef.roles_path     = "serverdata/provision/chef/roles"
    chef.data_bags_path = "serverdata/provision/chef/data_bags"
    chef.add_recipe "dotdeb_repo"
    chef.add_recipe "kaystrobach.basic"
    chef.add_recipe "kaystrobach.mail"
    chef.add_recipe "kaystrobach.web"
    # chef.add_recipe "kaystrobach.documentation"
    chef.add_recipe "kaystrobach.phpmyadmin"

  #   chef.add_recipe "mysql"
  #   chef.add_role "web"

    # You may also specify custom JSON attributes:
    # chef.json = { :mysql_password => "foo" }

    chef.log_level = :debug
  end

  # Puppet provisioning

  # config.vm.provision :puppet do |puppet|
  #   puppet.manifests_path = "serverdata/provision/manifests"
  #   puppet.manifest_file  = "default.pp"
  # end

  config.vm.provision :shell, :path => "serverdata/provision/bootstrap.sh"

  config.vm.provision :shell, :path => "serverdata/provision/info.sh", run: "always"


  config.vm.provider "virtualbox" do |vm|
    vm.name = "lapo.dev"
    vm.customize ["modifyvm", :id, "--memory",           "2048"]
    vm.customize ["modifyvm", :id, "--cpuexecutioncap",   "90"]
  end
  config.vm.provider :vmware_fusion do |vm, override|
    override.vm.box     = "debian-607-x64_fusion"
    override.vm.box_url = "https://dl.dropbox.com/u/39133545/Publish/Vagrant/Provider/Vmware/vagrant-debian-squeeze64.box"
    # v.gui = true
    vm.vmx["memsize"] = "1024"

  end

end
