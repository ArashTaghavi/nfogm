<template>
    <card :title="$route.name">
        <add-btn to="devices"/>
        <div class="row" v-if="devices.length>0">
            <table class="table table-condensed table-responsive m-0">
                <thead>
                <tr>
                    <th>شرکت</th>
                    <th>نام ایستگاه</th>
                    <th>کد</th>
                    <th>موقعیت</th>
                    <th>نشانی</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="device in devices">
                    <td>
                        <input type="text" class="no-input" @focus="handleClass($event)"
                               @focusout="handleFieldUpdate(device.id,'company',$event)"
                               v-model="device.company" placeholder="شرکت">
                    </td>
                    <td>
                        <input type="text" class="no-input" @focus="handleClass($event)"
                               @focusout="handleFieldUpdate(device.id,'name',$event)"
                               v-model="device.name" placeholder="نام ایستگاه">
                    </td>
                    <td>
                        <input type="text" class="no-input" @focus="handleClass($event)"
                               @focusout="handleFieldUpdate(device.id,'code',$event)"
                               v-model="device.code" placeholder="کد ایستگاه">
                    </td>
                    <td>
                        <input type="text" class="no-input" @focus="handleClass($event)"
                               @focusout="handleFieldUpdate(device.id,'location',$event)"
                               v-model="device.location" placeholder="موقعیت ایستگاه">
                    </td>
                    <td>
                        <textarea style="resize: none;" class="no-input" @focus="handleClass($event)"
                                  @focusout="handleFieldUpdate(device.id,'address',$event)"
                                  v-model="device.address" placeholder="نشانی"></textarea>
                    </td>
                    <td>
                        <delete-btn :id=device.id></delete-btn>
                        <link-btn type="info" icon="file" :to="`/devices/${device.id}/detail`">
                            جزییات
                        </link-btn>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <not-found v-else/>
    </card>
</template>

<script>
    export default {
        data() {
            return {
                devices: [],
            }
        },
        created() {
            this.getDevices();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/devices/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getDevices();
                    })
                    .catch(error => this.errorNotify(error));
            },
            handleRoleUpdate(id, event) {
                axios.put(`/devices/role-update/${id}/${event.target.value}`)
                    .then(response => this.successNotify(response))
                    .catch(error => this.errorNotify(error));
            },
            handleFieldUpdate(id, field, event) {
                event.target.classList.remove('form-control');
                event.target.classList.add('no-input');
                axios.put(`/devices/field-update/${id}/${field}`, {data: event.target.value})
                    .then(response => response)
                    .catch(error => this.errorNotify(error));
            },
            handleClass(event) {
                event.target.classList.remove('no-input');
                event.target.classList.add('form-control');
            },
            getDevices() {
                axios.get('/devices')
                    .then(response => this.devices = response.data)
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>