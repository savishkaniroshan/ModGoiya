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
      <div class="navb">
      <?php include('nav-bar.php'); ?>

      </div>
      <div class="container">
        <div class="background-image"></div>
        <div class="content">
        
        <div class="postpost">
        <div id="Title">
            <h1>Add New Post</h1>
        </div>
        <div class="formdiv">
            <form method="post" action="process_post.php">
        <table class="ft">
            <tr>
              <td id="img"><label for="image">Add Your Photo:</label></td>
              <td id="img"><input class="box" type="text" id="image" name="image" placeholder="Enter the image URL" required>
                <button class="gallery-button" type="button" onclick="openGallery()"><i class="fas fa-image"></i> Select from Gallery</button></td>
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
            <tr class="price">
              <td><label for="price">Price of One Kilo:</label></td>
              <td><input type="text" id="price" name="price" placeholder="Enter the price" required></td>
            </tr>
            <tr>
              <td><label for="harvest-day">Harvest Day:</label></td>
              <td><div class="calendar-icon">
                <input type="date" id="harvest-day" name="harvest-day" required></td>
            </tr>
            <tr>
              <td><label for="location">Location of Product:</label></td>
              <td><input type="text" id="location" name="location" placeholder="Enter the location" required></td>
            </tr>
            <tr>
                <td>
                    <label for="contact">contact Number:</label>
                </td>
                <td>
                    <input type="number" id="contact" name="contact" placeholder="Enter you tel-no" required>

                </td>
            </tr>
            <tr>
              <td><label for="description">Description:</label></td>
              <td><textarea id="description" name="description" placeholder="Enter the description" required></textarea></td>
            </tr>
            <tr class="buttonpost">
              <td colspan="2"><button class="post-button" type="submit">Post</button></td>
            </tr>
          </table>
            </form>
          </div>
          </div>
        </div>
      </div>

       <div class="navb"><?php include('footer.php'); ?></div>
    </body>
    </html>