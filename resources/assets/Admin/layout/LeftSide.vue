<template>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                         class="img-circle img-thumbnail img-responsive">
                    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                </div>
                <!--<h5><a href="#">علی یدالهی</a></h5>-->
                <ul class="list-inline">
                    <li>
                        <a href="#">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>

                    <li>
                        <a href="/logout" class="text-custom">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">منو</li>

                    <li>
                        <router-link to="/users" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> مدیریت کاربران </span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/roles" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> نقش ها و سطوح دسترسی </span>
                        </router-link>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->

</template>
<script>
    export default {}
</script>