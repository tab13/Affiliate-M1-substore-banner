<?php
/*
* Added by Adam 22/05/2015
*/

$installer = $this;
$installer->startSetup();

$installer->getConnection()->addColumn($installer->getTable('affiliateplus/account'), 'description', 'text default ""');

$installer->endSetup();