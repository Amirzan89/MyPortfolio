<template>
    <form v-on:submit.prevent="sendEmail" id="contact" class="relative bg-500 w-150 mx-auto h-2/4 flex flex-col gap-5 align-center">
        <span class="text-white text-5xl mx-auto">Contact Me !</span>
        <div class="mx-auto mt-3 w-full">
            <input type="text" placeholder="Email Address" name="email" class="w-full h-14 rounded-xl pl-5 text-2xl input border-2 focus:outline-none focus:border-4 transition duration-400 ease-in-out" :class="{
                'hover:border-blue-600 focus:border-blue-600' : !isErrorEmail && !isValidEmail,
                'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorEmail,
                'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidEmail }" v-model="inpEmail" ref="inpEmail">
            <span v-if="isErrorEmail" class="ml-3 mt-2 text-red-500 font-semibold text-lg" ref="errEmail">{{ errEmail }}</span>
        </div>
        <div class="mx-auto w-full h-18 flex flex-row gap-4">
            <div class="h-full flex-1">
                <input type="text" placeholder="Full Name" name="name" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-2 hover:border-blue-600 focus:outline-none focus:border-4 focus:border-blue-600 transition duration-400 ease-in-out" :class="{
                'hover:border-blue-600 focus:border-blue-600' : !isErrorName && !isValidName,
                'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorName,
                'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidName }" v-model="inpName" ref="inpName">
                <span v-if="isErrorName" class="ml-3 mt-1 text-red-500 font-semibold text-lg" ref="errName">{{ errName }}</span>
            </div>
            <div class="h-full flex-1">
                <input type="text" placeholder="Subject" name="subject" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-2 hover:border-blue-600 focus:outline-none focus:border-4 focus:border-blue-600 transition duration-400 ease-in-out" :class="{
                'hover:border-blue-600 focus:border-blue-600' : !isErrorSubject && !isValidSubject,
                'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorSubject,
                'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidSubject }" v-model="inpSubject" ref="inpSubject"> 
                <span v-if="isErrorSubject" class="ml-3 mt-1 text-red-500 font-semibold text-lg" ref="errSubject">{{ errSubject }}</span>
            </div>
        </div>
        <div class="mx-auto w-full h-50">
            <textarea name="message" cols="" rows="" class="w-full h-full pl-4 rounded-xl pt-3 text-lg input border-2 hover:border-blue-600 focus:outline-none focus:border-4 focus:border-blue-600 resize-none transition duration-400 ease-in-out" placeholder="Your Message" :class="{
                'hover:border-blue-600 focus:border-blue-600' : !isErrorMessage && !isValidMessage,
                'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorMessage,
                'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidMessage }" v-model="inpMessage"></textarea>
            <span v-if="isErrorMessage" class="ml-3 mt-1 text-red-500 font-semibold text-lg">{{ errSubject }}</span>
        </div>
        <div class="mx-auto w-full mt-10">
            <input type="submit" value="Send Message" class="w-1/3 h-10 bg-red-500 rounded-full relative left-2/4 -translate-x-2/4">
        </div>
    </form>
</template>
<style scoped>
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #1d232a inset;
    }
</style>
<script>
import axios from 'axios';
function checkEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
export default{
    data(){
        return{
            inpEmail:'',
            inpName:'',
            inpSubject:'',
            inpMessage:'',
            isErrorEmail:false,
            isErrorName:false,
            isErrorSubject:false,
            isErrorMessage:false,
            isValidEmail:false,
            isValidName:false,
            isValidSubject:false,
            isValidMessage:false,
            errEmail:'',
            errName:'',
            errSubject:'',
            errMessage:'',
        };
    },
    methods:{
        sendEmail() {
            try {
                let errors = false;
                if (this.inpEmail.trim() === '') {
                    this.errEmail = 'Email cannot be blank';
                    this.isErrorEmail = true;
                    errors = true;
                }
                if (!checkEmail(this.inpEmail)) {
                    this.errEmail = 'Email invalid';
                    this.isErrorEmail = true;
                }
                if (this.inpName.trim() === '') {
                    this.errName = 'Name cannot be blank';
                    this.isErrorName = true;
                    errors = true;
                }
                if (this.inpSubject.trim() === '') {
                    this.errSubject = 'Subject cannot be blank';
                    this.isErrorSubject = true;
                    errors = true;
                }
                if (this.inpMessage.trim() === '') {
                    this.errMessage = 'Message cannot be blank';
                    this.isErrorMessage = true;
                    errors = true;
                }
                if(errors){
                    return;
                }
                this.isErrorEmail = false;
                this.isErrorName = false;
                this.isErrorSubject = false;
                this.isErrorMessage = false;
                const formData = {
                    email: this.inpEmail,
                    name: this.inpName,
                    subject: this.inpSubject,
                    message: this.inpMessage,
                };
                axios.post('/contact/email', formData).then((res)=>{
                    
                }).catch((res)=>{

                });
                // console.log('Server response:', response.data);
                this.inpEmail = '';
                this.inpName = '';
                this.inpSubject = '';
                this.inpMessage = '';
            } catch (error) {
                console.error('Error sending email:', error);
            }
        },
    }
}
</script>