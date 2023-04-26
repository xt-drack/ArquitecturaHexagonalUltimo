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
        //
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('status')->default('1');
            $table->integer('delete')->default('0');
            $table->datetime('due_date');
            $table->string('frequency');
            $table->unsignedBigInteger("city_id")->nullable();
            $table->unsignedBigInteger("province_id")->nullable();
            $table->unsignedBigInteger("group_id")->nullable();
            $table->unsignedBigInteger("plan_id")->nullable();

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('set null');

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onDelete('set null');

            $table->foreign('group_id')
                ->references('id')
                ->on('groups')
                ->onDelete('set null');

            $table->foreign('plan_id')
                ->references('id')
                ->on('plans')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('dealers');
    }
};
