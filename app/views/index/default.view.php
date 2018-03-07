<section class="home_slide">
    <div class="home_slide_content_wrapper">
        <a href="" class="mobile_menu"><i class="fa fa-bars"></i></a>
        <div class="overlay"></div>
        <ul class="mobile_menu">
            <a href="" class="close"><i class="fa fa-times"></i></a>
            <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="/buy"><i class="fa fa-shopping-bag"></i>Buy</a></li>
            <li><a href="/sell"><i class="fa fa-tag"></i>Sell</a></li>
            <li><a href="/agents"><i class="fa fa-group"></i>Our Agents</a></li>
            <li><a href="/howitworks"><i class="fa fa-question-circle"></i>How it works?</a></li>
            <?php if (isset($this->session->logged) && (int) $this->session->logged === 1) { ?>
                <li><a href="javascript:;"><i class="fa fa-user-circle"></i>Welcome, <?= $this->session->u->Username ?></a></li>
            <?php } else { ?>
                <li><a href="/auth/login"><i class="fa fa-sign-in"></i>Login</a></li>
                <li><a href="/auth/register"><i class="fa fa-edit"></i>Register</a></li>
            <?php } ?>
            <li><a href="javascript:;"><i class="fa fa-globe"></i>عربي</a></li>
        </ul>
        <div class="logo"><a href=""><img src="/img/logo.png"></a></div>
        <h1>Egypt</h1>
        <?php if (isset($this->session->logged) && (int) $this->session->logged === 1) { ?>
            <div class="authentication">
                <a class="user" href=""><i class="fa fa-user-circle"></i>Welcome, <?= $this->session->u->Username ?></a>
            </div>
        <?php } else { ?>
            <div class="authentication">
                <a class="login" href="/auth/login">Login</a>
                <span>Or</span>
                <a class="register" href="/auth/register">Sign Up</a>
            </div>
        <?php } ?>
        <div class="head_tool_bar">
            <ul>
                <li><a href="/buy">Buy</a></li>
                <li><a href="/sell">Sell</a></li>
                <li><a href="/agents">Our Agents</a></li>
                <li><a href="/howitworks">How it works?</a></li>
                <li><a href="javascript:;">عربي</a></li>
            </ul>
        </div>
        <div class="search_container">
            <h1>The Easiest Way To Your Home</h1>
            <ul>
                <li><a class="selected" href="javascript:;">Find A Home</a></li>
                <li><a href="javascript:;">Sell My Home</a></li>
                <li><a href="javascript:;">Home Evaluation</a></li>
            </ul>
            <form class="clearfix" method="post" enctype="application/x-www-form-urlencoded">
                <input type="text" name="q" placeholder="Enter a City or a Region">
                <button><i class="fa fa-search"></i></button>
            </form>
            <p>Find your dream home faster with <span>Aqaratc</span> agents</p>
        </div>
    </div>
</section>
<section class="why_aqaratc_slide">
    <div class="why_aqaratc_slide_content_wrapper clearfix">
        <h1>Why use Aqaratc?</h1>
        <p>We use the latest technologies to make home buying / selling process</p>
        <div class="why_content_container clearfix">
            <div class="why_block">
                <div class="icon faster"></div>
                <h2>Faster</h2>
                <p>We match you with the right expert agent to get the job done.</p>
            </div>
            <div class="why_block">
                <div class="icon easier"></div>
                <h2>Easier</h2>
                <p>It is a hassle-free service where our Agents do all the hard work for you from start to finish.</p>
            </div>
            <div class="why_block">
                <div class="icon safer"></div>
                <h2>Safer</h2>
                <p>Our Agents are very selective and we support you through the whole process.</p>
            </div>
        </div>
        <a href="">Apply now its free ></a>
    </div>
</section>
<section class="how_aqaratc_slide">
    <div class="how_aqaratc_slide_content_wrapper clearfix">
        <h1>How Aqaratc Works?</h1>
        <div class="how_content_container clearfix">
            <div class="how_block">
                <div class="icon make"></div>
                <h2>Make a request</h2>
                <p>Make your buying / selling online request on Aqaratc in just a second.</p>
                <a href="">Apply now its free ></a>
            </div>
            <div class="how_block">
                <div class="icon enjoy"></div>
                <h2>Enjoy the full-service</h2>
                <p>We match you with the right professional agent that is on your side 100% and he do all the hard work on your behalf to get the job done.</p>
            </div>
            <div class="how_block">
                <div class="icon rate"></div>
                <h2>Fast and hassle-free</h2>
                <p>We use the technology to make the buying and selling process faster and easier for you.</p>
            </div>
            <div class="how_block">
                <div class="icon fast"></div>
                <h2>Rate the agent</h2>
                <p>Rating our agents helps us maintain the quality of the service.</p>
            </div>
        </div>
    </div>
</section>
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