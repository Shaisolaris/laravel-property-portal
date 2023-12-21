$(document).ready(function () {
  // colorTheorySlider
  $(".colorTheorySlider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    arrows: false,
    swipe: true,
  });
  // innerChampionSlider;
  $(".innerChampionSlider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    arrows: false,
  });

  // topLatest

  $(".topLatest").slick({
    slidesToShow: 4.3,
    initialSlide: 1.7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 4,
          initialSlide: 1,
        },
      },
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 3,
          initialSlide: 1,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          initialSlide: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          initialSlide: 1,
        },
      },
    ],
  });

  $(".differentGradesLatest").slick({
    slidesToShow: 4.3,
    initialSlide: 1.7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 4,
          initialSlide: 1,
        },
      },
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 3,
          initialSlide: 1,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          initialSlide: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          initialSlide: 1,
        },
      },
    ],
  });

  $(".educationMaterial").slick({
    slidesToShow: 2.3,
    initialSlide: 1.7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 2,
          initialSlide: 1,
        },
      },
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 2,
          initialSlide: 1,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          initialSlide: 1,
        },
      },
    ],
  });

  // exploreCategoriesInput box

  $("#exploreCategoriesInput").click(function () {
    $("#categorySearchBox").slideDown("2ms");
  });
  $(document).on("click", function (event) {
    if (
      !$(event.target).is("#exploreCategoriesInput") &&
      !$(event.target).is("#categorySearchBox")
    ) {
      $("#categorySearchBox").slideUp();
    }
  });
  $("#exploreCategoriesInput, #categorySearchBox,#seachBtn").on(
    "click",
    function (event) {
      event.stopPropagation();
    }
  );
  // sidebar js
  $("#sideMenuButton").on("click", function () {
    $("#sidebar").toggleClass("open");
  });
  $("#closeBtn").on("click", function () {
    $("#sidebar").removeClass("open");
  });
  // academy dashboard SideMenu js
  $("#academySideMenuButton").on("click", function () {
    console.log("academy");
    $("#academySideMenu").toggleClass("open");
  });
  $("#closeAcademySideBtn").on("click", function () {
    $("#academySideMenu").removeClass("open");
  });

  $("#courses_assignment_brief").click(function () {
    $("#courses_assignment_accordionWrap").slideToggle("2ms");
    // let anchorTag = $(this).find("a");
    // if (anchorTag.text() === "Show more") {
    //   anchorTag.text("Cancel");
    // } else {
    //   anchorTag.text("Show more");
    // }
    // let btnLink = $(this).find("a");
    // let img = $(this).find("img");
    // if (btnLink.text() === "Show more") {
    //   btnLink.text("Cancel");
    //   img.attr("src", "img/dashboard/close_circle_Blue.svg");
    // } else {
    //   btnLink.text("Show more");
    //   img.attr("src", "img/dashboard/plusCircle.svg");
    // }
    let $link = $(this).find('a');
    if ($link.text().includes('Show more')) {
      $link.html('Cancel <img src="img/dashboard/close_circle_Blue.svg" alt="inoura" />');
    } else {
      $link.html('Show more <img src="img/dashboard/plusCircle.svg" alt="inoura" />');
    }
  });

  // uplood Btn added
  $('#OpenImgUpload').click(function () { $('#imgupload').trigger('click'); });
  $('#imgupload').change(function () {
    let fileName = $(this).val().split('\\').pop(); // Get only the file name
    $('#uploadedfileName').text('File uploaded: ' + fileName);
  });


  // added editale text button and input field
  // $('#editButton').on('click', function () {
  //   // Replace the SVG content with text
  //   $('#editButton').empty().text('Update');
  //   let editableText = $('#editableUserName');
  //   let currentText = editableText.text();
  //   let inputElement = $('<input type="text" class="editableTextStyle">').val(currentText);

  //   // Replace the text with an input field
  //   editableText.html(inputElement);

  //   // Handle the blur event (when the input field loses focus)
  //   inputElement.on('blur', function () {
  //     // Update the text with the new value from the input field
  //     let newText = $(this).val();
  //     editableText.html(newText);
  //   });
  // });
  $('#editButton').on('click', function () {
    let editButton = $('#editButton');
    let nameUpdatedBtn = $('#nameUpdatedBtn');
    nameUpdatedBtn.empty().text('Update');
    let editableText = $('#editableUserName');
    let currentText = editableText.text();
    let inputElement = $('<input type="text" class="editableTextStyle">').val(currentText);
    editableText.html(inputElement);
    editButton.addClass('d-none');
    nameUpdatedBtn.removeClass('d-none');

    inputElement.on('blur', function () {
      let newText = $(this).val();
      nameUpdatedBtn.on('click', function () {
        editableText.html(newText);
        nameUpdatedBtn.empty().text('Updated');
        setTimeout(function () {
          nameUpdatedBtn.addClass('d-none');
          editButton.removeClass('d-none');
        }, 1000);
      })
    });
  });
  // editable Gender
  $('#editableGenderBtn').on('click', function () {
    let editableGenderBtn = $('#editableGenderBtn');
    let GenderUpdatedBtn = $('#GenderUpdatedBtn');
    GenderUpdatedBtn.empty().text('Update');
    let editableGender = $('#editableGender');
    let currentText = editableGender.text();
    let inputElement = $('<input type="text" class="editableTextStyle">').val(currentText);
    editableGender.html(inputElement);
    editableGenderBtn.addClass('d-none');
    GenderUpdatedBtn.removeClass('d-none');

    inputElement.on('blur', function () {
      let newText = $(this).val();
      GenderUpdatedBtn.on('click', function () {
        editableGender.html(newText);
        GenderUpdatedBtn.empty().text('Updated');
        setTimeout(function () {
          GenderUpdatedBtn.addClass('d-none');
          editableGenderBtn.removeClass('d-none');
        }, 1000);
      })
    });
  });


  $('#editableTimeBtn').on('click', function () {
    let editableTimeBtn = $('#editableTimeBtn');
    let timeUpdatedBtn = $('#timeUpdatedBtn');
    timeUpdatedBtn.empty().text('Update');
    let editableTime = $('#editableTime');
    let currentText = editableTime.text();
    let inputElement = $('<input type="text" class="editableTextStyle">').val(currentText);
    editableTime.html(inputElement);
    editableTimeBtn.addClass('d-none');
    timeUpdatedBtn.removeClass('d-none');

    inputElement.on('blur', function () {
      let newText = $(this).val();
      timeUpdatedBtn.on('click', function () {
        editableTime.html(newText);
        timeUpdatedBtn.empty().text('Updated');
        setTimeout(function () {
          timeUpdatedBtn.addClass('d-none');
          editableTimeBtn.removeClass('d-none');
        }, 1000);
      })
    });
  });

  $('#editableLanguageBtn').on('click', function () {
    $(this).addClass('d-none');
    $('#langUpdatedBtn').removeClass('d-none');

    let editableLanguage = $('#editableLanguage');
    let currentText = editableLanguage.text();

    // Create a select element with options
    let selectElement = $('<select class="custom-select selectOption" id="custom-select">');
    let option1 = $('<option value="English">English</option>');
    let option2 = $('<option value="French">French</option>');
    let option3 = $('<option value="Spanish">Spanish</option>');

    selectElement.append(option1, option2, option3);

    // Set the selected option based on the current text
    selectElement.val(currentText);

    editableLanguage.html(selectElement);

    selectElement.on('blur', function () {
      let newText = $(this).val();
      $('#langUpdatedBtn').on('click', function () {
        editableLanguage.html(newText);
        $(this).empty().text('Updated');
        setTimeout(function () {
          $('#langUpdatedBtn').addClass('d-none');
          $('#editableLanguageBtn').removeClass('d-none');
        }, 1000);
      })
    });
  });

  $("#updatePassword").click(function () {
    $("#changePasswordField").slideToggle("2ms");
  });

  // my_courses_details
  $('#tableOfContentHeading').click(function () {
    alert('Please enter');
    var newSource = $(this).data('source');
    changeVideoSource(newSource);
  });

  function changeVideoSource(newSource) {
    $('#videoPlayerSource').attr('src', newSource);
    $('#myCoursesVideoPlayer').get(0).load(); // Reload the video element to apply the new source
  }

});

