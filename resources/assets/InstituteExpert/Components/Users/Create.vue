<template>
    <card :title="$route.name" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="first_name">نام</label>
                    <input type="text" id="first_name"
                           class="form-control form-control-sm"
                           v-model="form.first_name"
                           autofocus
                           placeholder="نام">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="last_name">نام خانوادگی</label>
                    <input type="text" id="last_name" class="form-control form-control-sm" v-model="form.last_name"
                           placeholder="نام خانوادگی">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">نام خانوادگی</label>
                    <input type="text" id="email" class="form-control form-control-sm" v-model="form.email"
                           placeholder="ایمیل">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="password">کلمه عبور</label>
                    <input type="password" id="password" class="form-control form-control-sm" v-model="form.password"
                           placeholder="کلمه عبور">
                </div>
            </div>
            <div class="col-md-12">
                <div class="row well well-xs">
                    <h4>نقش ها</h4>
                    <select name="" class="form-control form-control-sm"  id="" v-model="form.roles">
                        <option :value=role.id :key=role.id v-for="role in roles">{{role.title}}</option>
                    </select>
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
                roles: []
            }
        },
        created() {
            this.getRoles();
            this.form.roles = [];
        },
        methods: {
            getRoles() {
                axios.get('/roles')
                    .then(response => this.roles = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleSubmit() {
                axios.post('/users',this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/users');
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>