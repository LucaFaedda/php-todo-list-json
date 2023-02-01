const { createApp } = Vue;

createApp({
    data() {
        return {

            apiLista: 'server.php',
            todolist: [],
            name: '' // inizializzo la variabile vuota per poterla usare nel methods
        }
    },
    methods: {
        add() {

            const data = {

                nuovoItem: this.name
            }

            axios.post(this.apiLista, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.name = '';
                this.todolist = response.data

            })
        }

    },
    created() {
        axios.get(this.apiLista).then((response) => {
            this.todolist = response.data; // faccio la chiamata axios
        })
    },

}).mount('#app');