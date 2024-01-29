const {createApp} = Vue;

createApp({
     data(){
          return{
               apiUrl: 'server.php',
               todo:[],
               item:""
          }
     },
     mounted(){
          this.getTodoList()
     },
     methods:{
          updatetodo(){
               const data = {
                    item : this.item
               }

              axios.post(this.apiUrl , data,{
               headers: { 'content-type' : 'multipart/form-data'}
              }).then((response) => {
               this.item = "";
               this.todo = response.data
              })
          },
          
          getTodoList(){
               axios.get(this.apiUrl).then((response) => {
                    this.todo = response.data;
               })
          },
     }
}).mount("#App")

