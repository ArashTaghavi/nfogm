import Users from './Components/Users/Index';
import UsersCreate from './Components/Users/Create';

import Devices from './Components/Devices/Index';
import DevicesCreate from './Components/Devices/Create';
import DevicesDetail from './Components/Devices/Detail';


export default [
    {path: '/users', name: 'لیست کاربران', component: Users},
    {path: '/users/create', name: 'افزودن کاربر', component: UsersCreate},

    {path: '/devices', name: 'لیست دستگاه ها', component: Devices},
    {path: '/devices/create', name: 'افزودن دستگاه', component: DevicesCreate},
    {path: '/devices/:id/detail', name: 'جزییات دستگاه', component: DevicesDetail},
]
