let nextSelector = "#kt_create_account_form button[data-kt-stepper-action='next']"
let previousSelector = "#kt_create_account_form button[data-kt-stepper-action='previous']"
let submitSelector = "#kt_create_account_form button[data-kt-stepper-action='submit']"
let contentSelector = "#kt_create_account_form div[data-kt-stepper-element='content']"
let stepSelector = "#kt_create_account_stepper .stepper-item"
let currentIndex = 0
let steps = []
let contents = []

// init steps
$(stepSelector).each(function(stepperIndex, stepper) {
  steps.push($(stepper))
});
// init contents
$(contentSelector).each((contentIndex, content) => {
  contents.push($(content))
})

// click previous button
$(previousSelector).click(() => {  
  changeContent('previous')
}) 

// click next button
$(nextSelector).click(() => {  
  changeContent('next')
  
}) 

$(submitSelector).click(() => {  
  $("#kt_create_account_form").submit()  
}) 

const changeContent = (type) => {
  if (type == 'previous') {
    if (currentIndex > 0)
    currentIndex--
  } else {
    if (steps.length - 1 > currentIndex)
    currentIndex++
  }

  console.log(type)
  
  if (currentIndex == 0) {
    clearClasses($('.stepper'))
    $('.stepper').addClass('first')
  } else if (currentIndex == steps.length - 1) {
    clearClasses($('.stepper'))
    $('.stepper').addClass('last')
  } else {
    clearClasses($('.stepper'))
    $('.stepper').addClass('between')
  }

  steps.forEach((step, index) => {
    clearClasses(step)
    if (currentIndex== index) {
      $(step).addClass('current')      
    }
  });
  
  contents.forEach((content, index) => {
    clearClasses(content)
    if(currentIndex == index)
      $(content).addClass('current')
  });

}

const clearClasses = (content) => {
  $(content).removeClass('first')
  $(content).removeClass('between')
  $(content).removeClass('last')
  $(content).removeClass('pending')
  $(content).removeClass('completed')
  $(content).removeClass('current')
}




 
