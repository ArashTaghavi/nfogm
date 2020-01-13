import Users from './Components/Users/Index';
import UsersCreate from './Components/Users/Create';

import Roles from './Components/Roles/Index';
import RolesCreate from './Components/Roles/Create';


export default [
    {path: '/users', name: 'لیست کاربران', component: Users},
    {path: '/users/create', name: 'افزودن کاربر', component: UsersCreate},
    {path: '/roles', name: 'نقش ها', component: Roles},
    {path: '/roles/create', name: 'افزودن نقش', component: RolesCreate},
]
