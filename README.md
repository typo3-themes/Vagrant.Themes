Themes.Vagrant
===========

To use this vagrant maschine you need to install vagrant and virtualbox.

Needed Software
---------------

Please download and install the following software
- virtualbox https://www.virtualbox.org/
- vagrant http://downloads.vagrantup.com/ (pick the latest version for your operating system)
- git (windows: https://code.google.com/p/msysgit/)

As visual git Desktop client i think sourcetree is the best choice, but you may also use tortoisegit on winows.
- http://www.sourcetreeapp.com/
- https://code.google.com/p/tortoisegit/

First Startup
--------

To power on the virtual maschines you need to switch to the commandline.
Go into the git repository and run:

```bash
git clone https://github.com/typo3-themes/Vagrant.Themes.git typo3-themes-box
cd typo3-themes-box
vagrant up
```

This will download and initialise the basic image
(lateron this command will be blazing fast, as the base vm is already available on your system).

Other important commands
```bash
vagrant suspend - suspend the CM
vagrant status  - show status of the virtual maschine
vagrant halt    - shutdown the virtual maschine
vagrant destroy - destroy the virtual maschine (drop virtual drives, ...)
```

You can get more information about vagrant from the vagrant documentation:
http://docs.vagrantup.com/v2/

Some important commands
--------

```bash

Access the VM via SSH:
vagrant ssh

Easily gain root rights:
sudo su -

Access the apache error logs on the fly (auto refresh):
sudo tail -f /var/log/apache2/error.log

```

Have fun!

