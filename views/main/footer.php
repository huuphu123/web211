<footer>
   <!--The main area of the footer -->
   <div class="footer-content">
      <?php 
         require_once 'models/company.php'; 
         $company = company_db::getAll()->fetch_assoc();
      ?>
      <h3><?php echo $company['name']?></h3>
      <p><?php echo $company['address'];?></p>

   <!--Footer's social icon-->
      <ul class="socials">
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
         <li><a href="#"><i class="fa fa-youtube"></i></a></li>
         <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
       </ul>

    <!-- Footer's menu item-->
      <!-- <div class="footer-menu">
         <ul class="f-menu">
           <li><a href="">Home</a></li>
           <li><a href="">About</a></li>
           <li><a href="">Contact</a></li>
           <li><a href="">Blog</a></li>
           <li><a href="">Articles</a></li>
         </ul>
      </div> -->

   </div>
</footer>  