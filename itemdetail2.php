<?php 
include("head.php");
include("header.php");
?>
<section>
    <div class="container mt-5 item-detail">
        <div class="row mr-0">
            <div class="col-lg-6 col-md-6 col-sm-12">
             <img src="assets/img/Hyagel-3a.jpg" class="img-fluid" id="a">
             <img src="assets/img/Hyagel-3b.jpg" class="img-fluid" id="b">
             <img src="assets/img/Hyagel-3c.jpg" class="img-fluid" id="c">
             <div class="row mr-0">
                 <div class="col-lg-4 col-md-3 col-sm-12">
                     <img src="assets/img/Hyagel-3a.jpg" class="img-fluid" onclick="myfunction1()">
                 </div>
                 <div class="col-lg-4 col-md-3 col-sm-12">
                     <img src="assets/img/Hyagel-3b.jpg" class="img-fluid" onclick="myfunction2()">
                 </div>
                 <div class="col-lg-4 col-md-3 col-sm-12">
                     <img src="assets/img/Hyagel-3c.jpg" class="img-fluid" onclick="myfunction3()">
                 </div>
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
             <h2 class="font-weight-bold">Pet Shampoo</h2>
             <!-- <h5 class="price">&#8377; 550.00</h5> -->
             <p class="product-des">Waterless Pet Shampoo pH Balanced Gentle Minimal Fuss Convenient Stimulating Fragrance Cleanses Thoroughly to Give Soft & Shiny Fur.</p>
             <b>Available Size: </b><span>200 ml | 100 ml | 65 ml</span>
             <p class="mt-2"><small>Catagorties: Shampoo</small></p>
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
                        <i class="fas fa-hand-holding-heart detail-icon"></i>
                        <p>For Comfort</p>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12 text-center">
                        <i class="fas fa-calendar-check detail-icon"></i>
                        <p>Men/Women with hectic schedule</p>
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
            <p class="pro-des">Want to save time yet give your pet a good thorough cleanse? This Waterless Pet Shampoo is just what you need to maintain basic hygiene with a fresh and clean coat, sans any water.</p>
            <p class="pro-des"><b>Gentle Formula:</b></p>
            <p class="pro-des">The mild and non-irritating formula, not only cleans the fur, but leaves it soft and shiny as well. It works just like a traditional shampoo, but doesn’t leave behind any greasy residue. It contains a natural flea repellent too.</p>
            <p class="pro-des"><b>Hassle-Free:</b></p>
            <p class="pro-des">All you have to do is spray on your pet’s coat generously, massage slowly, and then wipe off with a towel. Follow up with brushing and grooming. The portable bottle can be taken along during vacations, camping trips, etc.</p>
            <p class="pro-des"><b>Refreshing Fragrance:</b></p>
            <p class="pro-des">This waterless pet shampoo gives off a tea tree, peppermint and mulberry fragrance – not only will your pet’s coat get cleaned, but it will smell amazing too.</p>
            <p class="pro-des"><b>Bullet Points:</b></p>
            <ul>
                <li>No More Messes – When pets dislike water or the weather is cold, it becomes a chore to give baths as they writhe and splash water all over the place. This waterless, pH balanced pet shampoo safely cleanses the coat without using any water.</li>
                <li>Safe to Use – The alcohol and paraben-free shampoo is formulated using non-toxic components, so rest assured, there won’t be any adverse effects.</li>
                <li>Keep Fleas at Bay – Picking out fleas and ticks is a huge challenge indeed. This pet shampoo contains a natural repellent so those nasty fleas can’t wreak havoc as usual.</li>
                <li>Better than Wipes – This product is a more convenient alternative than wipes. They can be used to treat accidents on the spot or for a complete body cleanse.</li>
                <li>Instant Results – Spray on your pet’s coat, and it dries within seconds to give pleasant smelling fur. This is an amazing way to pamper your pet and maintain hygiene at the same time.</li>
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
                            <li>Minimal distress</li>
                            <li>No sticky residues</li>
                            <li>No water required</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <ul class="p-0">
                            <li>No fuss or mess</li>
                            <li>pH Balanced</li>
                            <li>Alcohol Free</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <ul class="p-0">
                            <li>No dirt bath to clean</li>
                            <li>Soft, Clean Fur without water</li>
                            <li>Apply, Massage, Towel-off</li>
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
                    <img src="assets/img/Hyagel-1a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Body Wash</h5>
                    <small>Category: Body Wash</small>
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
                    <img src="assets/img/Hyagel-1a.jpg" class="card-img-top" alt="...">
                    <div class="card-img-abs text-center">
                        <a href="itemdetail.php"><i class="fas fa-eye"></i><span> View Item</span></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <h5 class="card-title mb-0">Body Wash</h5>
                    <small>Category: Body Wash</small>
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
    a.style.display = "block";
    function myfunction1(){
        a.style.display = "block";
        b.style.display = "none";
        c.style.display = "none";
    }
    function myfunction2(){
        a.style.display = "none";
        b.style.display = "block";
        c.style.display = "none";
    }
    function myfunction3(){
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "block";
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