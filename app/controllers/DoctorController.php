<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PharmacyController
 *
 * @author Owden
 */
class DoctorController extends BaseController {

	public function index(){
		return View::make('doctor.doctor');

	}

	public function appointment(){
		return View::make('doctor.appointment');

	}

	public function patients(){
		return View::make('doctor.patients');

	}

	public function prescription(){
		return View::make('doctor.prescription');

	}

	public function profile(){
		return View::make('doctor.profile');

	}		

	public function reports(){
		return View::make('doctor.reports');

	}
}