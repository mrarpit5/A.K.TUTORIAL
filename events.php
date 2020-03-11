<?php
include("header.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
    <title>Events</title>
    </head>
<body>
<div class="bottom_content">  
   	 <h3>EVENTS</h3> 
      <div class="announce">
          <div class="section-content" align="center">
          <?php
          include("connection.php");
          $s=mysql_query("select * from events");
          while($row = mysql_fetch_array($s))
          { ?>

          
                    
                         <div class="clearfix"> </div>
                        <article>
                            <div>
                                <figure class="date"><b><i class="read-more"></i>&nbsp;<?php echo $row["date"]; ?> <br><?php echo $row["event"]; ?> </b></figure>
                            </div>
                        </article>
                            
          <?php
          }?>
              </div>
                    </div>
        </div>
<?php
include("footer.php");
?>
    </body>
</html>
