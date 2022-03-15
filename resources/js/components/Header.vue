<template>
    <nav>
        <div class="my-nav-item" v-for="(item, index) in menuItems" :key="index">
            <router-link class="my-nav-link" :to="{ name: item.routeName}">{{ item.label }}</router-link>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "Header",
        data() {
            return {
                menuItems: [
                    {
                        label: 'Home',
                        routeName: 'home',
                    },
                    {
                        label: 'I miei lavori',
                        routeName: 'works',
                    },
                    {
                        label: 'Contatti',
                        routeName: 'contact',
                    }
                ],
            }
        },
    }
    </script>

    <style lang="scss" scoped>
        nav {
            display: flex;
            height: 80px;
            width: 100%;
            justify-content: center;
            align-items: center;
            column-gap: 20px;
            .my-nav-item {
                .my-nav-link{
                    color: black;
                    font-size: 1.4em;
                    text-decoration: none;
                    &:hover{
                        color: green;
                    }
                }
            }
        }
    </style>