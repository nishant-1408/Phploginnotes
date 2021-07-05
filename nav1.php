<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
 

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark" ">
  <a class="navbar-brand" href="/LOGIN">LOGIN USER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/LOGIN/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>';

      echo '<li class="nav-item">
        <a class="nav-link" href="/LOGIN/logout.php">Logout</a>
      </li>';
      echo '<li class="nav-item">
        <a class="nav-link" href="/LOGIN/Notes.php">Notes</a>
      </li>';
    
       
      
    echo '</ul>
    
  </div>
</nav>';
}
?>