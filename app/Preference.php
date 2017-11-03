<?php

namespace Base;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "preferences";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'data_type', 'default_value', 'preference_category_id'
    ];
}
