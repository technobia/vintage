<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/28/16
 * Time: 10:37 AM
 */
get_header(); ?>
    <div class="container-fluid container-responsive">
        <div id="contact" class="container">
            <div class="left col-xs-12 col-sm-8">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                }
                ?>
            </div>
            <div class="right col-xs-12 col-sm-4">
                <h4>MTV IMPORT EXPORT TRADING JOINT STOCK COMPANY</h4>
                <div><span>Hotline:</span> 0903 91 95 81</div>
                <div><span>Wine Consultant:</span> 0989 988 509</div>
                <div><span>Showroom:</span> Vintage , 01 Thao Dien str., Dist. 2, HCMC</div>
                <div><span>Email</span><a href="mailto:info@vintage.vn">info@vintage.vn</a></div>
            </div>
            <div class="col-xs-12 no-padding" style="margin-top: 30px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1218137884075!2d106.7360913142265!3d10.801981292304168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317526111fde1f63%3A0xd67bec1254c79d98!2zMSBUaOG6o28gxJBp4buBbiwgUXXhuq1uIDIsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1480345964367" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

<?php get_footer(); ?>