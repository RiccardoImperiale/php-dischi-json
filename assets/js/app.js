const { createApp } = Vue
createApp({
    data() {
        return {
            records: [],
            base_api_url: 'dischi.json'
        }
    },
    mounted() {
        axios.get(this.base_api_url)
            .then((result) => {
                console.log(result);
                this.records = result.data;
            }).catch((err) => {
                console.log(err.message);
                this.error = err.message
            });
    },
}).mount('#app')