<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('asignee_id');
            $table->string('subject');
            $table->string('contact_type');
            $table->uuid('contact_id')->nullable();
            $table->string('status');
            $table->string('priority');
            $table->string('related_to');
            $table->uuid('related_id');
            $table->foreign('related_id')->references('id')->on('deals')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('related_id')->references('id')->on('leads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('related_id')->references('id')->on('contacts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('related_id')->references('id')->on('accounts')->onDelete('cascade')->onUpdate('cascade');

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
