<?php namespace Captive\Notes\Models;

use Model;

/**
 * Model
 */
class Note extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'captive_notes_notes';

    /**
     * @var array The attributes to be mutated to dates
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = ['additional_data'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'=> 'required',
    ];

    /**
     * @var array Attributes that are allowed to be mass-assignable
     */
    public $fillable = ['name', 'content'];

    /**
     * Relations
     */
    public $morphTo = [
        'target' => []
    ];
}
