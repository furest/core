#!/bin/sh

if [ "$2" = "server_user" ] || [ "$2" = "server_tls_user" ]; then
	/sbin/pfctl -k $ifconfig_pool_remote_ip
	/sbin/pfctl -K $ifconfig_pool_remote_ip
fi

exit 0
