<?php

$lang = &$GLOBALS['TL_LANG']['tl_api_app'];

/**
 * Fields
 */
$lang['tstamp'][0]                 = 'Timestamp';
$lang['tstamp'][1]                 = 'Last change date of the data record.';
$lang['dateAdded'][0]              = 'Creation Date';
$lang['dateAdded'][1]              = 'Date the record was created.';
$lang['title'][0]                  = 'Title';
$lang['title'][1]                  = 'Please enter the title here.';
$lang['key'][0]                    = 'API key';
$lang['key'][1]                    = 'This automatically generated key must be transmitted with every connection to the API.';
$lang['groups'][0]                 = 'Allowed user groups';
$lang['groups'][1]                 = 'Grant access only to the following user groups.';
$lang['mGroups'][0]                = 'Allowed member groups';
$lang['mGroups'][1]                = 'Grant access only to the following member groups.';
$lang['published'][0]              = 'Activated';
$lang['published'][1]              = 'Choose this option to publish.';
$lang['start'][0]                  = 'Active from';
$lang['start'][1]                  = 'Select the date this key is active from.';
$lang['stop'][0]                   = 'Active until';
$lang['stop'][1]                   = 'Select the date this key is active until.';

/**
 * Legends
 */
$lang['general_legend']  = 'General Settings';
$lang['resource_legend'] = 'Resource Settings';
$lang['security_legend'] = 'Security Settings';
$lang['publish_legend']  = 'Activation Settings';

/**
 * Buttons
 */
$lang['new']        = ['New application', 'Create application'];
$lang['editheader'] = ['Edit application', 'Edit Application ID %s'];
$lang['edit']       = ['Actions for this application', 'Actions for application ID %s'];
$lang['copy']       = ['Copy application', 'Copy application ID %s'];
$lang['delete']     = ['Delete application', 'Delete application ID %s'];
$lang['toggle']     = ['Toggle application', 'Toggle application ID %s active/inactive'];
$lang['show']       = ['Application Details', 'Show Details for application ID %s'];

/**
 * Resources
 */
$lang['reference'] = [
    \HeimrichHannot\ApiBundle\Manager\ApiResourceManager::TYPE_RESOURCE        => 'Resource',
    \HeimrichHannot\ApiBundle\Manager\ApiResourceManager::TYPE_ENTITY_RESOURCE => 'Entity Resource',
    'api_resource_create'                                                      => 'Add resource (create)',
    'api_resource_update'                                                      => 'Edit resource (update)',
    'api_resource_list'                                                        => 'Get resources (list)',
    'api_resource_show'                                                        => 'Show single resource (show)',
    'api_resource_delete'                                                      => 'Remove resource (delete)',
];
$lang['reference_short'] = [
    'api_resource_create'                                                      => 'Create',
    'api_resource_update'                                                      => 'Update',
    'api_resource_list'                                                        => 'List',
    'api_resource_show'                                                        => 'Show',
    'api_resource_delete'                                                      => 'Delete',
];
