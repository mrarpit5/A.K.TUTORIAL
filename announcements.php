<?php
include("header.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
    <title>announcements</title>
    </head>
<body>
<div class="bottom_content">  
   	 <h3>ANNOUNCEMENTS</h3> 
      <div class="announce">
          <div class="section-content" align="center">
          <?php
          include("connection.php");
          $s=mysql_query("select * from announcements");
          while($row = mysql_fetch_array($s))
          { ?>

          
                    
                         <div class="clearfix"> </div>
                        <article>
                            <div>
                                <figure class="date"><b><i class="read-more"></i><?php echo $row["date"]; ?> <?php echo $row["announce"]; ?> </b></figure>
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
