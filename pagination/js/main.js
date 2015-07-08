(function($){
    $.fn.extend({ 
        MyPagination: function(options) {
            var defaults = {
                height: 400,
                fadeSpeed: 400
            };
            var options = $.extend(defaults, options);

            //Creating a reference to the object
            var objContent = $(this);

            // other inner variables
            var fullPages = new Array();
            var subPages = new Array();
            var height = 0;
            var lastPage = 1;
            var paginatePages;

            // initialization function
            init = function() {
                objContent.children().each(function(i){
                    if (height + this.clientHeight > options.height) {
                        fullPages.push(subPages);
                        subPages = new Array();
                        height = 0;
                    }

                    height += this.clientHeight;
                    subPages.push(this);
                });

                if (height > 0) {
                    fullPages.push(subPages);
                }
                $(fullPages).wrap("<div class='page'></div>");
                // hiding all wrapped pages
                objContent.children().hide();

                // making collection of pages for pagination
                paginatePages = objContent.children();
                // show first page
                showPage(lastPage);

                // draw controls
                showPagination($(paginatePages).length);
            };

            // update counter function
            updateCounter = function(i) {
                $('#page_number').html(i);
            };

            // show page function
            showPage = function(page) {
                i = page - 1; 
                if (paginatePages[i]) {

                    // hiding old page, display new one
                    $(paginatePages[lastPage]).fadeOut(options.fadeSpeed);
                    lastPage = i;
                    $(paginatePages[lastPage]).fadeIn(options.fadeSpeed);

                    // and updating counter
                    updateCounter(page);
                }
            };

            // show pagination function (draw switching numbers)
            showPagination = function(numPages) {
                var pagins = '';
                for (var i = 1; i <= numPages; i++) {
                    pagins += '<li><a href="#" onclick="showPage(' + i + '); return false;">' + i + '</a></li>';
                }
                $('.pagination li:first-child').after(pagins);
            };

            // perform initialization
            init();

            // and binding 2 events - on clicking to Prev
            $('.pagination #prev').click(function() {
                showPage(lastPage);
                console.log('prev',lastPage);
            });
            // and Next
            $('.pagination #next').click(function() {
                showPage(lastPage+2);
                console.log('next',lastPage);
            });

            resetPagination = function(){
                console.log('reset pagination function is being called');
                    fullPages =[];
                    subPages = [];
                    height = 0;
                    lastPage = 1;
                    paginatePages = [];
                    $('.content[data-content-index=0]').MyPagination({height: 400, fadeSpeed: 400});
            }

        }
    });
})(jQuery);

// custom initialization
jQuery(window).load(function() {
   
   // init_data();
     console.log("11111")
});

function init_data(){
    console.log('00000');
     $.getJSON('jd.json', function(jd) {
         $('.content[data-content-index=0]').append(jd.name);
         $('.content[data-content-index=0]').MyPagination({height: 400, fadeSpeed: 400});
      });    
}
function remove_data(){
        $('.content[data-content-index=0]').html("");
}