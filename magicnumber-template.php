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
        
        <div class="links">
          <a class="small-link" href="http://buyablebusiness.com/" target="_blank">Buyable</a>
          <a class="small-link" href="https://tractionequity.com/steve-preda/" target="_blank">About</a>
        </div>
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
          <script>
            function addCommas(nStr)
            {
              nStr += '';
              x = nStr.split('.');
              x1 = x[0];
              x2 = x.length > 1 ? '.' + x[1] : '';
              var rgx = /(\d+)(\d{3})/;
              while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
              }
              return x1 + x2;
            }
          </script>
          <div class="steps">
            <div class="step secondStep active" id="step-2">
              <div class="question-and-evaluation">
                <div class="question">
                  <h3 class="headline-1">Magic Number Calculator</h3>
                  <div id="magic_num">
                    <label class="new-headline">Annual Retirement Burn Rate (VERIFY)</label>
                    <form style="display: block !important;" class="form-horizontal" id="magic_num_form">
                      <div class="form-group">
                        <label class="label-control">
                          <strong><span class="orange">V</span></strong>acations, travel, memberships
                        </label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" type="text" step="0.10" id="M1" name="M1" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control"><strong><span class="orange">E</span></strong>ntertainment, gifts to self/others</label>
                        <div class="input-wrapper">
          
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" type="text" step="0.10" id="M2" name="M2"  value="" placeholder="" />
                          </div><!-- input group-->
        
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control"><strong><span class="orange">R</span></strong>ent, mortage, utilities, maintenance</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" type="text" step="0.10" id="M3" name="M3" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control"><strong><span class="orange">I</span></strong>nsurance (property, life, health)</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" type="text" step="0.10" id="M4" name="M4" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control"><strong><span class="orange">F</span></strong>ood, transportation, and household goods</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" type="text" step="0.10" id="M5" name="M5" value="" placeholder="" />
                          </div><!-- inout group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control"><strong><span class="orange">Y</span>our Annual Cash Burn In Retirement</strong></label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" disabled type="text" step="0.10" id="M6" name="M6" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Retirement Nest-egg multiplier</label>
                        <div class="M7_wrapper">
                        <div class=" M7_per_container" >
                          <div class="input-group" id="M7_per_container">
<!--                            <span class="input-group-addon"><i class="fa fa-percent">%</i></span>-->
                            <input style="display: block !important;" style="text-align: center" class="form-control magic_number_class"  type="text" step="0.10" id="M7_per" name="M7_per" value="25" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-1 -->
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" disabled  type="text" step="0.10" id="M7" name="M7" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                        </div>
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Add: Desired Posessions</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" type="text" step="0.10" id="M8" name="M8" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Add: Giving Goals</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class" type="text" step="0.10" id="M9" name="M9" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <br>
                      <br>
                      <br>
                      <div class="form-group">
                        <label style="font-weight: bold" class="label-control your-magic-number">Your Magic Number</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input style="display: block !important;" class="form-control magic_number_class the_one_and_only_magic_number" disabled type="text" step="0.10" id="M10" name="M10" value="" placeholder="" />
                          </div><!--  input group-->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
    
                    </form>
                  </div>
                  <div class="buttons">
                    <a class="btn btn-small prev-ques" href="#">Back</a>
                    <a onclick="window.print()" class="btn btn-medium next-ques" href="#">Print</a>
                    <a class="btn btn-medium next-ques next-to-growth" target="_blank">
                      Value & Growth
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
            <div class="step secondStep thirdStep" id="step-3">
              <div class="question-and-evaluation">
                <div class="question">
                  <h1 class="headline-1" style="margin-bottom: 0">Thanks For Your Time, Email Has Been Sent!</h1>
                  <div class="buttons">
                    <a class="btn btn-small prev-ques" href="#">Back</a>
                  </div>
                </div>
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
    <script src="http://www.decorplanit.com/plugin/autoNumeric-1.9.45.js" ></script>
    <script src="<?=plugin_dir_url(__FILE__) . '/assets/js/scripts.js'?>"></script>
    <script>
      jQuery(document).ready(function($) {
        $(".magic_number_class").bind('keyup mouseup', function () {
          magic_number_calc();
        });
        function magic_number_calc()
        {
          var m1=+$("#M1").autoNumeric('get');
          console.log(m1,'a7a');
          var m2=+$("#M2").autoNumeric('get');
          var m3=+$("#M3").autoNumeric('get');
          var m4=+$("#M4").autoNumeric('get');
          var m5=+$("#M5").autoNumeric('get');
        
          var m6=+(m1+m2+m3+m4+m5);
          $("#M6").autoNumeric('set',m6||0);
          var per=+Math.round($("#M7_per").autoNumeric('get'));
          var m7=+(m6*per);
          $("#M7").autoNumeric('set',m7||0);
        
          var m7=+$("#M7").autoNumeric('get');
          var m8=+$("#M8").autoNumeric('get');
          var m9=+$("#M9").autoNumeric('get');
          var m10=+(m7+m8+m9);
          $("#M10").autoNumeric('set',m10||0);
          $("#T1").autoNumeric('set',m10||0);
        }// function magic_numbre_calc
      });
  
  
    </script>

  </div>
</body>
</html>
