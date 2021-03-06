<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */
return [
    'bootstrap' => ['debug'],

    'modules' => [

        'debug' =>
        [
            'allowedIPs' => ['*'],
            'class' => 'yii\debug\Module',
        ]
    ],
];
