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
    
       <? foreach ($events as $event){ ?>
        <div class="container">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://picsum.photos/1000">
                </div>
                    <div class="card-content">

                        <span class="card-title activator grey-text text-darken-4"><? echo $event['title']?><i class="material-icons right">more_vert</i></span>
                            <p class="main-content"><? echo $event['content']?></p>
                            <p>Adress: <? echo $event['event_location']?></p>
                            <p>Tid: <? echo $event['event_time']?></p>
                            <p>Skapad: <? echo $event['reg_date']?></p>

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
                                    <input type="submit" name="submit" value="submit" class="btn waves-effect waves-light" ></button>
                                </form>
                            </div>
                            </li>
                        </ul>

                    
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><h2>Attending</h2><i class="material-icons right">close</i></span>
                        <?foreach ($attending as $attend){?>
                            <?if($attend['event_id'] == $event['event_id']){?>
                                <p><? echo 'Name: ' . $attend['signup_firstname'] . ' ' . $attend['signup_lastname']?></p>
                                <p><? echo 'Email: ' . $attend['signup_mail']?></p>
                                <hr>
                            <?} ?>
                        <?} ?>   
                    </div>
            </div>
        
      </div>
      
   <? } ?> 


<?
include ('templates/footer.php');
?>


