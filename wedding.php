<!DOCTYPE html>
<html>
  <head>
    <title>Wedding Search</title>
    <link
      rel="stylesheet"
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
    />
  <link href="album.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  <body>
    <div id = "return"></div>
    <div class="col-sm-6 col-sm-offset-3">
      <h1 style = "font-family: 'Lucida Handwriting',cursive;">Search for ideal venue</h1>
      <div id = "tableSpace"></div>
      <form action="wedding.php" method="POST">
        <div id="Date-group" class="form-group">
          <label for="date">Date: From</label>
          <input
            type="date"
            class="form-control"
            id="DoW"
            name="DoW"
          />
        </div>

        <div id="DateEnd-group" class="form-group">
          <label for="dateEnd">Date: To</label>
          <input
            type="date"
            class="form-control"
            id="DoWE"
            name="DoWE"
          />
        </div>

        <div id="Grade-group" class="form-group">
          <label for="CateringGrade">Catering Grade</label>
          <input
            type="text"
            class="form-control"
            id="CateringGrade"
            name="CateringGrade"
            placeholder="Enter Grade of Venue"
          />
        </div>

        <div id="PartySize-group" class="form-group">
          <label for="PartySize">Party Size</label>
          <input
            type="text"
            class="form-control"
            id="PartySize"
            name="PartySize"
            placeholder="Enter Number of Attendees"
          />
        </div>

        <button type="submit" class="btn btn-success" style = "margin-bottom: 100px;">
          Submit
        </button>
      </form>
    </div>
    <div class="album py-5 bg-light" id = "options">
      <div class="container" style>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/beautiful-bride-groom-having-their-wedding-with-guests-beach_23-2149043991.jpg?t=st=1650372314~exp=1650372914~hmac=72f552580fd675ff5d1cde70c9c1e6a50714911c2c0df3670da532a9719dd3a6&w=996" alt="Card image cap" style = "height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Central Plaza - <br> The capacity is 200, Weekend price is 2000 and Weeakday price is 1750 (licensed)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/groom-black-tuxedo-hugs-tender-stunning-bride-while-they-stand_8353-8050.jpg?t=st=1650372314~exp=1650372914~hmac=f27d45c9d42bc319216e4dbb0dd058546bfb3b77ed4cc2236ee2a3a85e390103&w=996" alt="Card image cap" style = "height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Pacific Towers Hotel - <br> The capacity is 250, Weekend price is 3000 and Weeakday price is 2400 (licensed)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/groom-putting-ring-bride-s-finger_1157-338.jpg?t=st=1650372314~exp=1650372914~hmac=15ac87e9fe9b54146ab11db2c1bda0179ee1b5e8dd1cb4ead1140021a3fb3428&w=996" alt="Card image cap" style = "height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Sky Center Complex - <br> The capacity is 100, Weekend price is 2500 and Weeakday price is 1900 (Not licensed)</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/groom-bride-are-putting-wedding-rings-front-view-hands_8353-10455.jpg?t=st=1650372314~exp=1650372914~hmac=45da4526b78573d098006d968b27eb9ed5f1665f2239b5186d965a1244ff299b&w=996" alt="Card image cap" style = "height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Sea View Tavern - <br> The capacity is 300, Weekend price is 2200 and Weeakday price is 2000 (Not licensed)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/beautiful-couple-having-their-wedding-beach_23-2149043941.jpg?t=st=1650372314~exp=1650372914~hmac=251404115948ffb7cc91afbe52d611dc2090004cf5ce16bc3f5ad4318ad2f896&w=996" alt="Card image cap" style="height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Ashby Castle - <br> The capacity is 1000, Weekend price is 3000 and Weeakday price is 7000 (licensed)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/beautiful-couple-posing-their-wedding-day_1328-3508.jpg?t=st=1650372314~exp=1650372914~hmac=de0051541561185166afd03cca6d1a9a7b5d31a30859892fbec5bd408f010173&w=996" alt="Card image cap" style="height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Fawlty Towers - <br> The capacity is 50, Weekend price is 600 and Weeakday price is 400 (licensed)</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/bride-groom-their-wedding-ceremony_1303-28370.jpg?t=st=1650372314~exp=1650372914~hmac=898980dd6db2da1bdd562d20ce944f43f402fa6b0ac7371cb531bf966b84b8f6&w=996" alt="Card image cap" style="height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Hilltop Mansion - <br> The capacity is 120, Weekend price is 3000 and Weeakday price is 2200 (Not licensed)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/floral-garland-eucalyptus-pink-flowers-lies-table_8353-8958.jpg?t=st=1650372314~exp=1650372914~hmac=497882b0a4bd5b6ef304d497f03904418d75a7b65e471843601cc6c8d08601ce&w=996" alt="Card image cap" style="height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Hazelgrave Hotel - <br> The capacity is 200, Weekend price is 2000 and Weeakday price is 1500 (Not licensed)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://img.freepik.com/free-photo/front-view-wedding-couple-s-hands-with-champagne-glasses-wedding-bouquet_8353-11126.jpg?t=st=1650372314~exp=1650372914~hmac=2174784928dc731fe2158754cc73cee9bbd766758cfc3a0a879dd94d9fcedabe&w=996" alt="Card image cap" style="height: 172px; width: 350px;">
              <div class="card-body">
                <p class="card-text">Forest Inn - <br> The capacity is 260, Weekend price is 1800 and Weeakday price is 1600 (Not licensed)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
  <div id = "bookings"></div>
  <div id = "carousel"></div>
  <script>
