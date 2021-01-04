

  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $(".materialboxed").materialbox();
        $(".parallax").parallax();
        $(".datepicker").datepicker({
            disableWeekends: true
        })
        $(".tooltipped").tooltip();
        $(".scrollspy").scrollSpy();
        $('.tabs').tabs();

    });
  </script>
</body>
</html>