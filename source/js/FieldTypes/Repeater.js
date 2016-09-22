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
    }

    Repeater.prototype.init = function (field) {
        console.log(field);
    };

    return new Repeater();

})(jQuery);
