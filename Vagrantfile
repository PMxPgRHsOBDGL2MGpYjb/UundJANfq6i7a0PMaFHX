VAGRANTFILE_API_VERSION = "2"

$php_ppa = <<-SCRIPT
echo I am adding php 7.2...
sudo add-apt-repository ppa:ondrej/php
sudo apt update


config.vm.provision "shell", inline: $php_ppa
SCRIPT

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    if Vagrant.has_plugin?("vagrant-cachier")
        config.cache.scope = :machine
    end

    config.vm.define "contestr" do |contestr|
        config.vm.synced_folder "src", "/contestr",
            owner: "www-data",
            group: "www-data",
            mount_options: ["dmode=775,fmode=775"]
        
        contestr.vm.box = "laravel/homestead"
        contestr.vm.box_version = "5.2.0"

        contestr.vm.hostname = "contestr"
        contestr.vm.network "private_network", ip: "192.168.111.11"
        contestr.vm.network "forwarded_port", guest: 3306, host: 33056

        contestr.vm.provider "virtualbox" do |vb|
            vb.name = "contestr"
            vb.memory = 2048
            vb.cpus = 2
            vb.linked_clone = true
        end
    end


    config.vm.provision "ansible_local" do |ansible|
        ansible.playbook = "playbooks/playbook.yml"
        #ansible.become = true
    end
end
