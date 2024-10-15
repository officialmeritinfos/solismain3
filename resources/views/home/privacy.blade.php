@extends('home.base')

@section('content')

    <div class="uk-section uk-section-small"> <div class="uk-container">
            <div class="uk-grid in-breadcrumb">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-help-center">
                    <div class="uk-card uk-card-primary uk-background-bottom-left uk-background-contain" style="background-image: url(img/in-help-center.png);">
                        <div class="uk-card-body">
                            <div class="uk-grid uk-flex uk-flex-center">
                                <div class="uk-width-3-5@m uk-text-center">
                                    <h1 class="uk-margin-small-top">
                                        We are concerned about our user's privacy</h1></h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--div class="uk-section"> <div class="uk-container">
     <div class="uk-grid">
     <div class="uk-width-1-1">
     <h1 class="uk-margin-remove-bottom">
    We are concerned about our user's privacy</h1>
     <p class="uk-text-lead uk-margin-remove-top">
    Work with us the way you want.</p>
     <p class="uk-margin-medium-bottom">
    Some believe you must choose between an online broker and a wealth
    management firm. At Monee, you don’t need to compromise. Whether you invest on your own,
    with an advisor, or a little of both — we can support
    you.</p>

     </div>
     </div>
     </div>
     </div-->




    <main>

        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-5@m">
                        <h1 class="uk-margin-remove">Our <span class="in-highlight">policy</span></h1><br>
                        <div class="uk-text-lead uk-text-muted myP uk-margin-small-top">
                            Our company understands the importance of personal information of every participant. Cooperating with our company,
                            you can be sure in privacy of your personal information and in its protection by our employees.
                            Our employees protect the collected by them information from unauthorized access.
                            We use a variety of technologies to reduce the risk of theft of accounts and receiving personal information of
                            our investors.
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-5@m">
                        <div class="uk-grid uk-grid-small" data-uk-grid="">
                            <div class="uk-width-auto@m uk-first-column ">
                                <div class='in-icon-wrapper theme-color'>
                                    <i class="fas fa-user fa-2x in-icon-wrap large primary-color"></i>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h3>Personal information</h3>
                                <div>We shall not share or sell your personal information registered on our website. These personal information includes</div>
                                <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                                    <div>
                                        <ul class="uk-list uk-list-bullet in-list-check">
                                            <li>Name and Last Name of the investor</li>
                                            <li>Email of investor</li>
                                            <li>Contact address of investor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-5@m">
                        <div class="">
                            Our company collects your personal information only with your consent and confidence in the security of your personal information on our project. Users should note, that the collection of personal information is only from adult. The rules of our company explain, how your information is collected and used. These rules apply only in our website. Information which is collected when you visit this site. This types of information are also the part of the personal information. Customer information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without the consent of the customer, other than for the express purpose of delivering the purchased product or service requested by the customer.
                            For your safety and protection, your credit card information is not stored on our servers. Our payment gateway provider, (insert providers name/s here), keeps this information encrypted and secure on your behalf.
                            The email address you provide for order processing, may be used to send you information and updates pertaining to your account, in addition to periodic company news, updates, and/or related product or service information, etc. If you decide to opt-in to our mailing list, you will receive emails that may include company news, updates, related product or service information, promotions, etc. However, you may opt-out at any time by (please enter the opt-out or unsubscribe process here. This may be something like clicking the unsubscribe button at the bottom of your emails.

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-5@m">
                        <div class="uk-grid uk-grid-small" data-uk-grid="">
                            <div class="uk-width-auto@m uk-first-column ">
                                <div class='in-icon-wrapper theme-color'>
                                    <i class="fas fa-server fa-2x in-icon-wrap large primary-color"></i>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h3>Information Storage</h3>
                                <div class="">Saving of information is only in our company or its equipment. Personal information is stored in
                                    accordance with the rules of storage and disposal, which are set for archive of our company.
                                    To receive your personal information, contact direct with our employees.</div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-5@m">
                        <div class="uk-grid uk-grid-small" data-uk-grid="">
                            <div class="uk-width-auto@m uk-first-column ">
                                <div class='in-icon-wrapper theme-color'>
                                    <i class="fas fa-phone fa-2x in-icon-wrap large primary-color"></i>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h3>Contact Information</h3>
                                <div class="">{{$siteName}} is glad to receive your comments concerning this "Privacy Policy". In case you think
                                    that {{$siteName}} does not follow the rules and violate this Statement, contact us
                                    at <a href='mailto:{{$web->email}}'>{{$web->email}}</a> We guarantee that we will take
                                    commercially reasonable efforts to discover and solve the problem.
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection
