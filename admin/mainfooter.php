</div>
</div>
<footer class="main-footer text-center fixed-bottom p-2" style="background-color:#0d6efd!important;">
	<a href="http://sreir.org" target="_blank" style="color:white;text-decoration:none;"><i class="fa fa-globe"></i>&nbsp;Develop by Samarth Group of Institutions - Computer Department TE Student @ 2022-2023</a>
</footer>	
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );

document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); </script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/Chart.min.js"></script>
 </body>

</html>