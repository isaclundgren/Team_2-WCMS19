<?include('../config/dbconn.php');?>


<?include('../templates/header.php');?>

<main>
<section class="container grey-text">
    <h4 class="center">Create Event</h4>
    <form action="executeevent.php" method="POST" class="white">

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
        

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
  </section>
</main>













<?include('../templates/footer.php');?>

