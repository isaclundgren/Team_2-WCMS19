<?include('../config/dbconn.php');?>


<?include('../templates/header.php');?>

<?include('../functions/functions.php');?>



<main>

<section class="container grey-text">
    <h4 class="center">Create Event</h4>
    <form action="executeevent.php" method="POST" class="white" enctype="multipart/form-data">

        <label for="title">Event name</label>
        <input type="text" name="title" required>
        
        <label for="content">Content</label>
        <input type="text" name="content" required>

        <label for="event_location">Location</label>
        <input type="text" name="event_location" required>

        <label for="event_time">Time</label>
        <select name="event_time"><?php echo get_times(); ?></select>


        <p>
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="valcheckbox" class="chkbox" value="Meeting" />
            <span>Meeting</span>
        </label>
        </p>
        <p>
        <label for="checkbox2">
            <input type="checkbox" id="checkbox2"  name="valcheckbox" class="chkbox" value="Disco"/>
            <span>Disco</span>
        </label>
        </p>
        <p>
        <label for="checkbox3">
            <input type="checkbox" id="checkbox3" name="valcheckbox" class="chkbox" value="Festival"/>
            <span>Festival</span>
        </label>
        </p>
        <p>
        <label for="checkbox4">
            <input type="checkbox" id="checkbox4" name="valcheckbox" class="chkbox" value="Hackathon"/>
            <span>Hackathon</span>
        </label>
        </p>
        <p>Valda kategorier</p>
        <div class="input-field col s12">
          <textarea id="selectedtext" class="materialize-textarea" name="category" required></textarea>
          <label for="textarea1"></label>
        </div>   
        
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

