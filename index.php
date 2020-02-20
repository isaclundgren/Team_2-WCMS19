<?
include ('templates/header.php');
?>
<? 
include ('config/dbconn.php');
?>



<? require ('event/getevents.php');?>

   

    <!-- // display events -->
    
       <? foreach ($events as $event){ ?>
        <div class="container">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://picsum.photos/10">
                </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><? echo $event['title']?><i class="material-icons right">more_vert</i></span>
                        <!-- <p><a href="#">This is a link</a></p> -->
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