<template>
    <div class="loader">لطفا صبر کنید...</div>
</template>
<style>
    .loader,
    .loader:after {
        border-radius: 50%;
        width: 7em;
        height: 7em;
    }

    .loader {
        margin: 5px;
        font-size: 10px;
        position: absolute;
        text-indent: -9999em;
        border-top: 1.1em solid rgba(0, 0, 0, 0.2);
        border-right: 1.1em solid rgba(0, 0, 0, 0.2);
        border-bottom: 1.1em solid rgba(0, 0, 0, 0.2);
        border-left: 1.1em solid rebeccapurple;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation: load8 1.1s infinite linear;
        animation: load8 1.1s infinite linear;
        left:15px;
    }

    @-webkit-keyframes load8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes load8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

</style>