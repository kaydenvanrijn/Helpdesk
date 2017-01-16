<?php

namespace Aviator\Helpdesk\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GenericContent extends ContentBase
{
    protected $fillable = [
        'title',
        'body'
    ];

    /**
     * The partial that displays this content
     * @var string
     */
    protected $partial = 'helpdesk::tickets.show.content.generic';

    /**
     * Set the table name from the Helpdesk config
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('helpdesk.tables.generic_contents'));
    }

    /**
     * The title of the content
     * @return string
     */
    public function title()
    {
        return 'Custom Quote Request';
    }
}
