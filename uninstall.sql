#*********************************************
#
# UNINSTALLTION
#
# Autor: 	G.Seilheimer
# Company:	contic.de
# Version: 	1.3.4
# Update:	2011-11-09
# CMS:		Redaxo 4.3.2
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

#*********************************************
#
# delete values from rex_template
#
#*********************************************

DELETE FROM `%TABLE_PREFIX%template` WHERE `id`=620 LIMIT 1;