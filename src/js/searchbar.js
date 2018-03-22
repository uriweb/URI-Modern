/*
 * Search Bar Focus Control
 */

(function(){
    
    'use strict';
    
    window.addEventListener('load', initSearchBar, false);
    
    function initSearchBar() {
        var gstoggle = document.getElementById('gsform-toggle'),
            gsquery = document.getElementById('gs-query');
        
        gstoggle.addEventListener('change', function() {
            if (this.checked) {
                gsquery.focus();
            } else {
                gsquery.blur();
            }
        });
    }
    
})();