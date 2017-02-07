<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Epicodus.php";
    require_once __DIR__."/../src/Student.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
          <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Epicodus Students</title>
          </head>
          <body>
            <div class='container'>
              <h1>Add a student to Epicodus Program</h1>
              <p>Enter name:</p>
              <form action='/add_students'>
                  <div class='form-group'>
                    <label for='name1'>Name:</label>
                    <input id='name1' name='name1' class='form-control' type='text'>
                  </div>
                  <div class='form-group'>
                    <label for='track1'>Epicodus track:</label>
                    <input id='track1' name='track1' class='form-control' type='text'>
                  </div>
                  <div class='form-group'>
                    <label for='name2'>Name:</label>
                    <input id='name2' name='name2' class='form-control' type='text'>
                  </div>
                  <div class='form-group'>
                    <label for='track2'>Epicodus track:</label>
                    <input id='track2' name='track2' class='form-control' type='text'>
                  </div>
                  <div class='form-group'>
                    <label for='name3'>Name:</label>
                    <input id='name3' name='name3' class='form-control' type='text'>
                  </div>
                  <div class='form-group'>
                    <label for='track3'>Epicodus track:</label>
                    <input id='track3' name='track3' class='form-control' type='text'>
                  </div>
                  <button type='submit' class='btn-success'>Add</button>
              </form>
            </div>
          </body>
        </html>
        ";
    });


    $app->get("/add_students", function(){

      $epicodus = new Epicodus();
      for ($i = 1; $i <= 3; $i++ ) {
        $temp = (string)$i;
        $student = new Student($_GET["name" .$temp], $_GET["track".$temp]);
        $epicodus->addStudent($student);
      }
      var_dump($epicodus);
      return "<a href='/'><button class='btn'>Home</button></a>";
      
    });
    return $app;
 ?>
