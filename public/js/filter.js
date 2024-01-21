    //filter for pizza
    
        function filterPizza() {
            var filterName = $('#filterPizzaByName').val().toLowerCase();
            var filterType = $("#pizza-type").val().toLowerCase();
            $('.pizzaRow').each(function () {
                var name = $(this).find('td:first-child').text().toLowerCase();
                var type = $(this).find('td:eq(1)').text().toLowerCase();

                var nameMatch = name.includes(filterName);
                var typeMatch = (filterType === "all" || type.includes(filterType));

                if (nameMatch && typeMatch) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
        $('#filterPizzaByName').on('input', filterPizza);
        $("#pizza-type").change(filterPizza);
    
        //filter for burger

        function filterBurger() {
            var filterName = $('#filterBurgerByName').val().toLowerCase();
            var filterType = $("#burger-type").val().toLowerCase();

            $('.burgerRow').each(function () {
                var name = $(this).find('td:first-child').text().toLowerCase();
                var type = $(this).find('td:eq(1)').text().toLowerCase();

                var nameMatch = name.includes(filterName);
                var typeMatch = (filterType === "all" || type.includes(filterType));

                if (nameMatch && typeMatch) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
        $('#filterBurgerByName').on('input', filterBurger);
        $("#burger-type").change(filterBurger);

