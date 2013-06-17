DRK.Vagrant
===========

To use this vagrant maschine you need to install vagrant and virtualbox.

Downloads
---------

You may find virtualbox here:
- https://www.virtualbox.org/

You may find vagrant here:
- http://downloads.vagrantup.com/ (pick the latest version for your operating system)

You may find git for Windows here:
- https://code.google.com/p/msysgit/

As visual Desktop client i think sourcetree is the best choice, but you may also use tortoisegit on winows.
- http://www.sourcetreeapp.com/
- https://code.google.com/p/tortoisegit/

Installation
------------

- Install Git 
- Install virtualbox first
- Install vagrant
- Install SourceTree if you like

Checkout
--------

clone the repository by creating a new repo and adding this repository origin to the remotes

First Startup
--------

To power on the virtual maschines you need to switch to the commandline.
Go into the git repository and run:

```
vagrant up
```

This will download and initialise the basic image
(lateron this command will be blazing fast, as the base vm is already available on your system).

Other important commands
```
vagrant suspend
vagrant status
vagrant halt
vagrant destroy
```

Have fun!

