//
// @name Modal
// @description  Show accodrion dropdown, make linkable by updating adress bar
//
AcfCollapser = AcfCollapser || {};
AcfCollapser.FieldTypes = AcfCollapser.FieldTypes || {};

AcfCollapser.FieldTypes.Repeater = (function ($) {

    function Repeater() {
        $('.acf-field-repeater[data-type="repeater"]').each(function (index, field) {
            this.init(field);
        }.bind(this));

        $(document).on('click', '.acf-field-repeater[data-type="repeater"] .acf-row-handle', function (e) {
            this.toggle($(e.target).closest('td').siblings('.acf-fields'));
        }.bind(this));
    }

    Repeater.prototype.init = function (field) {
        var $field = $(field);

        $field.find('.acf-row .acf-fields').each(function (index, element) {
            $(element).wrapInner('<div class="acf-collapser-collapser-area"></div>');
            this.toggle(element);
        }.bind(this));
    };

    Repeater.prototype.toggle = function(element) {
        var $element = $(element);
        $element.toggleClass('acf-collapser-collapsed');
    };

    return new Repeater();

})(jQuery);
