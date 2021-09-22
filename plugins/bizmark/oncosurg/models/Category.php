<?php namespace BizMark\OncoSurg\Models;

use Model;

/**
 * Category Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bizmark_oncosurg_categories';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required'
    ];

    public $hasMany = [
        'deseases' => [
            'BizMark\OncoSurg\Models\Desease',
            'key' => 'category_id'
        ]
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
