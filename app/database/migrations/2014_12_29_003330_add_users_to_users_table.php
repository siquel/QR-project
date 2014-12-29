<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersToUsersTable extends Migration {

	public function insertUser($fn, $sn, $u, $p) {
		DB::table('users')->insert(
			array(
				'firstname' => $fn,
				'surname' => $sn,
				'username' => $u,
				'password' => Hash::make($p)
				)
			);
	}

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$this->insertUser('Jani', 'Niemelä', 'siquel', 'perkele');
			$this->insertUser('Henna-Mari', 'Närhi', 'henna-mari.narhi', 'salasana');
			$this->insertUser('Heljä', 'Rantakeisu', 'helja.rantakeisu', 'salasana');
			$this->insertUser('Essi', 'Nissinen', 'essi.nissinen', 'salasana');
			$this->insertUser('Henna', 'Pyykkönen', 'henna.pyykkonen', 'salasana');
			$this->insertUser('Sami', 'Oksanen', 'sami.oksanen', 'salasana');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->delete();
	}

}
