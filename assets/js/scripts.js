//region add cogwheel clip path
document.body.innerHTML =
    '<svg viewBox="0 0 293.4 293.4" enable-background="new 0 0 293.4 293.4" opacity="0" id="gear-clip-path-def-svg">' +
    '    <defs>' +
    '        <clipPath id="gear-clip-path-alt">' +
    '            <path id="clipping_path-alt" d="M165.4,27.5c8.4,1.3,16.7,3.5,24.7,6.6l13.2-17.4c1.4-1.9,4-2.4,6-1.2L229,26.8' +
    '\tc2,1.2,2.9,3.7,2,5.8l-8.5,20.2c6.6,5.4,12.7,11.4,18,18l20.2-8.5c2.2-0.9,4.6-0.1,5.8,2L278,84.1c1.2,2,0.7,4.6-1.2,6l-17.4,13.2' +
    '\tc3.1,8,5.3,16.2,6.6,24.7l21.7,2.8c2.3,0.3,4.1,2.3,4.1,4.6v22.8c0,2.3-1.7,4.3-4.1,4.6l-21.7,2.8c-1.3,8.4-3.5,16.7-6.6,24.7' +
    '\tl17.4,13.2c1.9,1.4,2.4,4,1.2,6L266.6,229c-1.2,2-3.7,2.9-5.8,2l-20.2-8.5c-5.4,6.6-11.4,12.7-18,18l8.5,20.2c0.9,2.2,0.1,4.6-2,5.8' +
    '\tL209.3,278c-2,1.2-4.6,0.7-6-1.2l-13.2-17.4c-8,3.1-16.2,5.3-24.7,6.6l-2.7,21.7c-0.3,2.3-2.3,4.1-4.6,4.1h-22.8' +
    '\tc-2.3,0-4.3-1.7-4.6-4.1l-2.8-21.7c-8.4-1.3-16.7-3.5-24.7-6.6l-13.2,17.4c-1.4,1.9-4,2.4-6,1.2l-19.7-11.4c-2-1.2-2.9-3.7-2-5.8' +
    '\tl8.5-20.2c-6.6-5.4-12.7-11.4-18-18L32.6,231c-2.2,0.9-4.6,0.1-5.8-2l-11.4-19.7c-1.2-2-0.7-4.6,1.2-6l17.4-13.2' +
    '\tc-3.1-8-5.3-16.2-6.6-24.7l-21.7-2.8c-2.3-0.3-4.1-2.3-4.1-4.6v-22.8c0-2.3,1.7-4.3,4.1-4.6l21.7-2.8c1.3-8.4,3.5-16.7,6.6-24.7' +
    '\tL16.6,90.1c-1.9-1.4-2.4-4-1.2-6l11.4-19.7c1.2-2,3.7-2.9,5.8-2l20.2,8.5c5.4-6.6,11.4-12.7,18-18l-8.5-20.2c-0.9-2.2-0.1-4.6,2-5.8' +
    '\tL84,15.4c2-1.2,4.6-0.7,6,1.2l13.2,17.4c8-3.1,16.2-5.3,24.7-6.6l2.8-21.7c0.3-2.3,2.3-4.1,4.6-4.1h22.8c2.3,0,4.3,1.7,4.6,4.1' +
    '\tL165.4,27.5z"/>' +
    '        </clipPath>' +
    '        <clipPath id="gear-clip-path">' +
    '            <path id="Clipping_Path" d="M165.4,27.5c8.4,1.3,16.7,3.5,24.7,6.6l13.2-17.4c1.4-1.9,4-2.4,6-1.2L229,26.8' +
    '\tc2,1.2,2.9,3.7,2,5.8l-8.5,20.2c6.6,5.4,12.7,11.4,18,18l20.2-8.5c2.2-0.9,4.6-0.1,5.8,2L278,84.1c1.2,2,0.7,4.6-1.2,6l-17.4,13.2' +
    '\tc3.1,8,5.3,16.2,6.6,24.7l21.7,2.8c2.3,0.3,4.1,2.3,4.1,4.6v22.8c0,2.3-1.7,4.3-4.1,4.6l-21.7,2.8c-1.3,8.4-3.5,16.7-6.6,24.7' +
    '\tl17.4,13.2c1.9,1.4,2.4,4,1.2,6L266.6,229c-1.2,2-3.7,2.9-5.8,2l-20.2-8.5c-5.4,6.6-11.4,12.7-18,18l8.5,20.2c0.9,2.2,0.1,4.6-2,5.8' +
    '\tL209.3,278c-2,1.2-4.6,0.7-6-1.2l-13.2-17.4c-8,3.1-16.2,5.3-24.7,6.6l-2.7,21.7c-0.3,2.3-2.3,4.1-4.6,4.1h-22.8' +
    '\tc-2.3,0-4.3-1.7-4.6-4.1l-2.8-21.7c-8.4-1.3-16.7-3.5-24.7-6.6l-13.2,17.4c-1.4,1.9-4,2.4-6,1.2l-19.7-11.4c-2-1.2-2.9-3.7-2-5.8' +
    '\tl8.5-20.2c-6.6-5.4-12.7-11.4-18-18L32.6,231c-2.2,0.9-4.6,0.1-5.8-2l-11.4-19.7c-1.2-2-0.7-4.6,1.2-6l17.4-13.2' +
    '\tc-3.1-8-5.3-16.2-6.6-24.7l-21.7-2.8c-2.3-0.3-4.1-2.3-4.1-4.6v-22.8c0-2.3,1.7-4.3,4.1-4.6l21.7-2.8c1.3-8.4,3.5-16.7,6.6-24.7' +
    '\tL16.6,90.1c-1.9-1.4-2.4-4-1.2-6l11.4-19.7c1.2-2,3.7-2.9,5.8-2l20.2,8.5c5.4-6.6,11.4-12.7,18-18l-8.5-20.2c-0.9-2.2-0.1-4.6,2-5.8' +
    '\tL84,15.4c2-1.2,4.6-0.7,6,1.2l13.2,17.4c8-3.1,16.2-5.3,24.7-6.6l2.8-21.7c0.3-2.3,2.3-4.1,4.6-4.1h22.8c2.3,0,4.3,1.7,4.6,4.1' +
    '\tL165.4,27.5z"/>' +
    '        </clipPath>' +
    '    </defs>' +
    '</svg>' +

    document.body.innerHTML;
