#!/bin/sh
if [ ! -f /installed-aptkey-php54 ]; then
	touch /installed-aptkey-php54
	wget http://www.dotdeb.org/dotdeb.gpg
    cat dotdeb.gpg | apt-key add -
fi