<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('services')->nullable();
=======
            $table->string('speciality')->nullable();
>>>>>>> b423acd6fc35106447513050a818aba48f5096d2
            $table->string('name')->nullable();
            $table->string('vechile_num')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();

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
        Schema::dropIfExists('appointments');
    }
};