$("#assignmentSubmit").click(function () {
  $("#assignmentSubmitDetails").slideToggle("2ms");
  // $("#changetext").fadeOut(function () {
  //   $("#changetext")
  //     .text($("#changetext").text() == "Cancel" ? "Submit" : "Cancel")
  //     .fadeIn();
  //   $("#icon").attr("src", "img/dashboard/cancel.svg");
  // });
});

// // file upload Btn added

// Trigger file input 
$('#uploadFileIcon').click(function () {
  $('#fileInput').click();
});

// Trigger image input 
$('#uploadImageIcon').click(function () {
  $('#imageInput').click();
});

// Update names when files are selected
$('#fileInput').change(function () {
  var files = $(this)[0].files;
  displaySelectedItems(files);
});

// Update names when images are selected
$('#imageInput').change(function () {
  let files = $(this)[0].files;
  displaySelectedItems(files);
});

// Function to display selected file and image names
function displaySelectedItems(files) {
  let itemsContainer = $('#selectedItems');
  // itemsContainer.empty(); // Clear previous content

  if (files.length > 0) {
    // itemsContainer.append('<p>Selected Files and Images:</p>');
    for (let i = 0; i < files.length; i++) {
      let fileName = files[i].name;
      itemsContainer.append('<p>' + fileName + ',</p>');
    }
  } else {
    itemsContainer.append('<p>No files or images selected</p>');
  }
}

