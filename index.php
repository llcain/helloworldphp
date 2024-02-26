<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Hello World Program</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h2>Responsive Form</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other.</p>

    <div class="container">
        <form>
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name...">
                </div>
            </div>
            <div class="row">
            <div class="col-25">
                    <label for="fname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Country</label>
                </div>
                <div class="col-75">
                    <select name="country" id="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea name="subject" id="subject" style="height: 200px;" placeholder="Write something..."></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <!-- <div id="mydiv"></div> -->

    
    <?php
        $x = 5;
        $y = "Jon";
        echo "Hello World LaQuisha - PHP";
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
    ?>

    <!-- <script type="text/babel">

        function Hello () {
            return <h1>What!! What!</h1>;
        }

        const container = document.getElementById('mydiv');
        const root = ReactDOM.createRoot(container);
        root.render(<Hello />)
    </script>
    <script scr="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script> -->
    

    
</body>
</html>