//endregion add cogwheel clip path

//region define variables
let currentCategoryIndex = 0;
let currentCategory = {};
let currentQuestionIndex = 0;
const beginBtn = document.querySelector('.begin-btn');
const esoEmail = document.querySelector('.eso-email');
const nextQues = document.querySelector('.next-ques');
const prevQues = document.querySelector('.prev-ques');
const answerCircles = [...document.querySelectorAll('.evaluation-number .circle')].reverse();
const progress = document.querySelector('#progress-container .progress');
const quesTitle = document.querySelector('.ques-title');
const quesBody = document.querySelector('.ques-body');
const stepNumbers = [...document.querySelectorAll('.phases-and-steps .phases .number')]
let loading = document.getElementById('loading');
const nextCategoryBtn = document.querySelector('.next-category');
const step1 = document.querySelector('#step-1');
const step2 = document.querySelector('#step-2');
const step3 = document.querySelector('#step-3');
const resultEmail = step3.querySelector('.result .email');
const tabContentWrapper = step3.querySelector('.tabContentWrapper');
const tabNav = step3.querySelector('.tabNav');
const totalGearResult = step3.querySelectorAll('svg.total-gear .svg-percentage');
const totalGearCircle = step3.querySelector('svg.total-gear .gear-circle');
const gearsContainer = step3.querySelector('.gears-container');
const step3Title = step3.querySelector('#step-3-title');
const $question = document.querySelector('.question');

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

