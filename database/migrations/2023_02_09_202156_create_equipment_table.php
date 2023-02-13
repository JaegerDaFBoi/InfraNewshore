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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id('equipment_id');
            $table->mediumText('model_name');
            $table->text('serial');
            $table->mediumText('processor');
            $table->integer('ram_memory');
            $table->text('operative_system');
            $table->text('storage_disk_type')->nullable();
            $table->integer('storage_capacity');
            $table->boolean('is_assigned')->nullable();
            $table->boolean('is_damaged')->nullable();
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
        Schema::dropIfExists('equipments');
    }
};
