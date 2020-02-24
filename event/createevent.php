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

        <label for="event_location">Location</label>
        <input type="text" name="event_location" value="">

        <label for="event_time">Time</label>
        <input type="text" name="event_time" value="">

        <p>
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="valcheckbox" class="chkbox" value="JavaScript"/>
            <span>JavaScript</span>
        </label>
        </p>
        <p>
        <label for="checkbox2">
            <input type="checkbox" id="checkbox2"  name="valcheckbox" class="chkbox" value="jQuery"/>
            <span>jQuery</span>
        </label>
        </p>
        <p>
        <label for="checkbox3">
            <input type="checkbox" id="checkbox3" name="valcheckbox" class="chkbox" value="HTML"/>
            <span>HTML</span>
        </label>
        </p>
        <p>
        <label for="checkbox4">
            <input type="checkbox" id="checkbox4" name="valcheckbox" class="chkbox" value="CSS"/>
            <span>CSS</span>
        </label>
        </p>
        <p>Valda kategorier</p>
        <div class="input-field col s12">
          <textarea id="selectedtext" class="materialize-textarea" name="category"></textarea>
          <label for="textarea1"></label>
        </div>   
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
  </section>
</main>















<?include('../templates/footer.php');?>

