<?php

class UserTableSeeder extends Seeder{

	public function run(){

		User::create (array(
		'email' => 'admin@gmail.com',
		'password' => Hash::make('1234'),
		'first_name' => 'Evaristus',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'address' => 'Dar es Salaam',
		'level' => '0',
		'contact' => '0717 00 86 99',
		)
);
				User::create (array(
		'email' => 'pharmacy@gmail.com',
		'password' => Hash::make('1234'),
		'first_name' => 'Evaristus',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'address' => 'Dar es Salaam',
		'level' => '1',
		'contact' => '0717 00 86 99',
		)
);
			User::create (array(
		'email' => 'laboratory@gmail.com',
		'password' => Hash::make('1234'),
		'first_name' => 'Evaristus',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'address' => 'Dar es Salaam',
		'level' => '2',
		'contact' => '0717 00 86 99',
		)
);
			User::create (array(
		'email' => 'receptionist@gmail.com',
		'password' => Hash::make('1234'),
		'first_name' => 'Evaristus',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'address' => 'Dar es Salaam',
		'level' => '3',
		'contact' => '0717 00 86 99',
		)
);
		User::create (array(
		'email' => 'doctor@gmail.com',
		'password' => Hash::make('1234'),
		'first_name' => 'Evaristus',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'address' => 'Dar es Salaam',
		'level' => '4',
		'contact' => '0717 00 86 99',
		)
);
		User::create (array(
		'email' => 'accountant@gmail.com',
		'password' => Hash::make('1234'),
		'first_name' => 'Evaristus',
		'middle_name' => 'George',
		'last_name' => 'Maduhu',
		'address' => 'Dar es Salaam',
		'level' => '5',
		'contact' => '0717 00 86 99',
		)
);
	}
}