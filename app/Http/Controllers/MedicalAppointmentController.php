<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicalAppointmentRequest;
use App\Http\Requests\UpdateMedicalAppointmentRequest;
use App\Repositories\MedicalAppointmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MedicalAppointmentController extends AppBaseController
{
    /** @var  MedicalAppointmentRepository */
    private $medicalAppointmentRepository;

    public function __construct(MedicalAppointmentRepository $medicalAppointmentRepo)
    {
        $this->medicalAppointmentRepository = $medicalAppointmentRepo;
    }

    /**
     * Display a listing of the MedicalAppointment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $medicalAppointments = $this->medicalAppointmentRepository->all();

        return view('medical_appointments.index')
            ->with('medicalAppointments', $medicalAppointments);
    }

    /**
     * Show the form for creating a new MedicalAppointment.
     *
     * @return Response
     */
    public function create()
    {
        return view('medical_appointments.create');
    }

    /**
     * Store a newly created MedicalAppointment in storage.
     *
     * @param CreateMedicalAppointmentRequest $request
     *
     * @return Response
     */
    public function store(CreateMedicalAppointmentRequest $request)
    {
        $input = $request->all();

        $medicalAppointment = $this->medicalAppointmentRepository->create($input);

        Flash::success('Medical Appointment saved successfully.');

        return redirect(route('medicalAppointments.index'));
    }

    /**
     * Display the specified MedicalAppointment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicalAppointment = $this->medicalAppointmentRepository->find($id);

        if (empty($medicalAppointment)) {
            Flash::error('Medical Appointment not found');

            return redirect(route('medicalAppointments.index'));
        }

        return view('medical_appointments.show')->with('medicalAppointment', $medicalAppointment);
    }

    /**
     * Show the form for editing the specified MedicalAppointment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicalAppointment = $this->medicalAppointmentRepository->find($id);

        if (empty($medicalAppointment)) {
            Flash::error('Medical Appointment not found');

            return redirect(route('medicalAppointments.index'));
        }

        return view('medical_appointments.edit')->with('medicalAppointment', $medicalAppointment);
    }

    /**
     * Update the specified MedicalAppointment in storage.
     *
     * @param int $id
     * @param UpdateMedicalAppointmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicalAppointmentRequest $request)
    {
        $medicalAppointment = $this->medicalAppointmentRepository->find($id);

        if (empty($medicalAppointment)) {
            Flash::error('Medical Appointment not found');

            return redirect(route('medicalAppointments.index'));
        }

        $medicalAppointment = $this->medicalAppointmentRepository->update($request->all(), $id);

        Flash::success('Medical Appointment updated successfully.');

        return redirect(route('medicalAppointments.index'));
    }

    /**
     * Remove the specified MedicalAppointment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medicalAppointment = $this->medicalAppointmentRepository->find($id);

        if (empty($medicalAppointment)) {
            Flash::error('Medical Appointment not found');

            return redirect(route('medicalAppointments.index'));
        }

        $this->medicalAppointmentRepository->delete($id);

        Flash::success('Medical Appointment deleted successfully.');

        return redirect(route('medicalAppointments.index'));
    }
}
