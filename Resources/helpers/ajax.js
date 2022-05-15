 $(document).ready(function(){
     $('#nuevo').submit(function(){
         var datos=$('#nuevo').serialize();
         $.ajax({
             type:"POST",
             url:"insertUser",
             data:datos,
             success:function(r){

                
               setTimeout(function() {
                 document.getElementById("resultado").innerHTML='<div class="alert alert-success alert-dismissible fade show" role="alert"> Datos Guardados! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                 $("resultado").fadeOut(1500);
             },100);
         
             setTimeout(function() {
               document.getElementById("resultado").innerHTML='';
             },4000);
                  header('Location: ./../../Public/views/usuarios/usersView.php ');  
            
               },
               error: function() {
                 alert('Error');
               }
            
         });

         return false;
     });
 });


// getCustomerOrders();
// async function getCustomerOrders() {
//   const response = await fetch(`http://localhost:9000/showUser/1`)

//   console.log(response);

// };


// async function request(id){

//   let dataRequest = {
//      method: 'GET', 
    
//   }
//   let response = await fetch("http://localhost:9000/showUser/", dataRequest);
//     console.log(response)
//   let result = await response.json();
//     console.log(result)
// }

// request()