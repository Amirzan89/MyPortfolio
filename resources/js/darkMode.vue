<template>
    <div class="night-mode relative cursor-pointer ml-6 mr-5" @click="darkMode()">
        <span :class="{
            'hidden':isDark
        }" id="darkIcon">
            <i class="fa-regular fa-moon text-3xl" style="color: #f5efe3;"></i>
        </span>
        <span :class="{
            'hidden':!isDark
        }" id="lightIcon">
            <i class="fa-regular fa-sun text-3xl" style="color: #f5efe3;"></i>
        </span>
    </div>
</template>
<script>
export default{
    computed: {
        isDark() {
            return this.$store.getters.isDark;
        },
    },
    methods:{
        darkMode(){
            if (!this.isDark) {
                setTimeout(() => {
                document.documentElement.classList.add('dark');
                localStorage.setItem('dark-mode', 'enabled');
                this.$store.dispatch('toggleDarkMode');
            }, 500);
        } else {
            setTimeout(() => {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('dark-mode', null);
                this.$store.dispatch('toggleDarkMode');
                }, 500);
            }
        }
    }
}
</script>