<!DOCTYPE html>
<html lang="en">

<?php $page = 'About'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/x-icon" href="./images/icons/zooparc-favicon-green.png">
    <title><?php echo $page ?></title>
</head>

<body>
    <!-- header  -->
    <?php
    include './components/header.php'

    ?>
    <!-- Breadcrumb  -->
    <?php
    include './components/Breadcrumb.php'
    ?>
    <!-- page content -->

    <!-- about -->
    <div class="container p-5">
        <h3 class="text-center">Welcome to Zoo Parc: Where Wildlife Comes to Life</h3>
        <p class="text-center">
            At Zoo Parc, we are more than just a zoo; we are a sanctuary for over 2,000 animals representing 200 different species from all corners of the globe. Spread across 70 hectares of lush, carefully curated habitats, our zoo is home to some of the world’s most fascinating creatures, including the majestic lions, soaring bald eagles, elusive poisonous frogs, and the gentle giants—Asian elephants. Visitors can marvel at the playful orangutans, observe the slow-moving sloth bears, and encounter the wild beauty of deer in their naturalistic settings. Of course, no visit would be complete without meeting our most famous residents: the giant pandas, who continue to capture the hearts of all who see them.
        </p>
    </div>

    <div class="container p-5">
        <!-- mission -->
        <h3 class="border-bottom">Our mission</h3>
        <p>
            At Zoo Parc, our mission is simple yet profound: to connect people with wildlife, inspire a love for nature, and actively participate in global conservation efforts. We believe in creating a world where humans and animals coexist in harmony, and our daily efforts are geared toward making that vision a reality. Through our educational programs, conservation initiatives, and community outreach, we aim to foster a deeper understanding and appreciation of the natural world.
        </p>
    </div>

    <div class="container p-5">
        <!-- Values -->
        <h3 class="border-bottom">Our Values</h3>
        <p>
            Our core values are the foundation upon which Zoo Parc was built:
        </p>
        <ul>
            <li><b>Conservation</b>: We are committed to protecting endangered species and their habitats through innovative conservation programs.</li>
            <li><b>Education</b>: We strive to educate the public about the importance of wildlife conservation, fostering a sense of responsibility and stewardship for the planet.</li>
            <li><b>Community</b>: We believe in the power of community and work tirelessly to engage with our visitors, volunteers, and supporters to create a positive impact.</li>
            <li><b>Respect</b>: We respect all forms of life and are dedicated to providing the highest standards of care for our animals, ensuring they live healthy and enriched lives.</li>
        </ul>
    </div>

    <!-- team -->
    <div class="container p-5">
        <h3 class="border-bottom mb-2">Meet our team</h3>
        <p>
            Behind the scenes at Zoo Parc is a passionate team of dedicated professionals who bring our mission to life every day. Our zoologists, veterinarians, and animal care staff work tirelessly to ensure that our animals receive the best care possible. Our educators and volunteers are always on hand to share their knowledge and passion for wildlife, making every visit to Zoo Parc an unforgettable experience.
            <br>
            <br>
            We also take pride in our vibrant online community, where wildlife enthusiasts and curious minds come together to learn more about our animals and how to care for wild species. This platform allows us to extend our educational reach beyond the zoo’s physical boundaries, inspiring people from all walks of life to take an active role in conservation.

        </p>
    </div>

    <!-- footer -->
    <?php
    include './components/footer.php'
    ?>


</body>

</html>