﻿<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 
  $result=$contactObj->selectAllDataForClient();
  $row=mysqli_fetch_assoc($result);
  
  $result1=$blogObj->selectAllDataForClient();
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <base href="https://kingdomceramic.com/ ">
  <?php include_once __DIR__.'/C_Layout/metalink.php'; ?>

  <?php include_once __DIR__.'/C_Layout/css.php'; ?>
  </head>

  <body>
  <?php include_once __DIR__.'/C_Layout/navbar.php'; ?>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-8 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="bg-holder overlay overlay-1" style="background-image:url('assets/img/pagebackground/blog.jpg');" data-parallax="data-parallax"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'> Blog</h1>
        </div>
        <div class="overflow-hidden">
          <p class="fs-2 fw-light ls text-400 text-uppercase" data-zanim-xs='{"delay":0.1}'>Thoughts &amp; Musings</p>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader-box">
          <div class="loader"></div>
        </div>
      </div>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="text-center p-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <div><a class="text-500" href="blog.html"></a>
                  <!-- <h2><a class="fw-light"><span class="d-inline-block text-black">Inspiration: minsat</span></a></h2> -->
                 
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->
      <style>
        /*--------------------------------------------------------------
                # Blog Stylings
                --------------------------------------------------------------*/
                /*--------------------------------------------------------------
                # Blog Home Posts List
                --------------------------------------------------------------*/
                .blog .posts-list article {
                  box-shadow: 0 4px 56px rgba(0,0,0, 0.2);
                  padding: 30px;
                  height: 100%;
                }

                .blog .posts-list article+article {
                  margin-top: 60px;
                }

                .blog .posts-list .post-img {
                  max-height: 240px;
                  margin: -30px -30px 0 -30px;
                  overflow: hidden;
                }

                .blog .posts-list .title {
                  font-size: 24px;
                  font-weight: 700;
                  padding: 0;
                  margin: 20px 0 0 0;
                }

                .blog .posts-list .title a {
                  color: var(--color-secondary);
                  transition: 0.3s;
                }

                .blog .posts-list .title a:hover {
                  color: var(--color-primary);
                }

                .blog .posts-list .meta-top {
                  margin-top: 20px;
                  color: var(--color-gray);
                }

                .blog .posts-list .meta-top ul {
                  display: flex;
                  /*flex-wrap: wrap;*/
                  list-style: none;
                  align-items: center;
                  padding: 0;
                  margin: 0;
                }

                .blog .posts-list .meta-top ul li+li {
                  padding-left: 20px;
                }

                .blog .posts-list .meta-top i {
                  font-size: 16px;
                  margin-right: 8px;
                  line-height: 0;
                  color: rgba(var(--color-primary-rgb), 0.8);
                }

                .blog .posts-list .meta-top a {
                  color: var(--color-gray);
                  font-size: 14px;
                  display: inline-block;
                  line-height: 1;
                }

                .blog .posts-list .content {
                  margin-top: 20px;
                }

                .blog .posts-list .read-more a {
                  display: inline-block;
                  background: var(--color-primary);
                  color: var(--color-white);
                  padding: 8px 30px;
                  transition: 0.3s;
                  font-size: 14px;
                  border-radius: 4px;
                }

                .blog .posts-list .read-more a:hover {
                  background: rgba(var(--color-primary-rgb), 0.8);
                }

                /*--------------------------------------------------------------
                # Blog Details Page
                --------------------------------------------------------------*/
                .blog .blog-details {
                  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
                  padding: 30px;
                }

                .blog .blog-details .post-img {
                  margin: -30px -30px 20px -30px;
                  overflow: hidden;
                }

                .blog .blog-details .title {
                  font-size: 28px;
                  font-weight: 700;
                  padding: 0;
                  margin: 20px 0 0 0;
                  color: var(--color-secondary);
                }

                .blog .blog-details .content {
                  margin-top: 20px;
                }

                .blog .blog-details .content h3 {
                  font-size: 22px;
                  margin-top: 30px;
                  font-weight: bold;
                }

                .blog .blog-details .content blockquote {
                  overflow: hidden;
                  background-color: rgba(var(--color-secondary-rgb), 0.06);
                  padding: 60px;
                  position: relative;
                  text-align: center;
                  margin: 20px 0;
                }

                .blog .blog-details .content blockquote p {
                  color: var(--color-default);
                  line-height: 1.6;
                  margin-bottom: 0;
                  font-style: italic;
                  font-weight: 500;
                  font-size: 22px;
                }

                .blog .blog-details .content blockquote:after {
                  content: "";
                  position: absolute;
                  left: 0;
                  top: 0;
                  bottom: 0;
                  width: 3px;
                  background-color: var(--color-secondary);
                  margin-top: 20px;
                  margin-bottom: 20px;
                }

                .blog .blog-details .meta-top {
                  margin-top: 20px;
                  color: var(--color-gray);
                }

                .blog .blog-details .meta-top ul {
                  display: flex;
                  flex-wrap: wrap;
                  list-style: none;
                  align-items: center;
                  padding: 0;
                  margin: 0;
                }

                .blog .blog-details .meta-top ul li+li {
                  padding-left: 20px;
                }

                .blog .blog-details .meta-top i {
                  font-size: 16px;
                  margin-right: 8px;
                  line-height: 0;
                  color: rgba(var(--color-primary-rgb), 0.8);
                }

                .blog .blog-details .meta-top a {
                  color: var(--color-gray);
                  font-size: 14px;
                  display: inline-block;
                  line-height: 1;
                }

                .blog .blog-details .meta-bottom {
                  padding-top: 10px;
                  border-top: 1px solid rgba(var(--color-secondary-rgb), 0.15);
                }

                .blog .blog-details .meta-bottom i {
                  color: var(--color-secondary-light);
                  display: inline;
                }

                .blog .blog-details .meta-bottom a {
                  color: rgba(var(--color-secondary-rgb), 0.8);
                  transition: 0.3s;
                }

                .blog .blog-details .meta-bottom a:hover {
                  color: var(--color-primary);
                }

                .blog .blog-details .meta-bottom .cats {
                  list-style: none;
                  display: inline;
                  padding: 0 20px 0 0;
                  font-size: 14px;
                }

                .blog .blog-details .meta-bottom .cats li {
                  display: inline-block;
                }

                .blog .blog-details .meta-bottom .tags {
                  list-style: none;
                  display: inline;
                  padding: 0;
                  font-size: 14px;
                }

                .blog .blog-details .meta-bottom .tags li {
                  display: inline-block;
                }

                .blog .blog-details .meta-bottom .tags li+li::before {
                  padding-right: 6px;
                  color: var(--color-default);
                  content: ",";
                }

                .blog .blog-details .meta-bottom .share {
                  font-size: 16px;
                }

                .blog .blog-details .meta-bottom .share i {
                  padding-left: 5px;
                }

                .blog .post-author {
                  padding: 20px;
                  margin-top: 30px;
                  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
                }

                .blog .post-author img {
                  max-width: 120px;
                  margin-right: 20px;
                }

                .blog .post-author h4 {
                  font-weight: 600;
                  font-size: 22px;
                  margin-bottom: 0px;
                  padding: 0;
                  color: var(--color-secondary);
                }

                .blog .post-author .social-links {
                  margin: 0 10px 10px 0;
                }

                .blog .post-author .social-links a {
                  color: rgba(var(--color-secondary-rgb), 0.5);
                  margin-right: 5px;
                }

                .blog .post-author p {
                  font-style: italic;
                  color: rgba(var(--color-gray-rgb), 0.8);
                  margin-bottom: 0;
                }

                /*--------------------------------------------------------------
                # Blog Sidebar
                --------------------------------------------------------------*/
                .blog .sidebar {
                  padding: 30px;
                  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
                }

                .blog .sidebar .sidebar-title {
                  font-size: 20px;
                  font-weight: 700;
                  padding: 0;
                  margin: 0;
                  color: var(--color-secondary);
                }

                .blog .sidebar .sidebar-item+.sidebar-item {
                  margin-top: 40px;
                }

                .blog .sidebar .search-form form {
                  background: var(--color-white);
                  border: 1px solid rgba(var(--color-secondary-rgb), 0.3);
                  padding: 3px 10px;
                  position: relative;
                }

                .blog .sidebar .search-form form input[type=text] {
                  border: 0;
                  padding: 4px;
                  border-radius: 4px;
                  width: calc(100% - 40px);
                }

                .blog .sidebar .search-form form input[type=text]:focus {
                  outline: none;
                }

                .blog .sidebar .search-form form button {
                  position: absolute;
                  top: 0;
                  right: 0;
                  bottom: 0;
                  border: 0;
                  background: none;
                  font-size: 16px;
                  padding: 0 15px;
                  margin: -1px;
                  background: var(--color-primary);
                  color: var(--color-white);
                  transition: 0.3s;
                  border-radius: 0 4px 4px 0;
                  line-height: 0;
                }

                .blog .sidebar .search-form form button i {
                  line-height: 0;
                }

                .blog .sidebar .search-form form button:hover {
                  background: rgba(var(--color-primary-rgb), 0.8);
                }

                .blog .sidebar .categories ul {
                  list-style: none;
                  padding: 0;
                }

                .blog .sidebar .categories ul li+li {
                  padding-top: 10px;
                }

                .blog .sidebar .categories ul a {
                  color: var(--color-secondary);
                  transition: 0.3s;
                }

                .blog .sidebar .categories ul a:hover {
                  color: var(--color-default);
                }

                .blog .sidebar .categories ul a span {
                  padding-left: 5px;
                  color: rgba(var(--color-default-rgb), 0.4);
                  font-size: 14px;
                }

                .blog .sidebar .recent-posts .post-item {
                  display: flex;
                }

                .blog .sidebar .recent-posts .post-item+.post-item {
                  margin-top: 15px;
                }

                .blog .sidebar .recent-posts img {
                  width: 80px;
                  margin-right: 15px;
                }

                .blog .sidebar .recent-posts h4 {
                  font-size: 18px;
                  font-weight: 400;
                }

                .blog .sidebar .recent-posts h4 a {
                  color: var(--color-secondary);
                  transition: 0.3s;
                }

                .blog .sidebar .recent-posts h4 a:hover {
                  color: var(--color-primary);
                }

                .blog .sidebar .recent-posts time {
                  display: block;
                  font-style: italic;
                  font-size: 14px;
                  color: rgba(var(--color-default-rgb), 0.4);
                }

                .blog .sidebar .tags {
                  margin-bottom: -10px;
                }

                .blog .sidebar .tags ul {
                  list-style: none;
                  padding: 0;
                }

                .blog .sidebar .tags ul li {
                  display: inline-block;
                }

                .blog .sidebar .tags ul a {
                  color: var(--color-secondary-light);
                  font-size: 14px;
                  padding: 6px 14px;
                  margin: 0 6px 8px 0;
                  border: 1px solid rgba(var(--color-secondary-light-rgb), 0.8);
                  display: inline-block;
                  transition: 0.3s;
                }

                .blog .sidebar .tags ul a:hover {
                  color: var(--color-white);
                  border: 1px solid var(--color-primary);
                  background: var(--color-primary);
                }

                .blog .sidebar .tags ul a span {
                  padding-left: 5px;
                  color: rgba(var(--color-secondary-light-rgb), 0.8);
                  font-size: 14px;
                }

                /*--------------------------------------------------------------
                # Blog Comments
                --------------------------------------------------------------*/
                .blog .comments {
                  margin-top: 30px;
                }

                .blog .comments .comments-count {
                  font-weight: bold;
                }

                .blog .comments .comment {
                  margin-top: 30px;
                  position: relative;
                }

                .blog .comments .comment .comment-img {
                  margin-right: 14px;
                }

                .blog .comments .comment .comment-img img {
                  width: 60px;
                }

                .blog .comments .comment h5 {
                  font-size: 16px;
                  margin-bottom: 2px;
                }

                .blog .comments .comment h5 a {
                  font-weight: bold;
                  color: var(--color-default);
                  transition: 0.3s;
                }

                .blog .comments .comment h5 a:hover {
                  color: var(--color-primary);
                }

                .blog .comments .comment h5 .reply {
                  padding-left: 10px;
                  color: var(--color-secondary);
                }

                .blog .comments .comment h5 .reply i {
                  font-size: 20px;
                }

                .blog .comments .comment time {
                  display: block;
                  font-size: 14px;
                  color: rgba(var(--color-secondary-rgb), 0.8);
                  margin-bottom: 5px;
                }

                .blog .comments .comment.comment-reply {
                  padding-left: 40px;
                }

                .blog .comments .reply-form {
                  margin-top: 30px;
                  padding: 30px;
                  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
                }

                .blog .comments .reply-form h4 {
                  font-weight: bold;
                  font-size: 22px;
                }

                .blog .comments .reply-form p {
                  font-size: 14px;
                }

                .blog .comments .reply-form input {
                  border-radius: 4px;
                  padding: 10px 10px;
                  font-size: 14px;
                }

                .blog .comments .reply-form input:focus {
                  box-shadow: none;
                  border-color: rgba(var(--color-primary-rgb), 0.8);
                }

                .blog .comments .reply-form textarea {
                  border-radius: 4px;
                  padding: 10px 10px;
                  font-size: 14px;
                }

                .blog .comments .reply-form textarea:focus {
                  box-shadow: none;
                  border-color: rgba(var(--color-primary-rgb), 0.8);
                }

                .blog .comments .reply-form .form-group {
                  margin-bottom: 25px;
                }

                .blog .comments .reply-form .btn-primary {
                  border-radius: 4px;
                  padding: 10px 20px;
                  border: 0;
                  background-color: var(--color-secondary);
                }

                .blog .comments .reply-form .btn-primary:hover {
                  background-color: rgba(var(--color-secondary-rgb), 0.8);
                }

                /*--------------------------------------------------------------
                # Blog Home Pagination
                --------------------------------------------------------------*/
                .blog .blog-pagination {
                  margin-top: 30px;
                  color: var(--color-secondary-light);
                }

                .blog .blog-pagination ul {
                  display: flex;
                  padding: 0;
                  margin: 0;
                  list-style: none;
                }

                .blog .blog-pagination li {
                  margin: 0 5px;
                  transition: 0.3s;
                }

                .blog .blog-pagination li a {
                  color: var(--color-secondary);
                  padding: 7px 16px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                }

                .blog .blog-pagination li.active,
                .blog .blog-pagination li:hover {
                  background: var(--color-primary);
                }

                .blog .blog-pagination li.active a,
                .blog .blog-pagination li:hover a {
                  color: var(--color-white);
                }

      </style>
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog  mt-0 pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row g-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">

          <div class="col-lg-12">

            <div class="row gy-4 posts-list">
            <?php
                      
                      while ($row1 = mysqli_fetch_assoc($result1)) {

              ?>
              <div class="col-lg-4" data-zanim-xs='{"delay":0.1}'>
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img loading="lazy" src="Images/blog/<?php echo $row1['ImagePath1'] ?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a  href="blog-list.php"><?php echo $row1['BlogTitle'] ?></a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">Kingdom Ceramic</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="<?php echo $row1['Modified']; ?>"><?php echo substr($row1['Modified'], 0, 10); ?></time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                  <p>
  <?php
  $description = strip_tags($row1['BlogDescription']); // Remove HTML tags
  echo mb_strlen($description) > 100 ? mb_substr($description, 0, 100) . '...' : $description;
  ?>    
</p>

                  </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a  style="background-color: #000; color: aliceblue;" class="btn" href="Blog/<?php echo $row1['BlogUrl']; ?>/">Read More</a>
                  </div>

                </article>
              </div><!-- End post list item -->
              <?php } ?>
            </div><!-- End blog posts list -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <style>
  
  a {
    color: #3c3c3c;
    text-decoration: none;
  }

  a:hover {
    text-decoration: none;
    color: #c0c0c0;
  }

  p {
    color: #666666;
  }

  @media (max-width: 576px) {
    p {
      font-size: 13px;
    }
  }


  ul {
    margin: 0;
    padding: 0;
  }

  ul li {
    list-style-type: none;
  }
</style>
<?php include_once __DIR__.'/C_Layout/footer.php'; ?>
    <?php include_once __DIR__.'/C_Layout/script.php'; ?>
  </body>

</html>