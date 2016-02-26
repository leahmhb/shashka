    <!-- Bootstrap core JavaScript
    ================================================== -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>

    <!-- Plugins -->
    <script src="/horse-racing/shashka/src/js/chosen.jquery.min.js"></script>

    <script src="/horse-racing/shashka/src/js/bootstrap-datepicker.min.js"></script>

    
    <script>
       $(document).ready(function () {
         $(".chosen-select").chosen({
          width: "95%",
          placeholder_text_single: "Select.."
      });//end chosen 

         $.fn.datepicker.defaults.format = "dd/mm/yyyy";
         $.fn.datepicker.defaults.todayHightlight = true;
         $.fn.datepicker.defaults.todayBtn = true;
         
         $('.datepicker').datepicker();

   });//end ready

</script>
</body>
</html>
