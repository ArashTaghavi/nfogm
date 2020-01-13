<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->timestamps();
        });
        $roles = [
            ['title' => 'SuperAdmin', 'created_at' => date(Carbon::Now()), 'updated_at' => date(Carbon::Now())],
            ['title' => 'Admin', 'created_at' => date(Carbon::Now()), 'updated_at' => date(Carbon::Now())],
            ['title' => 'کارشناس انستیتو', 'created_at' => date(Carbon::Now()), 'updated_at' => date(Carbon::Now())]
        ];
        DB::table('roles')->insert($roles);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
