<!-- modal form -->
<div id="myModal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php $attributes = array("name" => "contact_form", "id" => "contact_form");
            echo form_open("modal_contact/submit", $attributes);?>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Contact Form</h4>
            </div>
            <div class="modal-body" id="myModalBody">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
                </div>
                
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input class="form-control" id="email" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" value="<?php echo set_value('subject'); ?>" />
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"><?php echo set_value('message'); ?></textarea>
                </div>

                <div id="alert-msg"></div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-default" id="submit" name="submit" type="button" value="Send Mail" />
                <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" />
            </div>
            <?php echo form_close(); ?>            
        </div>
    </div>
</div>
<!--load jquery & bootstrap js files-->
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript">
$('#submit').click(function() {
    var form_data = {
        name: $('#name').val(),
        email: $('#email').val(),
        subject: $('#subject').val(),
        message: $('#message').val()
    };
    $.ajax({
        url: "<?php echo site_url('modal_contact/submit'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
                $('#alert-msg').html('<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
            else if (msg == 'NO')
                $('#alert-msg').html('<div class="alert alert-danger text-center">Error in sending your message! Please try again later.</div>');
            else
                $('#alert-msg').html('<div class="alert alert-danger">' + msg + '</div>');
        }
    });
    return false;
});