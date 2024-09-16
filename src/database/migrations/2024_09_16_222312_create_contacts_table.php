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
            // $table->varchar('name', 255)->nullable();    // 解答見ずに記述
            // $table->varchar('email', 255)->nullable();
            // $table->varchar('tell', 11)->nullable();
            // $table->text('content');
            // $table->timestamp('created_at');
            // $table->timestamp('updated_at');
            $table->string('name');
            $table->string('email');
            $table->string('tell', 11);
            $table->text('content')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
