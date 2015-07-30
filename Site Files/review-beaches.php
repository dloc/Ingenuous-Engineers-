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
            <p><font color="white"><strong>review beaches</strong></font></p>
        <form method="POST" action="accept-review.php">
            <p>
                <font color="#337ab7">Select Beach: </font>
                    <select name="beach_selection" id="mydropdown" class="selectpicker" data-style="btn-primary">
                        <option value="Carlin Park">Carlin Park</option>
                        <option value="Coral Cove">Coral Cove</option>
                        <option value="Dubois Park">Dubois Park</option>
                        <option value="Jupiter Beach">Jupiter Beach</option>
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
        <font color="#337ab7">Carlin Park Reviews: </font><span>Average 
        <?php for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Carlin Park") {
                        $stars1[$i] = $review_info[$i]["stars"];
                    }
                } 
        $average = array_sum($stars1) / count($stars1);
        echo number_format($average, 2) ?> 
        stars</span><br>
        <font color="#69a9e0"><?php 
            for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Carlin Park") { ?>"
                <?php echo $review_info[$i]["review"];?> " -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
            }
        ?>
        </font>
    <br>
    <font color="#337ab7">Coral Cove Reviews: </font><span>Average 
        <?php for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Coral Cove") {
                        $stars2[$i] = $review_info[$i]["stars"];
                    }
                } 
        $average = array_sum($stars2) / count($stars2);
        echo number_format($average, 2); ?> 
        stars</span><br>
        <font color="#69a9e0"><?php 
            for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Coral Cove") { ?>"
                <?php echo $review_info[$i]["review"];?> " -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
            }
        ?>
        </font>
    <br>
    <font color="#337ab7">Dubois Park Reviews: </font><span>Average 
        <?php for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Dubois Park") {
                        $stars3[$i] = $review_info[$i]["stars"];
                    }
                } 
        $average = array_sum($stars3) / count($stars3);
        echo number_format($average, 2) ?> 
        stars</span><br>
        <font color="#69a9e0"><?php 
            for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Dubois Park") { ?>"
                <?php echo $review_info[$i]["review"];?> " -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
            }
        ?>
        </font>
    <br>
    <font color="#337ab7">Jupiter Beach Reviews: </font><span>Average 
        <?php for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Jupiter Beach") {
                        $stars4[$i] = $review_info[$i]["stars"];
                    }
                } 
        $average = array_sum($stars4) / count($stars4);
        echo number_format($average, 2) ?> 
        stars</span><br>
        <font color="#69a9e0"><?php 
            for ($i=0; $i<$size; $i++) { ?>            
                <?php if($review_info[$i]["attraction"] === "Jupiter Beach") { ?>"
                <?php echo $review_info[$i]["review"];?> " -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
            }
        ?>
        </font>
    
</div>

<?php include 'footer.php'; ?>
