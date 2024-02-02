<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <link rel="stylesheet" href="index.css"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/32314109ec.js" crossorigin="anonymous"></script>
        <title>PROJECT 2</title>
    </head>

    
    <style>
        li {
            margin-right: 10px;
            display: inline;
            margin-left:2em;
        }

        ul {
            list-style : none;
            padding: 0;
            margin: 0;
           background:rgb(247, 243, 243);
           width:100%;
           margin-left:-1em;
           padding-top:0.5em;
           padding-bottom:0.5em;
          }
     </style>
    <nav>
           <a href = "#"> <img src = "assets/konga.jpg" style = "width:100%;"/></a>

            <div>
                <ul>
                    <a href = "#">
                    <li><img src = "assets/travel.webp" style = "width:8%; margin-left:6em;"/></li>
                    <li><img src = "assets/kongapay.webp" style = "width:5%;"/></li>
                    <li><img src = "assets/drinks.webp" style = "width:8%;"/></li>
                    <li><img src = "assets/kongahealth.webp" style = "width:8%;"/></li>
                    <li><img src = "assets/logistics.webp" style = "width:8%;"/></li>
                    <li><img src = "assets/groceries.webp" style = "width:8%;"/></li>
                    <li><img src = "assets/kongatv.webp" style = "width:5%;"/></li>
                    </a>
                </ul>

            </div>
        
        <div style="display: fixed; align-items: center;  ">
    
            <ul style="list-style: none; display: flex; margin: 0; padding: 0; background:rgb(234, 26, 133); padding-top:-1em; padding-bottom:-2em;">

                <a href="#">
                <img src="assets/logo.png" style="background: none; width: 33%; margin-left:3em; padding-top:0.5em;">
                </a>
                <li><a href="#" style="font-size: 0.8em; margin-left:-12em; color:white;">Store<br><a href = "#" style = "margin-left:-12em; font-size: 0.8em; color:white;">Locator</a></li>
                <li><a href="#" style="font-size: 0.8em; margin-left:-7em; color:white;">Sell on<br><a href="#" style="font-size: 0.8em; margin-left:-7em; color:white;"> Konga</a></li>
                <li><input type="text" class="form-control" name="search" placeholder="Search for products, brands and categories..." style="width: 300%; margin-left: -2em; font-size: 0.8em; margin-top:0.5em;"></li>
                <li><a href="#" style="font-size: 0.8em; margin-left:21em; color:white;">Help</a></li>
                <li><a href="#" style="font-size: 0.8em; color:white;">Login/<br>Signup</a></li>
            </ul>
            </div>

            <div>
                <ul style = "font-size:0.7em; list-style:none; background:rgb(134, 26, 82); padding-top:1em; padding-bottom:1em; margin-left:-0.1em;">
                    <li><a href = "#" style = "color:white; margin-left:0.2em; font-weight:bold;">All Categories</a></li>
                    <a href = "#"><i class="fas fa-bars" style ="color:white; font-size:1em; margin-left:-0.6em;"></i></a> 
                    <li><a href = "#" style = "color:white; margin-left:2em;">Computers and Accessories</a></li>
                    <li><a href = "#" style = "color:white; margin-left:2em;">Phones and Tablets</a></li>
                    <li><a href = "#" style = "color:white; margin-left:2em;">Electronics</a></li>
                    <li><a href = "#" style = "color:white; margin-left:2em;">Konga Fashion</a></li>
                    <li><a href = "#" style = "color:white; margin-left:2em;">Home and Kitchen</a></li>
                    <li><a href = "#" style = "color:white; margin-left:2em;">Baby, Kids and Toys</a></li>
                    <li><a href = "#" style = "color:white; margin-left:1.5em;">Other Categories</a></li>
                </ul>
            </div>

        </nav>
   



    <body  style = "background:rgb(245, 241, 242);">
    <div style = "background:white; margin-top:0.3em; padding-bottom:0.5em; ">
       <a href = "#" style = "color:black;"> <p style =" font-size:0.7em; margin-left:1.9em; padding-top:0.5em;"> 
            Home > Beauty, Health & Personal Care > Hair Centre ></a> <a href = "#"  style = "color:rgb(134, 26, 82); font-weight:bold;">Hair care and Treatment</a></p>
            <a href = "#" style = "margin-left:0.7em; color:black; font-weight:bold; /, font-size:2em;">Shopping Cart</a>
    </div>

    <div style = "background:white; margin-top:1em; margin-left:2em; margin-right:2.3em; padding-bottom:5em;">
        <img src = "assets/product.webp" style = "width:50%; padding-left:7em; padding-top:8em;"/>
        <img src = "assets/konganow.png" style = "margin-top:-31em; margin-left:6em;"/>
        <h3 style = "float:right; margin-top:-18.3em; margin-right:2.6em;">Kakiva Leave-in Conditioner- <br>
        250ml</h3>
        <p style = "float:right; margin-top:-34em; margin-right:23.5em; font-size:0.8em;">Product Code: <strong>6178153</strong></p>
        <form id="paymentForm" style = "margin-right:-10em; margin-left:50em; margin-top:-30em; width:25%; font-size:0.8em; font-weight:bold;">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class = "form-control" id="email-address" required />
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="tel" class = "form-control" id="amount" required />
        </div>
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text"  class = "form-control" id="first-name" />
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" class = "form-control"  id="last-name" />
        </div>
        <div class="form-submit">
          <button type="submit" onclick="payWithPaystack()" class = "btn btn-success" style = "padding-left:7.5em; padding-right:7.5em"> Pay </button>
        
      </form>
      
       
       
    </div>
</body>
</html>
     
      

      <script>
        // Wrap your script in a function to ensure it runs after the Paystack script is loaded
        function loadPaystackScript(callback) {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://js.paystack.co/v1/inline.js';
          script.onload = callback;
          document.head.appendChild(script);
        }

        // Callback function to be executed after Paystack script is loaded
        function initPaystack() {
          const paymentForm = document.getElementById('paymentForm');
          paymentForm.addEventListener("submit", payWithPaystack, false);
        }

        // Load Paystack script and initialize your script
        loadPaystackScript(initPaystack);

        function payWithPaystack(e) {
          e.preventDefault();

          let handler = PaystackPop.setup({
            key: 'pk_test_303f82868737fcb02621f4f4273545677472a88e', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: 1900 * 100,
            currency:"NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1),
            onClose: function(){
              alert('Window closed.');
            },
            callback: function (response) {
        // Redirect to a success page
            window.location.href = 'payment.php'; // Replace 'success.html' with your actual success page
      }
    });
          handler.openIframe();
        }
      </script>

    </body>
</html>