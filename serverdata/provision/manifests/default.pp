group { "puppet":
    ensure => "present",
}

exec { 'apt-get update':
  command => "/usr/bin/apt-get update --force-yes",
  require  => File['/etc/apt/sources.list']
}


package { "mc":                         ensure  => "latest", require  => Exec['apt-get update']}
package { "vim":                        ensure  => "latest", require  => Exec['apt-get update']}

package { "git":                        ensure  => "latest", require  => Exec['apt-get update']}
package { "subversion":                 ensure  => "latest", require  => Exec['apt-get update']}


package { "graphicsmagick":             ensure  => "latest", require  => Exec['apt-get update']}

package { "mysql-server":               ensure  => "latest", require  => Exec['apt-get update']}
package { "mysql-client":               ensure  => "latest", require  => Exec['apt-get update']}

package { "apache2":                    ensure  => "latest", require  => Exec['apt-get update']}
package { "libapache2-mod-php5":        ensure  => "latest", require  => Exec['apt-get update']}
package { "php5":                       ensure  => "latest", require  => Exec['apt-get update']}
package { "php5-gd":                    ensure  => "latest", require  => Exec['apt-get update']}
package { "php5-curl":                  ensure  => "latest", require  => Exec['apt-get update']}
package { "php5-mysql":                 ensure  => "latest", require  => Exec['apt-get update']}
package { "phpmyadmin":                 ensure  => "latest", require  => Exec['apt-get update']}



service { "apache2":
  ensure  => "running",
  require => Package["apache2"],
}

service { "mysql":
  ensure  => "running",
  require => Package["mysql-server"],
}


file { "/var/www/":
  ensure  => "directory",
  require => Package["apache2"],
  notify  => Service["apache2"],
  force   => true,
}

# Configuration files
file { "/etc/apt/sources.list":
  ensure  => "link",
  target  => "/vagrant/serverdata/etc/apt/sources.list",
  force => true,
}

file { "/etc/apache2/sites-available/":
  ensure  => "link",
  target  => "/vagrant/serverdata/etc/apache2/sites-available/",
  require => Package["apache2"],
  notify  => Service["apache2"],
  force => true,
}

file { "/etc/php5/cli/php.ini":
  ensure  => "link",
  target  => "/vagrant/serverdata/etc/php5/cli/php.ini",
  require => Package["php5"],
  force => true,
}
file { "/etc/php5/apache2/php.ini":
  ensure  => "link",
  target  => "/vagrant/serverdata/etc/php5/apache2/php.ini",
  require => Package["apache2"],
  notify  => Service["apache2"],
  force => true,
}
file { "/home/vagrant/Maildir":
  ensure  => "link",
  target  => "/vagrant/serverdata/home/vagrant/Maildir",
  force => true,
}