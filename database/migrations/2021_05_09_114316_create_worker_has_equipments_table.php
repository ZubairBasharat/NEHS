<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerHasEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_has_equipments', function (Blueprint $table) {
            $table->id();
            $table->integer('	id_equipment ');
            $table->integer('id_user_manager');
            $table->integer('id_worker');
            $table->integer('id_company');

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
        Schema::dropIfExists('worker_has_equipments');
    }
}
