<head><link rel="stylesheet" type="text/css" href="./styles.css"/></head>
    <body id="ibfj"><div class="gjs-row" id="ix6d"><div class="gjs-cell"><div class="gjs-row" id="ih4r"><div class="gjs-cell" id="ian1"><img id="i8ge" src="../../images/66682fd349924_1 (5)-min (1).jpg"/></div><div class="gjs-cell" id="ibz4"><button>Click me</button><article id="icnoa"><h1>Article Title</h1><p>Some text here</p></article><div id="iytf">Insert your text here</div></div><div class="gjs-cell" id="i5jh"></div></div></div></div><footer><p>Footer content here</p></footer></body>
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