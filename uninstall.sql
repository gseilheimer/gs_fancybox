#*********************************************
#
# UNINSTALLTION
#
# Autor: 	G.Seilheimer
# Company:	contic.de
# Version: 	1.0.5
# Update:	2013-03-27
# CMS:		Redaxo 4.4.1
#
#*********************************************


#*********************************************
#
# delete values from rex_679_types
#
#*********************************************

DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=620 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=621 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=622 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=623 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=624 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=625 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=626 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=627 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_types` WHERE `id`=628 LIMIT 1;

#*********************************************
#
# delete values from rex_679_type_effects
#
#*********************************************

DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=620 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=621 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=622 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=623 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=624 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=625 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=626 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=627 LIMIT 1;
DELETE FROM `%TABLE_PREFIX%679_type_effects` WHERE `id`=628 LIMIT 1;

#*********************************************
#
# delete values from rex_template
#
#*********************************************

DELETE FROM `%TABLE_PREFIX%template` WHERE `name` LIKE '%gs : fancybox (jquery)%' LIMIT 1;