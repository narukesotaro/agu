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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('group',);
            $table->string('name',);
            $table->string('semester');
            $table->string('week');
            $table->string('period');
            $table->string('teacher');
            $table->string('online_or_offline');
            $table->string('how_to_valuate');
            $table->string('attendance');
            $table->string('text');
            $table->string('homework');
            $table->string('test_type');
            $table->boolean('has_report');
            $table->boolean('has_presentation');
            $table->string('image_path');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
