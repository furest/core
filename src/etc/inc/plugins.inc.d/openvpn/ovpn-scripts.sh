#!/bin/sh

if [ -z "${script_type}" ]; then
    echo "Missing script_type env variable"
    exit 1
fi

for script in /usr/local/opnsense/scripts/OPNsense/Openvpn/${script_type}.d/*.sh; do
    $script $@

    if [ $? -ne 0 ]; then
        exit $ret
    fi
done

exit 0