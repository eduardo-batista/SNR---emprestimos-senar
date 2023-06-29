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
        Schema::create('equipment_loans', function (Blueprint $table) {
            $table->id();
            $table->datetime('loan_date');
            $table->datetime('expected_return_date');
            $table->datetime('return_date')->nullable();
            $table->text('observation')->nullable();
            $table->foreignId('equipment_id')
                ->constrained('equipments')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('borrower_id')
                ->constrained('collaborators')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('lender_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('text_id')
                ->constrained('loan_texts')
                ->onUpdate('restrict')
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
        Schema::dropIfExists('equipment_loans');
    }
};
