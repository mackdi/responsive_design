<!-- processing the login -->




<!-- The Modal -->
<div id="id01" class="modal">
  <!-- Modal Content -->
  <form class="modal-content animate" action="server.php" method="POST">
    

    <div class="container-modal_box">
      <label><b>Username</b></label>
      <input class="modal_box" type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input class="modal_box" type="password" placeholder="Enter Password" name="psw" required>

      <button  class="modal_box" type="submit">Login</button>
      <input  class="modal_box" type="checkbox" id="check"> Remember me
    </div>

    <div class="container-modal_box" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" id="cancel-btn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
