<?php include VIEWS_PATH . DS . 'home_section.phtml'; ?>
<section class="buy_slide valuation">
    <h1 class="brown">What does your home worth</h1>
    <p>Our agents will help you Get your home's current market value for <string>free</string></p>
</section>
<section class="consult_slide brown">
    <div class="consult_slide_content_wrapper clearfix">
        <a name="buy_home"></a>
        <h1>Request your home value now</h1>
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
                            <label for="area">Area <span class="red">*</span></label>
                            <input required type="text" name="area" id="area" placeholder="Ex: 297m">
                        </div>
                        <div class="label">
                            <label for="area">Detailed address <span class="red">*</span></label>
                            <input required type="text" name="area" id="area" placeholder="Ex: Cairo, Zamalek">
                        </div>
                    </div>
                    <div class="right">
                        <div class="label">
                            <label for="phone">Tell us more (optional) <span class="red">*</span></label>
                            <textarea placeholder="Floor NO, number of rooms, ... etc" name="" id="" cols="30" rows="10"></textarea>
                            <input class="brown" type="submit" name="submit" value="Submit">
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