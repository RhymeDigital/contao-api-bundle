<?php

$lang = &$GLOBALS['TL_LANG']['tl_api_app_action'];

/**
 * Fields
 */
$lang['tstamp'][0] = 'Modification date';
$lang['title'][0] = 'Title';
$lang['title'][1] = 'Please enter the title here.';
$lang['type'][0]                     = 'Type';
$lang['type'][1]                     = 'Choose a type.';
$lang['resource'][0]                 = 'Resource';
$lang['resource'][1]                 = 'Please select a resource.';
$lang['resourceAction'][0]           = 'Actions available';
$lang['resourceAction'][1]           = 'Select the available actions related to this resource here.';
$lang['limitFields'][0]              = 'Restrict fields';
$lang['limitFields'][1]              = 'Select this option if only certain fields are to be allowed on a list/show operation.';
$lang['limitedFields'][0]            = 'Fields';
$lang['limitedFields'][1]            = 'Select the fields to be output here.';
$lang['limitFormattedFields'][0]     = 'Limit formatted fields (improve speed)';
$lang['limitFormattedFields'][1]     = 'Select this option if only certain fields are to be formatted based on the data container configuration.';
$lang['limitedFormattedFields'][0]   = 'Formatted fields';
$lang['limitedFormattedFields'][1]   = 'Select the fields to be formatted here.';
$lang['language'][0]                 = 'Specify language';
$lang['language'][1]                 = 'Select the language here that should be used for localizable fields.';
$lang['whereSql'][0]                 = 'SQL WHERE condition';
$lang['whereSql'][1]                 = 'Here you can set conditions for the SQL WHERE clause on a list operation.';
$lang['hideUnpublishedInstances'][0] = 'Hide unpublished instances';
$lang['hideUnpublishedInstances'][1] = 'Select this option to hide unpublished instances.';
$lang['publishedField'][0]           = '"Published" field';
$lang['publishedField'][1]           = 'Select the field in which the visibility status is saved (e.g. "published").';
$lang['invertPublishedField'][0]     = 'Reverse the "Published" field';
$lang['invertPublishedField'][1]     =
    'Select this option if a "true" in the published field corresponds to a non-public state.';
$lang['addPublishedStartAndStop'][0] = 'Add "Start" and "Stop" fields';
$lang['addPublishedStartAndStop'][1] = 'Select this option if there is a scheduled publication.';
$lang['publishedStartField'][0]      = '"Start" field';
$lang['publishedStartField'][1]      = 'Select the field which indicates the date it should be public.';
$lang['publishedStopField'][0]       = '"Stop" field';
$lang['publishedStopField'][1]       = 'Select the field which the entity should no longer be public.';
$lang['published'][0] = 'Activate';
$lang['published'][1] = 'Choose this option to publish.';
$lang['start'][0] = 'Start date';
$lang['start'][1] = 'Allow access to the action from this day forward.';
$lang['stop'][0] = 'Stop date';
$lang['stop'][1] = 'Allow access to the action up to this date.';

/**
 * Legends
 */
$lang['general_legend']     = 'General Settings';
$lang['publish_legend']     = 'Activation Settings';
$lang['resource_legend']    = 'API Resource Settings';
$lang['config_legend']      = 'Configuration Settings';

/**
 * Buttons
 */
$lang['new'][0] = 'New Action';
$lang['new'][1] = 'Add a new action';
$lang['edit'][0] = 'Edit action';
$lang['edit'][1] = 'Edit action ID %s';
$lang['copy'][0] = 'Copy action';
$lang['copy'][1] = 'Copy action ID %s';
$lang['delete'][0] = 'Delete action';
$lang['delete'][1] = 'Delete action ID %s';
$lang['toggle'][0] = 'Toggle activation';
$lang['toggle'][1] = 'Toggle activation for action ID %s on/off';
$lang['show'][0] = 'Action details';
$lang['show'][1] = 'Show the details for action ID %s';
