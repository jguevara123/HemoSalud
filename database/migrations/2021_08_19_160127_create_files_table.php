<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('extension',['pdf','png'])->default('pdf');

            $table->unsignedInteger('patient_id');
            $table->foreign('patient_id') ->references('id')->on('patients')->onDelete('cascade');

            $table->enum('status',[1,0])->default('1')->comment('1: Activado, 2: Desactivado');
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
        Schema::dropIfExists('files');
    }
}
