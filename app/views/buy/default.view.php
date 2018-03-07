<?php include VIEWS_PATH . DS . 'home_section.phtml'; ?>
<section class="buy_slide">
    <h1>The Easiest Way To Your Home</h1>
    <p>Get your dream home <strong>faster</strong>, <strong>easier</strong> and <strong>safer</strong> with Aqaratc local agents.</p>
</section>
<section class="how_aqaratc_slide">
    <div class="how_aqaratc_slide_content_wrapper clearfix">
        <h1>How it Works?</h1>
        <div class="how_content_container clearfix">
            <div class="how_block">
                <div class="icon make"></div>
                <h2>Free online request</h2>
                <p>Create your request in just seconds and enjoy our services.</p>
                <a href="#buy_home">Make a new request >></a>
            </div>
            <div class="how_block">
                <div class="icon save"></div>
                <h2>Save money and effort</h2>
                <p>We will match you with the best local Aqaratc Agent to buy your home faster, easier and safer.</p>
            </div>
            <div class="how_block">
                <div class="icon tour"></div>
                <h2>Take an online tour</h2>
                <p>Save your time by previewing and comparing the available options online before you make a visit.</p>
            </div>
            <div class="how_block">
                <div class="icon rate2"></div>
                <h2>Rate our agent</h2>
                <p>Our agents are here to support you at any time. We then rate them based on your satisfaction.</p>
            </div>
        </div>
    </div>
</section>
<section class="consult_slide">
    <div class="consult_slide_content_wrapper clearfix">
        <a name="buy_home"></a>
        <h1>Make your first request now</h1>
        <p>Our local agents are waiting to help you</p>
        <div class="request_container">
            <div class="action request clearfix">
                <form method="post" enctype="application/x-www-form-urlencoded">
                    <div class="left">
                        <div class="label select">
                            <label for="location">Property Type</label>
                            <select data-selectivity="true" name="location" id="location">
                                <option value="">Appartment</option>
                                <option value="">Villa</option>
                                <option value="">Duplex</option>
                                <option value="">Challet</option>
                            </select>
                        </div>
                        <div class="label">
                            <label for="budegt">Your Budget (EGP) <span class="red">*</span></label>
                            <input required type="text" name="budegt" id="budegt" placeholder="Ex: 2,000,000">
                        </div>
                        <div class="label select">
                            <label for="location">When do you need to buy?</label>
                            <select data-selectivity="true" name="location" id="location">
                                <option value="">Immediately</option>
                                <option value="">1 Month</option>
                                <option value="">3 Month</option>
                                <option value="">6 Month</option>
                            </select>
                        </div>
                    </div>
                    <div class="right">
                        <div class="label">
                            <label for="phone">Tell us more (optional) <span class="red">*</span></label>
                            <textarea placeholder="Area, number of rooms, ... etc" name="" id="" cols="30" rows="10"></textarea>
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="action register"></div>
            <div class="action thank_you"></div>
        </div>
        <div class="steps">
            <div class="step selected"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>
    </div>
</section>
<section class="browse_slide">
    <div class="browse_slide_content_wrapper clearfix">
        <div class="left">
            <h1>Browse our exclusive listing</h1>
            <p>Start by browsing our agents exclusive listing. Browse different property types from hundreds of properties available on Aqaratc.</p>
            <a href="" class="call_to_action">Browse our exclusive properties >></a>
        </div>
        <div class="right">
            <img src="/img/buy_browse_slide_image.jpg">
        </div>
    </div>
</section>