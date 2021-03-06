<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>HackForGood Night</title>
  <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
  <link href="./css/style.css?3" type="text/css" rel="stylesheet">
 </head>
 <body>
  <h1>HackForGood</h1>
  <h2>Evenings of Hacking to make the world a better place</h2>

  <section>
    <h3>Schedule:</h3>
    <p>
    So here's a rough approximation of what is going to happen tonight (2011-05-11) during
    the <strong>HackForGood</strong> evening.
    </p>
    <p>
        <ul class="schedule">
            <li><strong><i>19h00(7pm):</i></strong>Registration, Welcome, Drinks</li>
            <li><strong><i>19h30(7.30pm):</i></strong>Announcements and sponsors words</li>
            <li><strong><i>20h00(8pm):</i></strong>Group Formation</li>
            <li><strong><i>20h15(8.15pm):</i></strong>Coding and brainmelting begins</li>
            <li><strong><i>20h30(8.30pm):</i></strong>Code and drinks</li>
            <li><strong><i>21h00(9pm):</i></strong>Code and drinks</li>
            <li><strong><i>21h30(9.30pm):</i></strong>Quick Catchup</li>
            <li><strong><i>22h00(10pm):</i></strong>++drinks</li>
            <li><strong><i>22h45(10.45pm):</i></strong>Teams/Personae get 2 minutes to say what the idea is</li>
            <li><strong><i>23h00(11pm):</i></strong>Public Vote</li>
            <li><strong><i>23h05(11.05pm):</i></strong>Winners and Gifts</li>
        </ul>
    </p>

  </section>    

  <section>
    <h3>Links:</h3>
    <p>
    A collection of links you might find interesting for tonight.
    </p>
    <p>
        <ul>
            <li><a href="https://docs.orchestra.io/kb">Orchestra.io Documentation</a></li>
            <li><a href="https://docs.orchestra.io/kb/getting-started/getting-started">Getting Started with Orchestra.io</a></li>
            <li><a href="https://docs.orchestra.io/kb/frameworks">PHP Frameworks Orchestra.io documentation</a></li>
            <li><a href="https://github.com/orchestra-io/hackforgood-code">Bundled libraries of our sponsors in a repo</a></li>
            <li><a href="https://github.com/signup/?referral_code=orchestra">Signup to Github to host your code</a></li>
            <li><a href="https://simplegeo.com/docs/">SimpleGeo API Documentation</a></li>
            <li><a href="https://www.tropo.com/docs/">Tropo API Documentation</a></li>
            <li><a href="http://blog.tropo.com/2011/04/22/deploying-tropo-apps-with-orchestra-io/">Deploying Tropo Apps on Orchestra</a></li>
            <li><a href="http://frapi.github.com">FRAPI a RESTful PHP Framework</a></li>
        </ul>
    </p>

  </section>    


  <footer id="logos">
    <h3>Sponsors:</h3>
    <p>
     <a href="http://www.orchestra.io" title="Orchestra.io Deploy and Scale your PHP apps"><img src="./images/orchestra.png" /></a>
     <a href="http://www.simplegeo.com" title="Making it easy for developers to write location-aware applications"><img src="./images/simplegeo.png" /></a>
     <a id="storek" href="http://www.storekbuilding.com" title="The most amazing startup hotbed in San Francisco and Cali altogether"><img src="./images/storek.jpg" /></a>
     <a href="http://www.github.com" title="GitHub is a web-based hosting service for projects that use the Git revision control system"><img src="./images/github.png" /></a>
     <a id="tropo" class="alone" href="http://www.tropo.com" title="Add voice to your applications"><img src="./images/tropo_logo.png" /></a>
    </p>
  </footer>

   <script type="text/javascript">
   function initialize() {
     var myLatlng = new google.maps.LatLng(37.775606, -122.413722);
     var myOptions = {
       zoom: 15,
       center: myLatlng,
       disableDefaultUI: true,
       navigationControl: true,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     }

     var map = new google.maps.Map(document.getElementById("map"), myOptions);

     var marker = new google.maps.Marker({position: myLatlng, map: map});
    }

    function loadScript() {
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
      document.body.appendChild(script);
    }

    window.onload = loadScript;
   </script>

 </body>
</html>
