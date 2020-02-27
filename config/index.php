
<?include ('templates/header.php');?>

<?include ('config/dbconn.php');?>

<?include ('event/getevents.php');?>

<?include ('event/showattending.php');?>




   

    <!-- // display events -->
    
    <div class="parallax-container">
      <div class="parallax"><img src="https://picsum.photos/1000"></div>
        <div id="div" class="valign-wrapper">
        <a href="event/createevent.php "class="waves-effect waves-light btn btn-large"><i class="material-icons right">chrome_reader_mode</i>Create event</a>
        </div>
    </div>


    
       
        <div class="container">
            <h2 class="center-align">Events</h2>
            <div class="row">
                <? foreach ($events as $event){ ?>
                    <div class="col s12 l6 l2">
                        <div class="card hoverable z-depth-2">
                            <div class="card-image waves-effect waves-block waves-light">
                            
                            <img class="activator" src="uploads/<?echo $event['event_img']?>">

                        </div>

                        <div class="card-content">
                            <div class="cardcontent">
                                <span class="card-title activator grey-text text-darken-4"><? echo $event['title']?><i class="material-icons right">more_vert</i></span>
                                <p><? echo $event['content']?></p>
                                <br>
                                <p>Location: <? echo $event['event_location']?></p>
                                <p>Time: <? echo $event['event_time']?></p>
                                <p>Date: <? echo $event['reg_date']?></p>
                                <hr>
                            </div>
                                <p>Kategorier</p>
                                <ul>
                                <? foreach(explode(',', $event['category']) as $cat): ?>
                                    <a class="waves-effect waves-light btn-small"><?echo ($cat)?></a>
                                <? endforeach; ?>
                            </ul>
                                <ul class="collapsible">
                                <li>
                                <div class="collapsible-header"><p>Sign up</p></div>
                                    <div class="collapsible-body">
                                    <form action="event/executesignup.php" method="POST" >
                                    <label for="signup_firstname">Firstname</label>
                                    <input type="text" name="signup_firstname" required>
                                    <label for="signup_lastname">Lastname</label>
                                    <input type="text" name="signup_lastname" required>
                                    <label for="signup_mail">Email</label>
                                    <input type="email" name="signup_mail" required>
                                    <input type="hidden" value="<? echo $event['event_id']?>" name="event_id">
                                    <input type="submit" name="submit" value="submit" class="waves-effect waves-light btn"></button>
                                    
                                    </form>
                        </div>
                                </li>
                                </ul>
                    </div>
                    
<?
include ('templates/footer.php');
?>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><? echo $event['title']?><i class="material-icons right">close</i></span>
                            <?foreach ($attending as $attend){?>
                                <?if($attend['event_id'] == $event['event_id']){?>
                                <p><? echo 'Name: ' . $attend['signup_firstname'] . ' ' . $attend['signup_lastname']?></p>
                                <p><? echo 'Email: ' .$attend['signup_mail']?></p>
                                <hr>
                                <?  } ?>
                            <? } ?>   
                        </div>
                    </div>
                </div>
            <? } ?> 
        </div>
      </div>
      
   




