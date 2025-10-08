// Global JS file

$(document).on("submit", ".myForm", function (event) {
   event.preventDefault();
   let submitBtn = $(this).find('button');
  // submitBtn.html('<div class="loader"></div>');
   submitBtn.prop('disabled',true);
   $(this).find(".name-error").text("");
   $(this).find(".mobile-error").text("");
   $(this).find(".email-error").text("");
  
   $(this).find(".name-error").removeClass("bounce");
   $(this).find(".email-error").removeClass("bounce");
   $(this).find(".mobile-error").removeClass("bounce");
   var data = {};
   var isValid = true;
   $(this)
     .serializeArray()
     .forEach(function (item) {
       data[item.name] = item.value;
     });
   if (data["name"].length < 3) {
     $(this).find(".name-error").text("Please Enter a Valid Name");
     $(this).find(".name-error").addClass("bounce");
     isValid = false;
   }
   if (data["mobile"].length < 10) {
     $(this).find(".mobile-error").text("Mobile number must be at least 10 characters long");
     $(this).find(".mobile-error").addClass("bounce");
     isValid = false;
   }
   if (data["mobile"].length > 13) {
     $(this).find(".mobile-error").text("Mobile number must be at least 10 characters long");
     $(this).find(".mobile-error").addClass("bounce");
     isValid = false;
   }
   if (data["email"] == "") {
     $(this).find(".email-error").text("Enter a valid email");
     $(this).find(".email-error").addClass("bounce");
     isValid = false;
   }
   if (isNaN(data["mobile"])) {
     $(this).find(".mobile-error").text("Enter a valid number");
     $(this).find(".mobile-error").addClass("bounce");
     isValid = false;
   }
  
 
   if (isValid) {
     // form is valid, submit it via AJAX
     console.log(data);
     $(this).find(".submit").prop("disabled", true);
     $(this).find(".name-error").text("");
     $(this).find(".email-error").text("");
     $(this).find(".mobile-error").text("");
     $(this).find(".name-error").removeClass("bounce");
     $(this).find(".email-error").removeClass("bounce");
     $(this).find(".mobile-error").removeClass("bounce");
     //console.log(data);
     
     $.ajax({
       type: "POST",
       url: "process_form",
       data: $(this).serialize(),
       
       success: function (response) {
         $('.myForm').each(function() {
           this.reset();
         });
         
         if (response.status == "success") {
             window.location.replace("thankyou");
         } 
         else {
            submitBtn.prop('disabled',false);
            submitBtn.html('Submit');
            Swal.fire({
             icon: "error",
             title: "Oops...",
             text: "Something went wrong!",
            });
         }
       },
       error: function (jqXHR, textStatus, errorThrown) {
        submitBtn.prop('disabled',false);
        submitBtn.html('Submit');
         // handle error response
         console.error(
           "Form submission failed: " + textStatus + ", " + errorThrown
         );
         Swal.fire({
           icon: "error",
           title: "Oops...",
           text: "Something went wrong!",
         });
       },
     });
   }
   else{
       submitBtn.prop('disabled',false);
       submitBtn.html('Submit');
   }
 });

const sectionMap = {
    "/home"         : "/",
    "/overview"     : "overview",
    "/highlights"   : "highlights",
    "/amenities"    : "amenities",
    "/pricing"     : "pricing",
    "/location"     : "location",
    "/floor-plans"  : "floor-plans",  
    "/FAQs"         : "FAQs",
    "/developer"    : "developer",
};

const path = window.location.pathname;
const sectionId = sectionMap[path];

