<template>
    <div class="wrap">
        <the-header></the-header>
        <router-view></router-view>
        <the-footer></the-footer>
    </div>
</template>

<script>
    import TheHeader from '../components/layouts/TheHeaderComponent'
    import TheFooter from '../components/layouts/TheFooterComponent'
    import TheRegister from '../components/auth/TheRegisterComponent'
    import Titile from '../titile'
    export default {
        name: "zhu-ce-component",
        components:{TheHeader,TheFooter,TheRegister},
        directives: {
            Titile
        },
    }
</script>

<style scoped>
</style>