//region API get questions
const apiLink = 'https://codesign82.com/buyabilityassessment/wp-json/wp/v2/questions?per_page=100&_embed';
let isLoading = true;
const categories = {};
const categoriesArray = [];
const fetchedQuestions = fetch(apiLink)
    .then(res => res.json())
    .then(json => {
        isLoading = false;
        window.dispatchEvent(new Event('questionsLoaded'));

        json.map((question, index) => {
            const questionObj = {
                id: question.id,
                category: question.questions_categories[0],
                title: question.title.rendered,
                suggested_threshold: +question.acf.suggestion_threshold,
                suggestion_message: question.acf.suggestion_button,
                result: 0,
            };
            categories[question.questions_categories[0]] ?
                categories[question.questions_categories[0]].questions.push(questionObj) :
                (categories[question.questions_categories[0]] = {
                    name: question._embedded['wp:term'][0][0].name,
                    color: question._embedded['wp:term'][0][0].acf.ba_color,
                    suggested_threshold: +question._embedded['wp:term'][0][0].acf.ba_suggested_threshold,
                    suggestion_link: question._embedded['wp:term'][0][0].acf.ba_suggestion_message,
                    suggestion_message: question._embedded['wp:term'][0][0].acf.ba_suggestion_message_top,
                    questions: [questionObj],
                    result: 0,
                });
        });

        console.log(categories);
        categoriesArray.push(...Object.values(categories))
    });

//endregion API get questions

function setNextQuestion(category, questionIndex) {
    //reset answers
    for (let answerCircle of answerCircles) {
        answerCircle.classList.remove('active');
    }
    if (category.questions[questionIndex].result) {
        answerCircles[category.questions[questionIndex].result - 1].dispatchEvent(new Event('click'));
    }
    quesTitle.innerHTML = category.name;
    quesBody.innerHTML = category.questions[questionIndex].title;
    progress.style.width = (questionIndex + 1) / category.questions.length * 100 + '%';

    if (category.questions.length === currentQuestionIndex + 1) {
        nextQues.textContent = 'Get Category Results';
        nextQues.dataset.action = 'results';
    } else {
        nextQues.textContent = 'Next';
        nextQues.dataset.action = 'next';
    }
    prevQues.classList.toggle('hide', questionIndex === 0);

}

//region Initializing step 2
beginBtn.classList.add('active');
esoEmail.addEventListener('input',e=>window.sendToEmail = esoEmail.value)
document.addEventListener('wpcf7mailsent', function (event) {
    window.sendToEmail = esoEmail.value;
    step1.classList.remove('active');
    step1.nextElementSibling.classList.add('active');
    fetchedQuestions.then(() => {
        loading.classList.add('active');
        currentCategory = categoriesArray[currentCategoryIndex];

        let maxHeight = 0;
        $question.style.height = 'auto';
        nextQues.classList.add('active');
        for (let i = 0; i < currentCategory.questions.length; i++) {
            setNextQuestion(currentCategory, i)
            const {height} = $question.getBoundingClientRect();
            height > maxHeight && (maxHeight = height);
        }
        $question.style.height = maxHeight / parseFloat(document.documentElement.style.fontSize) + 'rem';
        nextQues.classList.remove('active');

        setNextQuestion(currentCategory, currentQuestionIndex)
    });
}, false);
//endregion Initializing step 2

