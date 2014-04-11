<?php

class PatientTableSeeder extends Seeder{

	public function run(){

		Patient::create (array(
		'first_name' => 'Evaristus',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'gender' => 'Male',
		'birth_date' => date("1990-04-09"),
		'address' => 'Changanyikeni',
		'contact' => '+255 (0) 717 008 699'
		)
);
	Patient::create (array(
		'first_name' => 'Raphael',
		'middle_name' => 'Sijui',
		'last_name' => 'Ndowski',
		'gender' => 'Male',
		'birth_date' => date("1990-04-09"),
		'address' => 'Tegeta',
		'contact' => '+255 (0) 717 008 699'
		)
);
	Patient::create (array(
		'first_name' => 'Four',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'gender' => 'Male',
		'birth_date' => date("1990-04-09"),
		'address' => 'Changanyikeni',
		'contact' => '+255 (0) 717 008 699'
		)
);
	Patient::create (array(
		'first_name' => 'Stunner',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'gender' => 'Male',
		'birth_date' => date("1990-04-09"),
		'address' => 'Changanyikeni',
		'contact' => '+255 (0) 717 008 699'
		)
);
	}
}