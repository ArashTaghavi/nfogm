<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('capacity')->nullable()->comment('ظرفيت كل ایستگاه بر حسب متر مكعب استاندارد در ساعت (نامی/ حداقل / حداكثر)');
            $table->string('main_diameter')->nullable()->comment('قطر مسير اصلي ورودي و خروجي ایستگاه');
            $table->string('input_pressure')->nullable()->comment('حداقل و حداكثر فشار ورودي ایستگاه (psi) (بر مبناي طراحي)');
            $table->string('output_pressure')->nullable()->comment('حداقل و حداكثر فشار خروجي ایستگاه (psi)');
            $table->string('input_temperature')->nullable()->comment('حداقل و حداكثر دمای گاز ورودی ایستگاه');
            $table->string('environment_temperature')->nullable()->comment('حداقل و حداكثر دمای محیط ایستگاه');
            $table->string('air_pressure')->nullable()->comment('حداقل و حداكثر فشار هوا در ایستگاه (psi)');
            $table->string('humidity')->nullable()->comment('حداقل و حداكثر رطوبت محیط ایستگاه');
            $table->string('standard_pressure')->nullable()->comment('مقدار فشار استاندارد / پایه');
            $table->string('standard_temperature')->nullable()->comment('دمای استاندارد / پایه');
            $table->string('arrange')->nullable()->comment('آرایش ایستگاه (تعداد مسيرهاي اصلي و یدك Standby)');
            $table->tinyInteger('is_same_ran')->default(0)->comment('آیا همه رن ها مشابه هستند؟');
            $table->integer('ran_count')->default(0)->comment('تعداد رن ها');
            $table->string('input_output_header_diameter')->nullable()->comment('قطر هدر ورودی و خروجی چقدر است؟');
            $table->tinyInteger('has_bypass_route')->default(0)->comment('مسیر کنارگذر وجود دارد یا خیر');
            $table->string('diameter_bypass_route')->nullable()->comment('قطر مسير كنارگذر سيستم اندازه گيري');
            $table->string('compressibility_coefficient')->nullable()->comment('روش محاسبه ضریب تراكم پذیري');
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
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
        Schema::dropIfExists('detail_devices');
    }
}
