<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Haitian Hope Humanitarian Effort</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<nav>
    <a href = "Impact.html">Impact</a>
    <a href = "Donate.php">Donate</a>
    <a href = "">Blog</a>
    <a href = "Trips.php">Trips</a>
</nav>
<a href = "Index.html"><header>
        <img src = "assets/logo.jpg" alt = "HHHE logo" width="200" id = logo>
        <h1>Haitian Hope Humanitarian Effort Inc.</h1>
    </header></a>
<main>
    <!-- Add anchor tags to this page so the home page links to the correct sections of this page-->
    <div class = section>
        <h2>Donate While You Shop</h2>
        <p>Contribute to our cause easily on a daily basis by shopping with Amazon Smile!
            Send supplies to Haiti with us by donating items from our amazon wishlist.
        </p>
        <img src = "" alt = "Amazon Smile Link">
        <img src = "" alt = "Amazon Wishlist link">
        <!-- Attach Pdf graphic instructions on how to do shopping with Amazon Smile and Find Wishlist-->
    </div>
    <div class = section>
        <h2>Current Promotional Fundraiser</h2>
        <p>
        </p>
        <img src = "" alt = "">
    </div>
    <div class = section>
        <h2>Donate Supplies</h2>
        <p>Other than donating Items from our amazon wishlist, We have other supplies that we usually bring with us
            to haiti that we need donations for.
        </p>
        <h3> Supplies</h3>
        <ul></ul>
        <p><b>Note: If you are representing a business with supplies you would like to donate. Please contact us
                through our email directly about a donation option.
            </b></p>

    </div>
    <div class = section>
        <h2>Causes to Donate To</h2>
        <p>Micro-Finance Program
            Donating to support the Micro-Finance Program would support a Haitian citizen's business, and provide a scholarship for one child of the family. Selected participants would pay back the loan portion of the money. So far Haitian Hope has been able do 2 rounds of 10 parents. This Project requires $3500 in seed money to start a cycle, and $1200 each cycle after that.
            Support a Child's Education
            Donating to support a child's education can help students in elementary school through college. Tuition for a child's education from elementary to high school would cost anywhere $250 to 550 for one year. You could also help fund someone through med-school, which would cost $1750 per year for seven years.
            Build an Orphanage
            The ASCAH Orphelina is need of a building that is livable for the orphans they have been housing. They have been in operation since July 20,2010 after the earthquake, working with the little provisions they have. Currently they could use liveable dormitories for both the boys and girls to stay.
            Build two Youth Pavilions
            Both Pergame and Gozen Churches are in need of youth pavilions for their church. These pavilions serve as community centers, a place for children to learn, play and interact not just on Saturdays but also during the week. Estimated costs for this project amount to $10,000.
            Establish and Sustain a Mobile Clinic
            On this most recent mission trip, our medical volunteers found many people with critcally high blood pressure amongst other things. It would be very helpful if Haitian Hope could establish and maintain a free mobile clinic focused on holistic wellness, and natural healing to educate Haitian citizens about health, and treat sickness. The estimated cost for this endeavor $600/mo for medication, and $1200/mo for food.
        </p>
        <!-- redirect to Donate Paypal Div-->
        <a><button>Donate</button></a>
    </div>
    <div class = section>
        <h2>Volunteer With Us!</h2>
        <h3>  Want to go on a Mission Trip With Us?</h3>
        <p>
            Visit our Trips Page for to find out How</p>
            <!--(Trips page Volunteer Graphics)-->
        <img src = "" alt = "Trips Page link">

        <h3>Have experience in Development and Marketing?</h3>
           <p> We need individuals passionate about our mission and talented in Digital and Social Media Marketing.
               We are striving to build and improve our online presence and require dedicated, skilled volunteers to
               help. If you want to become a skilled volunteer, contact us using the form below.</p>
        <h3>Volunteer with us as a Board Member!</h3>
            <p>Currently we have 9 board member that help our incorporation make decisions, plan trips, and plan
                volunteer efforts. If you are passionate about our cause and would like to be a part of the team,
                contact us using the form below.</p>
        <h3>Join us as a Event Planner!</h3>
            <p>We are often need to plan events to spread the word, or fundraise for a mission trip. If you are a
                talented Event Planner, and would like to volunteer, contact us using the form below.</p>
        <h3>Are you a Good Writer?</h3>
            <p>To improve our online presence, we have added a blog to our website. We need dedicated blog writers who
                are excellent detail-oriented writers, to write blog posts related to those we have ministered to in Haiti.
                If you are able to speak or understand creole, that is a bonus, but we need english speaking writers.
                If you are interested in volunteering as a blog writer, contact us using the form below.</p>
        <h3>Have experience in Photography and Videography?</h3>
            <p>We could use photographers and videographers to travel with us on mission trip to gather content to
                contribute to our online presence. We would be documenting our efforts and programs that we host during
                our trips. If you are interested in volunteering in this area, contact us using the form below.</p>
        <h3>Do you have experience in Grant Writing?</h3>
            <p>As a not-for-profit organization, we could benefit from a volunteer proficient in grant writing.
                There are many programs and projects that could be more impactful with aid from a grant. If you are a
                skilled grant writer and would like to volunteer, contact us using the from below.</p>
        <h3 class = "donation-container">Volunteer Form</h3>

        <form method = post name = "Volunteer Forum" action = "Donate.php">
            <label class="labelinfo" for = "firstname">First Name:</label>
            <input type = "text" placeholder="First Name" id = "firstname" name = "firstname" class = "userinput">
            <br>
            <label class="labelinfo" for = "lastname">Last Name:</label>
            <input type = "text" placeholder="Last Name" id = "lastname" name = "lastname" class = "userinput">
            <br>
            <label class="labelinfo" for = "email">Email:</label>
            <input type = "email" placeholder="Email" name = "email" id = "email" class = "userinput">
            <br>
            <!--Interested in receiving email updates-->
            <label class = "labelinfo" for = "updates">Interested in receiving email updates on HHHE work and blog</label>
            <input type="checkbox" id = "updates" name = "updates" checked>
            <label class="labelinfo" for = "phone">Phone:</label>
            <input type = "text" placeholder="Phone" id = "phone" name = "phone" class = "userinput">
            <br>
            <label class="labelinfo" for = "address">Address:</label>
            <input type = "text" placeholder="Address" id = "address" name = "address" class = "userinput">
            <br>
            <label class="labelinfo" for = "city">City:</label>
            <input type = "text" placeholder="City" id = "city" name = "city" class = "userinput">
            <br>
            <label class="labelinfo" for = "state">US State:</label>
            <select  id = "state" name = "state" size = "10">
                <option value = "Alabama">Alabama</option>
                <option value = "Alaska">Alaska</option>
                <option value = "Arizona">Arizona</option>
                <option value = "Arkansas">Arkansas</option>
                <option value = "California">California</option>
                <option value = "Colorado">Colorado</option>
                <option value = "Connecticut">Connecticut</option>
                <option value = "Delaware">Delaware</option>
                <option value = "Florida">Florida</option>
                <option value = "Georgia">Georiga</option>
                <option value = "Hawaii">Hawaii</option>
                <option value = "Idaho">Idaho</option>
                <option value = "Illinois">Illinois</option>
                <option value = "Indiana">Indiana</option>
                <option value = "Iowa">Iowa</option>
                <option value = "Kansas">Kansas</option>
                <option value = "Kentucky">Kentucky</option>
                <option value = "Louisiana">Louisiana</option>
                <option value = "Maine">Maine</option>
                <option value = "Maryland">Maryland</option>
                <option value = "Massachusetts">Massachusetts</option>
                <option value = "Michigan">Michigan</option>
                <option value = "Minnesota">Minnesota</option>
                <option value = "Mississippi">Mississippi</option>
                <option value = "Missouri">Missouri</option>
                <option value = "Montana">Montana</option>
                <option value = "Nebraska">Nebraska</option>
                <option value = "Nevada">Nevada</option>
                <option value = "New Hampshire">New Hampshire</option>
                <option value = "New Jersey">New Jersey</option>
                <option value = "New Mexico"> New Mexico</option>
                <option value = "New York"> New York</option>
                <option value = "North Carolina">North Carolina</option>
                <option value = "North Dakota">North Dakota</option>
                <option value = "Ohio">Ohio</option>
                <option value = "Oklahoma">Oklahoma</option>
                <option value = "Oregon">Oregon</option>
                <option value = "Pennsylvania">Pennsylvania</option>
                <option value = "Rhode Island">Rhode Island</option>
                <option value = "South Carolina">South Carolina</option>
                <option value = "South Dakota">South Dakota</option>
                <option value = "Tennessee">Tennessee</option>
                <option value = "Texas">Texas</option>
                <option value = "Utah">Utah</option>
                <option value = "Vermont">Vermont</option>
                <option value = "Virgina">Virgina</option>
                <option value = "Washington">Washington</option>
                <option value = "West Virgina">West Virgina</option>
                <option value = "Wisconsin">Wisconsin</option>
                <option value = "Wyoming">Wyoming</option>
            </select>
            <br>
            <label class="labelinfo" for = "zip">Zip:</label>
            <input type = "text" placeholder="Zip" class = "userinput" id = "zip" name = "zip">
            <br>
            <label class = "labelinfo" for = "notus">Not a U.S. Address</label>
            <input type = "checkbox" id = "notus" name = "notus">
            <br>
            <label class= "labelinfo" for = "interest">Volunteer Category of Interest (select the areas your are interested in:)</label>
            <input type = "checkbox" id = "interest" name = "interest" value = "Development and Marketing">
            <input type = "checkbox" id = "interest" name = "interest" value = "Becoming a Board Member">
            <input type = "checkbox" id = "interest" name = "interest" value = "Event Planning">
            <input type = "checkbox" id = "interest" name = "interest" value = "Writing">
            <input type = "checkbox" id = "interest" name = "interest" value = "Photography and Videography">
            <input type = "checkbox" id = "interest" name = "interest" value = "Grant Writing">


            <label class="labelinfo" for = "summary">Volunteer Interest:</label>
            <textarea rows = 30 cols = 120 id = "summary" name = "summary" placeholder="If you would like to discuss your specific volunteer interests type here."></textarea>
            <br>
            <label class = "labelinfo" for = "avail">When are you available to volunteer?</label>
            <input id = 'avail' name = 'avail' type = "radio">
            <br>
            <label class = "labelinfo" for = "skill" >Do you have a special skill set or interest area? Let us know!</label>
            <!--text field -->
            <textarea rows = 30 cols = 120 id = "skill" name = "skill" placeholder="I am interested in ..."></textarea>
            <br>
            <br>
            <input type = "submit" id = "submit" name = "submit" value = "Submit Form">

        </form>
    </div>
    <?php

        $name = $_POST['firstname' . 'lastname'];
        $visitor_email = $_POST['email'];
        $updates = $_POST['updates'];
