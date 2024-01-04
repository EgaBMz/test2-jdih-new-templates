  <script src="{{ asset('home/assets/vendor/jquery/jquery.min.j') }}s"></script>
  <script src="{{ asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('home/assets/js/main.js') }}"></script>

  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>



  <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );

      $("#kategori_id").select2({
          placeholder: 'Pilih Kategori'
      });
  </script>


  <script type="text/javascript">
      $(document).ready(function(){
          $("#example").on('click', '.btn.btn-sm.btn-warning.js-tooltip-enabled',function(){
              var currentRow=$(this).closest("tr");
              var no=currentRow.find("td:eq(0)").text();
              var id=currentRow.find("td:eq(9)").text();
              var text = "#formDetil"+no;
              var konten = "#konten_detil"+no;

              // console.log(id);

              $(konten).empty();
              $(konten).load('{{ url('detail/riwayat/')}}/'+id);
              $(text).modal();
          });
      });
  </script>

    <script src="{{ asset('assets/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: []

            });

        });

    </script>