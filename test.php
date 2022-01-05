<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <SCRIPT LANGUAGE="JavaScript">
 function ouvrir_popup()
  {
   window.open('https://google.com','MyPopupWindow','height=270,width=270,top=50,left=50,resizable=no,menubar=no,status=no,scrollbars=no,menubar=no');
  }

</SCRIPT> 
      

    <body>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <button onclick="ouvrir_popup()">Submit</button>

      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <h2>
    <form>
      <label for="fname">User with tag:</label><br />
      <input
        type="text"
        id="fname"
        name="fname"
        placeholder="Exampleuser#0000"
        maxlength="40"
      /><br />
      <label for="lname">User ID:</label><br />
      <input
        type="text"
        id="lname"
        name="lname"
        placeholder="123456789907"
        maxlength="30"
      /><br />
      <label for="issue">Reason for Contacting Us</label><br />
      <textarea
        type="text"
        id="issue"
        name="issue"
        style="height:100px; width:400px;"
        placeholder="Reason for Contacting us (Max 500)"
        maxlength="500"
      ></textarea>
      <p id="notice" class="alert"></p>
      <p id="notice2" class="alert2"></p>
      <button onclick="sendMessage()">Submit</button>
    </form>

    <script>
      function sendMessage() {
        var request = new XMLHttpRequest();
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var issue = document.getElementById("issue").value;

        if (fname !== "" && lname !== "" && issue !== "") {
          document.getElementById("fname").value = "";
          document.getElementById("lname").value = "";
          document.getElementById("issue").value = "";

          request.open(
            "POST",
            "https://discord.com/api/webhooks/909926684340408330/TuqdcXL0o9vvX_O8wIL6u8qvNIvCT4YtnZAHBdhh0fcMdEdn3sa_AsQvWS8UlJmyi_we"
          );

          request.setRequestHeader("Content-type", "application/json");

          var params = {
            username: "Contact us Submisstions ",
            content:
              "**A User Has Submitted a form on Boofboat Studios**\n**User Tag:** " +
              fname +
              "\n**ID:** " +
              lname +
              "\n**Submission:** " +
              issue //test it now, i removed the value in this line it should work| Thanks
          };

          request.send(JSON.stringify(params));
document.getElementById("notice2").innerHTML =
                    "Thanks for providing Feedback! Your Feedback has been Recorded\nNo Personal Infomation Has been Tracked";
                    document.getElementById("notice").value = "";
          event.preventDefault();
        } else {
          event.preventDefault();
      document.getElementById("notice").innerHTML =
                    "All the Boxes Need to Be Filled In to Continue";//change this to whatever you want to use
        }
      }
    </script>
      </h2>
                </button>
            </div>
          </body>
        </head>
      </html>
    </body>
  </head>
</html>
