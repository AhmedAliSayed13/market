
        $('.middle-header .filter-box').click(function () {
            $('.middle-header .search-categ li ul').slideUp();
            $('.middle-header .search-categ').toggleClass('show-cat');
        });

        $('.middle-header .search-categ p span').click(function () {
            $(this).parent().next().slideToggle();
            $(this).toggleClass('minus');
        });

        $('.middle-header .search-categ .expand').click(function () {
            $('.middle-header .search-categ li ul').slideDown();
            $('.middle-header .search-categ p span').addClass('minus');
        });

        $('.middle-header .search-categ .colapse').click(function () {
            $('.middle-header .search-categ li ul').slideUp();
            $('.middle-header .search-categ p span').removeClass('minus');
        });

        $(document).on('click', function () {
            $('.middle-header .search-categ').removeClass('show-cat');
        });

        $('.middle-header .filter-box , .middle-header .search-categ').click(function (e) {
            e.stopPropagation();
        });

        // HEADER CATEG SEARCH FILTER
        var array = [];
        function myCatSelect(myEl) {
            var value = myEl.value;
            if (myEl.checked) {
                array.push(myEl.id);
            } else {
                array.splice(array.indexOf(myEl.id), 1);
            }

            if (array.length === 1) {
                var name = $('#' + array[0]).val();
                $('#result').html(name);
            } else if (array.length === 0) {
                $('#result').html(' الأقســام ');
            }
            else {
                $('#result').html(array.length + ' أقســام ');
            }
        }


