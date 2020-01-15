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
        Schema::create('rans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('detail_device_id');
            $table->foreign('detail_device_id')->references('id')->on('detail_devices')->onDelete('cascade');
            $table->string('capacity')->nullable()->comment('ظرفيت هر مسير اندازه گيري بر حسب متر مكعب استاندارد در ساعت (نامی/ حداقل / حداكثر)');
            $table->string('diameter')->nullable()->comment('قطر مسير اندازه گيري');
            $table->string('measurement_system_type')->nullable()->comment('نوع سيستم اندازه‌گيري گاز (اریفيس/ توربين/ آلتراسونيك/ سایر موارد)');
            $table->string('transmitter')->nullable()->comment('ترانسميترهاي اختلاف فشار');
            $table->string('size')->nullable()->comment('سایز دستگاه اصلي اندازه گيري گاز (قطر روزنه اریفيس/قطر كنتور توربيني/قطر كنتور آلتراسونيك)');
            $table->string('valve_diameter')->nullable()->comment('ولو ورودی به هر رن وجود دارد؟ در صورتی که وجود دارد قطر آن چقدر است؟');
            $table->string('has_filter')->default(0)->nullable('آیا استرینر یا فیلتر در رن وجود دارد؟');
            $table->string('flow_conditioner')->nullable()->comment('آیا فلوکاندیشنر دارد یا خیر؟ اگر دارد نوع و قطر آن');
            $table->string('barometer_type')->nullable()->comment('آیا فشارسنج دارد یا خیر؟ عقربه ای یا دیجیتال؟');
            $table->string('pressure_transmitter')->nullable()->comment('اطلاعات ترانسمیتر فشار');
            $table->string('thermometer_type')->nullable()->comment('آیا دماسنج جریان گاز دارد یا خیر؟ عقربه ای یا دیجیتال؟');
            $table->string('temperature_transmitter')->nullable()->comment('اطلاعات ترانسمیتر دما اضافه شود؟');
            $table->tinyInteger('has_flow_meter')->nullable()->comment('آیا دماسنج بدنه فلومتر دارد یا خیر؟');
            $table->string('pie_length_flow_conditioner_before')->nullable()->comment('طول لوله مستقیم قبل از فلوکاندیشنر چقدر است؟');
            $table->string('pie_length_flow_conditioner_after')->nullable()->comment('طول لوله مستقیم بعد از فلوکاندیشنر تا کنتور چقدر است؟');
            $table->string('pie_length_after')->nullable()->comment('طول لوله مستقیم بعد از کنتور چقدر است؟');
            $table->string('has_blow_down')->nullable()->comment('آیا رن مجهز به بلودان است یا خیر؟ اگر بله قطر آن؟');
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
