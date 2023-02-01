const { createApp } = Vue;

createApp({
    data() {
        return {

            apiLista: 'server.php',
            todolist: [],

        }
    },
    created() {
        axios.get(this.apiLista).then((response) => {
            this.todolist = response.data;
        })
    },

}).mount('#app');