$(document).ready(function () {
    $("form").submit(function (event) {
      $(".form-group").removeClass("has-error");
      $(".help-block").remove();
      var formData = {
        DoW: $("#DoW").val(),
        CateringGrade: $("#CateringGrade").val(),
        PartySize: $("#PartySize").val(),
        DoWE: $("#DoWE").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "WeddingDB.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data); 
        if (data.errors) {
          if (data.errors.DoW) {
            $("#Date-group").addClass("has-error");
            $("#Date-group").append(
              '<div class="help-block">' + data.errors.DoW + "</div>"
            );
          }
  
          if (data.errors.CateringGrade) {
            $("#Grade-group").addClass("has-error");
            $("#Grade-group").append(
              '<div class="help-block">' + data.errors.CateringGrade + "</div>"
            );
          }
  
          if (data.errors.PartySize) {
            $("#PartySize-group").addClass("has-error");
            $("#PartySize-group").append(
              '<div class="help-block">' + data.errors.PartySize + "</div>"
            );
          }
          if (data.errors.DoWE) {
            $("#DateEnd-group").addClass("has-error");
            $("#DateEnd-group").append(
              '<div class="help-block">' + data.errors.DoWE + "</div>"
            );
          }

        } else {
          let len = data.length;
          let date1 = new Date($("#DoW").val());
          const date2 = new Date($("#DoWE").val());
          const diffTime = Math.abs(date2 - date1);
          const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
          let count = 0;
          let count2 = 0;
          let items = 0;
          let VenueNum = 0;
          let WrapperList = "";
          if (len > 0) {
          let insertedHtml = "<table class='table table-dark'><thead class='thead-dark'><tr><th scope='col'>Venue_ID</th><th scope='col'>Catering Cost (pp)</th><th scope='col'>Grade</th><th scope='col'>Licensed</th><th scope='col'>Name</th><th scope='col'>Capacity</th><th scope='col'>Weekend Price</th><th scope='col'>Weekday Price</th><th scope='col'>Bookings</th></tr></thead><tbody>";
            let ids = [];
            for (let i = 0;i<len;i++) {
              let rid = data[i].venue_id;
              if (!ids.includes(rid)) {
                ids.push(rid);
              }
            }
            for (let j = 0;j<ids.length;j++) {
              let Bookeddates = [];
              let foundName;
              for (let k = 0;k<len-ids.length;k++) {
                if (data[k].venue_id == ids[j]) {
                  if (!$.isNumeric(data[k].booking_date)) {
                  Bookeddates.push(data[k].booking_date);
                  count +=1;
                  }
                }
              }
              let notBooked = [];
              let date3 = new Date(date1);
              for (let z = 0;z<diffDays+1;z++) {
                const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
                let date4 = date3.toISOString().slice(0,10) + " - (" + weekday[date3.getUTCDay()] + ")";
                if (weekday[date3.getUTCDay()] == "Saturday" || weekday[date3.getUTCDay()] == "Sunday") {
                  date4 += "!";
                }
                if (!Bookeddates.includes(date3.toISOString().slice(0,10))) {
                  notBooked.push(date4);
                  count2 +=1;
                  //console.log(notBooked);
                }
                date3.setDate(date3.getDate() + 1);
              }
              let images = ["https://img.freepik.com/free-photo/floral-garland-eucalyptus-pink-flowers-lies-table_8353-8958.jpg?t=st=1650372314~exp=1650372914~hmac=497882b0a4bd5b6ef304d497f03904418d75a7b65e471843601cc6c8d08601ce&w=996","https://img.freepik.com/free-photo/beautiful-bride-groom-having-their-wedding-with-guests-beach_23-2149043991.jpg?t=st=1650372314~exp=1650372914~hmac=72f552580fd675ff5d1cde70c9c1e6a50714911c2c0df3670da532a9719dd3a6&w=996","https://img.freepik.com/free-photo/groom-black-tuxedo-hugs-tender-stunning-bride-while-they-stand_8353-8050.jpg?t=st=1650372314~exp=1650372914~hmac=f27d45c9d42bc319216e4dbb0dd058546bfb3b77ed4cc2236ee2a3a85e390103&w=996","https://img.freepik.com/free-photo/groom-putting-ring-bride-s-finger_1157-338.jpg?t=st=1650372314~exp=1650372914~hmac=15ac87e9fe9b54146ab11db2c1bda0179ee1b5e8dd1cb4ead1140021a3fb3428&w=996","https://img.freepik.com/free-photo/groom-bride-are-putting-wedding-rings-front-view-hands_8353-10455.jpg?t=st=1650372314~exp=1650372914~hmac=45da4526b78573d098006d968b27eb9ed5f1665f2239b5186d965a1244ff299b&w=996","https://img.freepik.com/free-photo/beautiful-couple-having-their-wedding-beach_23-2149043941.jpg?t=st=1650372314~exp=1650372914~hmac=251404115948ffb7cc91afbe52d611dc2090004cf5ce16bc3f5ad4318ad2f896&w=996","https://img.freepik.com/free-photo/beautiful-couple-posing-their-wedding-day_1328-3508.jpg?t=st=1650372314~exp=1650372914~hmac=de0051541561185166afd03cca6d1a9a7b5d31a30859892fbec5bd408f010173&w=996","https://img.freepik.com/free-photo/bride-groom-their-wedding-ceremony_1303-28370.jpg?t=st=1650372314~exp=1650372914~hmac=898980dd6db2da1bdd562d20ce944f43f402fa6b0ac7371cb531bf966b84b8f6&w=996","https://img.freepik.com/free-photo/floral-garland-eucalyptus-pink-flowers-lies-table_8353-8958.jpg?t=st=1650372314~exp=1650372914~hmac=497882b0a4bd5b6ef304d497f03904418d75a7b65e471843601cc6c8d08601ce&w=996","https://img.freepik.com/free-photo/front-view-wedding-couple-s-hands-with-champagne-glasses-wedding-bouquet_8353-11126.jpg?t=st=1650372314~exp=1650372914~hmac=2174784928dc731fe2158754cc73cee9bbd766758cfc3a0a879dd94d9fcedabe&w=996"]
              if (notBooked.length > 0) {
                for (let z = 0; z<len;z++) {
                  if (data[z].venue_id == ids[j]) {
                    console.log(data[z].name);
                  if ($.isNumeric(data[z].booking_date)) {
                    if (items == 0) {
                      WrapperList += `
                        <div class="item active">
                        <img src="${images[z]}" alt="Wedding Images" style="width:100%;">
                        <div class="carousel-caption d-none d-md-block">
                        <h2>Date(s) available to book - </h2>
                      <h3>` + data[z].name + `</h3> `
                      items +=1;
                    } 
                    else {
                      WrapperList += `
                        <div class="item">
                          <img src="${images[items]}" alt="Wedding Images" style="width:100%;">
                        <div class="carousel-caption d-none d-md-block">
                        <h2>Date(s) available to book - </h2>
                      <h3>` + data[z].name + `</h3>`
                      items +=1;
                    }
                for (let y = 0;y<notBooked.length;y++) {
                  let rcost = data[z].cost;
                  let rtcost = rcost * $("#PartySize").val();
                  let rweprice = data[z].weekend_price;
                  let rwdprice = data[z].weekday_price;
                  let rtweprice = rweprice + rtcost;
                  let rtwdprice = rwdprice + rtcost;
                  if (notBooked[y].charAt(notBooked[y].length - 1) == '!') {
                    WrapperList += "<p>"+ notBooked[y].slice(0,notBooked[y].length - 1) + " Total cost - £" + rtweprice + "</p>";
                  } else {
                  WrapperList += "<p>"+ notBooked[y] + " Total cost - £" + rtwdprice + "</p>";
                  }
              }
                  WrapperList += "</div></div> ";
                    VenueNum += 1;
                    let rid = data[z].venue_id; 
                    let rcost = data[z].cost;
                    let rlic = data[z].licensed;
                    if (rlic == 1) {
                      rlic = "yes";
                    } else {
                      rlic = "no";
                    }
                    let rgrade = data[z].grade;
                    let rtcost = rcost * $("#PartySize").val();
                    let rname = data[z].name;
                    let rcapacity = data[z].capacity;
                    let rweprice = data[z].weekend_price;
                    let rwdprice = data[z].weekday_price;
                    let rcount = data[z].booking_date;
                    insertedHtml += "<tr><td scope='row'>" + rid + "</td><td>" + rcost + "</td><td>" + rgrade + "</td><td>" + rlic +
                    "</td><td>" + rname + "</td><td>" + rcapacity + "</td><td>" + rweprice + "</td><td>" + rwdprice + "</td><td>" + rcount + "</td></tr>";
                    }
                  }
                }
              }
            }
          let IndicatorList = "";
          for (let k = 0; k<VenueNum;k++) {
            if (k == 0) {
              IndicatorList += `<li data-target="#myCarousel" data-slide-to="0" class="active"></li>`
            } else {
            IndicatorList += `<li data-target="#myCarousel" data-slide-to="`+ k + `"></li>`
            }
          }  
          if (count2 != 0) {
          $("#options").html(""); 
          }
          insertedHtml += "</tbody></table>";
          $("h1").html("<h1 style = \"font-family: 'Lucida Handwriting',cursive;\">Results Found -</h1>");
          $("#tableSpace").html(insertedHtml);
          $("form").remove();
          $("#return").html("<button class='btn btn-success' onclick = 'location.reload()' left: 0 top: 0 position: fixed;>Search again</button>");
          $("#carousel").append(`<div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            ${IndicatorList}
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          ${WrapperList}
          </div>

        </div>
        </div>`);
        $('.carousel').carousel({
          interval: 3500
        })
        }
        if (count2 == 0) {
          let insertedHtml = "<button class='btn btn-success' onclick = 'location.reload()' left: 0 top: 0 position: fixed;>Search again</button>" 
          $("h1").html("<h1 style = \"font-family: 'Lucida Handwriting',cursive;\">No Results found!</h1>");
          $("#tableSpace").html("<p>Please ensure the catering grade is valid (between 1-5)</p><p>If this is correct for your given party size we may not have any venues</p><p>Or for the given date(s) the venue is already booked out</p><p>Press the button in the top left to search again</p>");
          $("#return").html(insertedHtml);
          $("#bookings").html("");
          $("form").html("");
        }
        }
      });
      event.preventDefault();
    });
  });
  </script>
</html>
