<template>
    <card :title="$route.name" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="company" class="required">شرکت</label>
                    <input type="text" id="company"
                           class="form-control form-control-sm"
                           v-model="form.company"
                           autofocus
                           placeholder="شرکت">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="name" class="required">نام ایستگاه</label>
                    <input type="text" id="name" class="form-control form-control-sm" v-model="form.name"
                           placeholder="نام ایستگاه">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="code" class="required">کد</label>
                    <input type="text" id="code" class="form-control form-control-sm" v-model="form.code"
                           placeholder="کد ایستگاه">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="location" class="required">موقعیت</label>
                    <input type="text" id="location" class="form-control form-control-sm" v-model="form.location"
                           placeholder="طول و عرض جغرافیایی را با فاصله از هم جدا کنید.مثال : 2.44 10.12">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="address" class="required">نشانی</label>
                    <textarea type="text" id="address" class="form-control form-control-sm" v-model="form.address"
                              placeholder="نشانی"></textarea>
                </div>
            </div>

            <submit @click="handleSubmit"/>
        </div>
    </card>

</template>


<script>
    export default {
        methods: {

            handleSubmit() {
                axios.post('/devices', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/devices');
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>