// move to next question from our question array
function showResults(isCategory = false) {
    step2.classList.remove('active');
    step3.classList.add('active');
    if (!isCategory) {
        stepNumbers[currentCategoryIndex + 1].classList.remove('active');
        stepNumbers[stepNumbers.length - 1].classList.add('active');
    }
    gearsContainer.innerHTML = '';
    tabNav.innerHTML = '';
    tabContentWrapper.innerHTML = '';

    (isCategory ? [isCategory] : categoriesArray).forEach((category, catIndex) => {
        const suggestedLinks = [];
        category.result = category.questions.reduce((a, b) => a + b.result, 0) / category.questions.length / 5 * 100;
        const splitCatName = category.name.split(' ');

        if (!isCategory) {
            gearsContainer.innerHTML += `
              <svg class="sub-gear ${catIndex % 2 === 0 ? 'alt' : ''}" viewBox="0 0 293.4 293.4">
                  <circle class="gear-circle-white" clip-path="url(#gear-clip-path)" fill="none" stroke="#fff" stroke-width="45" stroke-miterlimit="10" cx="146.7" cy="146.7" r="124.1"/>
                  <circle data-percent="${category.result}" class="gear-circle" clip-path="url(#gear-clip-path)" fill="none" stroke="${category.color}" stroke-width="45" stroke-miterlimit="10" cx="146.7" cy="146.7" r="124.1"/>
                  <path class="gear-stroke" fill="none" stroke="${category.color}" stroke-width="2" stroke-miterlimit="10" d="M165.4,27.5
\tc8.4,1.3,16.7,3.5,24.7,6.6l13.2-17.4c1.4-1.9,4-2.4,6-1.2L229,26.8c2,1.2,2.9,3.7,2,5.8l-8.5,20.2c6.6,5.4,12.7,11.4,18,18
\tl20.2-8.5c2.2-0.9,4.6-0.1,5.8,2L278,84.1c1.2,2,0.7,4.6-1.2,6l-17.4,13.2c3.1,8,5.3,16.2,6.6,24.7l21.7,2.8
\tc2.3,0.3,4.1,2.3,4.1,4.6v22.8c0,2.3-1.7,4.3-4.1,4.6l-21.7,2.8c-1.3,8.4-3.5,16.7-6.6,24.7l17.4,13.2c1.9,1.4,2.4,4,1.2,6
\tL266.6,229c-1.2,2-3.7,2.9-5.8,2l-20.2-8.5c-5.4,6.6-11.4,12.7-18,18l8.5,20.2c0.9,2.2,0.1,4.6-2,5.8L209.3,278
\tc-2,1.2-4.6,0.7-6-1.2l-13.2-17.4c-8,3.1-16.2,5.3-24.7,6.6l-2.7,21.7c-0.3,2.3-2.3,4.1-4.6,4.1h-22.8c-2.3,0-4.3-1.7-4.6-4.1
\tl-2.8-21.7c-8.4-1.3-16.7-3.5-24.7-6.6l-13.2,17.4c-1.4,1.9-4,2.4-6,1.2l-19.7-11.4c-2-1.2-2.9-3.7-2-5.8l8.5-20.2
\tc-6.6-5.4-12.7-11.4-18-18L32.6,231c-2.2,0.9-4.6,0.1-5.8-2l-11.4-19.7c-1.2-2-0.7-4.6,1.2-6l17.4-13.2c-3.1-8-5.3-16.2-6.6-24.7
\tl-21.7-2.8c-2.3-0.3-4.1-2.3-4.1-4.6v-22.8c0-2.3,1.7-4.3,4.1-4.6l21.7-2.8c1.3-8.4,3.5-16.7,6.6-24.7L16.6,90.1
\tc-1.9-1.4-2.4-4-1.2-6l11.4-19.7c1.2-2,3.7-2.9,5.8-2l20.2,8.5c5.4-6.6,11.4-12.7,18-18l-8.5-20.2c-0.9-2.2-0.1-4.6,2-5.8L84,15.4
\tc2-1.2,4.6-0.7,6,1.2l13.2,17.4c8-3.1,16.2-5.3,24.7-6.6l2.8-21.7c0.3-2.3,2.3-4.1,4.6-4.1h22.8c2.3,0,4.3,1.7,4.6,4.1L165.4,27.5z"/>
    
                  <path class="gear-inner-circle" fill="#F0EFEB" d="M146.7,249.2c56.5,0,102.5-46,102.5-102.5c0-56.5-46-102.5-102.5-102.5
\tS44.2,90.2,44.2,146.7C44.2,203.1,90.2,249.2,146.7,249.2z"/>
                    <text class="svg-percentage" x="${Math.round(category.result) === 100 ? 66 : 97}" y="120" fill="${category.color}" style="font-size: 60px;">${Math.round(category.result)}%</text>
                    <text class="svg-word-1" x="50%" y="165" fill="${category.color}" style="font-size: 23px;text-transform: uppercase;font-weight: 500;">${splitCatName[0]}</text>
                    ${splitCatName[1] ? `<text class="svg-word-2" x="50%" y="197" fill="${category.color}" style="font-size: 23px;text-transform: uppercase;font-weight: 500;">${splitCatName[1]}</text>` : ''}
                </svg>
`
        }
        gearsContainer.classList.toggle('hidden', isCategory)

        if (category.result <= category.suggested_threshold || isCategory) {
            isCategory || (tabNav.innerHTML += `<a class="tabLink ${catIndex === 0 ? 'is-active' : ''}" href="#">${splitCatName[0]}<br/>${splitCatName[1]}</a>`);
            tabContentWrapper.innerHTML += `
      <div class="tabContent ${catIndex === 0 ? 'is-active' : ''}">
        <div class="gearPercent ${isCategory ? 'category' : ''}">
                  <div class="gear">
          <svg class="sub-gear" viewBox="0 0 293.4 293.4">
                  <circle class="gear-circle-white" clip-path="url(#gear-clip-path)" fill="none" stroke="#ffffff" stroke-width="45" stroke-miterlimit="10" cx="146.7" cy="146.7" r="124.1"/>
                  <circle data-percent="${category.result}" class="gear-circle" clip-path="url(#gear-clip-path)" fill="none" stroke="${category.color}" stroke-width="45" stroke-miterlimit="10" cx="146.7" cy="146.7" r="124.1"/>
                  <path class="gear-stroke" fill="none" stroke="${category.color}" stroke-width="2" stroke-miterlimit="10" d="M165.4,27.5
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
                    <text class="svg-percentage" x="${Math.round(category.result) === 100 ? 50 : 66}" y="${Math.round(category.result) === 100 ? 175 : 180}" style="font-size: ${Math.round(category.result) === 100 ? 80 : 90}px;" fill="${category.color}">${Math.round(category.result)}%</text>
                </svg>
</div>
          <div class="results">
          ${category.result <= category.suggested_threshold
                ? `<h2 class="headline-2">${category.suggestion_message.replace('{{number}}', `<span>${Math.round(category.result)}%</span>`)}</h2>
                ${category.suggestion_link && category.suggestion_link.url ? `<a class="btn btn-medium" href="${category.suggestion_link.url}" target="${category.suggestion_link.target}">${category.suggestion_link.title}
            <svg height="8" viewBox="0 0 5 8" width="5">
            <path d="M2.313-.063l2.756 3.84v.188L2.312 7.806H.458l2.358-3.931L.458-.063z" fill="#fff"/>
            </svg></a>` : ''}
            ${category.questions.map(question => {
                    if (question.result <= question.suggested_threshold && !!question.suggestion_message.title && suggestedLinks.indexOf(question.suggestion_message.title) === -1) {
                        suggestedLinks.push(question.suggestion_message.title);
                        return `<a data-toggle="tooltip" class="btn btn-medium ${question.suggestion_message.url === "#" ? 'coming-soon' : ''}" ${question.suggestion_message.url === "#" ? '' : `href="${question.suggestion_message.url}"`} target="${question.suggestion_message.target}">
                        ${question.suggestion_message.title}
                        <svg height="8" viewBox="0 0 5 8" width="5">
                              <path d="M2.313-.063l2.756 3.84v.188L2.312 7.806H.458l2.358-3.931L.458-.063z" fill="#fff"/>
                        </svg>
                          <span class="tooltiptext">Coming Soon</span>
                      </a>`;
                    } else {
                        return ''
                    }
                }).join('')}`
                : `<h2 class="headline-2">You have exceeded the SUCCESS threshold</h2>`}
             </div>
        </div>
      </div>`;
        }
    });

    isCategory || typeof categories.total === 'number' || (categories.total = Object.values(categories).reduce((a, b) => a + b.result, 0) / Object.keys(categories).length);
    totalGearResult[0].innerHTML = isCategory ? Math.round(isCategory.result) : Math.round(categories.total);
    totalGearResult[0].setAttribute('x', totalGearResult[0].innerHTML === '100' ? '50' : '77')
    totalGearResult[1].setAttribute('x', totalGearResult[0].innerHTML === '100' ? '200' : '180')
    totalGearCircle.dataset.percent = isCategory ? isCategory.result : categories.total;
    resultEmail.innerHTML = '<span>Email: </span>' + window.sendToEmail;
    step3Title.innerHTML = isCategory ? isCategory.name + ' ASSESSMENT' : 'Buyability Assessment Results'
    step3Title.parentElement.classList.toggle('has-total', !isCategory);

    let myTabs = tabs({
        el: '#tabs',
        tabNavigationLinks: '.tabLink',
        tabContentContainers: '.tabContent',
    });
    gsap.set('.svg-word-1,.svg-word-2', {xPercent: -50})
    gsap.set('.gear-circle', {rotation: -90, transformOrigin: 'center'});
    gsap.set('svg.alt .gear-stroke, #gear-clip-path-alt', {rotation: -15, transformOrigin: 'center'});
    gsap.fromTo('.gear-circle', {drawSVG: 0}, {
        drawSVG(self, target) {
            return `${target.dataset.percent}%`;
        }
    })
    if (!isCategory) {

        myTabs.init();
        const results = {}
        for (let category of Object.values(categories)) {
            if (!category.name) continue;
            results[category.name] = category.result + '%';
        }
        results.total = categories.total;

        wp.ajax.post('send_results_email', {results, email: window.sendToEmail})
            .done(function (response) {
                console.log('email sent with the results')
            })
            .fail(function () {
                console.log('email failed')
            });
    }
}

