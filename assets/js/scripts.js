jQuery(()=>{

//region define variables
  const esoEmail = document.querySelector('.eso-email');
  const step1 = document.querySelector('#step-1');
  const step2 = document.querySelector('#step-2');
  const step3 = document.querySelector('#step-3');
  const prev2 = step2.querySelector('.prev-ques');
  const prev3 = step3.querySelector('.prev-ques');
  const sendEmail = document.querySelector('.send-email');
  const result = document.querySelector('.the_one_and_only_magic_number');

//endregion define variables


//region fix container
  function fixContainer() {
    if (window.innerWidth > 1500) {
      document.documentElement.style.fontSize = `${10}px`;
    } else if (window.innerWidth >= 1024) {
      document.documentElement.style.fontSize = `${10 * window.innerWidth / 1500}px`;
    } else {
      document.documentElement.style.fontSize = `${10}px`;
    }
  }
  
  fixContainer();
  window.addEventListener('resize', fixContainer);
//endregion fix container


//region Initializing step 2
  esoEmail.addEventListener('input',e=>window.sendToEmail = esoEmail.value)
  document.addEventListener('wpcf7mailsent', function (event) {
    window.sendToEmail = esoEmail.value;
    step1.classList.remove('active');
    step1.nextElementSibling.classList.add('active');
  }, false);
  
  prev2.addEventListener('click',function (){
    step2.classList.remove('active')
    step1.classList.add('active')
  })
  prev3.addEventListener('click',function (){
    step3.classList.remove('active')
    step2.classList.add('active')
  })
  sendEmail.addEventListener('click', function (event) {
    console.log(wp,wp.ajax,result,window.sendToEmail);
    wp.ajax.post('send_results_email', {result, email: window.sendToEmail})
      .done(function (response) {
        console.log('email sent with the results');
        step2.classList.remove('active')
        step3.classList.add('active')
      })
      .fail(function () {
        console.log('email failed')
      });
  }, false);
//endregion Initializing step 2
})