<template>
    <div id="wrapper">
        <top-bar></top-bar>
        <left-side></left-side>
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <router-view></router-view>
                    <footer class="footer">
                        2019
                        ©.
                    </footer>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import TopBar from "./layout/TopBar";
    import LeftSide from "./layout/LeftSide";

    export default {
        components: {TopBar, LeftSide}
    }
</script>
