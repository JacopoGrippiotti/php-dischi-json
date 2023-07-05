<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" ></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Disk</title>
 </head>
 <body>
  <div id="App">

   <header>

   </header>

   <body>
    <div class="container">
        <div class="card" v-for="(cd,index) in cdList"></div>
    </div>
   </body>






  </div>
  <script src="./script/main.js"></script>
 </body>
</html>