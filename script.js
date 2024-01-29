const {createApp} = Vue;

createApp({
     data(){
          return{
               apiUrl: 'server.php',
               todo:[],
          }
     },
     mounted(){
          this.getTodoList()
     },
     methods:{
          getTodoList(){
               axios.get(this.apiUrl).then((response) => {
                    this.todo = response.data;
               })
          },
     }
}).mount("#App")