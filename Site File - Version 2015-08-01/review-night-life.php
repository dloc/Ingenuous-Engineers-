<?php include 'header.php'; 

$review_info = get_reviews();
$size = sizeof($review_info);

?>

<div align="center" style="color: white; padding-top: 5%">
    <h1><i>night life reviews</i></h1>
</div>

<div style="max-width: 90%; margin: 0 auto; padding-top: 5%;">
    <?php if(!logged_in()) { ?>
    <div align="center">
        <p>You must be <a href="login.php">logged in</a> to write reviews.</p>
        <p>However, You can still read the reviews below.</p>
    </div>
    <br>    
    <?php }
    else { ?>
    <div align="center">
        <p><font color="white"><strong>review night life</strong></font></p>
        <form method="POST" action="accept-review.php">
            <p><font color="white">Select Moon: </font>
                <select name="beach_selection" id="mydropdown" class="selectpicker" data-style="btn-primary">
                    <option value="AbductionXperience">Abduction Experience</option>
                    <option value="Diva Plavalaguna">Diva Plavalaguna</option>
                </select>
            <br><br>
                <font color="white">Your Star Rating (1-5): </font>
                <select name="stars" id="mydropdown" class="selectpicker" data-style="btn-primary">
                    <option value="1">&#9734;</option>
                    <option value="2">&#9734;<span>&#9734;</span></option>
                    <option value="3">&#9734;<span>&#9734;</span><span>&#9734;</span></option>
                    <option value="4">&#9734;<span>&#9734;</span><span>&#9734;</span><span>&#9734;</span></option>
                    <option value="5">&#9734;<span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span></option>
                </select>
            <br><br>
                <font color="white">Your review: </font><br>
                <textarea class="form-control" rows="5" id="comment" name="review" style="width: 500px;" placeholder="Start typing here..."></textarea>
            </p>
                <input type="submit" value="submit review" name="submit-review" class="btn btn-primary" style="margin-top: 1%" role="button" />
        </form> 
    </div>
    <?php } ?>
</div>

<div id="container">
    <h1 style="border-bottom: solid; color: white">traveler reviews</h1><br>
    
    <!-- Abduction Experience Reviews -->
    <p>Abduction Experience: <span>Average 
    <?php for ($i=0; $i<$size; $i++) { ?>            
        <?php if($review_info[$i]["attraction"] === "AbductionXperience") {
            $stars1[$i] = $review_info[$i]["stars"];
            }
    } 
    $average = array_sum($stars1) / count($stars1);
    echo number_format($average, 2) ?> stars</span></p>
    <div style="padding-left: 3%; padding-right: 3%">
        <p style="font-size: 0.75em">
        <?php for ($i=($size-1); $i>=0; $i--) { ?>            
            <?php if($review_info[$i]["attraction"] === "AbductionXperience") { ?>"<?php echo $review_info[$i]["review"];?>" -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
        }?>
        </p>
    </div>
    <hr>
    
    <!-- Diva Plavalaguna Reviews -->
    <p>Diva Plavalaguna: <span>Average 
    <?php for ($i=0; $i<$size; $i++) { ?>            
        <?php if($review_info[$i]["attraction"] === "Diva Plavalaguna") {
            $stars2[$i] = $review_info[$i]["stars"];
            }
    } 
    $average = array_sum($stars2) / count($stars2);
    echo number_format($average, 2) ?> stars</span></p>
    <div style="padding-left: 3%; padding-right: 3%">
        <p style="font-size: 0.75em">
        <?php for ($i=($size-1); $i>=0; $i--) { ?>            
            <?php if($review_info[$i]["attraction"] === "Diva Plavalaguna") { ?>"<?php echo $review_info[$i]["review"];?>" -- <?php echo $review_info[$i]["firstName"]; ?><span> (<?php echo $review_info[$i]["stars"]; ?> stars)</span><br>
        <?php }
        }?>
        </p>
    </div>
    <hr>    
</div>

<?php include 'footer.php'; ?>