<?php

/*
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\ApiBundle\Model;

use Contao\System;

class ApiAppActionModel extends \Model
{
    protected static $strTable = 'tl_api_app_action';

    public function getCurrentActionConfig(string $resource, string $actionType, ApiAppModel $app)
    {
        $columns = [
            'tl_api_app_action.pid=?', 'tl_api_app_action.resourceAction=?', 'tl_api_app_action.resource=?',
        ];

        $values = [$app->id, $actionType, $resource];

        System::getContainer()->get('huh.utils.model')->addPublishedCheckToModelArrays(
            'tl_api_app_action', 'published', 'start', 'stop', $columns);

        return System::getContainer()->get('huh.utils.model')->findOneModelInstanceBy(
            'tl_api_app_action', $columns, $values
        );
    }
}
