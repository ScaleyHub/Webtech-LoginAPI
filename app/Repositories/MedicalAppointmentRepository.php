<?php

namespace App\Repositories;

use App\Models\MedicalAppointment;
use App\Repositories\BaseRepository;

/**
 * Class MedicalAppointmentRepository
 * @package App\Repositories
 * @version October 28, 2021, 3:54 am UTC
*/

class MedicalAppointmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'doctor_first_name',
        'doctor_last_name',
        'doctor_specialization',
        'appointment_start',
        'appointment_end'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MedicalAppointment::class;
    }
}
