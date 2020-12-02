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
                  <h3 class="headline-2">Magic Number Calculator</h3>
                  <h1 class="headline-1">Annual Retirement Burn Rate (V.E.R.I.F.Y.)</h1>
                  <div id="magic_num">
                    <form class="form-horizontal" id="magic_num_form">
                      <div class="form-group">
                        <label class="label-control">
                          Vacations, travel, memberships
                        </label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" type="number" step="0.10" id="M1" name="M1" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Entertainment, gifts to self/others</label>
                        <div class="input-wrapper">
          
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" type="number" step="0.10" id="M2" name="M2"  value="" placeholder="" />
                          </div><!-- input group-->
        
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Rent, mortage, utilities, maintenance</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" type="number" step="0.10" id="M3" name="M3" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Insurance (property, life, health)</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" type="number" step="0.10" id="M4" name="M4" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Food, transportation and living</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" type="number" step="0.10" id="M5" name="M5" value="" placeholder="" />
                          </div><!-- inout group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Your Annual Cash Burn In Retirement</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" disabled type="number" step="0.10" id="M6" name="M6" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Retirement Nest-egg multiplier</label>
                        <div class="M7_wrapper">
                        <div class=" M7_per_container" >
                          <div class="input-group" id="M7_per_container">
                            <span class="input-group-addon"><i class="fa fa-percent">%</i></span>
                            <input class="form-control magic_number_class"  type="number" step="0.10" id="M7_per" name="M7_per" value="12.5" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-1 -->
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" disabled  type="number" step="0.10" id="M7" name="M7" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                        </div>
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Add: Desired Posessions</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" type="number" step="0.10" id="M8" name="M8" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <div class="form-group">
                        <label class="label-control">Add: Giving Goals</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class" type="number" step="0.10" id="M9" name="M9" value="" placeholder="" />
                          </div><!-- input group -->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
      
                      <br>
                      <br>
                      <br>
                      <div class="form-group">
                        <label style="font-weight: bold" class="label-control ">Your Magic $ Number</label>
                        <div class="input-wrapper">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-dollar">$</i></span>
                            <input class="form-control magic_number_class the_one_and_only_magic_number" disabled type="number" step="0.10" id="M10" name="M10" value="" placeholder="" />
                          </div><!--  input group-->
                        </div><!-- col-md-2 -->
                      </div><!-- form-group -->
    
                    </form>
                  </div>
                  <div class="buttons">
                    <a class="btn btn-small prev-ques" href="#">Back</a>
                    <a class="btn btn-medium next-ques send-email" href="#">
                      Email me my calculation
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?=plugin_dir_url(__FILE__) . '/assets/js/scripts.js'?>"></script>
 
    <script>
      jQuery(document).ready(function($) {
      function clearformat(v)
      {
      
        if(v==NaN || v=="")
        {
          return 0;
        }else{
          return v.replace(",","");
        }
      }
      $(".magic_number_class").bind('keyup mouseup', function () {
        magic_number_calc();
      });
      function magic_number_calc()
      {
        var m1=parseFloat(clearformat($("#M1").val()));
        var m2=parseFloat(clearformat($("#M2").val()));
        var m3=parseFloat(clearformat($("#M3").val()));
        var m4=parseFloat(clearformat($("#M4").val()));
        var m5=parseFloat(clearformat($("#M5").val()));
      
        var m6=parseFloat(m1+m2+m3+m4+m5);
        $("#M6").val(m6.toFixed(2));
        var per=clearformat($("#M7_per").val());
        var m7=parseFloat(m6*per);
        $("#M7").val(m7.toFixed(2));
      
        var m7=parseFloat(clearformat($("#M7").val()));
        var m8=parseFloat(clearformat($("#M8").val()));
        var m9=parseFloat(clearformat($("#M9").val()));
        var m10=parseFloat(m7+m8+m9);
        $("#M10").val(m10.toFixed(2));
        $("#T1").val(m10.toFixed(2));
      
      }// function magic_numbre_calc
      });

    </script>
  </div>
</body>
</html>
