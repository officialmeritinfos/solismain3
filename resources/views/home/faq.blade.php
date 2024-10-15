@extends('home.base')

@section('content')
    <!-- START SECTION BANNER -->
    <section class="page-title centred" style="background-image: url(assets/images/background/page-title);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index">{{$siteName}}</a></li>
                </ul>
                <h1>FAQs</h1>
            </div>
        </div>
    </section>
    <!-- END SECTION TEAM -->
    <section class="skills-section">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div id="content_block_13">
                        <div class="content-box">
                            <div class="anim-icon">
                                <div class="icon icon-1 rotate-me" style="background-image: url(assets/images/icons/anim-icon-1.png);"></div>
                                <div class="icon icon-2 float-bob-y" style="background-image: url(assets/images/icons/anim-icon-3.png);"></div>
                            </div>
                            <div class="sec-title-two">
                                <h5>{{$siteName}}</h5>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <div class="">

                                <details open>
                                    <summary>What is {{$siteName}}</summary>
                                    <div class="faq__content">
                                        <p>{{$siteName}} is an innovative Investment platform established by a team of professional traders focusing mainly on cryptocurrency trading and investment over multiple exchanges and market Investing in {{$siteName}} is a very good recommendation for those who are looking for a simple and reliable Investment platform with passive income</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>How do I create account</summary>
                                    <div class="faq__content">
                                        <p>Registration process is very easy Simply click GET STARTED fill in the required fields and click REGISTER</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>How do I make a deposit</summary>
                                    <div class="faq__content">
                                        <p>To make a successful deposit please follow the steps carefully Login to your {{$siteName}} account DASHBOARD click DEPOSIT choose any of the Investment Plan of your choice Enter Amount choose payment option as Wallet and click on Make Deposit</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>How long does it take my deposit to be confirmed</summary>
                                    <div class="faq__content">
                                        <p>Your deposit will be confirmed immediately after verification</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>How do I find the company official wallet address for payment</summary>
                                    <div class="faq__content">
                                        <p>You can find the company official wallet address after clicking on Make Deposit kindly copy carefully the wallet address you want to use for payment or contact our customer support for more information to get any wallet address of your choice</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>How long does it take my profits to reflect on my {{$siteName}} Account Balance</summary>
                                    <div class="faq__content">
                                        <p>Your profits will reflect on your {{$siteName}} Account Balance immediately after your mining section is completed</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>Can I reinvest from my Account Balance</summary>
                                    <div class="faq__content">
                                        <p>Yes Kindly follow the same process of making deposit but choose payment method as Account Balance</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>Can I upgrade my active Investment to a higher plan</summary>
                                    <div class="faq__content">
                                        <p>Yes you can upgrade your Investment to a higher plan</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>How do I make a Withdrawal</summary>
                                    <div class="faq__content">
                                        <p>Login to your account DASHBOARD click on WITHDRAW Add Wallet Enter Amount Select Wallet and click on Make Withdrawal</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>How long does it take for my Withdrawal to be processed</summary>
                                    <div class="faq__content">
                                        <p>Your withdrawal will be processed immediately after confirmation you might receive your payment within 24 hours due to any possible system delay or payment traffic</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>Can I withdraw both my profits and capital after mining section is completed</summary>
                                    <div class="faq__content">
                                        <p>Yes you can withdraw both your profits and capital</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>Can I have multiple accounts</summary>
                                    <div class="faq__content">
                                        <p>We do not allow multiple accounts except only for our investors on the VIP plan</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>Is it possible to transfer from my {{$siteName}} Account to other accounts</summary>
                                    <div class="faq__content">
                                        <p>Yes it is possible to transfer from your account to other accounts but only available to our investors on the VIP Plan</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>How can I earn a referral commission</summary>
                                    <div class="faq__content">
                                        <p>You can earn a referral commission if someone register with your referral link and make an active deposit</p>
                                    </div>
                                </details>

                                <details open>
                                    <summary>What does UTC mean in {{$siteName}}</summary>
                                    <div class="faq__content">
                                        <p>In {{$siteName}} UTC means United Kingdom Trading Certificate for bonifide membership</p>
                                    </div>
                                </details>

                                <!--<details open>-->
                                <!--    <summary>What is maintenance fee</summary>-->
                                <!--    <div class="faq__content">-->
                                <!--        <p>Some of our product plan has a maintenance fee that covers all costs related to mining including Electricity cost Cooling Maintenance work and Hosting services The fee is fixed after one month of mining protocol and paid in any coin</p>-->
                                <!--    </div>-->
                                <!--</details>-->

                                <details open>
                                    <summary>Can i withdraw referral bonus in all plan?</summary>
                                    <div class="faq__content">
                                        <p>You can withdraw bonus in all of the investment plan except the oil and gas plan/VIP the both plan most be activated before accessing the chain bonus! Bonus will be halted after two weeks!</p>
                                    </div>
                                </details>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
