
<div class="card shadow-lg rounded-3">
  <div class="card-body">
    <form id="jobApplicationForm" method="POST">
    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
    <input type="hidden" name="job_id" id="job_id" cols="30" rows="2" class="form-control" value="<?php echo isset($number) ?  $number  : '' ?>" readonly>


      <div class="modal-body" id="applyResponse">
        <div class="row">
          <div class="col-12 form-group">
            <label for="fname">Full Name</label>
            <input type="text" name="fname" id="fname" class="form-control" required>
          </div>
        </div>

        <div class="row">
          <div class="col-12 form-group">
            <label for="mail">Email Address</label>
            <input type="text" name="mail" id="mail" class="form-control" required>
          </div>
        </div>

        <div class="row">
          <div class="col-12 form-group">
            <label for="contact_number">Contact Number</label>
            <input type="text" name="contact_number" id="contact_number" class="form-control" required>
          </div>
        </div>

        <div class="row">
          <div class="col-12 form-group">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control" required>
          </div>
        </div>

        <div class="row">
          <div class="col-12 form-group">
            <label for="resume">Resume (PDF only)</label>
            <input type="file" name="resume" id="resume" accept=".pdf" class="form-control-file" required>
          </div>
        </div>

       

        <div class="row">
          <div class="col-12 form-group">
            <label for="remarks">Remarks (Optional)</label>
            <input type="text" name="remarks" id="remarks" class="form-control">
          </div>
        </div>
      </div>

      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save</button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color:black">Close</button>
      </div>
    </form>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        $('#jobApplicationForm').submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            let formData = new FormData(this);

            // $.ajax({
            //     url: 'ajax.php?action=save_apply_jobs', // Backend PHP file
            //     type: 'POST',
            //     data: formData,
            //     contentType: false,
            //     processData: false,
            //     success: function (response) {
            //         if (response.trim() === '1') {
            //             toastr.success('Applied Successfully.');
            //             setTimeout(function () {
            //                 window.location.href = 'index.php?page=home';
            //             }, 2000);
            //         } else {
            //             toastr.error('Failed to apply. Please try again.');
            //         }
            //     },
            //     error: function () {
            //         toastr.error('Server error. Please check your PHP backend.');
            //     }
            // });
            $.ajax({
    url: 'ajax.php?action=save_apply_jobs', // Backend PHP file
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    success: function (response) {
        response = response.trim();
        if (response === '1') {
            toastr.success('Applied Successfully.');
            setTimeout(() => {
                window.location.href = 'index.php?page=home';
            }, 2000);
        } else if (response === 'duplicate') {
            toastr.warning('You have already applied for this job.');
        } else if (response === 'invalid_file') {
            toastr.error('Only PDF files are allowed.');
        } else if (response === 'upload_error') {
            toastr.error('Failed to upload resume.');
        } else if (response === 'no_file') {
            toastr.error('Resume is required.');
        } else {
            toastr.error('Application failed. Try again.');
        }
    },
    error: function () {
        toastr.error('Server error. Please try again.');
    }
});

        });
    });
</script>


<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.css" />
