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
        Schema::create('team', function (Blueprint $table) {
            $table->string('team_id',20)->primary();
            $table->string('team_name',50)->unique()->nullable();
            $table->string('department_id');
            $table->timestamps();

            // Set Foreign Key
           $table->foreign('department_id')->references('department_id')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop Foreign Key
        Schema::table('team', function (Blueprint $table) {
        $table->dropForeign(['department_id']);
    });

        Schema::dropIfExists('team');
    }
};
