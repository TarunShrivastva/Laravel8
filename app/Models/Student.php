<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    // table name should exsist students
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_records';


    // By Default Laravel asssume id column as a primary key 
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'student_id';


    // For non incrementing we have to define like this. 
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    // primary key is not an integer
    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

}
