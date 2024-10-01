#!/bin/sh

echo -e "\e[31m[portainer:setup.sh] Script Start!\e[0m"
if [ ! -d "/bin/portainer/" ]; then
	echo -e "\e[31m[portainer:setup.sh] Portainer not installed, installing now.\e[0m"
	curl -L https://github.com/portainer/portainer/releases/download/$PORTAINER_VERSION/portainer-$PORTAINER_VERSION-linux-amd64.tar.gz \
	    -o /tmp/portainer.tar.gz
	tar -xzf /tmp/portainer.tar.gz -C /tmp
	chmod +x /tmp/portainer/
	chown root:root /tmp/portainer/
	mv /tmp/portainer /bin/portainer
	rm -rf /tmp/portainer.tar.gz
fi
echo -e "\e[31m[portainer:setup.sh] Running portainer.\e[0m"
exec ./bin/portainer/portainer