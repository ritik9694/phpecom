<script src="assets/js/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script src="assets/js/custom.js"></script>

  <!-- alertify js -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  <script>

   alertify.set('notifier','position', 'top-right');
    <?php 
    if(isset($_SESSION['message'])) 
    { 
      ?>
     
     alertify.success('<?= $_SESSION['message']; ?>');
     <?php 
     unset($_SESSION['message']);

    }
    
    ?>
  </script>

</body>
</html>