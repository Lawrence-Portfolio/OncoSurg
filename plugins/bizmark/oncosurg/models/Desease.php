<?php namespace BizMark\OncoSurg\Models;

use Model;

/**
 * Desease Model
 */
class Desease extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SimpleTree;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bizmark_oncosurg_deseases';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required'
    ];

    public $belongsTo = [
        'category' => ['BizMark\OncoSurg\Models\Category']
    ];
    public $hasMany = [
        'reviews' => [
            'BizMark\OncoSurg\Models\Review',
            'key' => 'desease_id'
        ]
    ];
}
