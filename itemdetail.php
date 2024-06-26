<?php 
include("head.php");
include("header.php");
?>
<section>
    <div class="container mt-5 item-detail">
        <div class="row mr-0">
            <div class="col-lg-6 col-md-6 col-sm-12">
             <img src="assets/img/Hyagel-1a.jpg" class="img-fluid" id="a">
             <img src="assets/img/Hyagel-1b.jpg" class="img-fluid" id="b">
             <img src="assets/img/Hyagel-1c.jpg" class="img-fluid" id="c">
             <img src="assets/img/img7.jpeg" class="img-fluid" id="d">
             <div class="row mr-0">
                 <div class="col-lg-3 col-md-3 col-sm-12">
                     <img src="assets/img/Hyagel-1a.jpg" class="img-fluid" onclick="myfunction1()">
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-12">
                     <img src="assets/img/Hyagel-1b.jpg" class="img-fluid" onclick="myfunction2()">
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-12">
                     <img src="assets/img/Hyagel-1c.jpg" class="img-fluid" onclick="myfunction3()">
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-12">
                     <img src="assets/img/img7.jpeg" class="img-fluid" onclick="myfunction4()">
                 </div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
             <h2 class="font-weight-bold">Body Wash</h2>
             <!-- <h5 class="price">&#8377; 550.00</h5> -->
             <p class="product-des">Anti-Microbial Waterless Body Wash, Alcohol-Free, No Parabens, Kills 99.99% Germs Saves Water Cleanses Skin Balances pH Levels.</p>
             <b>Available Size: </b><span>200 ml | 100 ml</span>
             <p class="mt-2"><small>Catagorties: Body Wash</small></p>
             <!-- <div>
                <a href="#" class="mr-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div> -->
            <div class="mt-2">
                <h5>Active Users:</h5>
                <div class="row mr-0 mt-3">
                    <div class="col-lg-3 col-md-2 col-sm-12 text-center">
                        <i class="fas fa-home detail-icon"></i>
                        <p>Care Homes</p>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12 text-center">
                        <i class="fas fa-running detail-icon"></i>
                        <p>Sports/Outdoor</p>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12 text-center">
                        <i class="fas fa-hospital detail-icon"></i>
                        <p>Hospital/Hospice</p>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12 text-center">
                        <i class="fas fa-luggage-cart detail-icon"></i>
                        <p>Travellers</p>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12 text-center">
                        <i class="fas fa-certificate detail-icon"></i>
                        <p>Military/Campaign</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 product-des-div">
        <div class="text-center">
            <button class="btn" id="x" onclick="display1()">Description</button>
            <button class="btn" id="y" onclick="display2()">Features</button>
        </div>
        <div class="mt-3" id="xx">
            <p class="pro-des">As is evident from the name, this Waterless Body Wash eliminates the need to use water, yet provides a good cleanse! It is eco-friendly, safe, and makes you feel fresh in no time.</p>
            <p class="pro-des"><b>100% Safe:</b></p>
            <p class="pro-des">This product doesn’t contain any alcohol, parabens, or other toxic chemicals that can harm the skin in any way – those with sensitive skin can safely use it. The body wash is also vegan-friendly and cruelty-free.</p>
            <p class="pro-des"><b>Highly Effective:</b></p>
            <p class="pro-des">This anti-microbial body wash kills off 99.99% germs, and can successfully neutralize viruses, bacteria, spores, and fungi. It removes body odour, pollutants and impurities from the skin, making you feel refreshed.</p>
            <p class="pro-des"><b>Easy to Use:</b></p>
            <p class="pro-des">All you have to do is spray on your palms, massage on the skin, and then wipe off with a towel or tissue. It can be sprayed directly onto the skin as well.</p>
            <p class="pro-des"><b>Bullet Points:</b></p>
            <ul>
                <li>Top Quality – This body wash is mild on the skin as it has pH balancing properties and doesn’t cause excessive dryness.</li>
                <li>Portable – The compactly designed bottles are perfect for people on-the-go, during travelling, hiking expeditions, or camping trips, to carry in their backpacks when they visit places with extreme temperatures or water scarcity.</li>
                <li>Convenient – Maintain hygiene and cleanliness without using water. Just spray the body wash on the skin or spray on palms and then apply on skin. Wipe off when you are done.</li>
                <li>No Adverse Effects – With 0% alcohol and no parabens, this body wash ensures that dirt and other impurities are thoroughly cleansed, without drying the skin.</li>
                <li>Save Water – Water is a valuable resource, and if we aren’t careful, water shortage will become inevitable in a few years. Products like this body wash help to conserve water without compromising on basic hygiene.</li>
            </ul>
        </div>
        <div class="mt-3" id="yy">
            <!-- <div class="text-center mt-4">
                <h4><b>Features</b></h4>
            </div> -->
            <div class="container">
                <div class="row mr-0">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <ul class="p-0">
                            <li>Alcohol free</li>
                            <li>Vegan friendly</li>
                            <li>Paraben & SLS free</li>
                            <li>Mineral Oil Free</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <ul class="p-0">
                            <li>Phthalate Free</li>
                            <li>No sticky residues</li>
                            <li>No Water Required</li>
                            <li>Kills germs</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <ul class="p-0">
                            <li>Towel-off Body wash</li>
                            <li>Removes body odour</li>
                            <li>Skin Cleanser Foam</li>
                            <li>Tested skin safe</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 similar-items">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="card">
                <div class="card-img">
                    <img src="assets/img/Hyagel-2a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Shampoo</h5>
                    <small>Category: Shampoo</small>
                    <p class="card-text">&#8377; 120</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-img">
                    <img src="assets/img/Hyagel-3a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail2.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Pet Shampoo</h5>
                    <small>Category: Shampoo</small>
                    <p class="card-text">&#8377; 120</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-img">
                    <img src="assets/img/Hyagel-4a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail3.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Pet Shampoo</h5>
                    <small>Category: Shampoo</small>
                    <p class="card-text">&#8377; 120</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-img">
                    <img src="assets/img/Hyagel-2a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Shampoo</h5>
                    <small>Category: Shampoo</small>
                    <p class="card-text">&#8377; 120</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-img">
                    <img src="assets/img/Hyagel-3a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail2.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Pet Shampoo</h5>
                    <small>Category: Shampoo</small>
                    <p class="card-text">&#8377; 120</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-img">
                    <img src="assets/img/Hyagel-4a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail3.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Pet Shampoo</h5>
                    <small>Category: Shampoo</small>
                    <p class="card-text">&#8377; 120</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-img">
                    <img src="assets/img/Hyagel-2a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Shampoo</h5>
                    <small>Category: Shampoo</small>
                    <p class="card-text">&#8377; 120</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php 
include("footer.php");
?>
<script>
    var a = document.getElementById("a");
    var b = document.getElementById("b");
    var c = document.getElementById("c");
    var d = document.getElementById("d");
    d.style.display = 'none';
    a.style.display = "block";
    function myfunction1(){
        a.style.display = "block";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }
    function myfunction2(){
        a.style.display = "none";
        b.style.display = "block";
        c.style.display = "none";
        d.style.display = "none";
    }
    function myfunction3(){
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "block";
        d.style.display = "none";
    }
    function myfunction4(){
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "block";
    }
</script>
<script>
    var x = document.getElementById("x");
    x.style.borderBottom = "thick solid #416E7A";
    var y = document.getElementById("y");
    var xx = document.getElementById("xx");
    var yy = document.getElementById("yy");
    yy.style.display = "none";
    function display1(){
        x.style.borderBottom = "thick solid #416E7A";
        y.style.borderBottom = "none";
        xx.style.display = "block";
        yy.style.display = "none";
    }

    function display2(){
        y.style.borderBottom = "thick solid #416E7A";
        x.style.borderBottom = "none";
        yy.style.display = "block";
        xx.style.display = "none";
    }
</script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1200,
        responsiveClass:true,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
</script>