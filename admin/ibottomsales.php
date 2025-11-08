  </div><!-- br-section-wrapper -->
 </div><!-- br-pagebody -->
      
 <?include ("ifooter.php")?>
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="lib/jquery/jquery.js"></script>
<script src="lib/popper.js/popper.js"></script>
<script src="lib/bootstrap/bootstrap.js"></script>
<script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="lib/moment/moment.js"></script>
<script src="lib/jquery-ui/jquery-ui.js"></script>
<script src="lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="lib/peity/jquery.peity.js"></script>
<script src="lib/highlightjs/highlight.pack.js"></script>
<script src="lib/select2/js/select2.min.js"></script>
<script src="lib/datatables/jquery.dataTables.js"></script>
<script src="lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="lib/jquery-toggles/toggles.min.js"></script>
<script src="lib/jt.timepicker/jquery.timepicker.js"></script>
<script src="lib/spectrum/spectrum.js"></script>
<script src="lib/jquery.maskedinput/jquery.maskedinput.js"></script>
<script src="lib/parsleyjs/parsley.js"></script>
<script src="lib/medium-editor/medium-editor.js"></script>
<script src="lib/summernote/summernote-bs4.min.js"></script>
<script src="js/bracket.js"></script>
<script>
 $(function(){
  'use strict';
  $('#datatable2').DataTable({
   bLengthChange: false,
   searching: false,
   responsive: true
  });
  // Select2
  $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
 });
 var table = $('#datatable1').DataTable({
  'aoColumnDefs': [{
  'bSortable': false,
  'aTargets': ['nosort']
 }]
});
</script>
<script>
 $(function(){
 'use strict';
 var editor = new MediumEditor('.editable');
 $('#summernote').summernote({
  height: 150,
  tooltip: false
 })
 });
</script>
<script>
      $(function(){
        'use strict'

        // Toggles
        $('.toggle').toggles({
          on: true,
          height: 26
        });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#ssnMask').mask('999-99-9999');

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });
		
 <? for($i=1;$i<=$count;$i++) { ?>
 $('#datepickerNoOfMonths<?echo $i?>').datepicker({
  showOtherMonths: true,
  selectOtherMonths: true,
  numberOfMonths: 2
 });
 $('#datepickerNoOfMonthsin<?echo $i?>').datepicker({
  showOtherMonths: true,
  selectOtherMonths: true,
  numberOfMonths: 2
 });
 <? } ?>
 <? for($j=1;$j<=5;$j++) { ?>
 $('#datepickerNoOfMonthsc<?echo $j?>').datepicker({
  showOtherMonths: true,
  selectOtherMonths: true,
  numberOfMonths: 2
 });
 <? } ?>

        // Time Picker
        $('#tpBasic').timepicker();
        $('#tp2').timepicker({'scrollDefault': 'now'});
        $('#tp3').timepicker();

        $('#setTimeButton').on('click', function (){
          $('#tp3').timepicker('setTime', new Date());
        });

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });


        // Rangeslider
        if($().ionRangeSlider) {
          $('#rangeslider1').ionRangeSlider();

          $('#rangeslider2').ionRangeSlider({
              min: 100,
              max: 1000,
              from: 550
          });

          $('#rangeslider3').ionRangeSlider({
              type: 'double',
              grid: true,
              min: 0,
              max: 1000,
              from: 200,
              to: 800,
              prefix: '$'
          });

          $('#rangeslider4').ionRangeSlider({
              type: 'double',
              grid: true,
              min: -1000,
              max: 1000,
              from: -500,
              to: 500,
              step: 250
          });
        }

      });
    </script>

  </body>
</html>