#!/bin/bash

# Fetch the variables
. parm.txt

# function to get the current time formatted
currentTime()
{
  date +"%Y-%m-%d %H:%M:%S";
}

sudo docker service scale devops-kanboard=0
sudo docker service scale devops-kanboarddb=0

echo ---$(currentTime)---populate the volumes---
#to zip, use: sudo tar zcvf devops_kanboard_volume.tar.gz /var/nfs/volumes/devops_kanboard*
sudo tar zxvf devops_kanboard_volume.tar.gz -C /



echo ---$(currentTime)---create kanboard database service---
sudo docker service create -d \
--name devops-kanboarddb \
--mount type=volume,source=devops_kanboarddb_volume,destination=/var/lib/mysql,\
volume-driver=local-persist,volume-opt=mountpoint=/var/nfs/volumes/devops_kanboarddb_volume \
--network $NETWORK_NAME \
--replicas 1 \
--constraint 'node.role == manager' \
$KANBOARDDB_IMAGE

echo ---$(currentTime)---create kanboard service---
sudo docker service create -d \
--publish $KANBOARD_PORT:80 \
--name devops-kanboard \
--mount type=volume,source=devops_kanboard_volume_data,destination=/var/www/app/data,\
volume-driver=local-persist,volume-opt=mountpoint=/var/nfs/volumes/devops_kanboard_volume_data \
--mount type=volume,source=devops_kanboard_volume_plugin,destination=/var/www/app/plugins,\
volume-driver=local-persist,volume-opt=mountpoint=/var/nfs/volumes/devops_kanboard_volume_plugin \
--network $NETWORK_NAME \
--replicas 1 \
--constraint 'node.role == manager' \
$KANBOARD_IMAGE

sudo docker service scale devops-kanboarddb=1
sudo docker service scale devops-kanboard=1
