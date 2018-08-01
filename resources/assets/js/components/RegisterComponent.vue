<template>
    <div id="wrap">
        <nav-component></nav-component>
        <router-view></router-view>
        <footer-compnent></footer-compnent>
    </div>
</template>

<script>

    import NavComponent from './NavTopComponent'
    import FooterCompnent from './TheFooterComponent'
    import TheRegister from '../components/auth/TheRegisterComponent'

    export default {
        name: "register-component",
        components: {NavComponent, FooterCompnent,TheRegister}
    }
</script>

<style scoped>
</style>