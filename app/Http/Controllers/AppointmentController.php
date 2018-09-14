<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Repositories\Appointment;

class AppointmentController extends Controller
{

    protected $appointment;

    public function __construct(Appointment $appointment){
        $this->appointment = $appointment;
    }

    public function index(){
        $appointment = $this->appointment->all();
        return view('welcome',compact('appointment'));
    }
    public function show($id){
        $appointment = $this->appointment->find($id);
        return view('list',compact('appointment'));
    }

}
