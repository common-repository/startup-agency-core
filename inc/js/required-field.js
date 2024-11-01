
        jQuery(function($) {
                /********** Form Validation ***********/
            $('form').submit(function(event) {

                if ($('#categorieschecklist input[type="checkbox"]:checked').length == 0) {
                    alert('Please select a category!');
                    $('#ajax-loading').css('visibility', 'hidden');  // hide the ajax loading graphic
                    event.preventDefault();  // cancel form submission
                }
                else if ($('#categorieschecklist input[type="checkbox"]:checked').length >= 2) {
                    alert('Only one category can be selected!');
                    $('#ajax-loading').css('visibility', 'hidden');  // hide the ajax loading graphic
                    event.preventDefault();  // cancel form submission
                }
            })
        });
    