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
        Schema::create('panels', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('manufacturer');
            $table->decimal('nominal_power', 10, 2);
            $table->decimal('voc', 10, 2);
            $table->decimal('isc', 10, 2);
            $table->decimal('vpmp', 10, 2);
            $table->decimal('ipmp', 10, 2);
            $table->decimal('efficiency', 10, 2);
            $table->decimal('lenght', 10, 2);
            $table->decimal('width', 10, 2);
            $table->decimal('area', 10, 2);
            $table->decimal('weight', 10, 2);
            $table->boolean('deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panels');
    }
};