nextCategoryBtn.addEventListener('click', () => {

    switch (nextCategoryBtn.dataset.action) {
        case 'print':
            window.print();
            break;

        case 'finish':
            showResults()
            nextCategoryBtn.dataset.action = 'print'
            nextCategoryBtn.textContent = 'Print this Page';
            break;

        case 'nextCategory':
            step3.classList.remove('active');
            step2.classList.add('active');
            stepNumbers[currentCategoryIndex - 1].classList.remove('active');
            stepNumbers[currentCategoryIndex].classList.add('active');

            let maxHeight = 0;
            $question.style.height = 'auto';
            nextQues.classList.add('active');
            for (let i = 0; i < currentCategory.questions.length; i++) {
                setNextQuestion(currentCategory, i)
                const {height} = $question.getBoundingClientRect();
                height > maxHeight && (maxHeight = height);
            }
            $question.style.height = maxHeight / parseFloat(document.documentElement.style.fontSize) + 'rem';
            nextQues.classList.remove('active');

            setNextQuestion(currentCategory, 0);
            break;
    }
});
nextQues.addEventListener('click', () => {
    nextQues.classList.remove('active');

    switch (nextQues.dataset.action) {
        case 'results':
            showResults(currentCategory)
            if (++currentCategoryIndex === categoriesArray.length) {
                nextCategoryBtn.textContent = 'Get All Results';
                nextCategoryBtn.dataset.action = 'finish';
            } else {
                nextCategoryBtn.textContent = 'Next Category';
                nextCategoryBtn.dataset.action = 'nextCategory';
                currentCategory = categoriesArray[currentCategoryIndex]
                currentQuestionIndex = 0;
            }
            break;

        case 'next':
            setNextQuestion(currentCategory, ++currentQuestionIndex);
            break;
    }
});
prevQues.addEventListener('click', () => {
    currentQuestionIndex > 0 && setNextQuestion(currentCategory, --currentQuestionIndex)
});
// move to next question from our question array

