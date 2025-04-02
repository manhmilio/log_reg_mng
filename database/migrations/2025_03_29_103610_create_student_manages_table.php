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
        Schema::create('student_manages', function (Blueprint $table) {
            $table->id();
            $table->string('MaSV');
            $table->string('TenSV');
            $table->date('NgaySinh');
            $table->string('GioiTinh');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->string('Password');
            $table->string('Role');
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
        Schema::dropIfExists('student_manages');
    }
};
