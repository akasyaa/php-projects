<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shout it</title>

    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Shout it! Shoutbox</h1>
        </header>
        <div class="shouts">
            <ul>
                <li class="shout"><span>7:04PM(Placeholder)</span> - Name: Message</li>
                <li class="shout"><span>7:04PM(Placeholder)</span> - Name: Message</li>
                <li class="shout"><span>7:04PM(Placeholder)</span> - Name: Message</li>
                <li class="shout"><span>7:04PM(Placeholder)</span> - Name: Message</li>
                <li class="shout"><span>7:04PM(Placeholder)</span> - Name: Message</li>
            </ul>
        </div>
        <div class="input">
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter Your Name" />
                <input type="text" name="message" placeholder="Enter Your Message" />
                <br />
                <button class="shout-btn" type="submit" name="submit">Shout it out</button>
            </form>
        </div>
    </div>
</body>
</html>
