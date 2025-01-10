<head><link rel="stylesheet" type="text/css" href="./styles.css"/></head>
    <body id="ihu6"><div class="gjs-row" id="i23n"><div class="gjs-cell"><div class="gjs-row" id="ia6y"><div class="gjs-cell" id="ix79"><img id="isfk" src="../../images/6668446d1df68_01-small.jpg"/></div><div class="gjs-cell" id="ij1b"><button>Click me</button><address>Contact me here</address><article><h1 id="ia1uq">My web page</h1><p id="i4n0p">Some text here</p></article><p>This is a paragraph</p><div id="ihlc">Insert your text here</div></div><div class="gjs-cell" id="ieg8"></div></div></div></div></body>
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