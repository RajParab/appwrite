<?php

namespace Appwrite\Utopia\Database\Validator\Queries;

class Functions extends Base
{
    public const ALLOWED_ATTRIBUTES = [
        'name',
        'status',
        'runtime',
        'deployment',
        'schedule',
        'scheduleNext',
        'schedulePrevious',
        'timeout'
    ];

    /**
     * Expression constructor
     *
     */
    public function __construct()
    {
        parent::__construct('functions', self::ALLOWED_ATTRIBUTES);
    }
}
