<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sports Coordinator</title>
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
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Sports Coordinator</li>
          </ul>

          <h2>Sports Coordinator</h2>
          <p>
            For selecting, inserting or updating data in the sports carnival system database, you can use
            the corresponding links, just below the Processes heading.<br>
            For specific requirements for each type of query, please read the below information
          </p>
          <br>
          <h4>Inserting/Updating students:</h4>
          <p>
            To insert or update a student, you need to click the insert or update student details link and then fill out
            the form. Some important considerations for inserting students are that:
            <ul>
              <li>All of the fields are required for insertion</li>
              <li>The student's education Queensland ID must contain exactly 10 numbers and a single letter,
              following the normal conventions</li>
              <li>The date of birth must be in the format YYYY-MM-DD and must contain only numbers</li>
              <li>The house name can be selected from a dropdown list to prevent multiple variances of the same
              house being inserted</li>
            </ul>
          </p>
          <br>
          <h4>Inserting/Updating Carnivals:</h4>
          <p>
            To insert or update a carnival, you need to click the insert or update carnival details link and then fill out
            the form. Some important considerations for inserting carnivals are that:
            <ul>
              <li>All of the fields are required for insertion</li>
              <li>The date must be in the format YYYY and must contain only numbers</li>
              <li>The carnival Id is auto incremented therefore, you don't need to add anything for it, however,
              its good for using to updates</li>
              <li>The sports coordinator education Queensland ID must be yours</li>
            </ul>
          </p>
          <br>
          <h4>Inserting/Updating Events:</h4>
          <p>
            To insert or update an event, you need to click the insert or update event details link and then fill out
            the form. Some important considerations for inserting events are that:
            <ul>
              <li>All of the fields are required for insertion</li>
              <li>The event Id is auto incremented therefore, you don't need to add anything for it, however
              its good for using to updates</li>
              <li>The marshal's education Queensland Id and the location can be selected from a dropdown list to ensure accuracy .
                and can be updated later if needed</li>
            </ul>
          </p>
          <br>
          <h4>Inserting/Updating Records:</h4>
          <p>
            To insert or update a record, you need to click the insert or update records link and then fill out
            the form. Some important considerations for inserting records are that:
            <ul>
              <li>All of the fields are required for insertion</li>
              <li>The event must be already inserted</li>
              <li>The year set for the record must be in the format YYYY and only contain numbers</li>
              <li>The age division must also be set as the records are different for each age division of each event</li>
            </ul>
          </p>
          <br>
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
