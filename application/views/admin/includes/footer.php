
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  <script type="text/javascript" src="assets/js/dropzone.js"></script>

    <script>  
     $(document).ready(function(){  

      // tags
      $('.tags').select2({
        placeholder:'Write tag and press Enter',
        tags:true,
        // tokenSeparators: [',']
      });
      
      // DataTable
      $('#list').DataTable({
          "order": []
        }); 
      });

     // summernote
      $('#summernote').summernote({
        height:100,
        placeholder: 'Enter description...'
      }); 

      // delete record
      $(".delete_btn").on("click", function(){
        var url = $(this).attr("href");
        if(confirm("are you sure you want to delete?")){
          location.href = url;
        }else{
          return false;
        }
      });


      // ajax remove 
        $(".remove_btn").on('click', function (e) {
          e.preventDefault();

          var btn = $(this);
          var url = $(this).data('url');
          var type= $(this).data('type');

          $.ajax({
            method: 'GET',
            url: url,
            dataType: 'json',
            success: function (response) {
              if(response.success){
                if(type == 'attachment'){
                  var closest_row = $(btn).closest("tr");
                  closest_row.remove();
                }else{
                  var img_box = $(btn).closest(".img_box");
                  img_box.remove();
                }
              }else{
                alert('failed to delete');
              }
            }
          });

        });

     </script> 

     <?php if(uri_string() != 'admin/posts/create' && uri_string() != 'admin/posts/edit') { ?>
     <script>
      
      //Disabling autoDiscover
      Dropzone.autoDiscover = false;

      $(function() {
          //Dropzone class
          var myDropzone = new Dropzone(".dropzone", {
          url: "admin/upload_files/gallery",
          paramName: "file",
          maxFilesize: 6,
          maxFiles: 6,
          acceptedFiles: "image/*",
          autoProcessQueue: true,
          success : function(file, response) {

              if (response['uploaded_file'] != '') {
                  var currentValue = $("input[name='attached_files'").val();

                  if (currentValue == '') {
                      $("input[name='attached_files'").val(response['uploaded_file']);
                  } else {
                      $("input[name='attached_files'").val(currentValue + "," + response['uploaded_file']);
                  }
              }
          }
        });
        
        // $('#startUpload').click(function(){           
        //   myDropzone.processQueue();
        // });


      });

    </script>
    <?php } ?>

    <?php if(uri_string() == 'admin/posts/create' || uri_string() == 'admin/posts/edit') { ?>
    <script>

      $(function() {
          //Dropzone class
          var myDropzone = new Dropzone(".dropzone", {
          url: "admin/upload_files/attachments",
          paramName: "file",
          maxFilesize: 100,
          maxFiles: 8,
          acceptedFiles: "image/*, application/pdf",
          autoProcessQueue: true,
          success : function(file, response) {

              if (response['uploaded_file'] != '') {
                  var currentValue = $("input[name='attached_files'").val();

                  if (currentValue == '') {
                      $("input[name='attached_files'").val(response['uploaded_file']);
                  } else {
                      $("input[name='attached_files'").val(currentValue + "," + response['uploaded_file']);
                  }
              }
          }
        });
        
        // $('#startUpload').click(function(){           
        //   myDropzone.processQueue();
        // });


      });
      </script>
    <?php } ?>

  </body>
</html>