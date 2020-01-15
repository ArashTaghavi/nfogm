<template>
    <card :title="$route.name">
        <div class="container-fluid">
            <div class="row">
                <div class="panel panel-color panel-tabs panel-success">
                    <div class="panel-heading">
                        <ul class="nav nav-pills pull-right">
                            <li class="active">
                                <a href="#main-device-info" data-toggle="tab" aria-expanded="true">اطلاعات کلی</a>
                            </li>
                            <li class="">
                                <a href="#ran-information" data-toggle="tab" aria-expanded="false">رن
                                    ها</a>
                            </li>
                            <li class="">
                                <a href="#navpills-3" data-toggle="tab" aria-expanded="false">تب سوم</a>
                            </li>
                        </ul>
                        <h3 class="panel-title">دستگاه شماره 1</h3>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="main-device-info" class="tab-pane fade active in">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="capacity">ظرفيت كل ایستگاه بر حسب متر مكعب استاندارد در
                                                    ساعت</label>
                                                <input type="text" id="capacity"
                                                       placeholder="ظرفيت كل ایستگاه بر حسب متر مكعب استاندارد در ساعت"
                                                       class="form-control form-control-sm" v-model="form.capacity">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="main_diameter">قطر مسير اصلي ورودي و خروجي ایستگاه</label>
                                                <input type="text" id="main_diameter"
                                                       placeholder="عدد صحیح بین 6 تا 56 اینچ"
                                                       class="form-control form-control-sm"
                                                       v-model="form.main_diameter">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="input_pressure">حداقل و حداكثر فشار ورودي ایستگاه
                                                    (psi)</label>
                                                <input type="text" id="input_pressure"
                                                       placeholder="عدد صحیح و بین 300 تا 1200"
                                                       class="form-control form-control-sm"
                                                       v-model="form.input_pressure">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="output_pressure">حداقل و حداكثر فشار خروجي ایستگاه
                                                    (psi)</label>
                                                <input type="text" id="output_pressure"
                                                       placeholder="عدد صحیح و بین 300 تا 1200"
                                                       class="form-control form-control-sm"
                                                       v-model="form.output_pressure">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="input_temperature">حداقل و حداكثر دمای گاز ورودی
                                                    ایستگاه</label>
                                                <input type="text" id="input_temperature"
                                                       placeholder="عدد صحیح بین 20- تا 100+"
                                                       class="form-control form-control-sm"
                                                       v-model="form.input_temperature">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="environment_temperature">حداقل و حداكثر دمای محیط
                                                    ایستگاه</label>
                                                <input type="text" id="environment_temperature"
                                                       placeholder="عدد صحیح بین 20- تا 100+"
                                                       class="form-control form-control-sm"
                                                       v-model="form.environment_temperature">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="air_pressure">حداقل و حداكثر فشار هوا در ایستگاه
                                                    (psi)</label>
                                                <input type="text" id="air_pressure"
                                                       placeholder="عدد اعشاری یکی برای حداقل و یکی برای حداکثر"
                                                       class="form-control form-control-sm" v-model="form.air_pressure">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="humidity">حداقل و حداكثر رطوبت محیط ایستگاه</label>
                                                <input type="text" id="humidity"
                                                       placeholder="عدد صحیح درصدی یکی برای حداقل و یکی برای حداکثر"
                                                       class="form-control form-control-sm" v-model="form.humidity">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="standard_pressure">مقدار فشار استاندارد / پایه</label>
                                                <input type="text" id="standard_pressure"
                                                       placeholder="عدد اعشاری یکی برای پایه و یکی برای استاندارد"
                                                       class="form-control form-control-sm"
                                                       v-model="form.standard_pressure">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="standard_temperature">دمای استاندارد / پایه</label>
                                                <input type="text" id="standard_temperature"
                                                       placeholder="عدد اعشاری یکی برای پایه و یکی برای استاندارد"
                                                       class="form-control form-control-sm"
                                                       v-model="form.standard_temperature">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="arrange_main">آرایش ایستگاه (اصلی)</label>
                                                        <select name="arrange_main" class="form-control form-control-sm"
                                                                v-model="form.arrange_main" id="arrange_main">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="arrange_standby">آرایش ایستگاه (یدک)</label>
                                                        <select name="arrange_standby"
                                                                class="form-control form-control-sm"
                                                                v-model="form.arrange_standby" id="arrange_standby">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="diameter_bypass_route">قطر مسير كنارگذر سيستم اندازه
                                                    گيری</label>
                                                <input type="text" class="form-control form-control-sm"
                                                       id="diameter_bypass_route" placeholder="اعداد بین 6 تا 36 اینچ"
                                                       v-model="form.diameter_bypass_route">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="compressibility_coefficient">روش محاسبه ضریب تراكم
                                                    پذیري </label>
                                                <input type="text" class="form-control form-control-sm"
                                                       id="compressibility_coefficient"
                                                       placeholder="(  عدد ثابت (مقدار آن اخذ شود)/ AGA8 /NX19/GERG)"
                                                       v-model="form.compressibility_coefficient">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="has_bypass_route">مسیر کنارگذر وجود دارد یا خیر؟</label>
                                                <input type="checkbox" id="has_bypass_route"
                                                       v-model="form.has_bypass_route">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="is_same_ran">آیا همه رن ها مشابه هستند؟</label>
                                                <input type="checkbox" id="is_same_ran" v-model="form.is_same_ran">
                                                <select name="" id="" class="form-control form-control-sm"
                                                        v-model="form.ran_count" @change="handleChange">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4" v-if="show_input_output_header_diameter">
                                            <div class="form-group">
                                                <label for="input_output_header_diameter">قطر هدر ورودی و خروجی چقدر
                                                    است؟</label>
                                                <input type="text" class="form-control form-control-sm"
                                                       id="input_output_header_diameter"
                                                       placeholder="قطر هدر ورودی و خروجی"
                                                       v-model="form.input_output_header_diameter">
                                            </div>
                                        </div>
                                    </div>
                                    <submit @click="handleSubmit"/>
                                </div>
                            </div>
                            <div id="ran-information" class="tab-pane fade">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ran_capacity" class="required">
                                                    ظرفيت هر مسير اندازه گيري بر حسب متر مكعب استاندارد در ساعت (نامی/
                                                    حداقل / حداكثر)
                                                </label>
                                                <input type="text" id="ran_capacity"
                                                       placeholder="مقادیر را با / جدا کنید"
                                                       class="form-control form-control-sm" v-model="ran.capacity">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ran_diameter" class="required">
                                                    قطر مسير اندازه گيري </label>
                                                <input type="text" id="ran_diameter"
                                                       placeholder="عدد صحیح باید وارد شود، واحد میلیمتر، محدوده اعداد بین 150 تا 900 میلیمتر"
                                                       class="form-control form-control-sm" v-model="ran.diameter">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="ran.measurement_system_type" class="required">
                                                    نوع سیستم اندازه گیری گاز </label>
                                                <select @change="handleOrifice" name=""
                                                        class="form-control form-control-sm"
                                                        v-model="ran.ranmeasurement_system_type"
                                                        id="ran.measurement_system_type">
                                                    <option value="اریفیس">اریفیس</option>
                                                    <option value="توربین">توربین</option>
                                                    <option value="آلتراسونیک">آلتراسونیک</option>
                                                    <option value="سایر موارد">سایر موارد</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4" v-if="show_transmitter">
                                            <div class="form-group">
                                                <label for="ran_transmitter">
                                                    ترانسميترهاي اختلاف فشار</label>
                                                <input type="text" id="ran_transmitter"
                                                       placeholder="ترانسميترهاي اختلاف فشار"
                                                       class="form-control form-control-sm" v-model="ran.transmitter">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ran_size" class="required">
                                                    سایز دستگاه اصلي اندازه گيري گاز (قطر روزنه اریفيس/قطر كنتور
                                                    توربيني/قطر كنتور آلتراسونيك)
                                                </label>
                                                <input type="text" id="ran_size"
                                                       placeholder="مقادیر را با / جدا کنید"
                                                       class="form-control form-control-sm" v-model="ran.size">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ran_valve_diameter" class="required">
                                                    ولو ورودی به هر رن وجود دارد؟
                                                </label>
                                                <input type="text" id="ran_valve_diameter"
                                                       placeholder="در صورت وجود، مقدار آن را وارد نمایید"
                                                       class="form-control form-control-sm"
                                                       v-model="ran.valve_diameter">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ran_has_filter" class="required">
                                                    آیا استرینر یا فیلتر در رن وجود دارد؟ </label>
                                                <input type="text" id="ran_has_filter"
                                                       placeholder="در صورت وجود، مقدار آن را وارد نمایید"
                                                       class="form-control form-control-sm" v-model="ran.has_filter">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="has_flow_conditioner" class="required">
                                                    آیا فلوکاندیشنر دارد یا خیر؟</label>
                                                <input type="text" id="has_flow_conditioner"
                                                       placeholder="در صورت وجود، نوع و قطر آن را وارد نمایید"
                                                       class="form-control form-control-sm" v-model="ran.has_flow_conditioner">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ran_barometer_type" class="required">
                                                    فشار سنج </label>
                                                <select @change="handleBarometerType" name=""
                                                        class="form-control form-control-sm"
                                                        v-model="ran.barometer_type"
                                                        id="ran_barometer_type">
                                                    <option value="دیجیتال">دیجیتال</option>
                                                    <option value="عقربه ای">عقربه ای</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ran_thermometer_type" class="required">
                                                    دماسنج جریان گاز </label>
                                                <select @change="handleThermometerType" name=""
                                                        class="form-control form-control-sm"
                                                        v-model="ran.thermometer_type"
                                                        id="ran_thermometer_type">
                                                    <option value="دیجیتال">دیجیتال</option>
                                                    <option value="عقربه ای">عقربه ای</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" v-if="show_pressure_transmitter">
                                            <div class="form-group">
                                                <label for="ran_pressure_transmitter" class="required">
                                                    ترانسمیتر فشار</label>
                                                <input type="text" id="ran_pressure_transmitter"
                                                       placeholder="در صورت وجود، اطلاعات آن را وارد نمایید"
                                                       class="form-control form-control-sm" v-model="ran.pressure_transmitter">
                                            </div>
                                        </div>
                                        <div class="col-md-6" v-if="show_thermometer_transmitter">
                                            <div class="form-group">
                                                <label for="ran_pressure_transmitter" class="required">
                                                    ترانسمیتر دما</label>
                                                <input type="text" id="ran_temperature_transmitter"
                                                       placeholder="در صورت وجود، اطلاعات آن را وارد نمایید"
                                                       class="form-control form-control-sm" v-model="ran.temperature_transmitter">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ran_pie_length_flow_conditioner_before" class="required">
                                                  طول لوله مستقیم قبل از فلوکاندیشنر</label>
                                                <input type="text" id="ran_pie_length_flow_conditioner_before"
                                                       placeholder="طول لوله مستقیم قبل از فلوکاندیشنر"
                                                       class="form-control form-control-sm" v-model="ran.pie_length_flow_conditioner_before">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ran_pie_length_flow_conditioner_after" class="required">
                                                  طول لوله مستقیم بعد از فلوکاندیشنر</label>
                                                <input type="text" id="ran_pie_length_flow_conditioner_after"
                                                       placeholder="طول لوله مستقیم بعد از فلوکاندیشنر"
                                                       class="form-control form-control-sm" v-model="ran.pie_length_flow_conditioner_after">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ran_pie_length_after" class="required">
                                                  طول مستقیم لوله بعد از کنتور</label>
                                                <input type="text" id="ran_pie_length_after"
                                                       placeholder="طول مستقیم لوله بعد از فلوکاندیشنر"
                                                       class="form-control form-control-sm" v-model="ran.pie_length_after">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ran_has_blow_down" class="required">
                                                    آیا رن مجهز به بلودان است یا خیر؟</label>
                                                <input type="text" id="ran_has_blow_down"
                                                       placeholder="در صورت وجود قطر آن را وارد نمایید"
                                                       class="form-control form-control-sm" v-model="ran.has_blow_down">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ran_has_flow_meter">آیا دماسنج بدنه فلومتر دارد یا خیر؟</label>
                                                <input type="checkbox" id="ran_has_flow_meter"
                                                       v-model="ran.has_flow_meter">
                                            </div>
                                        </div>
                                    </div>
                                    <submit @click="handleRanSubmit"/>
                                </div>

                            </div>
                            <div id="navpills-3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-6">d</div>
                                    <div class="col-md-6">d</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </card>

