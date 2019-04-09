// ready
$(document).ready(function() {
    
    // add
    $('#add').click(function() {
        $.get('/tools/blocks/team/item.php', function(html) { 
            $('#items').append(html);
        });
        return false;
    });

    // delete
    $('#items').on('click', '.delete', function() {
        $(this).closest('.item').slideUp('fast', function() {
            $(this).remove();
        });
        return false;
    });

    // save
    $('#ccm-block-form').submit(function() {
        $(this).find('.item').each(function(i) {
            $(this).find('textarea, input, select').each(function() {
                var name = $(this).closest('[data-name]').data('name');
                $(this).attr('name', 'items[' + i + '][' + name + ']');
            });
        });
    });

});