if (sectionId) {
  const sectionElement = document.getElementById(sectionId);
  if (sectionElement) {
    sectionElement.scrollIntoView({ behavior: "smooth" });
  }
}




  const chatContainer = document.getElementById('chat-container');
  const chatbox = document.getElementById('chatbox');
  const toggleBtn = document.getElementById('toggle-chat');
  const chatBubble = document.getElementById('chat-bubble');
  const chatMessages = document.getElementById('chat-messages');
  
  const questions = [
  {
    question: "Hi! Welcome to Ashtech Sector 12. I’m here to help you find your dream home. May I know what kind of apartment you’re interested in?",
    options: [
      "3 BHK",
      "4 BHK",
      "Just exploring for now"
    ],
    responses: [
      "A smart choice! Our 3 BHK residences are designed with spacious layouts, perfect for modern families.",
      "Wonderful! Our 4 BHK options offer extra room, comfort, and flexibility for larger families.",
      "Great! Feel free to explore with us at your own pace — we’ll guide you whenever you’re ready."
    ]
  },
  {
    question: "Great choice! What’s most important to you in your new home?",
    options: [
      "Spacious interiors",
      "Luxury amenities",
      "Green & eco-friendly surroundings",
      "Location & connectivity",
      "Investment / rental potential"
    ],
    multiple: true, // allow multiple choices
    responses: [
      "Our homes are thoughtfully designed with wide layouts and natural light for maximum comfort.",
      "You’ll enjoy premium amenities like clubhouse, gym, swimming pool, and more.",
      "We’ve ensured abundant greenery, landscaped gardens, and sustainable eco-friendly spaces.",
      "The project is strategically located with excellent connectivity to schools, business hubs, and transport.",
      "Our homes also make excellent investments with strong rental demand and long-term value."
    ]
  },
  {
    question: "Would you like to schedule a site visit to experience the project in person?",
    options: [
      "Yes, this weekend",
      "Yes, in the coming week",
      "Not right now, just exploring"
    ],
    responses: [
      "Done! We’ll book your site visit for this weekend and share all details with you.",
      "Perfect! We’ll schedule your visit next week at a time convenient for you.",
      "No worries! You can plan a site visit anytime — we’ll be here to assist."
    ]
  },
  {
    question: "Open the Form to get details.",
    options: [
      "Proceed to Form"
    ],
    responses: [
      "Thank you for your time! Our sales team will connect with you shortly to assist further. Looking forward to helping you find your perfect home at Ashtech Sector 12."
    ]
  }
];



  let currentStep = 0;
  let answers = [];

  toggleBtn.onclick = () => {
    chatbox.classList.add('hidden');
    chatBubble.classList.remove('hidden');
  };

  chatBubble.onclick = () => {
    chatBubble.classList.add('hidden');
    chatbox.classList.remove('hidden');
  };

  function addMessage(message, sender) {
    const msgDiv = document.createElement('div');
    msgDiv.classList.add(sender === 'bot' ? 'bot-message' : 'user-message');
    msgDiv.innerText = message;
    chatMessages.appendChild(msgDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  function showTyping(callback) {
    const typing = document.createElement('div');
    typing.classList.add('bot-message');
    typing.innerHTML = "<em>Typing...</em>";
    chatMessages.appendChild(typing);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    setTimeout(() => {
      chatMessages.removeChild(typing);
      callback();
    }, 800);
  }

  function showOptions(options) {

    // Create a wrapper to group all options as one user message
    const optionsWrapper = document.createElement('div');
    optionsWrapper.classList.add('user-message', 'options-wrapper');

    // Create buttons inside this user message
    options.forEach(option => {
      const btn = document.createElement('button');
      btn.classList.add('option-btn');
      btn.innerText = option;

      btn.onclick = () => {
        // Remove the options-wrapper
        optionsWrapper.remove();

        // Show the user's choice as a normal user message
        addMessage(option, 'user');
        answers.push(option);

        // Show bot typing and response
        showTyping(() => {
          const botResponse = questions[currentStep].responses[questions[currentStep].options.indexOf(option)];
          addMessage(botResponse, 'bot');

          currentStep++;
          if (currentStep < questions.length) {
            showTyping(() => {
              addMessage(questions[currentStep].question, 'bot');
              showOptions(questions[currentStep].options);
            });
          } else {
            showTyping(() => showForm());
          }
        });
      };

      optionsWrapper.appendChild(btn);
    });

    // Append the options as part of the chat
    chatMessages.appendChild(optionsWrapper);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }


  function handleUserResponse(option) {
    const botResponses = questions[currentStep].responses;
    const userChoiceIndex = questions[currentStep].options.indexOf(option);
    const botResponse = botResponses[userChoiceIndex];

    addMessage(option, 'user');
    answers.push(option);

    showTyping(() => {
      addMessage(botResponse, 'bot');

      currentStep++;
      if (currentStep < questions.length) {
        showTyping(() => {
          addMessage(questions[currentStep].question, 'bot');
          showOptions(questions[currentStep].options);
        });
      } else {
        showTyping(() => showForm());
      }
    });
  }

  function showForm() {
    // Create a wrapper bot-message for the form
    const formWrapper = document.createElement('form');
    formWrapper.classList.add('bot-message', 'form-wrapper', 'myForm');
    formWrapper.setAttribute('data-chatbot', '1');
    // Insert the form HTML
    formWrapper.innerHTML = `
    <div class="form-field">
      <input type="text" id="name" placeholder="Your Name" class="form-control mb-2">
    </div>
    <div class="form-field">
      <input type="email" id="email" placeholder="Your Email" class="form-control mb-2">
    </div>
    <div class="form-field">
      <input type="tel" id="phone" placeholder="Your Phone" class="form-control mb-2">
    </div>
    <div class="form-field">
      <button id="submit-btn" class="btn rounded-pill text-white formBtn">Submit</button>
    </div>
  `;

    // Append the form to chat
    chatMessages.appendChild(formWrapper);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    formWrapper.querySelector('#submit-btn').onclick = (e) => {
  e.preventDefault(); // prevent default form submission

  const nameInput = formWrapper.querySelector('#name');
  const emailInput = formWrapper.querySelector('#email');
  const phoneInput = formWrapper.querySelector('#phone');
  const submitBtn = formWrapper.querySelector('#submit-btn');

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();
  const phone = phoneInput.value.trim();

  let isValid = true;

  // Remove previous errors
  formWrapper.querySelectorAll('.text-danger').forEach(el => el.remove());

  // Helper to append error
  const showError = (inputEl, message) => {
    const errorEl = document.createElement('div');
    errorEl.className = 'text-danger';
    errorEl.innerText = message;
    inputEl.parentElement.appendChild(errorEl);
  };

  // Validation
  if (name.length < 3) {
    showError(nameInput, "Please enter a valid name");
    isValid = false;
  }

  if (!email || !email.includes("@")) {
    showError(emailInput, "Please enter a valid email");
    isValid = false;
  }

  if (phone.length < 10 || phone.length > 13 || isNaN(phone)) {
    showError(phoneInput, "Please enter a valid phone number");
    isValid = false;
  }

  if (!isValid) return;

  // Disable button and show loader
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<div class="loader"></div>';

  // Prepare form data
  const formData = {
    name,
    email,
    mobile: phone,
   
  };

  // AJAX Submit
  $.ajax({
    type: "POST",
    url: "process_form",
    data: formData,
     dataType: "json",
    success: function (response) {
      
      if (response.status == "success") {
        // Push to GTM
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
          event: 'leadSubmitted',
          leadName: name,
          leadEmail: email,
          leadPhone: phone,
          answers: answers // ensure 'answers' is available in scope
        });

        // Clean up UI
        formWrapper.remove();
        addMessage("Thank you! We'll contact you soon.", "bot");
      } else {
        showError(submitBtn, "Something went wrong. Please try again.");
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Submit';
      }
    },
    error: function () {
      showError(submitBtn, "Submission failed. Please try again.");
      submitBtn.disabled = false;
      submitBtn.innerHTML = 'Submit';
    }
  });
};

  };


  // Initialize chat
  addMessage(questions[currentStep].question, 'bot');
  showOptions(questions[currentStep].options);


  window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  let scrollPosition = window.scrollY || document.documentElement.scrollTop;

  if (scrollPosition >= 200) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});