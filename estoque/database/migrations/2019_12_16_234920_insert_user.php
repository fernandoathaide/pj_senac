<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          // Insert some stuff
        DB::table('users')->insert(
            array(
                'name' => 'fernando',
                'email' => 'fernandoathaide@hotmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