//Phone, address, city, state, zip, interest, summary, avail, skill
        $phone = $_POST['phone'];
        $add = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST ['state'];
        $zip = $_POST['zip'];
        $interest = $_POST['interest'];
        $summ = $_POST['summary'];
        $avail = $_POST['avail'];
        $skill = $_POST['skill'];
//email content
        $email_from = "humanitarianeffort@haitianhope.org";
        $email_subject = "New Volunteer Form Submission";
        $message_user = " $name,\nThank you for your interest in Volunteering with Haitian Hope Humanitarian Effort Inc. \nWe have received your volunteer interest form.\n The Following is the information we received.\n";
        $message_hhhe = "You have received a volunteer entry from $name.\n See the following for form information:\n ";
        $form_info = "$phone.\n$add.\n$city.\n$state.\n$zip.\n$interest.\n$summ.\n$avail.\n$skill";
//to hhhe email
        $to = "humanitarianeffort@haitianhope.org";
        $headers = "From: $email_from \r\n";
        $email_body = $message_hhhe . $form_info;
        mail($to, $email_subject, $email_body);

//to user
        $to = $visitor_email;
        $headers = "From: $email_from \r\n";
        $email_body = $message_user . $form_info;

        mail($to, $email_subject, $email_body, $headers);
        echo "Thank You Your Form has been submitted. You should receive and email for confirmation."

    ?>

    <div class = section>
        <h2>Donate Using Paypal</h2>
        <h3 class = "donation-container">Donation Form</h3>
        <p> Select the PayPal button below to donate using credit cards or PayPal.<br>
            Thank you so much for your Contribution!</p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick" />
            <input type="hidden" name="hosted_button_id" value="8CLPLC2788R9L" />
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"  name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
            <img alt="Paypal logo"  src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
        </form>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8CLPLC2788R9L&source=url">Share this link on your Social Media and get others to donate!</a>
        <div class = "follow">
            <hr>
            <h3>Follow Us:</h3>
            <a href  = "mailto:humanitarianeffort@haitianhope.org" class = "sub"><i class="far fa-envelope"></i></a>
            <a href = "https://www.facebook.com/groups/152621788156169/permalink/154524984632516?sfns=mo"  class ="face"><i class="fab fa-facebook-f"></i></a>
            <a href = "" class = "insta"><i class="fab fa-instagram"></i></a>
            <a href = "https://www.youtube.com/channel/UCNo0EXQ-ShtQYoWjWmr_RFQ" class = "youtube"><i class="fab fa-youtube"></i></a>
            <hr>
        </div>
    </div>
