import $ from"jquery";import Cropper from"cropperjs";if($&&$.fn&&Cropper){var AnotherCropper=$.fn.cropper,NAMESPACE="cropper";$.fn.cropper=function(r){for(var e=arguments.length,o=new Array(e>1?e-1:0),p=1;p<e;p++)o[p-1]=arguments[p];var t;return this.each((function(e,p){var n=$(p),f="destroy"===r,a=n.data(NAMESPACE);if(!a){if(f)return;var i=$.extend({},n.data(),$.isPlainObject(r)&&r);a=new Cropper(p,i),n.data(NAMESPACE,a)}if("string"==typeof r){var c=a[r];$.isFunction(c)&&((t=c.apply(a,o))===a&&(t=void 0),f&&n.removeData(NAMESPACE))}})),void 0!==t?t:this},$.fn.cropper.Constructor=Cropper,$.fn.cropper.setDefaults=Cropper.setDefaults,$.fn.cropper.noConflict=function(){return $.fn.cropper=AnotherCropper,this}}
