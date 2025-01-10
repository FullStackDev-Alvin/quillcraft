<head><link rel="stylesheet" type="text/css" href="./styles.css"/></head>
    <body id="is9u"><img src="../../images/663874de5cf4f_1 (9)-min.jpg" alt="Placeholder" id="iij4"/></body>
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