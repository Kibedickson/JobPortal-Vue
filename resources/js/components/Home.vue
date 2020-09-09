<template>
    <div>
        <header>
            <div id="carousel-area">
                <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src='/assets/img/slider/bg-1.jpg'' alt="">
                            <div class="carousel-caption text-left">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <h2 class="wow fadeInRight" data-wow-delay="0.4s">Find the job you <br> deserve</h2>
                                        <p class="wow fadeInRight" data-wow-delay="0.6s">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. <br> Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet.</p>
                                        <a href="jobs" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">See our jobs</a>
                                        <a href="jobs" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Search jobs</a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                        <div class="img-wrapper wow fadeInUp" data-wow-delay="0.6s">
                                            <img src='/assets/img/slider/img-1.png' alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src='/assets/img/slider/bg-1.jpg' alt="">
                            <div class="carousel-caption text-left">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <h2 class="wow fadeInUp" data-wow-delay="0.4s">100+ Jobs waiting <br>for you!</h2>
                                        <p class="wow fadeInUp" data-wow-delay="0.6s">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. <br> Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet.</p>
                                        <a href="jobs" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="0.9s">See our jobs</a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                        <div class="img-wrapper wow fadeInUp" data-wow-delay="0.6s">
                                            <img src='/assets/img/slider/img-2.png' alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src='/assets/img/slider/bg-1.jpg' alt="">
                            <div class="carousel-caption text-left">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <h2 class="wow fadeInRight" data-wow-delay="0.4s">Post a job and hunt <br> amazing talents</h2>
                                        <p class="wow fadeInRight" data-wow-delay="0.6s">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. <br> Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet.</p>
                                        <a href="jobs/create" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Post Job</a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                        <div class="img-wrapper wow fadeInUp" data-wow-delay="0.6s">
                                            <img src='/assets/img/slider/img-3.png' alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                            <span class="carousel-control" aria-hidden="true"><i class="lni lni-chevron-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                            <span class="carousel-control" aria-hidden="true"><i class="lni lni-chevron-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div id="apply">
            <div class="container-fulid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 no-padding">
                        <div class="recruiter item-box">
                            <div class="content-inner">
                                <h5>I'm</h5>
                                <h3>Employer!</h3>
                                <p>Post a job to tell us about your project. We'll quickly match you with <br> the right jobseeker.</p>
                                <a href="jobs/create" class="btn btn-border-filled">Post a Job</a>
                            </div>
                            <div class="img-thumb">
                                <i class="lni lni-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 no-padding">
                        <div class="jobseeker item-box">
                            <div class="content-inner">
                                <h5>I'm</h5>
                                <h3>Jobseeker!</h3>
                                <p>Search the job you deserve. We'll quickly match you with <br> the right employer.</p>
                                <a class="btn btn-border-filled"><router-link to="/browse">Browse</router-link></a>
                            </div>
                            <div class="img-thumb">
                                <i class="lni lni-leaf"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section id="featured" class="section bg-cyan">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Featured Jobs</h2>
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="job-featured">
                                <div class="icon">
                                    <img src='/assets/img/features/img1.png' alt="">
                                </div>
                                <div class="content">
                                    <h3>Web Developer</h3>
                                    <p class="brand">Category</p>
                                    <div class="tags">
                                        <span><i class="lni lni-map-marker"></i> Location</span>
                                        <span><i class="lni lni-user"></i>Name</span>
                                    </div>
                                    <div class="tags">
                                        <span><i class="lni lni-calendar"></i>Deadline</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <a href="jobs" class="btn btn-common">Browse All Jobs</a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="how-it-works section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">How It Works?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                            <div class="work-process">
                        <span class="process-icon">
                        <i class="lni lni-user"></i>
                        </span>
                                <h4>Create an Account</h4>
                                <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="work-process step-2">
                        <span class="process-icon">
                        <i class="lni lni-search"></i>
                        </span>
                                <h4>Search Jobs</h4>
                                <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="work-process step-3">
                                <span class="process-icon">
                                <i class="lni lni-cup"></i>
                                </span>
                                <h4>Apply</h4>
                                <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="counter" class="section bg-gray">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="counter-box">
                                <div class="icon"><i class="lni lni-home"></i></div>
                                <div class="fact-count">
                                    <h3><span class="counter">90</span></h3>
                                    <p>Jobs Posted</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="counter-box">
                                <div class="icon"><i class="lni lni-save"></i></div>
                                <div class="fact-count">
                                    <h3><span class="counter">10</span></h3>
                                    <p>Applicants</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <div id="subscribe" class="section bg-cyan">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="subscribe-form">
                                <div class="form-wrapper">
                                    <div class="sub-title">
                                        <h3>Subscribe Our Newsletter</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et metus dolor sit amet,.</p>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-12 form-line">
                                                <div class="form-group form-search">
                                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                                                    <button type="submit" class="btn btn-common btn-search">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="img-sub">
                                <img class="img-fluid" src='/assets/img/sub.png' alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home",
    }

</script>m
