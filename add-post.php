<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/post-styles.css">

  <style>
    td {
      padding: 10px;
    }
  </style>

</head>

<body>
  <?php include('nav-bar.php'); ?>
  <div class="navb">


  </div>
  <div class="container">
    <div class="background-image"></div>
    <div class="content">

      <div class="postpost">
        <div id="Title">
          <h1>Add New Post</h1>
        </div>
        <div class="formdiv">

          <!-- <form action="add-post-function.php" method="post"> -->
          <form action="add-post-function.php" method="POST" enctype="multipart/form-data">
            <table class="ft">
              <!-- <tr>
                <td id="img"><label for="image">Add Your Photo:</label></td>
                <td id="img"><input class="box" type="text" id="image" name="image" placeholder="Enter the image URL" required>
                  <button class="gallery-button" type="button" onclick="openGallery()"><i class="fas fa-image"></i> Select from Gallery</button>
                </td>
              </tr> -->

              <tr>
                <td><label for="image" class="form-label browse custom-label">Add image: </label></td>
                <td>
                  <!-- <div class="ml-2">
                        <img style="height: 300px; width: 230px;" src="../img/covers/sample.jpg" id="preview" class="img-thumbnail">
                    </div> -->
                  <input style="width: 230px;" class="form-control" type="file" name="image" id="image">
                </td>
              </tr>
              <tr class="catagary">
                <td><label for="category">Category of Product:</label></td>
                <td><select id="category" name="category" required>
                    <option value="">Select a category</option>
                    <option value="fruits">Fruits</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="dairy">Dairy</option>
                    <option value="meat">Meat</option>
                    <option value="seafood">Seafood</option>
                  </select>
                </td>
              </tr>
              <tr class="qty">
                <td><label for="qty">Number of Kilos:</label></td>
                <td><input type="text" id="qty" name="qty" placeholder="Enter the amount" required></td>
              </tr>
              <tr class="price">
                <td><label for="price">Price of One Kilo:</label></td>
                <td><input type="text" id="price" name="price_of_one_kilo" placeholder="Enter the price" required></td>
              </tr>
              <tr>
                <td><label for="harvest-day">Harvest Day:</label></td>
                <td>
                  <div class="calendar-icon">
                    <input type="date" id="harvest-day" name="harvest_day" required>
                </td>
              </tr>
              <tr>
                <td><label for="location">Location of Product:</label></td>
                <td><!--- Sri Lanka states -->
                  <select id="country-state" name="location_of_product">
                    <option value="">Select state</option>
                    <option value="52">Ampara District</option>
                    <option value="71">Anuradhapura District</option>
                    <option value="81">Badulla District</option>
                    <option value="51">Batticaloa District</option>
                    <option value="2">Central Province</option>
                    <option value="11">Colombo District</option>
                    <option value="5">Eastern Province</option>
                    <option value="31">Galle District</option>
                    <option value="12">Gampaha District</option>
                    <option value="33">Hambantota District</option>
                    <option value="41">Jaffna District</option>
                    <option value="13">Kalutara District</option>
                    <option value="21">Kandy District</option>
                    <option value="92">Kegalle District</option>
                    <option value="42">Kilinochchi District</option>
                    <option value="43">Mannar District</option>
                    <option value="22">Matale District</option>
                    <option value="32">Matara District</option>
                    <option value="82">Monaragala District</option>
                    <option value="45">Mullaitivu District</option>
                    <option value="7">North Central Province</option>
                    <option value="6">North Western Province</option>
                    <option value="4">Northern Province</option>
                    <option value="23">Nuwara Eliya District</option>
                    <option value="72">Polonnaruwa District</option>
                    <option value="62">Puttalam District</option>
                    <option value="91">Ratnapura district</option>
                    <option value="9">Sabaragamuwa Province</option>
                    <option value="3">Southern Province</option>
                    <option value="53">Trincomalee District</option>
                    <option value="8">Uva Province</option>
                    <option value="44">Vavuniya District</option>
                    <option value="1">Western Province</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="contact">contact Number:</label>
                </td>
                <td>
                  <input type="number" id="contact" name="contact_number" placeholder="Enter you tel-no" required>

                </td>
              </tr>
              <tr>
                <td><label for="description">Description:</label></td>
                <td><textarea id="description" name="description" placeholder="Enter the description" required></textarea></td>
              </tr>
              <tr class="buttonpost">
                <td colspan="2"><button class="post-button" type="submit" name="add_new_post">Post</button></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>