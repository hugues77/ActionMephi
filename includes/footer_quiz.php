    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/sweetalert.js"></script>
    <?php
    //affichage des erreurs avec sweetalert 
    if(isset($_SESSION['alert']) && ($_SESSION['alert'] != '')){
      ?>
       <script>
          swal({
              title: "<?=$_SESSION['alert'];?>",
              text: "<?=$_SESSION['alert_text']?>",
              icon: "<?=$_SESSION['alert_code']?>",
              button: "Ok, c'est compris!",
            });
        </script>
      <?php
      unset($_SESSION['alert']);
    }
    ?>
  </body>
</html>