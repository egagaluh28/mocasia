@extends('user.layout.main')
@section('user.container')
    <!-- Slider -->
    <section class="sec-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_1" class="rev_slide fullwidthabanner" data-version="5.4.5" style="display:none">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="fade">
                        <img src="{{ asset('assets/images/hal1.png') }}" alt="IMG-BG" class="rev-slidebg">
                        <div class="tp-caption tp-resizeme layer1"
                            data-frames='[{"delay":1300,"speed":1300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['35', '35', '35', '35']"
                            data-lineheight="['42', '42', '42', '42']" data-color="['#333']"
                            data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
                            data-hoffset="['310', '80', '0', '0']" data-voffset="['-78', '-78', '-78', '-150']"
                            data-width="['650','650','768','576']" data-height="['auto']" data-whitespace="['normal']"
                            data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide"
                            data-responsive_offset="on">
                            <span class="child1">MOCASIA</span> <span class="child2">Products</span>
                        </div>

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2"
                            data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['70', '70', '70', '70']"
                            data-lineheight="['82', '82', '82', '82']" data-color="['#333']"
                            data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
                            data-hoffset="['310', '80', '0', '0']" data-voffset="['0', '0', '0', '-30']"
                            data-width="['650','650','768','576']" data-height="['auto']" data-whitespace="['normal']"
                            data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide"
                            data-responsive_offset="on">
                            Mocasia Flakes
                        </h2>

                        <!--  -->
                        <p class="tp-caption tp-resizeme layer3"
                            data-frames='[{"delay":1300,"speed":1300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['15', '15', '15', '15']"
                            data-lineheight="['24', '24', '24', '24']" data-color="['#666']"
                            data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
                            data-hoffset="['310', '80', '0', '0']" data-voffset="['95', '95', '95', '95']"
                            data-width="['650','650','768','576']" data-height="['auto', 'auto', 'auto', 'auto']"
                            data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 35, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 35, 15]" data-basealign="slide"
                            data-responsive_offset="on">
                            Mocasia Flakes adalah sereal sehat yang dibuat khusus untuk anak-anak berkebutuhan khusus,
                            dengan kandungan rendah gluten dan gula.
                        </p>
                    </li>

                    {{-- slide 2 --}}

                </ul>
            </div>
        </div>
    </section>


    <!-- Welcome -->
    <section class="sec-welcome bg0 p-t-145 p-b-95">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-90">
                <div class="txt-center txt-m-401 cl10 how-pos1-parent m-b-16" style="color: #564067;">
                    <div class="how-pos1">
                        <img src="assets/images/icons/mocasia.png" width="60px" alt="IMG">
                    </div>
                </div>
                <h2 class="txt-center txt-m-401 cl10 how-pos1-parent m-all-7" style="color: #564067">Semua Makan Sereal</h2>

                <h3 class="txt-center txt-l-104 cl3 respon1">
                    MOCASIA
                </h3>
            </div>

            <div class="wrap-pic-max-w flex-c-t flex-w p-t-255 item-welcome-parent">
                <img class="size-w-1" src="assets/images/icons/moci.png" alt="IMG">

                <!-- item welcome -->
                <div class="item-welcome one">
                    <div class="item-welcome-pic pos-relative">
                        <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                            <img src="assets/images/icons/icon1.png" alt="IMG">
                        </div>

                        <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                            <img src="assets/images/icons/icon1.1.png" alt="IMG">
                        </div>
                    </div>

                    <div class="item-welcome-txt p-t-27">
                        <h4 class="txt-m-101 cl3 txt-center p-b-11">
                            100% Organic
                        </h4>

                        <p class="txt-s-101 cl6 txt-center">
                            Diproduksi dengan bahan-bahan organik pilihan, Mocasia Flakes memastikan kualitas dan
                            kemurnian produk untuk kepuasan dan kesehatan konsumen.
                        </p>
                    </div>
                </div>

                <!-- item welcome -->
                <div class="item-welcome two">
                    <div class="item-welcome-pic pos-relative">
                        <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                            <img src="assets/images/icons/icon3.png" alt="IMG">
                        </div>

                        <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                            <img src="assets/images/icons/icon3.3.png" alt="IMG">
                        </div>
                    </div>

                    <div class="item-welcome-txt p-t-27">
                        <h4 class="txt-m-101 cl3 txt-center p-b-11">
                            Rendah Gluten
                        </h4>

                        <p class="txt-s-101 cl6 txt-center">
                            Mocasia Flakes dirancang khusus dengan kandungan gluten yang rendah, cocok untuk diet dan
                            kebutuhan kesehatan yang menghindari gluten.</p>
                    </div>
                </div>

                <!-- item welcome -->
                <div class="item-welcome three">
                    <div class="item-welcome-pic pos-relative">
                        <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                            <img src="assets/images/icons/icon2.png" alt="IMG">
                        </div>

                        <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                            <img src="assets/images/icons/icon2.2.png" alt="IMG">
                        </div>
                    </div>

                    <div class="item-welcome-txt p-t-27">
                        <h4 class="txt-m-101 cl3 txt-center p-b-11">
                            Nutrisi Optimal
                        </h4>

                        <p class="txt-s-101 cl6 txt-center">
                            Mocasia Flakes mengandung nutrisi optimal dari mocaf dan tepung talas beneng, memberikan
                            sumber energi dan nutrisi yang dibutuhkan tubuh.
                        </p>
                    </div>
                </div>

                <!-- item welcome -->
                <div class="item-welcome four">
                    <div class="item-welcome-pic pos-relative">
                        <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                            <img src="assets/images/icons/icon4.png" alt="IMG">
                        </div>

                        <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                            <img src="assets/images/icons/icon4.4.png" alt="IMG">
                        </div>
                    </div>

                    <div class="item-welcome-txt p-t-27">
                        <h4 class="txt-m-101 cl3 txt-center p-b-11">
                            Aman
                        </h4>

                        <p class="txt-s-101 cl6 txt-center">
                            Dibuat tanpa bahan pengawet dan pewarna buatan, Mocasia Flakes adalah pilihan aman dan sehat
                            untuk dikonsumsi sehari-hari.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Deal -->
    <section class="sec-deal bg-img1" style="background-image: url('assets/images/bg-1.png');">
        <div class="flex-w flex-m how-pos2-parent">
            <img class="how-pos2 respon4 dis-none-xl" src="assets/images/icons/moci.png" width="200px" alt="IMG">

            <div class="size-w-3 txt-center wrap-pic-max-s w-full-lg">
                <img src="assets/images/produk1.png" alt="IMG">
            </div>

            <div class="size-w-4 p-t-105 p-b-90 p-r-15 respon3">
                <div class="size-a-1 flex-col-l-m p-b-35">
                    <div class="txt-m-401 cl10 how-pos1-parent m-b-14" style="color: #564067">
                        Harga Terbaik Untukmu

                        <div class="how-pos1">
                            <img src="assets/images/icons/mocasia.png" width="60px" alt="IMG">
                        </div>
                    </div>

                    <h3 class="txt-l-101 cl3 respon1">
                        Deal of the Day
                    </h3>
                </div>

                <div class="p-b-32">
                    <a href="#" class="txt-m-105 cl3 hov-cl10 trans-04">
                        Mocasia Sereal
                    </a>

                    <div class="txt-m-105 p-t-15 p-b-22">
                        <span class="cl212">
                            <del>Rp. 30,000</del>
                        </span>

                        <span class="cl10">
                            Sekarang Hanya Rp. 25,000
                        </span>
                    </div>

                    <p class="txt-s-102 cl10">
                        Mocasia Sereal adalah pilihan terbaik untuk anak-anak ABK. Terbuat dari bahan-bahan alami dan
                        diperkaya dengan nutrisi penting, sereal ini memberikan energi dan keceriaan sepanjang hari.
                    </p>
                </div>

                <div class="flex-w coutdown100 p-b-22" data-year="0" data-month="0" data-date="10" data-hours="23"
                    data-minutes="0" data-seconds="0" data-timezone="auto">
                    <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
                        <span class="txt-l-102 cl6 days">
                            10
                        </span>

                        <span class="txt-m-106 cl9">
                            days
                        </span>
                    </div>

                    <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
                        <span class="txt-l-102 cl6 hours">
                            25
                        </span>

                        <span class="txt-m-106 cl9">
                            hours
                        </span>
                    </div>

                    <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
                        <span class="txt-l-102 cl6 minutes">
                            56
                        </span>

                        <span class="txt-m-106 cl9">
                            mins
                        </span>
                    </div>

                    <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
                        <span class="txt-l-102 cl6 seconds">
                            42
                        </span>

                        <span class="txt-m-106 cl9">
                            secs
                        </span>
                    </div>
                </div>

                <div class="flex-w">
                    <a href="#" class="flex-c-m txt-s-103 cl6 size-a-2 how-btn1 bo-all-1 bocl11 hov-btn1 trans-04">
                        Shop now
                        <span class="lnr lnr-chevron-right m-l-7"></span>
                        <span class="lnr lnr-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="sec-blog bg0 p-t-145 p-b-45">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-70">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                    Keep Updated With Us

                    <div class="how-pos1">
                        <img src="assets/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    From our blog
                </h3>
            </div>

            <div class="row">
                <div class="col-md-6 p-b-50">
                    <div class="p-r-15 p-r-0-lg">
                        <a href="blog-single.html" class="wrap-pic-w hov4">
                            <img src="assets/images/blog-01.jpg" alt="BLOG">
                        </a>

                        <div class="flex-w p-t-30">
                            <div class="size-a-4 bg10 flex-col-c-m m-r-34">
                                <span class="txt-l-106 cl0 p-b-4">
                                    18
                                </span>

                                <span class="txt-m-108 cl0 p-b-5">
                                    June
                                </span>
                            </div>

                            <div class="size-w-9">
                                <h4 class="p-b-13">
                                    <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                        There are many variations of passages of Lorem Ipsum available
                                    </a>
                                </h4>

                                <p class="txt-s-101 cl6 p-b-21">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod titncidunt ut laoreet dolore magna aliquam erat volutpat. Ut ...
                                </p>

                                <div class="how-line2 p-l-40">
                                    <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 p-b-50">
                    <div class="p-l-15 p-l-0-lg">
                        <a href="blog-single.html" class="wrap-pic-w hov4">
                            <img src="assets/images/blog-02.jpg" alt="BLOG">
                        </a>

                        <div class="flex-w p-t-30">
                            <div class="size-a-4 bg10 flex-col-c-m m-r-34">
                                <span class="txt-l-106 cl0 p-b-4">
                                    20
                                </span>

                                <span class="txt-m-108 cl0 p-b-5">
                                    October
                                </span>
                            </div>

                            <div class="size-w-9">
                                <h4 class="p-b-13">
                                    <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                        There are many variations of passages of Lorem Ipsum available
                                    </a>
                                </h4>

                                <p class="txt-s-101 cl6 p-b-21">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod titncidunt ut laoreet dolore magna aliquam erat volutpat. Ut ...
                                </p>

                                <div class="how-line2 p-l-40">
                                    <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimoni --}}
    <div class="sec-testimonials bg15 p-t-120 p-b-80 how-pos3-parent how-pos4-parent">
        <div class="container">
            <!-- Slide3 -->
            <div class="wrap-slick3">
                <div class="slick3">
                    <div class="item-slick3">
                        <div class="flex-col-c-m">
                            <div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
                                <div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
                                    <img src="assets/images/avatar/rini.jpg" alt="AVATAR">
                                </div>
                            </div>

                            <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <div class="flex-col-c-m p-t-33 p-b-25">
                                    <span class="txt-l-105 cl3 txt-center p-b-9">
                                        Rini Andarus Tami
                                    </span>

                                    <span class="fs-16 cl11 txt-center">
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
                                <p class="txt-center txt-s-104 cl6 size-w-8">
                                    Saya sangat merekomendasikan sereal Mocasia untuk anak-anak ABK. Anak saya menjadi lebih
                                    bersemangat sarapan pagi karena rasanya yang enak dan teksturnya yang lembut. Sereal ini
                                    juga mudah dicerna dan tidak menyebabkan masalah pencernaan. Mocasia benar-benar pilihan
                                    yang tepat untuk kebutuhan khusus anak-anak ABK. Terima kasih Mocasia!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick3">
                        <div class="flex-col-c-m">
                            <div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
                                <div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
                                    <img src="assets/images/avatar/viaka husain.jpg" alt="AVATAR">
                                </div>
                            </div>

                            <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <div class="flex-col-c-m p-t-33 p-b-25">
                                    <span class="txt-l-105 cl3 txt-center p-b-9">
                                        Viaka Husain
                                    </span>

                                    <span class="fs-16 cl11 txt-center">
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
                                <p class="txt-center txt-s-104 cl6 size-w-8">
                                    Mocasia adalah sereal yang luar biasa! Anak saya yang memiliki kebutuhan khusus sangat
                                    menyukai rasanya. Tidak hanya enak, tetapi juga bernutrisi tinggi sehingga memberikan
                                    energi yang cukup untuk aktivitas seharian. Sereal ini sangat membantu dalam menjaga
                                    kesehatan dan kebugaran anak saya. Sangat direkomendasikan untuk anak-anak ABK.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick3">
                        <div class="flex-col-c-m">
                            <div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
                                <div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
                                    <img src="assets/images/avatar/anitha.jpg" alt="AVATAR">
                                </div>
                            </div>

                            <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <div class="flex-col-c-m p-t-33 p-b-25">
                                    <span class="txt-l-105 cl3 txt-center p-b-9">
                                        Anitha
                                    </span>

                                    <span class="fs-16 cl11 txt-center">
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
                                <p class="txt-center txt-s-104 cl6 size-w-8">
                                    Terima kasih Mocasia telah menciptakan sereal yang sempurna untuk anak-anak ABK. Anak
                                    saya biasanya susah makan, tetapi dengan Mocasia dia menjadi lebih bersemangat dan tidak
                                    pernah melewatkan sarapannya. Kandungan nutrisinya yang seimbang sangat membantu dalam
                                    perkembangan anak saya. Mocasia benar-benar solusi yang kami butuhkan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap-slick3-dots p-t-50"></div>
            </div>
        </div>
    </div>
@endsection
