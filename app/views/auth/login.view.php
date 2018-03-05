<?php include VIEWS_PATH . DS . 'home_section.phtml'; ?>
<section class="consult_slide">
    <div class="consult_slide_content_wrapper clearfix">
        <h1>Get Your Free Consultation Now</h1>
        <p>Our consultants are here to help you anytime</p>
        <div class="browser">
            <div class="browser_bar">
                <a class="button close" href="javascript:;"></a>
                <a class="button minimize" href="javascript:;"></a>
                <a class="button maximize" href="javascript:;"></a>
                <div class="url">https://www.aqaratc.com/consult</div>
            </div>
            <div class="consult_form clearfix">
                <form method="post" enctype="application/x-www-form-urlencoded">
                    <div class="left">
                        <div class="label select">
                            <label for="location">What location you are consulting for?</label>
                            <select data-selectivity="true" name="location" id="location">
                                <option value="">New Cairo</option>
                                <option value="">5th Settlement</option>
                                <option value="">10th Of October</option>
                                <option value="">Rehab City</option>
                                <option value="">Shourouq City</option>
                            </select>
                        </div>
                        <div class="label">
                            <label for="email">Email <span class="red">*</span></label>
                            <input required type="email" name="email" id="email" placeholder="example@example.com">
                        </div>
                        <div class="label">
                            <label for="phone">Phone <span class="red">*</span></label>
                            <input required type="text" name="phone" id="phone" placeholder="example: +2010000101010">
                        </div>
                    </div>
                    <div class="right">
                        <div class="label">
                            <label for="phone">What can we help you with? <span class="red">*</span></label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>