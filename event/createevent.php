<?include('../config/dbconn.php');?>


<?include('../templates/header.php');?>

<main>
<section class="container grey-text">
    <h4 class="center">Create Event</h4>
    <form action="executeevent.php" method="POST" class="white" enctype="multipart/form-data">

        <label for="title">Event name</label>
        <input type="text" name="title" value="">
        
        <label for="content">Content</label>
        <input type="text" name="content" value="">

        <label for="category">Category</label>
        <input type="text" name="category" value="">

        <label for="event_location">Location</label>
        <input type="text" name="event_location" value="">

        <label for="event_time">Time</label>
        <input type="text" name="event_time" value="">
        
        <p><input type="file" name="coverimg" required="required" /></p>
        <div class="center">
        <p><input type="submit" name="cover_up" class="btn brand z-depth-0" value="Submit"/></p>  
        </div>      
    </form>
        <br>

       
    </form>
  </section>
</main>













<?include('../templates/footer.php');?>

