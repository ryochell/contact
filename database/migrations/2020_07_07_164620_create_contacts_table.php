<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('gender')->length(2);
            $table->string('type');
            $table->text('body');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
