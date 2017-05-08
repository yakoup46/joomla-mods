var country_select = '.country-select';
var distributor_option = '.distributor-option';

jQuery(document).ready(function() {
    jQuery(country_select).on('change', function() {
        var id = jQuery(country_select + ' option:selected').val();
        
        jQuery('.logos').addClass('hidden');
        jQuery('.dists').addClass('hidden');
        jQuery('#dist-' + id).removeClass('hidden');
    });

    jQuery(distributor_option).on('click', function() {        
        jQuery('.logos').addClass('hidden');
        jQuery('#logo-' + this.value).removeClass('hidden');
    });
});
