<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Order Food</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <form id="booking-form" class="booking-form" name="form1" method="post" action="finsert.php">
            <div align="center"><img class="logo" src="img/example_logo.png" title="Example Logo" alt="Example Logo"></div>
            <div class="h1">Order Food</div>
            <div id="form-message" class="message hide">
                Thank you for your enquiry!
            </div>
            <div id="form-content">
                
                
                <div class="group">
                    <label for="name">Name</label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
                </div>

                <div class="group">
                    <label for="room no">Room No.</label>
                    <div><input id="room" name="room" class="form-control" type="text" placeholder="Room"></div>
                </div>

                <div class="group">
                    <label for="items">items</label>
                    <div>
                        <select id="items" name="items" class="form-control">
                            <option value="Chicken Karhai Half">Chicken Karhai Half</option>
                            <option value="Chicken Karhai Full">Chicken Karhai Full</option>
                            <option value="Mutton Karhai Half">Mutton Karhai Half</option>
                            <option value="Mutton Karhai Full">Mutton Karhai Full</option>
                            <option value="Chicken Biryani">Chicken Biryani</option>
                            <option value="Beef Biryani">Beef Biryani</option>
                            <option value="Mutton Pulao">Mutton Pulao</option>
                            <option value="Kabli Pulao">Kabli Pulao</option>
                            <option value="Chinese Rice">Chinese Rice</option>

                        </select>
                    </div>
                </div>


                <div class="group">
                    <label for="cnic">CNIC</label>
                    <div><input id="email" name="cnic" class="form-control" type="cnic" placeholder="CNIC"></div>
                </div>
                
                <div class="group submit">
                    <label class="empty"></label>
                    <div><input name="order" type="submit" value="Order"/></div>
                </div>
            </div>
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
