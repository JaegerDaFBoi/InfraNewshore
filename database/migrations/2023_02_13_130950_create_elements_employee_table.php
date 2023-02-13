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
        Schema::create('elements_employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_employee_id')->nullable()->index('fk_employee_element');
            $table->unsignedBigInteger('fk_element_id')->nullable()->index('fk_element_employee');
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
        Schema::dropIfExists('elements_employee');
    }
};