//region select answer
for (let i = 0; i < answerCircles.length; i++) {
    answerCircles[i].addEventListener('click', function () {
        currentCategory.questions[currentQuestionIndex].result = +answerCircles[i].dataset.number;
        nextQues.classList.add('active')
        for (let j = 0; j < answerCircles.length; j++) {
            answerCircles[j].classList.toggle('active', j <= i);
        }
    });
}
//endregion select answer
// tabs
let tabs = function (options) {

    let el = document.querySelector(options.el);
    let tabNavigationLinks = el.querySelectorAll(options.tabNavigationLinks);
    let tabContentContainers = el.querySelectorAll(options.tabContentContainers);
    let activeIndex = 0;
    let initCalled = false;

    let init = function () {
        if (!initCalled) {
            initCalled = true;
            el.classList.remove('no-js');

            for (let i = 0; i < tabNavigationLinks.length; i++) {
                let link = tabNavigationLinks[i];
                handleClick(link, i);
            }
        }
    };

    let handleClick = function (link, index) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            goToTab(index);
        });
    };

    let goToTab = function (index) {
        if (index !== activeIndex && index >= 0 && index <= tabNavigationLinks.length) {
            tabNavigationLinks[activeIndex].classList.remove('is-active');
            tabNavigationLinks[index].classList.add('is-active');
            tabContentContainers[activeIndex].classList.remove('is-active');
            tabContentContainers[index].classList.add('is-active');
            activeIndex = index;
        }
    };

    return {
        init: init,
        goToTab: goToTab,
    };
};