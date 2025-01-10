<head><link rel="stylesheet" type="text/css" href="./styles.css"/></head>
    <body id="i414"><h1 id="iem6">I am editing this page</h1><header></header><img src="../../images/6669acfaaa68f_1 (4)-min (1).jpg" alt="Placeholder" id="iqvh"/><p id="ir8e">THIS IS A RESPONSIVE EDITOR THIS PARAGRAPH WILL ONL DISPLAY WHEN THE VIEW WIDTH IS FOR A PHONE</p><p id="ia4t">We can eithere post this as a template or as a webpage<br/>a template will allow users to use it and create their own webpages using your template <br/>and the othere option is for reading only where a user can only read your content and not edit it</p></body>
    <div class="footer">
        <div class="form">       
            <form action="./php/recieve.php" method="post">
                <div class="like">
                    <h1>Place a like here</h1>
                    <div class="links">
                        <div class="link">
                            <input type="radio" name="like" value="1" id="like">
                            <label for="like">Like</label>
                        </div>
                        <div class="link">
                            <input type="radio" name="like" value="-1"  id="dislike">
                            <label for="dislike">Dislike</label>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <h1>Place a comment here</h1>
                    <?php if(isset($_GET['error'])){ ?>
                        <div class="error" style="color: var(--main); background-color: var(--light); text-align:center; padding: 10px;">
                            <?php echo $_GET['error']?>
                        </div>
                    <?php }?>'
                    <textarea name="comment" id="" cols="30" rows="8" placeholder="type in here please"></textarea>
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form> 
        </div>
    </div>