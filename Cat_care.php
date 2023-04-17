<?php include 'php/template.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Care</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="Javascript/script.js"></script>

    <style>
body{
    background-image: url("images/background.jpg");
    background-size: 100vh;
    margin: unset;
    /* 
    background image url comes from freepik: 
    https://www.freepik.com/free-vector/cute-colorful-kitten-pow-pattern-design_2709577.htm#query=dog%20wallpaper&position=10&from_view=keyword&track=sph
    
    */
}
#text-area{
    background-color: rgba(255, 255, 255, 0.7);
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
                <div id="text-area">
                    <h1> General Cat Care</h1>
                     
                         This info is brought to you by the SPCA for more info please visit <a href="https://www.aspca.org/pet-care/cat-care/general-cat-care">SPCA.org</a>.
                         <h2>Feeding</h2>
                     We recommend purchasing high-quality, brand-name kitten or cat food. Your veterinarian will be able to assess your new cat or kitten and determine the best diet. Factors such as age, activity level and health make a difference in what and how much a cat should eat. 
                     <ul>
                         <li>Cats require taurine, an essential amino acid, for heart and eye health. The food you choose should be balanced for the life stage of your cat or kitten. Properly balanced foods will contain taurine.</li>
                         <li>You will need to provide fresh, clean water at all times, and wash and refill your cat’s water bowls daily.</li>
                         <li>Treats should be no more than 5-10% of the diet.</li>
                         <li>Many people feed baby food to a cat or kitten who is refusing food or not feeling well  Please read labels carefully: If the baby food contains onion or garlic powder, your pet could be poisoned.</li>
                         <li>Take your pet to your veterinarian if signs of anorexia, diarrhea, vomiting or lethargy continue for more than two days.</li>
                         <li>Please visit our People Foods to Avoid Feeding Your Pets page for a list of off-limits items, as well as our Cat Nutrition Tips page for more information.</li>
                     </ul>
             
                     <h2>Grooming</h2>
                     Most cats stay relatively clean and rarely need a bath, but you should brush or comb your cat regularly. Frequent brushing helps keep your cat's coat clean, reduces the amount of shedding and cuts down on the incidence of hairballs. Please visit our Cat Grooming Tips page for more information.
             
                     <h2>Handling</h2>
                     To pick up your cat, place one hand behind the front legs and another under the hindquarters. Lift gently. Never pick up a cat by the scruff of the neck or by the front legs.
             
                     <h2>Housing</h2>
                     Your pet should have her own clean, dry place in your home to sleep and rest. Line your cat's bed with a soft, warm blanket or towel. Be sure to wash the bedding often. Please keep your cat indoors. Outdoor cats do not live as long as indoor cats. Outdoor cats are at risk of trauma from cars, or from fights with other cats, raccoons and free-roaming dogs. Coyotes are known to eat cats. Outdoor cats are more likely to become infested with fleas or ticks, as well as contract infectious diseases.
             
                     <h2>Identification</h2>
                     If allowed outdoors, your cat must wear a safety collar and an ID tag. A safety collar with an elastic panel will allow your cat to break loose if the collar gets caught on something. And for both indoor and outdoor cats, an ID tag or an implanted microchip can help ensure that your cat is returned if he or she becomes lost.
             
                     <h2>Litter Box</h2>
                     All indoor cats need a litter box, which should be placed in a quiet, accessible location. In a multi-level home, one box per floor is recommended. Avoid moving the box unless absolutely necessary, but if you must do so, move the box just a few inches per day. Keep in mind that cats won't use a messy, smelly litter box, so scoop solid wastes out of the box at least once a day. Dump everything, wash with a mild detergent and refill at least once a week; you can do this less frequently if using clumping litter. Don't use ammonia, deodorants or scents, especially lemon, when cleaning the litter box. If your cat will not use a litterbox, please consult with your veterinarian. Sometimes refusal to use a litter box is based on a medical condition that required treatment. Please visit our Litter Box Problems page for more information.  
             
             
                     <h2>Scratching</h2>
                     Cats need to scratch! When a cat scratches, the old outer nail sheath is pulled off and the sharp, smooth claws underneath are exposed. Cutting your cat’s nails every two to three weeks will keep them relatively blunt and less likely to harm the arms of both humans and furniture. Provide your cat with a sturdy scratching post, at least three feet high. The post should also be stable enough that it won't wobble during use, and should be covered with rough material such as sisal, burlap or tree bark. Many cats also like scratching pads.
             
                     <h2>Health</h2>
                     Your cat should see the veterinarian at least once a year for an examination and annual shots, and immediately if she is sick or injured.
             
                     <h2>Medicines and Poisons</h2>
                     Never give your cat medication that has not been prescribed by a veterinarian. If you suspect that your animal has ingested a poisonous substance, call your veterinarian or the ASPCA Animal Poison Control Center for 24-hour animal poison information at (888) 426-4435.
             
                     <h2>Spaying and Neutering</h2>
                     Female cats should be spayed and male cats neutered by five months of age. Please visit our Spay/Neuter Your Pet page to learn more.
             
                     <h2>Vaccinations</h2>
                     Your veterinarian will make recommendations based on your cat's age and health. Please visit our Pet Vaccinations page to learn more.
             
                     <h2>Cat Supply Checklist</h2>
                     <ul>
                         <li>Premium-brand cat food</li>
                         <li>Food dish</li>
                         <li>Water bowl</li>
                         <li>Interactive toys</li>
                         <li>Brush</li>
                         <li>Comb</li>
                         <li>Safety cat collar with ID tag</li>
                         <li>Scratching post or scratching pad</li>
                         <li>Litter box and litter</li>
                         <li>Cat carrier</li>
                         <li>Cat bed or box with warm blanket or towel</li>
                         </ul>
                     
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
        <?php myFooter(); ?>
    </div>  
</body>
</html>