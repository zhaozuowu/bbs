<template>
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand" :alt="logo.title">{{logo.title}}</a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li :class="{'active':activeNavIndex == index}" v-for="(item,index) in navList">
                        <a href="#" @click="activeNavBar(index)">{{item}}</a>
                    </li>
                </ul>
                <the-entry></the-entry>
            </div>
        </div>
    </div>
</template>

<script>
    import TheEntry from './TheEntryComponent'
    export default {
        name: "TheHeader",
        components:{TheEntry},
        data: function () {
            return {
                logo: {
                    title: "VuejsCaff"
                },
                navList: ["社区", "头条", "问答", "教程"],
                activeNavIndex: 0
            }
        },
        methods:{
            activeNavBar:function (index) {
                this.activeNavIndex = index;
            }
        }
    }
</script>

<style scoped>
</style>