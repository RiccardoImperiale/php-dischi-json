const { createApp } = Vue
createApp({
    data() {
        return {
            message: 'ciao'
        }
    },
    mounted() {
        console.log('hi!!');
    },
}).mount('#app')