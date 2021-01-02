    $('.modal-content').on('click', '.btn-next', function () {
        $.ajax({
            url: '/cart/order',
            type: 'GET',
            success: function (res) {
                $('#order .modal-content').html(res);
                $('#cart').modal('hide');
                $('#order').modal('show');
            },
            error: function () {
                alert('Не успех');
            }
        })
    });

    function openCart(event) {
    event.preventDefault();
        $.ajax({
            url: '/cart/open',
            type: 'GET',
            success: function (res) {
                $('#cart .modal-content').html(res);
                $('#cart').modal('show');
            },
            error: function () {
                alert('Ошибка!');
            }
        })
    }


    $('.button_add').on('click', function (event) {
        event.preventDefault();
        let name = $(this).data('name');

        $.ajax({
            url: '/cart/add',
            data: {name: name},
            type: 'GET',
            success: function (res) {
              $('#cart .modal-content').html(res);
              $('.menu-quantity').html('(' + $('.total-quantity').html() + ')');
            },
            error: function () {
              alert('Не успех');
            }
        })
    });


    $('.modal-content').on('click','.btn-close', function () {
        $('#cart').modal('hide');
    })

    $('.modal-content').on('click','.delete', function () {
        let id = $(this).data('id');
        $.ajax({
            url: '/cart/delete',
            data: {id: id},
            type: 'GET',
            success: function (res) {
                $('#cart .modal-content').html(res);
                if ($('.menu-quantity').html()) {
                    $('.menu-quantity').html('(' + $('.total-quantity').html() + ')');
                } else {
                    $('.menu-quantity').html('(0)');
                }

            },
            error: function () {
                alert('Не успех');
            }
        })
    })

    function clearCart(event) {
        if (confirm('Вы уверены, что хотите очистить корзину?')) {
            event.preventDefault();
            $.ajax({
                url: '/cart/clear',
                type: 'GET',
                success: function (res) {
                    $('#cart .modal-content').html(res);
                },
                error: function () {
                    alert('Не успех');
                }
            })
        }

    }

