<aside class="sidebar">
    <div id="socialmediabar">
        <p>Follow us on social media:</p>
    </div>
    <div id="mailinglist">
    <p>Join our monthly mailing list:</p>
        <form action="<?php bloginfo('stylesheet_directory'); ?>/mailinglist/" method="get"> <!-- temp use of get method, post will be used later as this in an unsecure method -->
          <input type="email" name="email" value="name@company.com">
          <input type="submit" value="Submit">
        </form>
    </div>
    <div id="locations">
    <div id="sidebarsections">
            <p>Trianode global offices:</p>
        </div>
        <div id="sidebarsections">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/frankfurt.jpg" id="cities" alt="Frankfurt">
            <p><a href="mailto:frankfurt@trianodeinvestment.com">Contact Frankfurt Office</a></p>
        </div>
        <div id="sidebarsections">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/newyork.jpg" id="cities" alt="New York">
            <p><a href="mailto:newyork@trianodeinvestment.com">Contact New York Office</a></p>
        </div>
        <div id="sidebarsections">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/london.jpg" id="cities" alt="London">
            <p><a href="mailto:london@trianodeinvestment.com">Contact London Office</a></p>
        </div>
    </div>
</aside>