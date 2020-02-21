<?
include ('templates/header.php');
?>
<? 
include ('config/dbconn.php');
?>
<!-- send info to db Signup_event -->

<!--  -->



<? require ('event/getevents.php');?>

<? require ('event/showattending.php');?>

   

    <!-- // display events -->
    
    <div class="parallax-container">
      <div class="parallax"><img src="https://picsum.photos/1000"></div>
        <div id="div" class="valign-wrapper">
        <a class="waves-effect waves-light btn-large center"><i class="material-icons right">cloud</i>button</a>
        </div>
    </div>


    <div class="section white">
      <div class="row container">
        <h2 class="header">Parallax</h2>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
      </div>
    </div>

    
       
        <div class="container">
            <h2 class="center-align">Events</h2>
            <div class="row">
                <? foreach ($events as $event){ ?>
                    <div class="col s12 l6 l2">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="https://picsum.photos/1000">
                        </div>

                        <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><? echo $event['title']?><i class="material-icons right">more_vert</i></span>
                                <p><? echo $event['content']?></p>
                                <p><? echo $event['event_location']?></p>
                                <p><? echo $event['event_time']?></p>
                                <p><? echo $event['reg_date']?></p>
                                <ul class="collapsible">
                                <li>
                                <div class="collapsible-header"><p>Sign up</p></div>
                                    <div class="collapsible-body">
                                    <form action="event/executesignup.php" method="POST" >
                                    <label for="signup_firstname">Firstname</label>
                                    <input type="text" name="signup_firstname">
                                    <label for="signup_lastname">Lastname</label>
                                    <input type="text" name="signup_lastname" id="">
                                    <label for="signup_mail">Email</label>
                                    <input type="text" name="signup_mail" id="">
                                    <input type="hidden" value="<? echo $event['event_id']?>" name="event_id">
                                    <input type="submit" name="submit" value="submit" >Sign up</button>
                                    <? echo $event['event_id'] ?>
                                    </form>
                        </div>
                                </li>
                                </ul>
                    </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><? echo $event['title']?><i class="material-icons right">close</i></span>
                            <?foreach ($attending as $attend){?>
                                <?if($attend['event_id'] == $event['event_id']){?>
                                <p><? echo 'Name: ' . $attend['signup_firstname'] . ' ' . $attend['signup_lastname']?></p>
                                <p><? echo $attend['signup_mail']?></p>
                                <hr>
                                <?  } ?>
                            <? } ?>   
                        </div>
                    </div>
                </div>
            <? } ?> 
        </div>
      </div>
      
   


<?
include ('templates/footer.php');
?>


