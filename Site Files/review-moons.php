<?php include 'header.php'; 

$review_info = get_reviews();
$size = sizeof($review_info);

?>

<div style="max-width: 90%; margin: 0 auto; padding-top: 10%; padding-bottom: 10%;">
    <?php if(!logged_in()) { ?>
    <div align="center">
    <p>You must be <a href="login.php">logged in</a> to write reviews.</p>
    <p>However, You can still read the reviews below.</p>
    </div>
    <br>
    
    <?php }
    else { ?>
        <div align="center">
            <p><font color="white"><strong>review moons</strong></font></p>
        <form method="POST" action="accept-review.php">
            <p>
                <font color="#337ab7">Select moon: </font>
                    <select name="beach_selection" id="mydropdown" class="selectpicker" data-style="btn-primary">
                        <option value="Ganymede">Ganymede</option>
                        <option value="Europa">Europa</option>
                        <option value="Io">Io</option>
                        <option value="Callisto">Callisto</option>
                    </select>
                <br><br>
                <font color="#337ab7">Your Star Rating (1-5): </font>
                    <select name="stars" id="mydropdown" class="selectpicker" data-style="btn-primary">
                        <option value="1">&#9734;</option>
                        <option value="2">&#9734;<span>&#9734;</span></option>
                        <option value="3">&#9734;<span>&#9734;</span><span>&#9734;</span></option>
                        <option value="4">&#9734;<span>&#9734;</span><span>&#9734;</span><span>&#9734;</span></option>
                        <option value="5">&#9734;<span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span></option>
                    </select>
                <br><br>
                <font color="#337ab7">Your review: </font>
                <br>
                <textarea class="form-control" rows="5" id="comment" name="review" style="width: 500px;" placeholder="Start typing here..."></textarea>
            </p>
            <input type="submit" value="submit review" name="submit-review" class="btn btn-primary" style="margin-top: 1%" role="button" />
        </form> 
        </div>
    <?php } ?>
</div>

<div align="left" style="padding-left: 2%;">
        <p><font color="white"><strong>traveler reviews</strong></font></p>
        <font color="#337ab7">Ganymede Reviews: </font><span>Average 
        <?php for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Ganymede") {
                        $stars1[$i] = $review_info[$i]["stars"];
                    }
                } 
        $average = array_sum($stars1) / count($stars1);
        echo number_format($average, 2) ?> 
        stars</span><br>
        <font color="#69a9e0"><?php 
            for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Ganymede") { ?>"
                <?php echo $review_info[$i]["review"];?> " -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
            }
        ?>
        </font>
    <br>
    <font color="#337ab7">Europa Reviews: </font><span>Average 
        <?php for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Europa") {
                        $stars2[$i] = $review_info[$i]["stars"];
                    }
                } 
        $average = array_sum($stars2) / count($stars2);
        echo number_format($average, 2); ?> 
        stars</span><br>
        <font color="#69a9e0"><?php 
            for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Europa") { ?>"
                <?php echo $review_info[$i]["review"];?> " -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
            }
        ?>
        </font>
    <br>
    <font color="#337ab7">Io Reviews: </font><span>Average 
        <?php for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Io") {
                        $stars3[$i] = $review_info[$i]["stars"];
                    }
                } 
        $average = array_sum($stars3) / count($stars3);
        echo number_format($average, 2) ?> 
        stars</span><br>
        <font color="#69a9e0"><?php 
            for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Io") { ?>"
                <?php echo $review_info[$i]["review"];?> " -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
            }
        ?>
        </font>
    <br>
    <font color="#337ab7">Callisto Reviews: </font><span>Average 
        <?php for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Callisto") {
                        $stars4[$i] = $review_info[$i]["stars"];
                    }
                } 
        $average = array_sum($stars4) / count($stars4);
        echo number_format($average, 2) ?> 
        stars</span><br>
        <font color="#69a9e0"><?php 
            for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Callisto") { ?>"
                <?php echo $review_info[$i]["review"];?> " -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
            }
        ?>
        </font>
    
</div>

<?php include 'footer.php'; ?>
