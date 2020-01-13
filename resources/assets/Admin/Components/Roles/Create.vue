<template>
    <card :title="$route.name" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="title">عنوان</label>
                    <input type="text" id="title"
                           class="form-control form-control-sm"
                           v-model="form.title"
                           autofocus
                           placeholder="عنوان">
                </div>
            </div>
            <div class="col-md-12">
                <div class="row well well-xs">
                    <h4>سطوح دسترسی</h4>
                    <div class="row">
                        <div v-for="permission in permission_sections" class="col-md-4">
                            <label for="">{{permission.title}}</label>
                            <input type="checkbox"
                                   class="col-md-4 m-t-10"
                                   :label="permission.title"
                                   v-model="data[data.findIndex(row => row.id === permission.id)].selected"/>
                        </div>
                    </div>
                </div>
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>

</template>


<script>
    export default {
        data() {
            return {
                permission_sections: [],
                data: []
            }
        },
        created() {
            this.getPermissions();
            axios.get('/base-information/permissions').then(response => {
                this.permission_sections = response.data;
                response.data.forEach(permission => {
                    this.data.push({
                        id: permission.id,
                        name: permission.title,
                        selected: false
                    });
                });
            });

            this.form.roles = [];
        },
        methods: {
            getPermissions() {
                axios.get('/roles')
                    .then(response => this.roles = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleSubmit() {
                let _permissions = [];
                this.data.forEach(row => {
                    if (row.selected === true) {
                        _permissions.push({
                            id: row.id,
                        });
                    }
                });
                let _data = {
                    id: this.form.id,
                    title: this.form.title,
                    permissions: _permissions.map(row => row.id)
                };
                axios.post('/roles', _data)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/roles');
                    })
                    .catch(error => this.errorNotify(error));
            },

        }
    }
</script>