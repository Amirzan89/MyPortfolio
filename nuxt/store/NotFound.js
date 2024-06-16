import { defineStore } from "pinia";
export const useNotFoundStore = defineStore('notfound', {
    state: () => {
        isNotFound: false;
        messageNotFound: '';
        linkBack:'/';
    },
    actions: {
        setIsNotFound(value = false, linkBack) {
            this.isNotFound = value;
            this.linkBack = linkBack;
            if(!this.isNotFound){
                this.messageNotFound = '';
            }
        },
        setMessageNotFound(message = '') {
            this.messageNotFound = message;
        },
    },
});