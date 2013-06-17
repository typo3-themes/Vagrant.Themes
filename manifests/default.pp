group { "puppet":
    ensure => "present",
}

exec { 'apt-get update':
  command => "/usr/bin/apt-get update --force-yes",
  onlyif  => "/bin/bash -c 'exit $(( $(( $(date +%s) - $(stat -c %Y /var/lib/apt/lists/$( ls /var/lib/apt/lists/ -tr1|tail -1 )) )) <= 604800 ))'"
}

package { "mc":	                 ensure  => "latest", require  => Exec['apt-get update']}
package { "vim":	               ensure  => "latest", require  => Exec['apt-get update']}

package { "git":	               ensure  => "latest", require  => Exec['apt-get update']}
package { "subversion":          ensure  => "latest", require  => Exec['apt-get update']}


package { "graphicsmagick":      ensure  => "latest", require  => Exec['apt-get update']}

package { "mysql-server":	       ensure  => "latest", require  => Exec['apt-get update']}
package { "mysql-client":	       ensure  => "latest", require  => Exec['apt-get update']}

package { "apache2":      	     ensure  => "latest", require  => Exec['apt-get update']}
package { "php5":	               ensure  => "latest", require  => Exec['apt-get update']}
package { "php5-gd":             ensure  => "latest", require  => Exec['apt-get update']}
package { "php5-curl":           ensure  => "latest", require  => Exec['apt-get update']}
package { "php5-mysql":			     ensure  => "latest", require  => Exec['apt-get update']}

package { "libapache2-mod-php5": ensure  => "latest", require  => Exec['apt-get update']}

service { "apache2":
  ensure  => "running",
  require => Package["apache2"],
}

service { "mysql":
  ensure  => "running",
  require => Package["mysql-server"],
}


file { "/var/www/":
  ensure  => "link",
  target  => "/serverData/www",
  require => Package["apache2"],
  notify  => Service["apache2"],
  force => true,
}

