<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modify Events</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">

      <div class="">
        <?php include ('constantPHPs/header.php') ?>
      </div>

      <div class="row">
        <div class="col-md-2 borderRight">
          <h2>Events:</h2>
        </div>
        <div class="col-md-8">
          <!-- Breadcrumb navigation -->
          <ul aria-label="breadcrumb" class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="sportsCoord.php">Sports Coordinator</a></li>
            <li>Modify Events</li>
          </ul>

          <h2>Insert/Update Events</h2>
          <br>
          <form action="" method="post">
            <fieldset>
              <div class="form-group">
                <label for="eventName" >Event name:</label>
                <input type="text" id="eventName" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                <label for="marshalidSelectList" >Marhsal's EQ ID:</label>
                <select id="marshalidSelectList" class="form-control form-control-lg">
                  <option value='0'>No marshal's available</option>
                </select>
              </div>
              <div class="form-group">
                <label for="locationIdSelectList" >Location:</label>
                <select id="locationIdSelectList" class="form-control form-control-lg">
                  <option value='0'>No locations available</option>
                </select>
              </div>
            </fieldset>
          </form>

        </div>

        <div class="col-md-2 borderLeft">
          <div class="row">
            <div class="col-12">
              <h2>Processes</h2>
              <h3>Insert/Modify:</h3>
              <ul>
                <li><a href="#">Student details</a></li>
                <li><a href="#">Carnival details</a></li>
                <li><a href="modifyEvents.php">Event details</a></li>
                <li><a href="#">Records</a></li>
              </ul>
              <br>
              <h3>Or:</h3>
              <ul>
                <li><a href="#">Select from the database</a></li>
              </ul>
            </div>
          </div>
          <div class="row borderTop">
            <div class="col-12">
              <h2>Asides</h2>
            </div>
          </div>
        </div>
      </div>


      <div class="footer">
        <?php include ('constantPHPs/footer.php') ?>
      </div>

    </div>
    <script src="js/functions.js" type="text/javascript"></script>

  </body>
</html>
