@extends('layouts.safetyapp')
@section('title', 'Contact Us')
@section('body')
    <section class="about-contact address py-5">
        <div class="container clearfix">
            <div class="row py-5 justify-content-between section-content">
                <div class="col-sm-5">
                    <h3>CALL US</h3>
                    <p class="paragraph mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged</p>
                    <p class="paragraph mb-0"><b>Phone : +966 012 012 001</b></p>
                    <p><b>Email : info@mobileseller.com</b></p>
                </div>
                <div class="col-sm-5">
                    <h3>OUR OFFICE</h3>
                    <p class="paragraph mt-4">Riyadh Olaya - next to King Fahd Library - Kingdom of Saudi Arabia. Use this
                        form for immediate follow-up if you would like us to serve you.. Which type of our professional
                        services are most important to you? Riyadh, Saudi Arabia</p>
                    <p class="mt-3">Riyadh, Saudi Arabia</p>
                </div>
            </div>
        </div>
        <div class="container contact mt-5">
            <form method="GET" action="">
                
                <div class="row p-3 p-md-5 mt-2 mt-sm-0">
                    <div class="col-12 text-center mb-5">
                        <h4>I hope your honorable person will fill out this form to serve you to the fullest</h4>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">I’m honored by Name</label>
                            <input type="text" class="form-control" value="" name="name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">Email Address</label>
                            <input type="text" class="form-control" value="" name="Email Address">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">Landline/Phone </label>
                            <input type="text" class="form-control" value="" name="phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">What do you want to inquire about?</label>
                            <input type="text" class="form-control" value="" name="subject">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">What programs &amp; services are you interested?</label>
                            <input type="text" class="form-control" value="" name="profession">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">Your Address</label>
                            <input type="text" class="form-control" value="" name="city">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-2">
                            <textarea style="height: 175px;" rows="5" class="form-control" placeholder="What do  you need"
                                name="message"></textarea>
                        </div>
                    </div>
    
                    <div class="col">
                        <button type="submit">Send Massage</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
    </section>
@endsection