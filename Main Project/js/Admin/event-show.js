 $(document).ready(function () {
    display_events();
  }); // end document.ready block

  function display_events() {
    var events = new Array();
    $.ajax({
      url: "../process/display_event.php",
      dataType: "json",
      success: function (response) {
        var result = response.data;
        $.each(result, function (i, item) {
          events.push({
            event_id: result[i].event_id,
            title: result[i].title,
            start: result[i].start,
            end: result[i].end,
            color: result[i].color,
            url: result[i].url,
          });
        });

        // FullCalendar initialization
        var calendar = $("#calendar").fullCalendar({
          defaultView: "month",
          timeZone: "local",
          editable: true,
          selectable: true,
          selectHelper: true,
          aspectRatio: 2.3, // Adjust width-to-height ratio
          select: function (start, end) {
            $("#event_start_date").val(moment(start).format("YYYY-MM-DD"));
            $("#event_end_date").val(moment(end).format("YYYY-MM-DD"));
            $("#event_entry_modal").modal("show");
          },
          events: events,
          eventRender: function (event, element, view) {
            element.bind("click", function () {
                  // Populate the modal with event details
                document.getElementById("modal_event_id").textContent = event.event_id;
                document.getElementById("modal_event_title").textContent = event.title;
                document.getElementById("modal_event_desc").textContent = event.event_desc || "No description available";
                document.getElementById("modal_no_of_attendees").textContent = event.no_of_attendees || "Not specified";

                // Populate contact information
                document.getElementById("modal_client_name").textContent = event.client_name || "Not specified";
                document.getElementById("modal_phone_num").textContent = event.phone_num || "Not specified";
                document.getElementById("modal_landline_num").textContent = event.landline_num || "Not specified";
                document.getElementById("modal_email").textContent = event.email || "Not specified";
                document.getElementById("modal_sec_contact_name").textContent = event.sec_contact_name || "Not specified";
                document.getElementById("modal_sec_phone_num").textContent = event.sec_phone_num || "Not specified";

                // Show the modal
                document.getElementById("event_details_modal").style.display = "block";
            });
          },
        }); // end fullCalendar block
      }, // end success block
      error: function (xhr, status) {
        alert("Error loading events.");
      },
    }); // end ajax block
  }

    // Close modal function
    function closeModal() {
    document.getElementById("event_details_modal").style.display = "none";
    }

    // Close modal when clicking outside the content
    window.onclick = function (event) {
    const modal = document.getElementById("event_details_modal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
    };

  function save_event() {
    var event_name = $("#event_name").val();
    var event_start_date = $("#event_start_date").val();
    var event_end_date = $("#event_end_date").val();
    var event_desc = $("#event_desc").val(); // Get event description
    var no_of_attendees = $("#no_of_attendees").val(); // Get number of attendees

    // Additional contact information
    var client_name = $("#client_name").val();
    var phone_num = $("#phone_num").val();
    var landline_num = $("#landline_num").val();
    var email = $("#email").val();
    var sec_contact_name = $("#sec_contact_name").val();
    var sec_phone_num = $("#sec_phone_num").val();

    if (
      event_name == "" ||
      event_start_date == "" ||
      event_end_date == "" ||
      client_name == "" ||
      phone_num == "" ||
      email == ""
    ) {
      alert("Please enter all required details.");
      return false;
    }

    $.ajax({
      url: "../process/save_event.php",
      type: "POST",
      dataType: "json",
      data: {
        event_name: event_name,
        event_start_date: event_start_date,
        event_end_date: event_end_date,
        event_desc: event_desc,
        no_of_attendees: no_of_attendees,
        client_name: client_name,
        phone_num: phone_num,
        landline_num: landline_num,
        email: email,
        sec_contact_name: sec_contact_name,
        sec_phone_num: sec_phone_num,
      },
      success: function (response) {
        $("#event_entry_modal").modal("hide");
        if (response.status == true) {
          alert(response.msg);
          location.reload();
        } else {
          alert(response.msg);
        }
      },
      error: function (xhr, status) {
        console.log("ajax error = " + xhr.statusText);
        alert("Error saving event.");
      },
    });
    return false;
  }
