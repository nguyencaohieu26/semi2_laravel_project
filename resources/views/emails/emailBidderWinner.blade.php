<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Art'Auction Notify</title>
    <style>
        body{
            font-family: 'Quicksand', sans-serif;
        }
        h4{
            font-size: 24px;
            color: #3895D3;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .won{
            color: #072F5F;
            font-weight: bold;
        }
        .price-email{
            font-size: 18px;
            font-weight: 600;
            color: #EF6D6D;
            font-style: italic;
        }
        section{
            background: #e7e7e7;
        }
        .email-container{
            padding: 1rem;
            background: white;
            border-radius: 5px;
        }
        .small-note{
            font-size: 13px;
            color: #dc3c3c;
        }
    </style>
</head>
<body>
     <section style="min-width: 400px;width: 100%">
         <div class="email-container">
             <div>
                 <h4>Congrats!</h4>
                 <p class="won">YOU'VE WON</p>
             </div>
             <div>
                 <p>Hi, <b>{{$details['name']}}</b></p>
                 <p>Congratulations, <span><b>you've won the {{$details['product_name']}}</b></span> in our auction bid!</p>
                 <p class="mb-1">To claim your art auction, please follow these step:</p>
                 <ul class="list-unstyled">
                     <li><i class="fa-solid fa-badge"></i><span class="ml-2">Confirm that you meet all our entry requirements</span></li>
                     <li><i class="fa-solid fa-badge"></i><span class="ml-2">Please payment for the {{$details['product_name']}} within 1 days to claim your bid.</span></li>
                     <li><i class="fa-solid fa-badge"></i><span class="ml-2">In the email, please confirm that it's okay for us to publish your name on our social channels</span></li>
                     <li><i class="fa-solid fa-badge"></i><span class="ml-2">The total amount you have to pay after subtract the deposit is: <span class="price-email">${{number_format($details['current_price'] , 0, ',', '.')}}</span></span></li>
                 </ul>
                 <p class="small-note"><em>* Please note that the price not include shipping fee!</em></p>
                 <p class="mt-2">
                     If you have any questions, just send email me at <a href="#">auctionartsupport@gmail.com</a> - I'm happy to help.
                 </p>
                 <p><b>Cheer</b>,</p>
                 <p><b>The Auction Art Team!</b></p>
             </div>
         </div>
     </section>
</body>
</html>
