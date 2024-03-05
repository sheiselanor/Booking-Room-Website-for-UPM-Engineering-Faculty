<!-- AMMAR -->

<?php
//session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <script>
    function random_function() {
      var a = document.getElementById("input").value;
        if (a === "Lecture Room") {
          var arr = ["Room1", "Room2", "Room3"];
        } else if (a === "Lecture Hall") {
          var arr = [
            "DK1",
            "DK2",
            "DK3",
            "DK4",
            "DK4",
            "DK5",
            "DK6",
            "DK7",
            "DK8"
          ];
        } else if (a === "Auditorium") {
          var arr = ["Faculty_Auditorium"]
        } else if (a === "Thinker Space") {
          var arr = ["Faculty_Thinker_Space"]
        }

        var string = "";

        for (i = 0; i < arr.length; i++) {
          string =
            string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
        }
        document.getElementById("output").innerHTML = string;
    }
  </script>

  <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <div class="form-field-select has-validation">
        <p class="form-label ptextbooking" for="roomType">Room Type:</p>
          <select
            class="form-control"
            id="input"
            name="roomType"
            class="selectinput"
            onchange="random_function()"
            required
          >
            <option>select option</option>
            <option id="Lecture Room">Lecture Room</option>
            <option id="Lecture Hall">Lecture Hall</option>
            <option id="Audotorium">Auditorium</option>
            <option id="Thinker Space">Thinker Space</option>
          </select>       
      </div>
      <div class="form-field-select has-validation">
        <p class="form-label ptextbooking" for="roomID">Room:</p>
        <select 
          class="form-control" 
          id="output"
          name="roomID" 
          class="selectinput"
          onchange="random_function1()" 
        ></select>
      </div>
      <div class="buttondiv">
        <button type="submit" name="submit" class="btn text-center">Submit</buttom>
      </div>
    </form>
  </div>
</body>
</html>


<?php 
if(isset($_POST['submit'])){
    $roomID = trim($_POST['roomID']);
    $roomType = trim($_POST['roomType']);
    $_SESSION['roomID'] = $roomID;
    $_SESSION['roomType'] = $roomType;
    //  header("Location: calender.php");


}?>

