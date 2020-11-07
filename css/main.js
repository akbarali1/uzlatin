$(function() {

    $('.translit-form').on('submit', function(e){
        // return;
        e.preventDefault();
        let from = $('#from-text');
        let to = $('#to-text');
        let form = $(this);
        let url = form.attr('action');
        let sendData = form.serialize();
        let sendBtn = form.find('.form-send-btn');
        let valid = false;

        if(sendBtn.hasClass('disabled')){
            return false;
        }
        
        // clear helper classes
        form.find('.is-invalid').removeClass('is-invalid')
        form.find('.invalid-feedback').remove();
        
        // validate
        if(from.val() != '') {
            valid = true;
        } else {
            from.addClass('is-invalid');
        }

        // send request
        if(valid){
            $.ajax({
                url: url,
                method: 'post',
                dataType: 'json',
                data: sendData,
                beforeSend: function(){
                    sendBtn.addClass('disabled').append('<i class="fa fa-circle-o-notch fa-spin"></i>');
                }
            })
            .done(function(data){
                if(data.success) {
                    to.val(data.to_text);
                }
            })
            .fail(function(data){
                // console.log(data);
            })
            .always(function(data){
                sendBtn.removeClass('disabled').find('.fa').remove();
            });
        }
    });

    $('#from-text').on("blur keyup change", function(e) {
        let maxLength = +$(this).attr('maxlength');
        let curLength = $(this).val().length;
        let warningLength = Math.ceil(maxLength / 20);
        if (curLength > maxLength) curLength = maxLength;
        $('#from-text-current').text(curLength);
        $(this).val($(this).val().substr(0, maxLength));
        let remaning = maxLength - curLength;
        if (remaning < 0) remaning = 0;
        if (remaning == 0) {
            $('#form-text-info').removeClass('text-muted text-warning').addClass('text-danger');
        } else if (remaning < warningLength) {
            $('#form-text-info').removeClass('text-muted text-danger').addClass('text-warning');
        } else {
            $('#form-text-info').removeClass('text-warning text-danger').addClass('text-muted');
        }
    });

    $("[data-copy]").click(function(e){
        e.preventDefault();
        let btn = $(this);
        let id = btn.data('copy');
        let result = copyToClipboard(id);
        let btnText = btn.text();
        if(btnText == '') {
            btnText = btn.val();
        }
        let copiedText = $(this).data('copied-text');
        if(typeof(copiedText) == typeof(undefined)) {
            copiedText = 'Copied to clipboard';
        }
        if(result) {
            btn.text(copiedText);
            setTimeout(function(){
                btn.text(btnText);
            }, 2000);
        }
    });

}); // ready end

function copyToClipboard(elementId) {
    /* Get the text field */
    let copyText = document.getElementById(elementId);

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    let result = document.execCommand("copy");

    copyText.blur();

    return result;
} 