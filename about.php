<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Book-Worms, we offer a wide range of books across genres, with easy browsing, secure checkout, and timely delivery. Whether you're a casual reader or an avid book lover, we make discovering and enjoying books simple and enjoyable.</p>
         <p> Trust us to bring your next great read straight to your doorstep.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Book-Worms is my go-to place for books! Easy to navigate, great selection,
             and fast delivery. I love browsing through their genres and author sections!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Farhan Khan</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I was looking for a rare book, and Book-Worms had it! The site is user-friendly, and the checkout process is smooth. Highly recommended for any book lover.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ayesha Malik</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Wonderful experience with Book-Worms. I can easily search for books, read reviews, and find great deals. The delivery was quick and my books arrived in perfect condition.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Tehseen Tahir</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I’m a frequent reader, and Book-Worms never disappoints. 
            A wide range of books, quick checkout, and the wishlist feature is a lifesaver for me. Love it!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah Khan</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Book-Worms makes book shopping so easy! The layout is simple,
             and their reviews help me make better choices. I always find what I need quickly. Five stars!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Faizan Ali</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Disappointed with Book-Worms. The site is slow, and the books 
            I wanted were out of stock. Checkout was confusing, and delivery took longer than expected. Not impressed.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Zainab Farooq</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1112.jpg" alt="">
         <div class="share">
            <a href="https://www.bing.com/ck/a?!&&p=312664c821dcd1cdaa3da0fd3a5d5f5b89cf1ba99718cd43f336e3c2bd342dbeJmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=william+shakespeare+facebook&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL1dpbGxpYW1TaGFrZXNwZWFyZUF1dGhvci8&ntb=1" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.bing.com/ck/a?!&&p=591046fd5ea57c51f799fa48354df072e8f978c355213afeee594213975ef420JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=william+shakespeare+insta&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS93aWxsaWFtLnNoYWtlc3BlYXJlLm9mZmljaWFsLw&ntb=1" class="fab fa-instagram"></a>
            <a href="https://www.bing.com/ck/a?!&&p=c3bd1f5470fe18d22c97ea81502503e2c14fa8516e068f97646e79725618fa44JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=william+shakespeare+linkedin&u=a1aHR0cHM6Ly91ay5saW5rZWRpbi5jb20vaW4vd2lsbGlhbS1zaGFrZXNwZWFyZS05Mzc3YmIyMjU&ntb=1" class="fab fa-linkedin"></a>
         </div>
         <h3>William Shakespeare</h3>
      </div>

      <div class="box">
         <img src="images/author001.jpg" alt="">
         <div class="share">
            <a href="https://www.bing.com/ck/a?!&&p=185ef1f5a53477d9f95f87b98bc20da6295207ca0b97f1a811351c88eef3b103JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=stephen+king+fb&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL3N0ZXBoZW5raW5nd3JpdGVyLw&ntb=1" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.bing.com/ck/a?!&&p=ec477feb7fea384b048c3c30669be5b03abb63e1ef6a17c1005bb8691fbd9b5fJmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=stephen+king+socials&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9zdGVwaGVua2luZy8&ntb=1" class="fab fa-instagram"></a>
            <a href="https://www.bing.com/ck/a?!&&p=0c30e2c6fb2ea4656ad4008ca360ae17f406094de6366aaf2709ce15169b707bJmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=stephen+king+linkedion&u=a1aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL2luL3N0ZXBoZW4ta2luZy1hMzkzYTMxODg&ntb=1" class="fab fa-linkedin"></a>
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/authuur1.jpg" alt="">
         <div class="share">
            <a href="https://www.bing.com/ck/a?!&&p=8641570d1d4f2f8246867606751531d22ece0586fa2b01f1e6b107f8dd6faafeJmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=Haruki+Murakami+fb&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL2hhcnVraW11cmFrYW1pYXV0aG9yLw&ntb=1" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.bing.com/ck/a?!&&p=4d1ab0eb10ab5e80e580f20b9f5a26c1b577e2ff5642599d2827b281e0edc838JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=Haruki+Murakami+insta&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9oYXJ1a2lfbXVyYWthbWlfLw&ntb=1" class="fab fa-instagram"></a>
            <a href="https://www.bing.com/ck/a?!&&p=b6ff1d0e68334666c191fe636645a89fa6dd1160b0516b09354ef30f2f13c2b4JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=Haruki+Murakami+linkedin&u=a1aHR0cHM6Ly91ay5saW5rZWRpbi5jb20vaW4vaGFydWtpLW11cmFrYW1pLTQwNTg1MzE4Mg&ntb=1" class="fab fa-linkedin"></a>
         </div>
         <h3>Haruki Murakami</h3>
      </div>

      <div class="box">
         <img src="images/au1.jpg" alt="">
         <div class="share">
            <a href="https://www.bing.com/ck/a?!&&p=ae516e14a061345a763a5e769df11bfcb4c51dd45928a7a1f46fb28186189581JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=Kazuo+Ishiguro+fb&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL0thenVvSXNoaWd1cm8v&ntb=1" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.bing.com/ck/a?!&&p=10e7697a8a7d151c441c0b3c7690bab6dcdedfa0ea94bd285cb7b598d686f4b3JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=Kazuo+Ishiguro+insta&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9rYXp1b2lzaGlndXJvLw&ntb=1" class="fab fa-instagram"></a>
            <a href="https://www.bing.com/ck/a?!&&p=9f660651aa3071b335866d6016c2c9cb7e9a40d29fe97acee435161d1872030aJmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=Kazuo+Ishiguro+linkedin&u=a1aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL2luL2thenVvLWlzaGlndXJvLTFiMTFhMjEwOA&ntb=1" class="fab fa-linkedin"></a>
         </div>
         <h3>Kazuo Ishiguro</h3>
      </div>

      <div class="box">
         <img src="images/aathuu.jpg" alt="">
         <div class="share">
            <a href="https://www.bing.com/ck/a?!&&p=e01813fc52e677fb71409d078ad6bab43d9f27c48da95e3d20d1c03d5ae85d99JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=J.+K.+Rowling+fb&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL0pLUm93bGluZy8&ntb=1" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.bing.com/ck/a?!&&p=bb8ba345b83439d94620ed852bf763cfd040b1c932476d35aacb5ae27932c586JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=J.+K.+Rowling+insta&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9qa3Jvd2xpbmd3ZWIv&ntb=1" class="fab fa-instagram"></a>
            <a href="https://www.bing.com/ck/a?!&&p=b252eec32ec5a745e07b03687d7db1251d886492480a2e68f80d3b872a2e8e7dJmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=J.+K.+Rowling+linkedin&u=a1aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL2NvbXBhbnkvamstcm93bGluZy1jbw&ntb=1" class="fab fa-linkedin"></a>
         </div>
         <h3>J. K. Rowling</h3>
      </div>

      <div class="box">
         <img src="images/athu1.jpg" alt="">
         <div class="share">
            <a href="https://www.bing.com/ck/a?!&&p=f78e72f6742ed10bb95fcf0c2bd0c984020511d462ecc0b231b8e19a83dbf46fJmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=virginia+woolf+fb&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL1ZpcmdpbmlhV29vbGZBdXRob3Iv&ntb=1" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.bing.com/ck/a?!&&p=01440648d9e0f8ca4cb7d41d2d20658b1baa76310b80e00a9cc3842348a46782JmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=virginia+woolf+insta&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9taXNzdmlyZ2luaWF3b29sZi8&ntb=1" class="fab fa-instagram"></a>
            <a href="https://www.bing.com/ck/a?!&&p=681f848cd533911de38fc40473f1375a0d215e0452298eab2462ffa944ef55afJmltdHM9MTczNDgyNTYwMA&ptn=3&ver=2&hsh=4&fclid=09cd6fe0-ab13-6b3b-3a80-7aa2aa1a6a50&psq=virginia+woolf+linkednin&u=a1aHR0cHM6Ly9uei5saW5rZWRpbi5jb20vaW4vdmlyZ2luaWEtd29vbGYtYjY1N2E5NmE&ntb=1" class="fab fa-linkedin"></a>
         </div>
         <h3>Virginia Woolf</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>