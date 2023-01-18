<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Money Transfer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INDIAN BANK</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  <style type="text/css">
    button {
      transition: 1.5s;
    }

    button:hover {
      background-color: #616C6F;
      color: black;
    }
  </style>
</head>

<body>
  <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = () => {
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = () => {
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = () => {
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>
  <?php
  include 'config.php';
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  ?>

  <?php
  include 'navbar.php';
  ?>

  <div class="container">
    <h2 class="text-center pt-4"><b>Money Transfer</b></h2>
    <br>
    <div class="row">
      <div class="col">
        <div class="table-responsive-sm">
          <table class="table table-hover table-sm table-striped table-condensed table-bordered">
            <thead>
              <tr>
                <th scope="col" class="text-black text-center bg-success ">Sr.No.</th>
                <th scope="col" class="text-black text-center bg-success ">Full Name</th>
                <th scope="col" class="text-black text-center bg-success ">Email</th>
                <th scope="col" class="text-black text-center bg-success ">Remain Money</th>
                <th scope="col" class="text-black text-center bg-success ">Transfer</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td class="py-2"><?php echo $rows['id'] ?></td>
                  <td class="py-2"><?php echo $rows['name'] ?></td>
                  <td class="py-2"><?php echo $rows['email'] ?></td>
                  <td class="py-2"><?php echo $rows['balance'] ?></td>
                  <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn btn-success"><strong>View</strong></button></a></td>
                </tr>
              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <footer class="text-center mt-5 py-20">


    <p style="color:#004080;font-size:30px">All &copyright reserved.Create by <b>Avantika Gharat</b> <br></p>

  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>