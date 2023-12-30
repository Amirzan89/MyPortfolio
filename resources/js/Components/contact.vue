<template>
    <form v-on:submit.prevent="sendEmail" id="contact" class="relative bg-500 w-150 mx-auto h-2/4 flex flex-col gap-5 align-center">
        <span class="text-white text-5xl mx-auto">Contact Me !</span>
        <div class="mx-auto mt-3 w-full">
            <input type="text" placeholder="Email Address" name="email" class="w-full h-14 rounded-xl pl-5 text-2xl input border-4 focus:outline-none focus:border-5 transition duration-400 ease-in-out" :class="{
                'hover:border-blue-600 focus:border-blue-600' : !isErrorEmail && !isValidEmail,
                'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorEmail,
                'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidEmail }" v-model="inpEmail" @input="handleInput('email')">
            <span v-if="isErrorEmail" class="ml-3 mt-2 text-red-500 font-semibold text-lg cursor-default">{{ errEmail }}</span>
        </div>
        <div class="mx-auto w-full h-18 flex flex-row gap-4">
            <div class="h-full flex-1">
                <input type="text" placeholder="Full Name" name="name" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 transition duration-400 ease-in-out" :class="{
                'hover:border-blue-600 focus:border-blue-600' : !isErrorName && !isValidName,
                'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorName,
                'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidName }" v-model="inpName" @input="handleInput('name')">
                <span v-if="isErrorName" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errName }}</span>
            </div>
            <div class="h-full flex-1">
                <input type="text" placeholder="Subject" name="subject" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 transition duration-400 ease-in-out" :class="{
                'hover:border-blue-600 focus:border-blue-600' : !isErrorSubject && !isValidSubject,
                'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorSubject,
                'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidSubject }" v-model="inpSubject" @input="handleInput('subject')">
                <span v-if="isErrorSubject" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errSubject }}</span>
            </div>
        </div>
        <div class="mx-auto w-full h-50">
            <textarea name="message" cols="" rows="" class="w-full h-full pl-4 rounded-xl pt-3 text-lg input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 resize-none transition duration-400 ease-in-out" placeholder="Your Message" :class="{
                'hover:border-blue-600 focus:border-blue-600' : !isErrorMessage && !isValidMessage,
                'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorMessage,
                'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidMessage }" v-model="inpMessage" @input="handleInput('message')"></textarea>
            <span v-if="isErrorMessage" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errMessage }}</span>
        </div>
        <div class="mx-auto w-full mt-10">
            <input type="submit" value="Send Message" class="w-1/3 h-10 bg-red-500 rounded-full relative left-2/4 -translate-x-2/4">
        </div>
    </form>
    <div class="fixed z-100 w-full h-full top-0 left-0" v-if="isLoading">
        <div class="bg w-full h-full bg-blue-300/20"></div>
        <div class="inline-block absolute w-40 h-40 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <div class="absolute left-2 w-10 bg-white custom-animation custom-animation-delay-long"></div>
            <div class="absolute left-18 w-10 bg-white custom-animation custom-animation-delay-short"></div>
            <div class="absolute left-35 w-10 bg-white custom-animation"></div>
        </div>
    </div>
</template>
<style scoped>
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #1d232a inset;
    }
</style>
<script>
import Swal from 'sweetalert2'
import axios from 'axios';
import debounce from 'debounce';
function checkEmailFormat(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
const delayInp = 750;
const debouncedCheckInpEmail = debounce(function() {
    this.checkInpEmail();
}, delayInp);

const debouncedCheckInpName = debounce(function() {
    this.checkInpName();
}, delayInp);

const debouncedCheckInpSubject = debounce(function() {
    this.checkInpSubject();
}, delayInp);

const debouncedCheckInpMessage = debounce(function() {
    this.checkInpMessage();
}, delayInp);
export default{
    data(){
        return{
            inpEmail:'',
            inpName:'',
            inpSubject:'',
            inpMessage:'',
            isLoading:false,
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
        handleInput(desc) {
            if (desc == 'email') {
                debouncedCheckInpEmail.call(this);
            } else if (desc == 'name') {
                debouncedCheckInpName.call(this);
            } else if (desc == 'subject') {
                debouncedCheckInpSubject.call(this);
            } else if (desc == 'message') {
                debouncedCheckInpMessage.call(this);
            } else {
                console.log('invalid desc');
                return;
            }
        },
        checkInpEmail(){
            if(!this.isValidEmail){
                if (this.inpEmail.trim() === '') {
                    this.errEmail = 'Email cannot be blank';
                    this.isErrorEmail = true;
                    this.isValidEmail = false;
                    return false;
                }else if (!checkEmailFormat(this.inpEmail)) {
                    this.errEmail = 'Email invalid';
                    this.isErrorEmail = true;
                    this.isValidEmail = false;
                    return false;
                }else{
                    this.errEmail = '';
                    this.isErrorEmail = false;
                    this.isValidEmail = true;
                    return true;
                }
            }else{
                return true;
            }
        },
        checkInpName(){
            if(!this.isValidName){
                if (this.inpName.trim() === '') {
                    this.errName = 'Name cannot be blank';
                    this.isErrorName = true;
                    this.isValidName = false;
                    return false;
                }else{
                    this.errName = '';
                    this.isErrorName = false;
                    this.isValidName = true;
                    return true;
                }
            }else{
                return true;
            }
        },
        checkInpSubject(){
            if(!this.isValidSubject){
                if (this.inpSubject.trim() === '') {
                    this.errSubject = 'Subject cannot be blank';
                    this.isErrorSubject = true;
                    this.isValidSubject = false;
                    return false;
                }else{
                    this.errSubject = '';
                    this.isErrorSubject = false;
                    this.isValidSubject = true;
                    return true;
                }
            }else{
                return true;
            }
        },
        checkInpMessage(){
            if(!this.isValidMessage){
                if (this.inpMessage.trim() === '') {
                    this.errMessage = 'Message cannot be blank';
                    this.isErrorMessage = true;
                    this.isValidMessage = false;
                    return false;
                }else{
                    this.errMessage = '';
                    this.isErrorMessage = false;
                    this.isValidMessage = true;
                    return true;
                }
            }else{
                return true;
            }
        },
        sendEmail() {
            try {
                let conditions = [
                    this.checkInpEmail(),
                    this.checkInpName(),
                    this.checkInpSubject(),
                    this.checkInpMessage()
                ];
                if (conditions.includes(false)) {
                    return;
                }
                const formData = {
                    email: this.inpEmail,
                    name: this.inpName,
                    subject: this.inpSubject,
                    message: this.inpMessage,
                };
                this.isLoading = true;
                axios.post('/contact/email', formData).then((res)=>{
                    this.isLoading = false;
                    Swal.fire({
                        title: "Success !",
                        text: res.data.message,
                        icon: "success"
                    });
                    this.inpEmail = '';
                    this.inpName = '';
                    this.inpSubject = '';
                    this.inpMessage = '';
                    this.isValidEmail = false;
                    this.isValidName = false;
                    this.isValidSubject = false;
                    this.isValidMessage = false;
                }).catch((err)=>{
                    this.isLoading = false;
                    Swal.fire({
                        title: "Something wrong !",
                        text: err.response.data.message,
                        icon: "error"
                    });
                });
            } catch (error) {
                this.isLoading = false;
                console.error('Error sending email:', error);
            }
        },
    }
}
</script>