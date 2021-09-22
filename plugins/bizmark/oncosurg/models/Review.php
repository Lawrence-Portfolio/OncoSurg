<?php namespace BizMark\OncoSurg\Models;

use Model;

/**
 * Review Model
 */
class Review extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bizmark_oncosurg_reviews';

    protected $rules = [
        'comment' => 'required',
        'author' => 'required'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'custom_date'
    ];

    protected $jsonable = [
        'answer'
    ];

    public $belongsTo = [
        'desease' => ['BizMark\OncoSurg\Models\Desease']
    ];

    public $attachOne = [
        'avatar' => 'System\Models\File'
    ];
}
