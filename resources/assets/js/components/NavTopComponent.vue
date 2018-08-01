<template>
    <div class="navbar navbar-default topnav">
        <div class="container">
            <div class="navbar-header">
                <!--<button type="button" class="navbar-toggle" @click="toggleNav">-->
                    <!--<span class="sr-only">Toggle navigation</span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--<span class="icon-bar"></span>-->

                <!--</button>-->
                <a href="/" class="navbar-brand">
                    <span class="title">{{ logo.title }}</span>
                    <img :src="logo.src" :alt="logo.title">
                </a>
            </div>

            <div id="top-navbar-collapse" :class="['collapse','nav-collaps',{in:true}]">
                <ul class="nav navbar-nav">
                    <li v-for="(item,index) in navList" :class="{active:index === activeNavIndex}"
                        @click="changeNav(index)">
                        <a href="#" v-html="item"></a>
                    </li>
                </ul>
                <!-- 入口组件 -->
                <div class="navbar-right">
                    <entry-component></entry-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EntryComponent from './TheEntry'

    export default {
        data() {
            return {
                logo: {
                    "title": "VuejsCaff",
                    "src": this.uploadsUrl + "sites/ByvFbNlQYVwhvTyBgLdqitchoacDNznN.jpg"
                },
                navList: ['社区', '头条', '问答', '教程'],
                activeNavIndex: 0,
                showCollapsedNav: false,
            }
        },
        components: {EntryComponent},
        beforeCreate: function () {
            this.uploadsUrl = 'https://vuejscaffcdn.phphub.org/uploads/'
        },
        methods: {
            changeNav: function (index) {
                this.activeNavIndex = index;

            },
            toggleNav() {
                this.showCollapsedNav = !this.showCollapsedNav
            }
        }

    }
</script>

<style scoped>
    .title {
        display: none;
    }

    .navbar-default .navbar-nav > .active > a {
        background: rgba(0, 0, 0, .03);
    }
</style>