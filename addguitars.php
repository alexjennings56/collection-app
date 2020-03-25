<html>
<head>
    <link rel="stylesheet" type="text/css" href="collection.css"/>
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width,initial-scales=1"/>
</head>
<body>
<header class="topheader">
    <div class="logo">
        <div class="logotext">
            <h1>ADD A GUITAR TO YOUR COLLECTION!</h1>
        </div>
    </div>
</header>
<main>
    <section id="add_guitar">
        <form method="post" action="src/addguitar.php">
            <div class="formholder">
                <div class="guitar_brand">
                    <label>
                        <input required name="brand" type="text" placeholder="Guitar Brand"/>
                    </label>
                </div>
                <div class="guitar_style">
                    <label>
                        <input required name="style" type="text" placeholder="Guitar Style" />
                    </label>
                </div>
                <div class="andertons_url">
                    <label>
                        <input required name="instrument_url" type="url" placeholder="Andertons Image URL" />
                    </label>
                </div>
                <div class="guitar_neckwood">
                    <label>
                        <input required name="neckwood" type="text" placeholder="Neck Wood Material" />
                    </label>
                </div>
                <div>
                    <label>
                <button type="button" class="bshopnow">Add Guitar</button>
                    </label>
                    <div>
            </div>
        </form>
    </section>
</main>
</body>
