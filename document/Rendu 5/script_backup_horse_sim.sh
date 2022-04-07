#!/bin/sh
mydate=$(date +"%Y%m%d%H%M")
mysqldump -uadminer -pAdmin1234. --databases horse_sim > /root/SI_BDD/document/'Rendu 5'/horse_sim_backup/$mydate.sql
mysqlhotcopy horse_sim /root/SI_BDD/document/'Rendu 5'/horse_sim_backup/
cd /root/SI_BDD/document/'Rendu 5'/horse_sim_backup
tar -zcvf horse_sim_backup_$mydate.tgz /root/SI_BDD/document/'Rendu 5'/horse_sim_backup/$mydate.sql /root/SI_BDD/document/'Rendu 5'/horse_sim_backup/horse_sim

