<div class="form">
  <form id="enquiry"> 
    <label>Name</label>
    <input type="text" name="name" required>
      
    <label>Email</label>
    <input type="email" name="email" required>

    <label>Enquiry</label>
    <textarea name="enquiry" required></textarea>

    <button>Submit</button>
  </form>
</div>

<script>
  const endpoint = "<?php echo admin_url('admin-ajax.php'); ?>";

  console.log('endpoint', endpoint);

  jQuery( function($) {
  
  const $el = $('#enquiry');
  const endpoint = "<?php echo admin_url('admin-ajax.php'); ?>";


  $el.on('submit', (e) => {
    e.preventDefault();
    
    const contents = $el.serialize();
    const formData = new FormData;

    formData.append('action', 'contact');
    formData.append('enquiry', contents);

    $.ajax(endpoint, {
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: (res) => {
        console.log('sdfds', res)
      },
      error: (err) => {

      },
    })
    
  })
})


</script>
