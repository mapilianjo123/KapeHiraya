<?php
include "Connections/dbconnect.php";
?>

<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet" />
<div class="grid-container"> 
    <?php
        include "templates/header.php";
        include "templates/sidebar.php";
    ?>     
    
        <!-- Main -->    
    
    <main class="main-container">
    <?php
      include "templates/dropdownlist.php";
      ?>
  
  <div class="container px-1 my-4">
  <h1>Customers list</h1>

       <!-- Button trigger modal -->
<button type="button" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#completeModal">
  Add New Customers
</button>
<div id="displayDataTable" class="px-1 my-3" style="color:white;"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="color:black;">
        <h5 class="modal-title fs-5" id="exampleModalLabel" >New Customers Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
 <div class="modal-body" style="color:black;">
  <!-- Modal Form -->
  <form>
  <div class="mb-3">
    <label for="completeName" class="form-label">Name</label>
    <input type="text" class="form-control" id="completeName" aria-describedby="emailHelp" placeholder="Enter your name" autocomplete="off"> 
  </div>
  <div class="mb-3">
    <label for="completeEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="completeEmail" aria-describedby="emailHelp" placeholder="Enter your email" autocomplete="off"> 
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="completeContact" class="form-label">Contact #</label>
    <input type="text" class="form-control" id="completeContact" aria-describedby="emailHelp" placeholder="Enter your contact number" autocomplete="off"> 
  </div>
  <div class="mb-3">
    <label for="completeAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="completeAddress" aria-describedby="emailHelp" placeholder="Enter your Address" autocomplete="off"> 
  </div>
  <div class="mb-3">
    <label for="completeDate" class="form-label">Date</label>
    <input type="date" class="form-control" id="completeDate" aria-describedby="emailHelp" placeholder="Enter your birthdate"> 
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success"onclick="adduser()">sumbit</button>
        <button type="button" class="btn btn-danger"data-bs-dismiss="modal">close</button>
      </div>                                        
    </div>
  </div>
</div>


    </main>
        <!-- End Main -->
</div>

<script
   src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" >
  </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    ></script>
<?php
    include "templates/footer.php";
?>
      