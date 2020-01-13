<template>
    <card :title="$route.name">
        <add-btn to="users"/>
        <div class="row" v-if="users.length>0">
            <table class="table table-condensed table-responsive m-0">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>نقش</th>
                    <th>عملیات</th>

                </tr>
                </thead>
                <tbody>
                <tr v-for="user in users">
                    <td>
                        <input type="text" class="no-input" @focus="handleClass($event)"
                               @focusout="handleFieldUpdate(user.id,'first_name',$event)"
                               v-model="user.first_name" placeholder="نام">
                    </td>
                    <td>
                        <input type="text" class="no-input" @focus="handleClass($event)"
                               @focusout="handleFieldUpdate(user.id,'last_name',$event)"
                               v-model="user.last_name" placeholder="نام خانوادگی">
                    </td>
                    <td>
                        <input type="text" class="no-input" @focus="handleClass($event)"
                               @focusout="handleFieldUpdate(user.id,'email',$event)"
                               v-model="user.email" placeholder="ایمیل">
                    </td>
                    <td>
                        <select name="" v-model="form.roles" id="roles"
                                @change="handleRoleUpdate(user.id,$event)"
                                class="form-control form-control-sm">
                            <option v-for="role in roles" :value=role.id>{{role.title}}</option>
                        </select>
                    </td>
                    <td>
                        <delete-btn :id=user.id></delete-btn>
                        <icon-btn type="danger" icon="stop" v-if="user.is_blocked==0"
                                  @click="handleBlock(user.id)">انسداد
                        </icon-btn>
                        <icon-btn type="success" icon="pause" v-if="user.is_blocked==1"
                                  @click="handleBlock(user.id)">رفع
                            انسداد
                        </icon-btn>


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
                users: [],
                roles: []
            }
        },
        created() {
            this.getUsers();
            this.getRoles();
            this.form.roles=[]
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/users/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getUsers();
                    })
                    .catch(error => this.errorNotify(error));
            },
            handleRoleUpdate(id, event) {
                axios.put(`/users/role-update/${id}/${event.target.value}`)
                    .then(response => this.successNotify(response))
                    .catch(error => this.errorNotify(error));
            },
            handleBlock(id) {
                this.deleteConfirm()
                    .then(confirm => {
                        if (confirm) {
                            axios.get(`/users/block/${id}`)
                                .then(response => this.getUsers())
                                .catch(error => this.errorNotify(error));
                        }
                    });
            },
            handleFieldUpdate(id, field, event) {
                event.target.classList.remove('form-control');
                event.target.classList.add('no-input');
                axios.put(`/users/field-update/${id}/${field}`, {data: event.target.value})
                    .then(response => response)
                    .catch(error => this.errorNotify(error));
            },
            handleClass(event) {
                event.target.classList.remove('no-input');
                event.target.classList.add('form-control');
            },
            getUsers() {
                axios.get('/users')
                    .then(response => this.users = response.data)
                    .catch(error => this.errorNotify(error));
            },
            getRoles() {
                axios.get('/roles')
                    .then(response => this.roles = response.data)
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>