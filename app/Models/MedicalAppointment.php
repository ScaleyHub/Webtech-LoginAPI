<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MedicalAppointment
 * @package App\Models
 * @version October 28, 2021, 3:54 am UTC
 *
 * @property string $doctor_first_name
 * @property string $doctor_last_name
 * @property string $doctor_specialization
 * @property string|\Carbon\Carbon $appointment_start
 * @property string|\Carbon\Carbon $appointment_end
 */
class MedicalAppointment extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'medical_appointments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'doctor_first_name',
        'doctor_last_name',
        'doctor_specialization',
        'appointment_start',
        'appointment_end'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'doctor_first_name' => 'string',
        'doctor_last_name' => 'string',
        'doctor_specialization' => 'string',
        'appointment_start' => 'datetime',
        'appointment_end' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_first_name' => 'required|string|max:255',
        'doctor_last_name' => 'required|string|max:255',
        'doctor_specialization' => 'required|string|max:255',
        'appointment_start' => 'required',
        'appointment_end' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