</template>


<script>
    export default {
        data() {
            return {
                update: false,
                ran_update: false,
                ran_tab: false,
                show_input_output_header_diameter: false,
                show_transmitter: false,
                show_pressure_transmitter: false,
                show_thermometer_transmitter: false,
                ran: {}
            }
        },
        created() {
            this.getDetailDevice();
        },
        methods: {
            handleSubmit() {
                if (!this.update) {
                    axios.post(`/detail-devices/${this.$route.params.id}`, this.form)
                        .then(response => {
                            this.update = true;
                            if (this.form.ran_count > 0) {
                                this.ran_tab = true;
                            }
                            this.successNotify(response);
                        })
                        .catch(error => this.errorNotify(error));
                } else {
                    this.ran_tab = true;
                    axios.put(`/detail-devices/${this.$route.params.id}`, this.form)
                        .then(response => this.successNotify(response))
                        .catch(error => this.errorNotify(error));
                }
            },
            handleRanSubmit() {
                if (!this.ran_update) {
                    axios.post(`/rans/${this.$route.params.id}`, this.form)
                        .then(response => {
                            this.ran_update = true;
                            this.successNotify(response);
                        })
                        .catch(error => this.errorNotify(error));
                } else {
                    axios.put(`/rans/${this.$route.params.id}`, this.form)
                        .then(response => this.successNotify(response))
                        .catch(error => this.errorNotify(error));
                }
            },
            handleChange() {
                if (this.form.ran_count > 0) {
                    this.show_input_output_header_diameter = true;
                } else {
                    this.show_input_output_header_diameter = false;
                }
            },
            getDetailDevice() {
                axios.get(`/detail-devices/${this.$route.params.id}`)
                    .then(response => {
                        if (this.form.ran_tab > 0) {
                            this.ran_tab = true;
                        }
                        if (Object.entries(response.data).length > 0) {
                            this.form = response.data;
                            this.update = true;
                            if (this.form.ran_tab > 0) {
                                this.ran_tab = true;
                            }
                        } else {
                            this.update = false;
                        }
                    })
                    .catch(error => this.errorNotify(error))
            },
            handleOrifice() {
                if (this.ran.ranmeasurement_system_type == 'اریفیس')
                    this.show_transmitter = true;
                else
                    this.show_transmitter = false;
            },
            handleBarometerType() {
                if (this.ran.barometer_type == 'دیجیتال')
                    this.show_pressure_transmitter = true;
                else
                    this.show_pressure_transmitter = false;
            },
            handleThermometerType() {
                if (this.ran.thermometer_type == 'دیجیتال')
                    this.show_thermometer_transmitter = true;
                else
                    this.show_thermometer_transmitter= false;
            },
        }
    }
</script>