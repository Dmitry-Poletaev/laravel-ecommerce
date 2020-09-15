<html>
    <body>
        <br>
    <h1>Ваш заказ</h1>
        <table>
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена за 1 шт.</th>
                <th>Количество</th>
                <th>Итоговая стоимость</th>
            </tr>
        </thead>
<tbody>
    @foreach ($orders as $item)
        
    
        <tr>
        <td>{{ $item->name }}</td>
        <td class="num">{{ $item->price }}.руб</td>
        <td class="num">{{ $item->qty }}</td>
        <td class="num">{{ $item->price * $item->qty }}.руб</td>
        </tr>
    @endforeach
    <br>
            <tr class="total">
            <th colspan="3">Итого</th>
            <td class="num">{{ Cart::subtotal()  }}.руб</td>
        </tr>
    </tbody>
</table>
</body>
</html>
