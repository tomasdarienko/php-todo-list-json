<!-- Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus
Mostrare lo stato del task → se completato, barrare il testo
Permettere di segnare un task come completato facendo click sul testo
Permettere il toggle del task (completato/non completato)
Abilitare l’eliminazione di un task
Buon pranzo e buon lavoro! (modificato)  -->


<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src = "https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" crossorigin="anonymous"></script>
</head>

<body>
     <div id="App">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <h1>todoooooo</h1>
                    </div>
                    <div class="col-6">
                         <ul>
                              <li v-for= "todo in todo" >{{ todo.task }} </li>
                         </ul>
                         
                    </div>
                    <div class="col-12">
                         <input type="text" @keyup.enter="updatetodo" v-model="item" placeholder="add task">
                         <button @click="updatetodo" id="savetodo">+</button>
                    </div>
               </div>
          </div>
     </div>


     <script src="./script.js" type="text/javascript"  ></script>
</body>

</html>