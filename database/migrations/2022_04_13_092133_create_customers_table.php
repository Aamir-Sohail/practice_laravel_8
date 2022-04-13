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
        Schema::create('customers', function (Blueprint $table) {
        
            $table->id();// if you want to change the name of the primary key should wright in ('coustomers_id');
            $table->string('name',60);
            $table->string('email',60);
            $table->string('password',60);
            $table->enum('gender',["M","F","O"])->nullable();
            $table->string('address',60);
            $table->date('dob')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps(); //laravel make two colume in database created_at/updated_at.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};