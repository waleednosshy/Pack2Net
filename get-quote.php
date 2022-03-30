<?php include("assets/includes/head.php");?>

<meta property="og:site_name" content="<?php echo $lang_array['site-name']; ?>" />
<meta property="og:title" content="<?php echo $lang_array['quote-title']; ?>" />
<meta property="og:description" content="<?php echo $lang_array['quote-description']; ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://pack2net.com/assets/img/social/website-img.webp" />
<meta property="og:url" content="<?php echo $lang_array['quote-url']; ?>" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo $lang_array['quote-title']; ?>" />
<meta name="twitter:description" content="<?php echo $lang_array['quote-description']; ?>" />
<meta name="twitter:site" content="@Pack2Net" />
<meta name="twitter:image" content="https://pack2net.com/assets/img/social/website-img.webp" />
<meta name="twitter:creator" content="@Pack2Net" />
<meta name="robots" content="index, follow" />

<link rel="canonical" href="<?php echo $lang_array['quote-url']; ?>" />

<!-- #Social Media End -->

<title><?php echo $lang_array['quote-title']; ?></title>

<meta name="description" content="<?php echo $lang_array['quote-description']; ?>" />

<meta name="keywords" content="<?php echo $lang_array['quote-keywords']; ?>" />

</head>

<!-- End Head -->

