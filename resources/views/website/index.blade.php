@include('website.layouts.header')
{{-- start hero section --}}

<div class="container-fluid">
    <!-- Content Section -->
    <div class="row">
        <img class="img1" src="{{ asset('website/images/backimg1.jpg') }}" alt="">
        <div class="container content ">
            <div class="container col-md-8 col-sm-8">
                <div class="row">
                    <div class="col-3" style="height: 250px; margin-left:150px">
                        <img class="img2" src="{{ asset('website/images/Logo1.png') }}" alt="">
                    </div>
                </div>
                <div class="row whyus ">
                    <div class="whyus">
                        <h1 id="whyus1">WHY US</h1>
                        <p id="content">Fibovix's investment approach is informed by three principles: we start by
                            understanding the client’s investment objectives; we seek the best risk-adjusted returns
                            within the scope of the mandate they give us; and we underpin our work with research, data,
                            and analytics. Research informs our investment decisions and product innovation. We research
                            major structural trends shaping the economy, markets, and asset prices.</p>
                        <!-- Add your additional content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- end hero section --}}

{{-- start whyfibovix section --}}


<div class="container-fluid">
    {{-- <img class="img-fluid" style="" src="{{asset('website/images/WHYFIBOVIX.png')}}"  alt=""> --}}
    <div class="row">
        <div class="backimg1 text-center py-5">
            <h2 id="fibovix">Why FIBO<span style="color: #1F2D87 ">VIX</span></h2>
            <div class="text-center">
                <p id="" class="px-5">Everything we do starts with our purpose. Re imagining the power of
                    investing. Connecting people for a better world. This is our purpose. This is Fibovix
                </p>
                <!-- Add your additional content here -->
            </div>
            <div class=" container">
                <div class="row ">

                    <div class="col-4">
                        <p id="rcorners2">
                        <div class="data">
                            <img src="{{ asset('website/images/Group.png') }}" width="50px" alt="">
                            <h5 id="hh">Needs</h5>
                            <p>
                                Your strategy is built on your objectives, concerns, and investment mindset.
                            </p>
                        </div>
                        </p>
                    </div>
                    <div class="col-4">
                        <p id="rcorners2">
                        <div class="data">
                            <img src="{{ asset('website/images/Group1.png') }}" width="50px" alt="">
                            <h5 id="hh">Advisor</h5>
                            <p>
                                Your adviser is dedicated to supporting you in achieving your objectives & will offer
                                tailored guidance from the start.
                            </p>
                        </div>
                        </p>
                    </div>
                    <div class="col-4">
                        <p id="rcorners2">
                        <div class="data">
                            <img src="{{ asset('website/images/Group2.png') }}" width="50px" alt="">
                            <h5 id="hh">Strategy</h5>
                            <p>Your adviser can recommend tax-minimization techniques as part of your overall investing
                                strategy.
                            </p>
                        </div>
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>



    {{-- end whyfibovix section --}}


    {{-- start cards --}}

    <div class="container">
        <div class="row text-center">
            <h2 id="fibovix"> <span style="color:#6246E5"> Services </span> </h2>
            <p>Finding the right opportunity. Conquering obstacles. Moving onward with the next phase. We provide a
                variety of options to assist you in achieving your objectives.
            </p>
        </div>
        <div class="row text-center">
            <p id="rcorners3"></p>
        </div>
    </div>

    <div class="contaback text-center mx-auto">
        <div class="slider owl-carousel mx-auto">
            <div class="card">
                <div class="img">
                    <img src="{{ asset('website/images/Imagea.png') }}" />
                </div>
                <div class="contents">
                    <div class="title">
                        Checking
                    </div>

                    <p>
                        Accounts that offer discounts on regular banking services, relationship-based maintenance fee
                        exemptions, and tiered interest rates.</p>
                    {{-- <a href="https://en.wikipedia.org/wiki/Sigiriya" target="_blank">
                                    <button>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </a> --}}
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="{{ asset('website/images/Imageb.png') }}" />
                </div>
                <div class="contents">
                    <div class="title">
                        Savings
                    </div>
                    <p>
                        A range of savings options, such as CDs and money market accounts, to help you reach your
                        savings objectives.</p>

                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="{{ asset('website/images/Imagec.png') }}" />
                </div>
                <div class="contents">
                    <div class="title">
                        Credit cards
                    </div>
                    <p>
                        A collection of outstanding credit cards with cash back choices, travel incentives, and expanded
                        features.

                    </p>

                </div>
            </div>

        </div>


        <div class="slider owl-carousel mx-auto">
            <div class="card">
                <div class="img">
                    <img src="{{ asset('website/images/Imagea.png') }}" />
                </div>
                <div class="contents">
                    <div class="title">
                        Cash Management
                    </div>

                    <p>
                        Solutions that provide competitive returns and easy access to your money. We offer convenient
                        cash management and investing options.

                    </p>

                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="{{ asset('website/images/Imageb.png') }}" />
                </div>
                <div class="contents">
                    <div class="title">
                        Rewards
                    </div>
                    <p>
                        We express our gratitude to you by offering you exclusive advantages and prizes related to the
                        various ways you collaborate with us.

                    </p>

                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="{{ asset('website/images/Imagec.png') }}" />
                </div>
                <div class="contents">
                    <div class="title">
                        Mobile and online access
                    </div>
                    <p>
                        A range of savings options, such as CDs and money market accounts, to help you reach your
                        savings objectives.
                    </p>

                </div>
            </div>
        </div>
    </div>

    {{-- end cards --}}

    {{-- start take action --}}
    <div class="container-fluid position-relative mb-5 bimg">
        <div class="container">
            <div class="row text-center ">
                <h2 id="fibovix">Take <span style="color:#6246E5; padding:5px;">Actions</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card shadow-lg" style="width: 15rem; border-radius:50%; height:15rem">
                        <div class="card-body ">
                            <span
                                class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                                <span class="fs-2">1</span>
                            </span>
                            <p class="card-text p-4 fs-5 fw-3">Find out what is important to you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card shadow-lg" style="width: 15rem; border-radius:50%; height:15rem">
                        <div class="card-body ">
                            <span
                                class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                                <span class="fs-2">2</span>
                            </span>
                            <p class="card-text p-4 fs-5 fw-3">Create a plan and a roadmap for yourself.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card shadow-lg" style="width: 15rem; border-radius:50%; height:15rem">
                        <div class="card-body ">
                            <span
                                class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                                <span class="fs-2">3</span>
                            </span>
                            <p class="card-text p-4 fs-5 fw-3">Recognize your options and take action.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="card shadow-lg" style="width: 15rem; border-radius:50%; height:15rem">
                        <div class="card-body ">
                            <span
                                class="position-absolute px-3 py-2 badge outerBadge bg-primary border border-light rounded-circle">
                                <span class="fs-2">4</span>
                            </span>
                            <p class="card-text p-4 fs-5 fw-3">Review & track your progress</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card shadow-lg" style="width: 15rem; border-radius:10%; height:15rem">
                        <div class="card-body ">
                            <p class="card-text border-0 bg-light ">Together with your advisor, determine your
                                priorities for the now and your long-term goals. If you are in need of an advisor, we
                                can assist you in finding one.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-1">
                    <div class="card shadow-lg" style="width: 15rem; border-radius:10%; height:15rem">
                        <div class="card-body ">
                            <p class="card-text border-0 bg-light ">With assistance that genuinely supports you, we'll
                                develop a customized strategy that is all about you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card shadow-lg" style="width: 15rem; border-radius:10%; height:15rem">
                        <div class="card-body ">
                            <p class="card-text border-0 bg-light">Find out more about your program alternatives and
                                investment connection. Then, with the help of your adviser, implement your strategy by
                                choosing from a variety of possible possibilities.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="card shadow-lg" style="width: 15rem; border-radius:10%; height:15rem">
                        <div class="card-body ">
                            <p class="card-text border-0 bg-light ">You can monitor your progress and adjust your
                                strategy in response to both anticipated and unforeseen events in life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- end take action --}}
        {{-- additional solution  --}}

        <div class="container mb-5 ">
            <div class="row text-center">
                <h2 id="fibovix">Additional <span style="color:#6246E5"> Solutions</span> </h2>
            </div>
            <div class="slider owl-carousel">
                <div class="card border p-0 shadow-lg col-lg-4 col-md-4 col-sm-12  ">
                    <div class="img">
                        <img
                            src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTNQx6dAy_XJh-wLZwOd5qGL63kg_JOHHqe8QJOsg5-C9HYswaFOAvHAkOx-KLHxsSU" />
                    </div>
                    <div class="contents">
                        <div class="title">
                            Diversify your investment
                        </div>
                        <p>Increase the diversity of your solutions to diversify your portfolio.
                        </p>
                        <a href="" target="_blank">
                            <button class="btn btn-primary">
                                Learn More
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card p-0 col-lg-4 shadow-lg col-md-4 col-sm-12">
                    <div class="img ">
                        <img src="https://classiclanka.com/wp-content/uploads/2022/06/Galle.webp" />
                    </div>
                    <div class="contents">
                        <div class="title">
                            Investment consolidation
                        </div>
                        {{-- <div class="sub-title">
                            Known for it's historic fort
                        </div> --}}
                        <p>
                            Investing account consolidation will help you see the larger picture.

                            <br><br>
                        </p>
                        <a href="" target="_blank">
                            <button class="btn btn-primary">
                                Learn More
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card border p-0 shadow-lg col-lg-4 col-md-4 col-sm-12">
                    <div class="img">
                        <img src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg" />
                    </div>
                    <div class="contents text-center">
                        <div class="title ">
                            Online Account view
                        </div>

                        <p>
                            Combine your online banking and investment.

                            <br><br>

                        </p>
                        <a href="" target="_blank">
                            <button class="btn btn-primary text-end">
                                Learn More
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        {{-- end additional solution --}}
    </div>

    @include('website.layouts.footer')
