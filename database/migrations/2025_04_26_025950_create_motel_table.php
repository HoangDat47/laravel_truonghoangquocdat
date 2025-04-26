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
        Schema::create('motel', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('idMotel')->unique();
            $table->string('nameMotel');
            $table->string('phoneNumber');
            $table->string('rentTime');
            $table->string('payment')->foreign('motel_payment')->references('id')->on('payment_method'); 
            $table->timestamps();
        });

        DB::table('motel')->insert([
            ['idMotel' => 'PT-001', 'nameMotel' => 'Nguyen van A', 'phoneNumber' => '0123456789', 'rentTime' => '26-04-2020', 'payment' => 1],
            ['idMotel' => 'PT-002', 'nameMotel' => 'Nguyen van B', 'phoneNumber' => '0123456789', 'rentTime' => '26-04-2020', 'payment' => 2],
            ['idMotel' => 'PT-003', 'nameMotel' => 'Nguyen van C', 'phoneNumber' => '0123456789', 'rentTime' => '26-04-2020', 'payment' => 3],
            ['idMotel' => 'PT-004', 'nameMotel' => 'Nguyen van D', 'phoneNumber' => '0123456789', 'rentTime' => '26-04-2020', 'payment' => 1],
            ['idMotel' => 'PT-005', 'nameMotel' => 'Nguyen van E', 'phoneNumber' => '0123456789', 'rentTime' => '26-04-2020', 'payment' => 2],
            ['idMotel' => 'PT-006', 'nameMotel' => 'Nguyen van F', 'phoneNumber' => '0123456789', 'rentTime' => '26-04-2020', 'payment' => 3],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motel');
    }
};