// Trigger link input
$('#uploadLinkIcon').click(function () {
  let addlink = prompt("Enter URL:");
  if (addlink !== null) {
    displayLink(addlink);
  }
});
function displayLink(item) {
  console.log('Displaying URL:', item);
  $('#assignmentBriedLink').val(item + " ");
}


function playVideo() {
  var video = document.getElementById("videoPlayer");
  var thumbnail = document.querySelector(".videoContainer img");
  var playButton = document.querySelector(".playButton");
  var pasueButton = document.querySelector(".pauseBtn");
  video.style.display = "block";
  thumbnail.style.display = "none";
  playButton.style.display = "none";
  // pasueButton.style.display = "none";
  video.play();
}

// myCoursesDetail page video

function myCoursesPlayVideo() {
  var myCoursesVideo = document.getElementById("myCoursesVideoPlayer");
  var thumbnail = document.querySelector(".videoContainerWrap .videoThumbnail");
  var playButton = document.querySelector(".playButton");
  var pasueButton = document.querySelector(".pauseBtn");
  myCoursesVideo.style.display = "block";
  thumbnail.style.display = "none";
  playButton.style.display = "none";
  // pasueButton.style.display = "none";
  myCoursesVideo.play();
}

// calendar

$(document).ready(function () {
  $("#calendar").fullCalendar({
    header: {
      left: "prev,next today",
      center: "title",
      right: "listDay,listWeek,month",
    },
    views: {
      listDay: { buttonText: "list day" },
      listWeek: { buttonText: "list week" },
    },

    defaultView: "listWeek",
    defaultDate: "2017-02-12",
    navLinks: true,
    editable: true,
    eventLimit: true,
    eventAfterRender: function (event, element, view) {
      console.log("Event After Render called");
    },
    events: [
      {
        title: "All Day Event",
        start: "2017-02-01",
      },
      {
        title: "Long Event",
        start: "2017-02-07",
        end: "2017-02-10",
      },
      {
        id: 999,
        title: "Repeating Event",
        start: "2017-02-09T16:00:00",
      },
      {
        id: 999,
        title: "Repeating Event",
        start: "2017-02-16T16:00:00",
      },
      {
        title: "Conference",
        start: "2017-02-11",
        end: "2017-02-13",
      },
      {
        title: "Meeting",
        start: "2017-02-12T10:30:00",
        end: "2017-02-12T12:30:00",
      },
      {
        title: "Lunch",
        start: "2017-02-12T12:00:00",
      },
      {
        title: "Meeting",
        start: "2017-02-12T14:30:00",
      },
      {
        title: "Happy Hour",
        start: "2017-02-12T17:30:00",
      },
      {
        title: "Dinner",
        start: "2017-02-12T20:00:00",
      },
      {
        title: "Birthday Party",
        start: "2017-02-13T07:00:00",
      },
      {
        title: "Click for Google",
        url: "http://google.com/",
        start: "2017-02-28",
      },
    ],
  });
});
