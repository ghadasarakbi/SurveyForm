<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('email');
            $table->bigInteger('number')->unsigned();
            $table->integer('age')->unsigned()->nullable();
            $table->enum('roles',['Student','Full Time Job','Full Time Learner','Prefer not to say','Other']);
            $table->enum('recommend',['Definitely','Maybe','Not sure']);
            $table->set ('options', ['Front-end Projects', 'Back-end Projects', 'Data Visualization', 'Challenges',
            'Open Source Community', 'Gitter help rooms', 'Videos', 'City Meetups', 'Wiki', 'Forum', 'Additional Courses'
                        ])->nullable();
            $table->string('comment')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
