#!/bin/bash
sudo systemctl start apache2.service
ping -c1 25.120.160.114 > /dev/null #pings primary server
if [ $? -eq 0 ]
	then
		echo  "connected!"
		exit 0
	else
		echo "not connected"
		exit 0
fi
