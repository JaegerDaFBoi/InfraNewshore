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
        Schema::table('elements_employee', function (Blueprint $table) {
            $table->foreign(['fk_employee_id'], 'fk_employee_element')->references('employee_id')->on('employees')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign(['fk_element_id'], 'fk_element_employee')->references('element_id')->on('elements')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elements_employee', function (Blueprint $table) {
            $table->dropForeign('fk_employee_element');
            $table->dropForeign('fk_element_employee');
        });
    }
};