<body>

    <!-- Preloader -->

    <?php include("assets/includes/preloader.php");?>

    <!-- End Preloader -->



    <!-- Header -->

    <?php include("assets/includes/header.php");?>

    <!-- End Header -->



    <!-- Content -->

    <main>

        <section class="section-parallax page-image-title"
            style="background-image: url(https://pack2net.com/assets/img/images/quote-01.webp);">
            <div class="section-mask"></div>
            <div class="section-content">
                <div class="container">
                    <h1 class="text-white">Get a quote</h1>
                </div>
            </div>
        </section>

        <section class="section-white section-padding-05-02">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="p-5 section-yellow section-first">
                            <div class="vh-20">
                                <div class="section-content-v">
                                    <h2 class="font-size-3 text-dark text-center">Let’s work together</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="section-content-v">
                            <p class="text-text font-size-1-06 mt-lg-0 mt-4 ps-lg-5 ps-0">Once you fill the below form,
                                we will reach out to you and fix a meeting to discuss your challenges and goals in
                                details, we will provide you with a detailed project proposal (services required, price,
                                duration, terms &amp; conditions) and we will be ready to start working with you once we
                                agree on the proposal.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-white mb-5">
            <div class="container">
                <form name="quoteform" id="quoteform">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-outline form-outline-box mb-4 section-top-5">
                                <div class="p-5 section-dark section-first">
                                    <div class="vh-10">
                                        <div class="section-content-v">
                                            <h5 class="text-white">What are you looking to work on?</h5>
                                            <p class="text-text fst-italic mb-4">Select your project works</p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="quoteformwork[]" id="uxdesign" value="UX Design">
                                                        <label class="form-check-label ms-2" for="uxdesign">UX
                                                            Design</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="quoteformwork[]" id="completewebsite"
                                                            value="Complete Website">
                                                        <label class="form-check-label ms-2"
                                                            for="completewebsite">Complete Website</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 mb-md-0 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="quoteformwork[]" id="development" value="Development">
                                                        <label class="form-check-label ms-2"
                                                            for="development">Development</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="quoteformwork[]" id="marketing"
                                                            value="Marketing / Branding">
                                                        <label class="form-check-label ms-2" for="marketing">Marketing /
                                                            Branding</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline form-outline-box mb-4">
                                <div class="p-5 section-blue section-first">
                                    <div class="vh-10">
                                        <div class="section-content-v">
                                            <h5 class="text-white">What is your budget range for this project?</h5>
                                            <p class="fst-italic mb-4">(k) means thousand Egyptian pound (1000 EGP)</p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformbudget" id="10k-25kbudget" value="10k - 25k">
                                                        <label class="form-check-label ms-2" for="10k-25kbudget">10k -
                                                            25k</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformbudget" id="25k-50kbudget" value="25k - 50k">
                                                        <label class="form-check-label ms-2" for="25k-50kbudget">25k -
                                                            50k</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 mb-md-0 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformbudget" id="+50kbudget" value="+50K">
                                                        <label class="form-check-label ms-2"
                                                            for="+50kbudget">+50K</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformbudget" id="idontknowbudget"
                                                            value="I don't know">
                                                        <label class="form-check-label ms-2" for="idontknowbudget">I
                                                            don't know</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline form-outline-box mb-4">
                                <div class="p-5 section-light section-first">
                                    <div class="vh-10">
                                        <div class="section-content-v">
                                            <h5 class="text-dark">How many pages will you need?</h5>
                                            <p class="text-text fst-italic mb-4">ie. How it works, contact us, team,
                                                about, press, terms, careers, etc...</p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformpages" id="1-5pages" value="1 - 5">
                                                        <label class="form-check-label ms-2" for="1-5pages">1 -
                                                            5</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformpages" id="5-20pages" value="5 - 20">
                                                        <label class="form-check-label ms-2" for="5-20pages">5 -
                                                            20</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 mb-md-0 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformpages" id="+20pages" value="+20">
                                                        <label class="form-check-label ms-2" for="+20pages">+20</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformpages" id="idontknowpages"
                                                            value="I don't know">
                                                        <label class="form-check-label ms-2" for="idontknowpages">I
                                                            don't know</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline form-outline-box mb-4 section-top--5">
                                <div class="p-5 section-dark section-first">
                                    <div class="vh-10">
                                        <div class="section-content-v">
                                            <h5 class="text-white">Will you need online payment solutions?</h5>
                                            <p class="text-text fst-italic mb-4">PayPal, credit cards, bitcoins, etc...
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformpayments" id="yespayments" value="Yes">
                                                        <label class="form-check-label ms-2"
                                                            for="yespayments">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformpayments" id="nopayments" value="No">
                                                        <label class="form-check-label ms-2" for="nopayments">No</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformpayments" id="idontknowpayments"
                                                            value="I don't know">
                                                        <label class="form-check-label ms-2" for="idontknowpayments">I
                                                            don't know</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline form-outline-box mb-4">
                                <div class="p-5 section-blue section-first">
                                    <div class="vh-10">
                                        <div class="section-content-v">
                                            <h5 class="text-white">Do you need a Content Management System (CMS)?</h5>
                                            <p class="fst-italic mb-4">A CMS will let you update content on your site
                                                without writing code (i.e. writing a blog or editing a page)</p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformmanagement" id="yesmanagement" value="Yes">
                                                        <label class="form-check-label ms-2"
                                                            for="yesmanagement">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformmanagement" id="nomanagement" value="No">
                                                        <label class="form-check-label ms-2"
                                                            for="nomanagement">No</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="quoteformmanagement" id="idontknowmanagement"
                                                            value="I don't know">
                                                        <label class="form-check-label ms-2" for="idontknowmanagement">I
                                                            don't know</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline form-outline-box mb-4 section-top--5">
                                <div class="p-5 section-light section-first">
                                    <div class="vh-10">
                                        <div class="section-content-v">
                                            <h5 class="text-dark">Will you need a search engine optimization (SEO)
                                                solutions for your project?</h5>
                                            <p class="text-text fst-italic mb-4">Building a site with a heavy focus on
                                                search engine optimization is best executed the earlier it is planned
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input" name="quoteformseo"
                                                            id="yesseo" value="Yes">
                                                        <label class="form-check-label ms-2" for="yesseo">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-4 form-check">
                                                        <input type="radio" class="form-check-input" name="quoteformseo"
                                                            id="noseo" value="No">
                                                        <label class="form-check-label ms-2" for="noseo">No</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="quoteformseo"
                                                            id="idontknowseo" value="I don't know">
                                                        <label class="form-check-label ms-2" for="idontknowseo">I don't
                                                            know</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="quoteformdescription" name="quoteformdescription"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 section-top--5">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="quoteformname" name="quoteformname"
                                            placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="quoteformemail"
                                            name="quoteformemail" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="quoteformphone"
                                            name="quoteformphone" placeholder="Phone" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="quoteformcountry"
                                            name="quoteformcountry" placeholder="Country" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-end">
                        <div class="col-lg-6 section-top--5">
                            <button type="submit" class="btn-eff-01 btn-eff-02-pre d-block w-100">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </section>


    </main>

    <!-- End Content -->



    <!-- Footer -->

    <?php include("assets/includes/footer.php");?>

    <!-- End Footer -->



    <!-- JS -->

    <?php include("assets/includes/scripts.php");?>
    <script src="assets/js/validate-quote.js"></script>

    <!-- End JS -->

</body>

</html>