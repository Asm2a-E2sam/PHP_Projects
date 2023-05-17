
<div class="contact-us my-5" id="contact">
        <div class="overlay">
            <div class="container">
                <div class="row text-center row_width">
                    <div class="p_width">
                <h1 align="center" class="hadding_pt"><span class="hadding_bt">CONTACT US</span></h1>
                <p align="center">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.
                </p>
                </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <input type="text" class="input_size" name="fname" id="fname" placeholder="Your Name"/>
                        <input type="email" class="input_size" name="email" id="email" placeholder="Your Email"/>
                        <textarea class="input_size" rows="7" name="message" id="message" placeholder="Message"></textarea>
                        <button type="submit" class="input_btn">SUBMIT REQUEST</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my">
        <div class="row text-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.334566422665!2d75.73763456012502!3d27.082744806662184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dadfa8f444f5f%3A0x98ef301b3278e271!2sPusp%20Vatika!5e0!3m2!1sen!2sin!4v1636813692739!5m2!1sen!2sin" width="100%" style="border:1px solid green;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h1><span class="">Social Conectivity</span></h1>
                <div>
                    <i class="fa fa-facebook fa_social"></i>
                    <i class="fa fa-linkedin fa_social"></i>
                    <i class="fa fa-code fa_social"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    	<div class="row text-center">
    		<div class="col-sm-12 footer">
    			All Rights Reserved | Design by : Lilesh
    		</div>
    	</div>
    </div>
    <script>
        $(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 2000, function(){
        window.location.hash = hash;
      });
    } 
  });
});
    </script>

</body>