<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('=rans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('detail_device_id');
            $table->foreign('detail_device_id')->references('id')->on('detail_devices')->onDelete('cascade');
            $table->string('capacity')->comment('ظرفيت هر مسير اندازه گيري بر حسب متر مكعب استاندارد در ساعت (نامی/ حداقل / حداكثر)');
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
        Schema::dropIfExists('=rans');
    }
}
