<?php include 'php/template.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Care</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="Javascript/script.js"></script>
    <style>
        
        #Instructions{
            background-color: rgba(255, 255, 255, 0.65);
            margin-top: 20px;
            margin-left: 25px;
            margin-right:25px;
            padding:10px;
        }
        h1{
            text-align: center;
        }



    </style>

</head>
<body onload="getTime()">



    <div class="container">
        <!-- <div class="header">
            <a href="index.html"><img class="logo" src="images/logo.png"  alt="Adopt_a_pet_Home"></a>         
            <p id="time">
            </p>
        </div> -->
        <?php myHeader();?>

        
            <div class="middle">
                <!-- <div class="side-bar">
                    <a id="Home" href="index.html">Home</a>
                    <a  href="Browse_pets.html">Browse Available Pets</a>
                    <a href="Find_a_pet.html">Find a dog/cat</a>
                    <a href="Dog_care.html"> Dog Care</a>
                    <a href="Cat_care.html">Cat Care</a>
                    <a href="Have_a_pet_to_give_away.html">Have a pet to give away</a>
                    <a href="Contact_us.html">Contact us</a>
                </div> -->
            <?php mySidebar();?>
                

    <div id="content">
                
        <div id="area">
            <div id="content-area">
                <div id="Instructions">
                    <h1>Dog care</h1>
                    <p>
                        This info is brought to you by the SPCA for more info please visit <a href="https://www.aspca.org/pet-care/dog-care/general-dog-care">SPCA.org</a>.
                    </p>
                
                    <h2>Feeding</h2>
                    <ul>
                        <li>Puppies eight to 12 weeks old need four meals a day.</li>
                        <li>Feed puppies three to six months old three meals a day.</li>
                        <li>Feed puppies six months to one year two meals a day.</li>
                        <li>When your dog reaches his first birthday, one meal a day is usually enough.</li>
                        <li>For some dogs, including larger canines or those prone to bloat, it's better to feed two smaller meals.</li>
                        <li>Premium-quality dry food provides a well-balanced diet for adult dogs and may be mixed with water, broth or canned food. Your dog may enjoy cottage cheese, cooked egg or fruits and vegetables, but these additions should not total more than ten percent of his daily food intake.</li>
                    </ul>
                <br><br>
                Puppies should be fed a high-quality, brand-name puppy food (large breed puppy foods for large breeds). Please limit "people food," however, because it can result in vitamin and mineral imbalances, bone and teeth problems and may cause very picky eating habits and obesity. Clean, fresh water should be available at all times, and be sure to wash food and water dishes frequently. <br>
                
                <h2>Exercise</h2>
                Dogs need exercise to burn calories, stimulate their minds, and stay healthy. Individual exercise needs vary based on breed or breed mix, sex, age and level of health. Exercise also tends to help dogs avoid boredom, which can lead to destructive behaviors. Supervised fun and games will satisfy many of your pet's instinctual urges to dig, herd, chew, retrieve and chase. <br>
                
                <h2>Grooming</h2>
                Help keep your dog clean and reduce shedding with frequent brushing. Check for fleas and ticks daily during warm weather. Most dogs don't need to be bathed more than a few times a year. Before bathing, comb or cut out all mats from the coat. Carefully rinse all soap out of the coat, or the dirt will stick to soap residue. Please visit our Dog Grooming Tips page for more information. <br>
                
                <h2>Handling</h2>
                To carry a puppy or small dog, place one hand under the dog's chest, with either your forearm or other hand supporting the hind legs and rump. Never attempt to lift or grab your puppy or small dog by the forelegs, tail or back of the neck. If you do have to lift a large dog, lift from the underside, supporting his chest with one arm and his rear end with the other. <br>
                
                <h2>Housing</h2>
                Your pet needs a warm, quiet place to rest, away from all drafts and off the floor. A training crate or dog bed is ideal, with a clean blanket or pillow placed inside. Wash the dog's bedding often. If your dog will be spending a lot of time outdoors, be sure she has access to shade and plenty of cool water in hot weather, and a warm, dry, covered shelter when it's cold. <br>
                
                <h2>Licensing and Identification</h2>
                Follow your community’s licensing regulations. Be sure to attach the license to your dog’s collar. This, along with an ID tag and implanted microchip or tattoo, can help secure your dog’s return should she become lost. <br>
                
                <h2>Fleas and Ticks</h2>
                Daily inspections of your dog for fleas and ticks during the warm seasons are important. Use a flea comb to find and remove fleas. There are several new methods of flea and tick control. Speak to your veterinarian about these and other options. Visit our Fleas and Ticks page for more information. <br>
                
                <h2>Medicines and Poisons</h2>
                Never give your dog medication that has not been prescribed by a veterinarian. If you suspect that your animal has ingested a poisonous substance, call your veterinarian or the ASPCA Animal Poison Control Center for 24-hour animal poison information at (888) 426- 4435. 
                
                <h2>Spaying and Neutering</h2>
                Female dogs should be spayed and male dogs neutered by six months of age. Please visit our Spay/Neuter Your Pet page to learn more. <br>
                
                <h2>Vaccinations</h2>
                Your dog may benefit from receiving a number of vaccinations. Please visit our Pet Vaccinations page to learn more.<br><br>
                
                <h2>Dog Supply Checklist</h2> 
                <ul>
                    <li>Premium-quality dog food and treats </li>
                    <li>Food dish </li>
                    <li>Water bowl</li>
                    <li>Toys, toys and more toys, including safe chew toys</li>
                    <li>Brush & comb for grooming, including flea comb</li>
                    <li>Collar with license and ID tag </li>
                    <li>Leash</li>
                    <li>Carrier (for smaller dogs)</li>
                    <li>Training crate</li>
                    <li>Dog bed or box with warm blanket or towel</li>
                    <li>Dog toothbrush</li>
                </ul>
                
                <h2>The Scoop on Poop</h2>
                <p>
                    Keep your dog on a leash when you are outside, unless you are in a secured, fenced-in area. If your dog defecates on a neighbor's lawn, the sidewalk or any other public place, please clean it up. <br>
                </p>
                
                 </div>
        
            </div>
                
        </div>
    </div>
    </div>
        <!-- <div class="footer">
        <button class="alert"  onclick="showAlert()">
            Privacy Disclaimer
        </button>
        </div> -->
        <?php myFooter();?>
    </div>  
</body>
</html>