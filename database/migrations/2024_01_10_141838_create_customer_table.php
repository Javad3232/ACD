<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->integer('customername_id');
            $table->string('TType');
            $table->datetime('date');
            $table->text('detiel');
            $table->string('FactorNumber');
            $table->string('SHFactorNumber');
            $table->integer('UsdAmountTotal');
            $table->integer('AFGAmountTotal');
            $table->integer('UsdAmountIR');
            $table->integer('AFGAmountIR');
            $table->integer('UsdAmountT');
            $table->integer('AFGAmountT');


            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
