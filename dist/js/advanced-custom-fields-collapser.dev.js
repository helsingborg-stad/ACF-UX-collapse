var AcfCollapser = {};

//
// @name Modal
// @description  Show accodrion dropdown, make linkable by updating adress bar
//
AcfCollapser = AcfCollapser || {};
AcfCollapser.FieldTypes = AcfCollapser.FieldTypes || {};

AcfCollapser.FieldTypes.Repeater = (function ($) {

    function Repeater() {
        // Initialize
        $('div.inside.acf-fields.-top > .acf-field-repeater[data-type="repeater"]').each(function (index, field) {
            this.init(field);
        }.bind(this));

        // Click to expand/collapse
        $(document).on('click', '.acf-field-repeater[data-type="repeater"] .acf-collapser-initialized .acf-row-handle.order', function (e) {
            this.toggle($(e.target).closest('td').parent('.acf-row'));
        }.bind(this));
    }

    /**
     * Initializes the row collapser
     * @param  {element} field The field group
     * @return {void}
     */
    Repeater.prototype.init = function (field) {
        var $field = $(field);

        $field.find('> .acf-input > .acf-repeater > table > tbody > .acf-row').each(function (index, element) {
            if (!$(element).hasClass('acf-clone') && $(element).height() <= 150) {
                return;
            }

            $(element).addClass('acf-collapser-initialized');
            $(element).find('.acf-fields').wrapInner('<div class="acf-collapser-collapser-area"></div>');

            this.toggle(element);
        }.bind(this));

        $field.find('.acf-collapser-initialized > .acf-row-handle.order').append('<div class="acf-collapser-icon" data-text="Expand"></div>');
    };

    /**
     * Toggle collapse/expand
     * @param  {element} element The element to expand/collapse
     * @return {void}
     */
    Repeater.prototype.toggle = function(element) {
        var $element = $(element);
        $element.toggleClass('acf-collapser-collapsed');

        if ($element.hasClass('acf-collapser-collapsed')) {
            $element.find('.acf-collapser-icon').attr('data-text', 'Expand');
        } else {
            $element.find('.acf-collapser-icon').attr('data-text', 'Collapse');
        }
    };

    return new Repeater();

})(jQuery);
