1. Description About Auction Art Project
    - Technologies: 
        - PHP Framework Laravel (Back End)
        - Ajax (Http Request)
        - MySQL Database
        - Bootstrap 4.6 (CSS Libary)
        - Some plugin for create function such as: Countdown timer, Hover zoom image, Animate css, Jquery ranger slide.
    - Functionality:
        - Login/ Logout for user & admin.
        - Authentication: Using build-in-class of laravel to make the authentication -> Auth Class
        - Authorization: Create Middleware to conduct authorize for account.
        - Admin:
            - CRUD for product, blogs, artist, categories.
            - Manage bids:
                - Show list of bid for each project are being bidded.
                - Show detail bid of one specific product.
                - Handle for successful bidder -> Send email notification for winner bidder -> Change status bid of the bidder to "payment" (Ready to checkout product)
            - Manage auction result (order)
                - Show list of auction result have already payment    
        - User:
            - Action In Public 
                - Show information about the website: Blogs, Contacts, About us.
                - Can see the blog and blog detail
                - Show list of product and can be filter products follow some specific conditions.
                - Search by name of the art on the search nav.
                - Read detail about 1 specific product 
                - Conducting a offer for 1 product and monitor the current price bid of the product on realtime
                - They must login before conducting bid.
                - They can see the cart auction on the navbar or on the dashboard of user
            - Dashboard user 
                - On the Cart auction tab: they can see watch products they are bidding follow some fields such as: Name product, Your Bid Price, The Current Price, Time Bid, Time Bid End, The status of bid and Action.
                - When the bid status of your bid changed to payment -> you can checkout the product.
                - If the balance in your account enough -> the payment process will be successful. On reverse, failure if it's not enough money.
                - When you payment successful -> You can see it in the History Order.

       
2. How To Run The Project
    - Step 1: Install Xammpp & Composer 
    - Step 2: When you have already installed the project -> you must to install it into ***(the folder htdocs)*** on xampp folder.
    - Step 3: After finish, you go to the folder project and copy&paste the evn.example in the project folder -> rename from the env.example copy to evn
    - Step 4: Open cmd in the project folder -> run php artisan key:generate
    - Step 5: Run php artisan migrate: to generate table in database
    - Step 6: Run php artisan migrate:fresh --seed to make dummy data.
    - Step 7: Run php artisan serve to run the project.

3. More Additional Information
    
