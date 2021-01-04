<!-- footer -->
<footer class="page-footer grey darken-3">
      <div class="container">
          <div class="row">
              <div class="col s12 l6">
                  <h5>About Me</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint magni eaque sunt asperiores quos quod quasi nemo saepe a voluptatibus praesentium aspernatur distinctio, exercitationem nulla perspiciatis molestias ex perferendis vel.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint magni eaque sunt asperiores quos quod quasi nemo saepe a voluptatibus praesentium aspernatur distinctio, exercitationem nulla perspiciatis molestias ex perferendis vel.</p>
              </div>
              <div class="col s12 l4 offset-l2">
                  <h5>Connect</h5>
                  <ul>
                      <li><a href="" class="grey-text text-lighten-3">Facebook</a></li>
                      <li><a href="" class="grey-text text-lighten-3">Twitter</a></li>
                      <li><a href="" class="grey-text text-lighten-3">Linked</a></li>
                      <li><a href="" class="grey-text text-lighten-3">Instagram</a></li>
                  </ul>
                <div class="row">
                  <li class="col"><a href="#" class="tooltipped btn-floating btn-small indigo darken-4" data-tooltip ="This is Instagram">
                            <i class="fab fa-instagram"></i>
                        </a></li>
                    <li class="col"><a href="#" class="tooltipped btn-floating btn-small indigo darken-4"  data-tooltip ="This is Facebook">
                            <i class="fab fa-facebook"></i>
                        </a></li>
                    <li class="col"><a href="#" class="tooltipped btn-floating btn-small indigo darken-4"  data-tooltip ="This is Twitter">
                            <i class="fab fa-twitter"></i>
                        </a></li>
                </div>
              </div>
          </div>
      </div>
      <div class="footer-copyright grey darken-4">
          <div class="container center-align">&copy; 2020 Photo Banks</div>
      </div>
  </footer>    

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