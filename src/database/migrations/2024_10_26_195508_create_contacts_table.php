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
            $table->id();
<<<<<<< HEAD
            $table->foreignId('category_id');
=======
            $table->foreignId('categry_id');
>>>>>>> origin/main
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->tinyInteger('gender');
            $table->string('email', 255);
            $table->string('tell', 255);
            $table->string('address', 255);
            $table->string('building', 255);
            $table->text('detail');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
