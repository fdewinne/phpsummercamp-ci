# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.box = "civm"
  config.vm.hostname = "workshopci"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  config.vm.network "private_network", ip: "192.168.33.10"

  config.vm.synced_folder ".", "/var/www/ciblog", type: "nfs", id: "vagrant-root",  mount_options: ['rw', 'vers=3', 'tcp', 'fsc']

  config.ssh.forward_agent = true

  config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
    vb.cpus = "2"
    vb.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root","1"]
  end
end