</main>

<footer>
    <h2> Business Sponsors</h2>
    <div id="sponsors">
        <ul id = bsponsors>
            <li>Prayer Warriors</li>
            <li>Hope for Health</li>
            <li>Restoring Vision</li>
            <li>Dr. Sherrer Dentistry</li>
            <li>Dr. Randy Griffin Dental</li>
            <li>Dr. Gomes DDS MSD Periodontics and Dental Implants</li>
            <li>Suzy's Consignment and Resale</li>
            <li>F.A.M.E Medical Supplies</li>
            <li>Seeds of Life</li>
            <li>Westside Ministries</li>
            <li>Maranatha French Church Indianapolis</li>
        </ul>
        <h2> Individual Sponsors</h2>
        <ul id = isponsors>
            <li>Joseph Jackson</li>
            <li>Joe Robinson</li>
            <li>Muriel Wilson</li>
            <li>Bonnie Love</li>
            <li>Terrence and Troyanna Jefferson</li>
            <li>Bonnie Wolf</li>
            <li>Gloria Heck</li>
            <li>Ray Smith</li>
            <li>Pastor Trofort</li>
            <li>Jackie Abdool</li>
            <li>Cassandra Ductan</li>
            <li>Lucson Thomas</li>
            <li>Cindy Johns</li>
            <li> Dee Rowley</li>
            <li>Stephanie Minnett</li>
            <li>Carol Desuza</li>
            <li>Ro Holcomb</li>
            <li>Janet Heart</li>
            <li>Rose Taffe</li>
            <li>Tyra Dennis</li>
            <li>William and Rebecca Huskey</li>
            <li>John and Windy Skeete</li>
            <li>Adrian Paquin</li>
            <li>Nerlyne Desir</li>
            <li>Costale Remarias</li>
            <li>Amanda Burris</li>
            <li> Lori Hutchison</li>
            <li>Carol Krag</li>
            <li>Marie Thomas</li>
        </ul>
    </div>
</footer>
</body>
</html>
