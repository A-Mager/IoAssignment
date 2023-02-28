<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduled_maintenance_jobs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('jobType');
            $table->integer('estimatedTime');
            $table->string('carPart')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduled_maintenance_jobs');
    }
}
