<?
include ('templates/header.php');
?>
<? 
include ('config/dbconn.php');
?>
<!-- send info to db Signup_event -->

<!--  -->



<? require ('event/getevents.php');?>

   

    <!-- // display events -->
    
       <? foreach ($events as $event){ ?>
        <div class="container">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://picsum.photos/1000">
                </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><? echo $event['title']?><i class="material-icons right">more_vert</i></span>
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
                        <p><? echo $event['content']?></p>
                        <p><? echo $event['event_location']?></p>
                        <p><? echo $event['event_time']?></p>
                        <p><? echo $event['reg_date']?></p>

                    </div>
            </div>
        
      </div>
      
   <? } ?> 


<?
include ('templates/footer.php');
?>


      
</script>