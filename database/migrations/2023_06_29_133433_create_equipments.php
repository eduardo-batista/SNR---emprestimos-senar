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
            $table->id();
            $table->string('description');
            $table->string('brand_and_model')->nullable();;
            $table->string('serial_number_patrimony')->nullable();;
            $table->text('observation')->nullable();;
            $table->integer('stock')->nullable();;
            $table->boolean('have_stock');
            $table->boolean('has_power_supply');
            $table->boolean('has_removable_battery');
            $table->boolean('status');
            $table->foreignId('equipment_type_id')
                ->constrained('equipment_types')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
