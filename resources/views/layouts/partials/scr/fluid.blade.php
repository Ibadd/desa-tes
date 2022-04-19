<script>
    var isFluid = JSON.parse(localStorage.getItem('isnotFluid'));
    if (isFluid) {
      var container = document.querySelector('[data-layout]');
      container.classList.remove('container-fluid');
      container.classList.add('container');
      $("input.switch").bootstrapSwitch();
    }
  </script>