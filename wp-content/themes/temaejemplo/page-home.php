<?php get_header()?>
<?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
        
?>
<div class="banner">
            <div class="banner-top">
                <h2>🤝🏼 Come join us for the chamber meet and greet Wednesday at 7:00 p.m.</h2>
                <a href="join.html">Join Us</a>
            </div>
        </div>

        <div class="responsive-width">
            <div id="hero" class="mockup-style">
                <picture>
                    <source media="(max-width: 520px)" srcset="<?php echo get_template_directory_uri();?>/images/wdd230-org-small.jpg">
                    <source media="(max-width: 1100px)" srcset="<?php echo get_template_directory_uri();?>/images/wdd230-org-medium.jpg">
                    <img src="<?php echo get_template_directory_uri();?>/images/wdd230-org-large.jpg" alt="hero-image">  
                </picture>
                <h2>Welcome to the Lima North Chamber</h2>
                <p></p>
                <div class="read-more">
                    <a href="#">Read more</a>
                </div>
                <div class="cta">
                    <p>Have questions about our services?<br>Contact us and our call center service will contact you asap!</p>
                    <a href="join.html">Contact Us!</a>
                </div>
            </div>

            <div id="event" class="mockup-style secondTitle">
                <h2>Events</h2>
                <p><strong>15th July </strong>- Discover how social media increase your sales.</p>
                <p><strong>22th July </strong>- How to do a good market study?</p>
                <div class="read-more eventBtn">
                    <a href="#">Read more</a>
                </div>
            </div>
            <div id="weather" class="mockup-style secondTitle">
                <h2>Weather</h2>
                <div class="weather-data">
                    <figure>
                        <img src="#" alt="weather-img" id="weather-ic">
                    </figure>
                    
                    <div>
                        <p><span id="temperature" class="temp"></span> ºC</p>
                    </div>
                </div>
                <h3 id="condition"></h3>
                <hr>
                <div class="weather-result">
                    <div>
                        <p>Wind Speed: <span id="windS"></span> m/s</p>
                        <p>Wind Chill: <span id="windChild"></span> </p>
                    </div>
                </div>
                <div class="read-more openWeather">
                    <a href="https://openweathermap.org/">By <strong>OpenWeatherMap</strong>*</a>
                </div>
            </div>
            <div id="news" class="mockup-style secondTitle">
                <h2>News</h2>
                <p>More tec companies prefer to contract remote employes.- <br>Besides the devastating effects, the pandemic had on the world. There are other effects that for ones are good and for others not. Today we are going to talk about remote work...</p>
                <div class="read-more join-us">
                    <a href="#">Read more</a>
                </div>
            </div>
            <div id="spotlight" class="mockup-style secondTitle">
                
            </div>
            <div id="join" class="mockup-style secondTitle">
                <h2>Looking for the right place to start your business?</h2>
                <p>Lima North Chamber has the solution. Join us! and discover all benefits we have for you.</p>
                <div class="read-more join-us">
                    <a href="join.html">Join Us</a>
                </div>
            </div>
            
        </div>
        <div class="responsive-intern license">
            <p>*All weather data is open and licensed by <a href="https://openweathermap.org/"><strong>OpenWeatherMap</strong></a>.</p>
        </div>

<?php get_footer() ?>

