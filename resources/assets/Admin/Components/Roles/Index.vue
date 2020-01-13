<template>
    <card :title="$route.name">
        <add-btn to="roles"/>
        <div class="row" v-if="roles.length>0">
            <table class="table table-condensed table-responsive m-0">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="role in roles">
                    <td>
                        <input type="text" class="no-input" @focus="handleClass($event)"
                               @focusout="handleFieldUpdate(role.id,$event)"
                               v-model="role.title" placeholder="عنوان">
                    </td>

                    <td>
                        <delete-btn :id=role.id></delete-btn>
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
                roles: []
            }
        },
        created() {
            this.getRoles();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/roles/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getRoles();
                    })
                    .catch(error => this.errorNotify(error));
            },
            handleClass(event) {
                event.target.classList.remove('no-input');
                event.target.classList.add('form-control');
            },
            getRoles() {
                axios.get('/roles')
                    .then(response => this.roles = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleFieldUpdate(id, event) {
                event.target.classList.remove('form-control');
                event.target.classList.add('no-input');
                axios.put(`/roles/${id}`, {title: event.target.value})
                    .then(response => response)
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>