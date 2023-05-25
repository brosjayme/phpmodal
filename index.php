

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <!-- Modal form -->
      <div class="mb-3">
  <label for="completename">Name</label>
  <input type="text" class="form-control" id="completename"
   placeholder="Enter your name">
</div>
<div class="mb-3">
  <label for="completemail">Email</label>
  <input type="text" class="form-control" id="completemail"
   placeholder="Enter your email">
</div>
<div class="mb-3">
  <label for="completemobile">Mobile</label>
  <input type="text" class="form-control" id="completemobile"
   placeholder="Enter your mobile">
</div>
<div class="mb-3">
  <label for="completeplace">Place</label>
  <input type="text" class="form-control" id="completeplace"
   placeholder="Enter your place">
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="adduser()">Submit</button>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <h2 class='text-center'>CRUD OPERATION USING PHP BOOTSSTRAP MODAL</h2>
    <button type="button" class="btn btn-dark" data-bs-toggle="modal"
     data-bs-target="#completeModal">
     Add New Users
</button>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>


<script>
function adduser(){
 var nameAdd=$('#complename').val();
 var emailAdd=$('#complemail').val();
 var mobileAdd=$('#complemobile').val();
 var placeAdd=$('#compleplace').val();

$.ajax({
url:"insert.php",
type: 'post', 
data:{
  nameSend:nameAdd,
  emailSend:emailAdd, 
  mobileSend:mobileAdd,
  placeSend:placeAdd,

},
success:function(data,status){
  // function to display data
  console.log(status);
}


})



} 


</script>




  
  </body>
</html>