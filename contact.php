<?php include "header.php" ?>
<?php include "navbar.php" ?>



<div class="container">
  <div class="col-sm-offset-2">
    <h1 id="contactMeWelcome"><span class="glyphicon glyphicon-envelope"></span> Contact Me <span class="glyphicon glyphicon-envelope"></span></h1>
  </div>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="phoneNumber">Phone Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pNo" placeholder="Enter phone number">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <textarea class="form-control" rows="3"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

<?php include "footer.php" ?>
