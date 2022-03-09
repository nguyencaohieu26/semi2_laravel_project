<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art'Auction Notify</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
     <section class="bg-secondary p-3" style="min-width: 400px;width: 100%">
         <div class="bg-white rounded">
             <div>
                 <h4 style="color: #3895D3">Congrats!</h4>
                 <p style="color: #072F5F" class="mb-0">YOU'VE WON</p>
             </div>
             <div>
                 <p class="mb-0">Hi, {{$detail['name']}}</p>
                 <p>Congratulations, <span class="font-weight-bold">you've won the {{$detail['product_name']}}</span> in our auction bid!</p>
                 <p class="mb-1">To claim your art auction, please follow these step:</p>
                 <ul class="list-unstyled">
                     <li><i class="fa-solid fa-badge"></i><span class="ml-2">Confirm that you meet all our entry requirements</span></li>
                     <li><i class="fa-solid fa-badge"></i><span class="ml-2">Please payment for the {{$detail['product_name']}} within 1 days to claim your bid.</span></li>
                     <li><i class="fa-solid fa-badge"></i><span class="ml-2">In the email, please confirm that it's okay for us to publish your name on our social channels</span></li>
                     <li><i class="fa-solid fa-badge"></i><span class="ml-2">The total amount you have to pay after subtract the deposit is: <span class="font-weight-bold">${{number_format($detail['current_price'] , 0, ',', '.')}}</span></span></li>
                 </ul>
                 <p class="mt-2">
                     If you have any questions, just send email me at <a href="#">auctionartsupport@gmail.com</a> - I'm happy to help.<i class="fa-solid fa-heart-half text-danger"></i>
                 </p>
                 <p class="mb-1">Cheer,</p>
                 <p class="mb-0">The Auction Art Team!</p>
             </div>
         </div>
         <div class="text-center">
                <ul class="list-unstyled d-flex align-items-center justify-content-center">
                    <li><i class="fa-brands fa-twitter" style="color: #2c802c"></i></li>
                    <li class="px-2"><i class="fa-brands fa-facebook-f" style="color: #2c802c"></i></li>
                    <li><i class="fa-brands fa-snapchat" style="color: #2c802c"></i></li>
                    <li class="px-2"><i class="fa-brands fa-instagram" style="color: #2c802c"></i></li>
                </ul>
         </div>
     </section>
</body>
</html>
