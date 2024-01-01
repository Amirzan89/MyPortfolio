<template>
    <div class="w-full h-50" :class="{
        'bg-black text-white':isDark,
        'bg-white text-black':!isDark
    }">
        <div class="relative top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 w-1/4 flex flex-row text-xl gap-3 pointer-events-auto">
            <ul class="card flex flex-col gap-3 flex-1">
                    <li id="instagram">
                        <a href="" target="_blank" class="flex flex-row gap-4 w-min">
                            <img :src="imagePath('instagramLight.png')" alt="" class="w-10 h-10" v-if="!isDark">
                            <img :src="imagePath('instagramDark.png')" alt="" class="w-10 h-10" v-if="isDark">
                            <span>instagram</span>
                        </a>
                    </li>
                <li id="twitter">
                    <a href="" target="_blank" class="flex flex-row gap-4 w-min">
                        <img :src="imagePath('twitterLight.png')" alt="" class="w-10 h-10" v-if="!isDark">
                        <img :src="imagePath('twitterDark.png')" alt="" class="w-10 h-10" v-if="isDark">
                        <span>twitter</span>
                    </a>
                </li>
                <li id="facebook">
                    <a href="" target="_blank" class="flex flex-row gap-4 w-min">
                        <img :src="imagePath('facebookLight.png')" alt="" class="w-10 h-10" v-if="!isDark">
                        <img :src="imagePath('facebookDark.png')" alt="" class="w-10 h-10" v-if="isDark">
                        <span>Facebook</span>
                    </a>
                </li>
            </ul>
            <ul class="card flex flex-col gap-3 flex-1">
                <li id="telegram">
                    <a href="https://t.me/amirzan0" target="_blank" class="flex flex-row gap-4 w-min">
                        <img :src="imagePath('telegramLight.png')" alt="" class="w-10 h-10" v-if="!isDark">
                        <img :src="imagePath('telegramDark.png')" alt="" class="w-10 h-10" v-if="isDark">
                        <span>@amirzan0</span>
                    </a>
                </li>
                <li id="discord">
                    <a href="https://discordapp.com/users/573331914576887818" target="_blank" class="flex flex-row gap-4 w-min">
                        <img :src="imagePath('discordLight.png')" alt="" class="w-10 h-10" v-if="!isDark">
                        <img :src="imagePath('discordDark.png')" alt="" class="w-10 h-10" v-if="isDark">
                        <span>@amirzan_121</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return{
            tPath: process.env.NODE_ENV === 'local' ? '/public' : '',
        }
    },
    computed: {
        isDark() {
            return this.$store.getters.isDark;
        },
    },
    methods:{
        imagePath(filename) {
            return this.tPath + '/img/icon/' + filename;
        },
    }
}
</script>