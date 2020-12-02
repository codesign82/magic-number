<?php
/*
 * Template Name: Magic Number Template
 * */
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <link href="<?=plugin_dir_url(__FILE__) . 'assets/styles/style.css'?>" rel="stylesheet">
  <title><?php the_title(); ?></title>
</head>
<?php wp_head();
$ba_logo = get_field('ba_logo');
$ba_logo_link = get_field('ba_logo_link');
$ba_footer_text = get_field('ba_footer_text');
$ba_facebook_link = get_field('ba_facebook_link');
$ba_twitter_link = get_field('ba_twitter_link');
$ba_linkedin_link = get_field('ba_linkedin_link');
$ba_youtube_link = get_field('ba_youtube_link');
?>
<body>
  <!-- test -->
  <header>
    <div class="container">
      <div class="header-content">
        <a href="<?=$ba_logo_link?>"><img alt="<?=$ba_logo['alt']?>" class="logo" src="<?=$ba_logo['url']?>"></a>
      </div>
    </div>
  </header>
  <div class="page-wrapper">
    <section class="step firstStep active" id="step-1">
      <div class="container">
        <div class="business-buyAbility wysiwyg-block">
          <?=get_field('ba_welcome_text')?>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
      </div>
    </section>
    <section class="step-wrapper">
      <div class="container">
        <div class="phases-and-steps">
          <div class="phases" style="display: none;"  >
            <div class="number active">1</div>
            <div class="number number-2">2
              <div class="border-top"></div>
            </div>
            <div class="number number-2">3
              <div class="border-top"></div>
            </div>
            <div class="number number-2">4
              <div class="border-top"></div>
            </div>
            <div class="number number-2">5
              <div class="border-top"></div>
            </div>
            <div class="number number-2">6
              <div class="border-top"></div>
            </div>
            <div class="number number-2">7
              <div class="border-top"></div>
            </div>
            <div class="number number-2">8
              <div class="border-top"></div>
            </div>
          </div>
          <div class="steps">
            <div class="step secondStep active" id="step-2">
              <div class="question-and-evaluation">
                <div class="question">
                  <div id="progress-container"><div class="progress"></div></div>
                  <h1 class="headline-1 ques-title"></h1>
                  <p class="paragraph ques-body"></p>
                  <div class="buttons">
                    <a class="btn btn-small prev-ques" href="#">Back</a>
                    <a class="btn btn-medium next-ques" href="#">
                      Next
                      <svg height="8" viewBox="0 0 5 8" width="5" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g>
                            <path d="M2.313-.063l2.756 3.84v.188L2.312 7.806H.458l2.358-3.931L.458-.063z" fill="#fff"/>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="step thirdStep" style="display: none;" id="step-3">
              <div class="result">
                <h1 class="headline-1" id="step-3-title"></h1>
                <div id="html2canvas">
                  <p class="paragraph text email">john.doe@gmail.com</p>
                  <p class="total-headline">Your business’ overall Buyability Strength:</p>
                  <svg class="total-gear" viewBox="0 0 293.4 293.4">
                    <circle class="gear-circle-white" clip-path="url(#gear-clip-path)"
                            fill="none"
                            stroke="#ffffff" stroke-width="45" stroke-miterlimit="10" cx="146.7" cy="146.7" r="124.1"/>
                      <circle class="gear-circle" clip-path="url(#gear-clip-path)"
                            fill="none"
                            stroke="#E87722" stroke-width="45" stroke-miterlimit="10" cx="146.7" cy="146.7" r="124.1"/>

                    <path class="gear-stroke" fill="none" stroke="#E87722" stroke-width="2" stroke-miterlimit="10" d="M165.4,27.5
	c8.4,1.3,16.7,3.5,24.7,6.6l13.2-17.4c1.4-1.9,4-2.4,6-1.2L229,26.8c2,1.2,2.9,3.7,2,5.8l-8.5,20.2c6.6,5.4,12.7,11.4,18,18
	l20.2-8.5c2.2-0.9,4.6-0.1,5.8,2L278,84.1c1.2,2,0.7,4.6-1.2,6l-17.4,13.2c3.1,8,5.3,16.2,6.6,24.7l21.7,2.8
	c2.3,0.3,4.1,2.3,4.1,4.6v22.8c0,2.3-1.7,4.3-4.1,4.6l-21.7,2.8c-1.3,8.4-3.5,16.7-6.6,24.7l17.4,13.2c1.9,1.4,2.4,4,1.2,6
	L266.6,229c-1.2,2-3.7,2.9-5.8,2l-20.2-8.5c-5.4,6.6-11.4,12.7-18,18l8.5,20.2c0.9,2.2,0.1,4.6-2,5.8L209.3,278
	c-2,1.2-4.6,0.7-6-1.2l-13.2-17.4c-8,3.1-16.2,5.3-24.7,6.6l-2.7,21.7c-0.3,2.3-2.3,4.1-4.6,4.1h-22.8c-2.3,0-4.3-1.7-4.6-4.1
	l-2.8-21.7c-8.4-1.3-16.7-3.5-24.7-6.6l-13.2,17.4c-1.4,1.9-4,2.4-6,1.2l-19.7-11.4c-2-1.2-2.9-3.7-2-5.8l8.5-20.2
	c-6.6-5.4-12.7-11.4-18-18L32.6,231c-2.2,0.9-4.6,0.1-5.8-2l-11.4-19.7c-1.2-2-0.7-4.6,1.2-6l17.4-13.2c-3.1-8-5.3-16.2-6.6-24.7
	l-21.7-2.8c-2.3-0.3-4.1-2.3-4.1-4.6v-22.8c0-2.3,1.7-4.3,4.1-4.6l21.7-2.8c1.3-8.4,3.5-16.7,6.6-24.7L16.6,90.1
	c-1.9-1.4-2.4-4-1.2-6l11.4-19.7c1.2-2,3.7-2.9,5.8-2l20.2,8.5c5.4-6.6,11.4-12.7,18-18l-8.5-20.2c-0.9-2.2-0.1-4.6,2-5.8L84,15.4
	c2-1.2,4.6-0.7,6,1.2l13.2,17.4c8-3.1,16.2-5.3,24.7-6.6l2.8-21.7c0.3-2.3,2.3-4.1,4.6-4.1h22.8c2.3,0,4.3,1.7,4.6,4.1L165.4,27.5z"/>

                    <path class="gear-inner-circle" fill="#F0EFEB" d="M146.7,249.2c56.5,0,102.5-46,102.5-102.5c0-56.5-46-102.5-102.5-102.5
	S44.2,90.2,44.2,146.7C44.2,203.1,90.2,249.2,146.7,249.2z"/>
                    <g class="gear-text" y="50%" data-svg-origin="97 55.359375" transform="matrix(1,0,0,1,0,20.4375)" style="transform-origin: 0px 0px;">
                        <text class="svg-percentage" x="77" y="160" fill="#e87722" style="font-size: 90px;">99</text>
                        <text class="svg-percentage" x="180" y="120" fill="#e87722" style="font-size: 50px;">%</text>
                    </g>
                  </svg>
                  <div class="gears-container"></div>
                </div>
                <div class="tabsWrapper" id="tabs">
                  <div class="tabNav"></div>
                  <div class="tabContentWrapper"></div>

                </div>
                <a class="btn btn-small next-category">Reset</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="footer-content">
          <div class="social-icons">
            <a class="icon facebook" href="<?=$ba_facebook_link?>">
              <svg height="30" viewBox="0 0 15 30" width="15" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path d="M9.708 8.96V6.6c0-1.151.767-1.418 1.306-1.418h3.312V.122L9.764.103c-5.063 0-6.214 3.775-6.214 6.19V8.96H.622v5.904h2.953v14.763h5.904V14.865h4.383l.212-2.318.326-3.586z"
                          fill="#fefefe"/>
                  </g>
                </g>
              </svg>
            </a>
            <a class="icon twitter" href="<?=$ba_twitter_link?>">
              <svg height="24" viewBox="0 0 30 24" width="30" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path
                      d="M29.677 3.19a12.214 12.214 0 0 1-3.478.938 6.006 6.006 0 0 0 2.664-3.3 12.23 12.23 0 0 1-3.85 1.45A6.086 6.086 0 0 0 20.596.393c-3.345 0-6.057 2.67-6.057 5.963 0 .467.054.92.155 1.358a17.286 17.286 0 0 1-12.484-6.23 5.874 5.874 0 0 0-.822 2.997c0 2.068 1.072 3.894 2.695 4.963A6.115 6.115 0 0 1 1.338 8.7v.075c0 .763.15 1.491.415 2.161a6.047 6.047 0 0 0 4.445 3.688 6.253 6.253 0 0 1-1.597.21c-.39 0-.768-.039-1.14-.11.773 2.37 3.01 4.094 5.659 4.142a12.27 12.27 0 0 1-7.523 2.553c-.49 0-.971-.028-1.447-.083a17.368 17.368 0 0 0 9.287 2.678c9.469 0 15.289-6.56 16.823-13.365a16.37 16.37 0 0 0 .396-4.37 12.191 12.191 0 0 0 3.02-3.088z"
                      fill="#fefefe"/>
                  </g>
                </g>
              </svg>
            </a>
            <a class="icon linked-in" href="<?=$ba_linkedin_link?>">
              <svg height="31" viewBox="0 0 30 31" width="30" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path d="M.342 15.831v14.46h6.89V10.606H.342z" fill="#fefefe"/>
                  </g>
                  <g>
                    <path d="M3.788.766a3.445 3.445 0 1 0 0 6.89 3.445 3.445 0 0 0 0-6.89z" fill="#fefefe"/>
                  </g>
                  <g>
                    <path
                      d="M29.717 16.65c-.467-3.71-2.17-6.042-7.186-6.042-2.975 0-4.973 1.105-5.79 2.656h-.085v-2.656H11.17V30.29h5.735v-9.756c0-2.573.487-5.064 3.668-5.064 3.137 0 3.39 2.942 3.39 5.23v9.59h5.905V19.474h.001c0-1.008-.042-1.953-.15-2.823z"
                      fill="#fefefe"/>
                  </g>
                </g>
              </svg>
            </a>
            <a class="icon youtube" href="<?=$ba_youtube_link?>">
              <svg height="22" viewBox="0 0 30 22" width="30" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path
                      d="M20.004 10.551l-7.974 4.308-.003-6.632V6.21l3.597 1.957zm8.367-8.898C27.248.428 25.989.42 25.414.35 21.28.04 15.085.04 15.085.04h-.015S8.871.04 4.741.351C4.164.42 2.908.428 1.782 1.653.899 2.587.611 4.711.611 4.711S.314 7.2.314 9.692v2.335c0 2.493.297 4.984.297 4.984s.288 2.122 1.171 3.055c1.126 1.227 2.602 1.187 3.257 1.315 2.362.236 10.038.31 10.038.31s6.203-.011 10.337-.321c.575-.072 1.834-.077 2.957-1.305.884-.933 1.172-3.054 1.172-3.054s.297-2.491.297-4.984V9.692c0-2.492-.297-4.982-.297-4.982s-.288-2.124-1.172-3.057z"
                      fill="#fefefe"/>
                  </g>
                </g>
              </svg>
            </a>
          </div>
          <div class="links">
             <?=$ba_footer_text?>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?=plugin_dir_url(__FILE__) . '/assets/js/scripts.js'?>"></script>
  </div>
</body>
</html>
