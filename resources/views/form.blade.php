@extends('layouts.home')

@section('title')
Contact Form Demo Project
@endsection

@section('content')
<section id="AdSection">
    <div class="container boxes">
        <div class="box">
            <img data-src="/images/icon-1.png" alt="play-icon" class="ad-image lazyload" />
            <p class="ad-desc">
                Transform Your Business with Our Strategic Advertising.
            </p>
        </div>
        <div class="box">
            <img data-src="/images/icon-2.png" alt="screncast-o-matic-icon" class="ad-image lazyload" />
            <p class="ad-desc">
                Unleash Your Full Potential with Our Advertising Services.
            </p>
        </div>
    </div>
</section>

<section id="FormSection">

    <!-- Ajax response goes here -->
    <div class="container messages">
        <div id="response-message"></div>
    </div>
    <!-- end ajax response -->


    <!-- Return Response for none-ajax submissions. -->
    <div class="container messages">
        @include('includes.messages')
    </div>
    <!-- end non-ajax response. -->

    
    <div class="container">
        <form id="contact-form" action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="name">
                        Your Name <span class="text-danger">*</span>
                    </label>
                    <br>
                    <input type="text" name="name" id="name" placeholder="Enter your full names" required/>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="email">
                        Email <span class="text-danger">*</span>
                    </label>
                    <br>
                    <input type="text" name="email" id="email" placeholder="Enter your email address" required/>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group" id="phone-form-group">
                    <label for="phone">
                        Phone Number <span class="text-danger">*</span>
                    </label>
                    <br>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required/>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="subject">
                        Subject <span class="text-danger">*</span>
                    </label>
                    <br>
                    <select name="subject" id="subject" required>
                        <option value="Social Media Services">Social</option>
                        <option value="Branding Strategies">Branding Strategies</option>
                        <option value="Graphic Design">Graphic Design </option>
                        <option value="Website Development">Website Development </option>
                        <option value="Content Creation">Content Creation </option>
                        <option value="SEO Services">SEO Services </option>
                    </select>
                </div>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="message">
                        Your Message
                    </label>
                    <br>
                    <textarea name="message" id="message" rows="5"></textarea>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group submit-group">
                    <button type="submit" class="btn-submit" id="submit-btn">
                        Submit
                    </button>
                </div>
                <div class="form-group">
                    <div class="form-text-small">
                        <span class="text-danger">* Required Fields.</span> Please be aware that we cannot ensure that communications sent over the Internet are secure. This includes correspondence sent through this form or by email. If you are uncomfortable with such risks, you may contact us by phone instead of using this form.
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@section('special-scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="/js/formevent.js"></script>
@endsection