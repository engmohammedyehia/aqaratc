<?php include VIEWS_PATH . DS . 'home_section.phtml'; ?>
<section class="sell_slide">
    <h1>Sell your home faster</h1>
    <p>Our agents provide full services from start to finish.</p>
</section>
<section class="how_aqaratc_slide">
    <div class="how_aqaratc_slide_content_wrapper clearfix">
        <h1>How it Works?</h1>
        <div class="how_content_container clearfix">
            <div class="how_block">
                <div class="icon make"></div>
                <h2>Free online request</h2>
                <p>Create your request in just seconds and enjoy our services.</p>
                <a href="#sell_home">Make a new request >></a>
            </div>
            <div class="how_block">
                <div class="icon save"></div>
                <h2>Save money and effort</h2>
                <p>We will match you with the best local Aqaratc Agent to sell your home faster, easier and safer.</p>
            </div>
            <div class="how_block">
                <div class="icon marketing"></div>
                <h2>Marketing your home</h2>
                <p>Aqaratc Agent will make online marketing for the home to sell it faster.</p>
            </div>
            <div class="how_block">
                <div class="icon rate2"></div>
                <h2>Get you cash and Rate</h2>
                <p>Our agents are here to support you at any time. We then rate them based on your satisfaction.</p>
            </div>
        </div>
    </div>
</section>
<section class="consult_slide orange">
    <div class="consult_slide_content_wrapper clearfix">
        <a name="sell_home"></a>
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
                            <label for="price">Price (EGP) <span class="red">*</span></label>
                            <input required type="email" name="price" id="price" placeholder="Ex: 2,000,000">
                        </div>
                        <div class="label select">
                            <label for="location">When do you need to sell?</label>
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
                            <input class="orange" type="submit" name="submit" value="Submit">
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
            <h1>What does your home worth?</h1>
            <p>Before selling your home you need to know how much does it worth so you find the price that suits you.</p>
            <a href="" class="call_to_action">Get your free home valuation >></a>
        </div>
        <div class="right">
            <img src="/img/sell_browse_slide_image.jpg">
        </div>
    </div>
</section>