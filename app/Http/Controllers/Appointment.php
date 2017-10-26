<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Appointment;

class AppointmentController extends Controller
{
    public function appointment(Request $request)
    {
      // $this->validate($request,[
      //   'name' => 'required',
      //   'phone' => 'required'
      // ]);

      $appointment = $request->all();
      // dd($appointment);
      \Mail::to('pete@tingdiamond.com')->send(new Appointment($appointment));

      return response()
        ->json(
          ['saved' => true,
        'message' => trans('frontEnd.appointmentSuccess')
        ]
        );

    }
}
