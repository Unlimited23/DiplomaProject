<div class="container modal fade" id="inventory-product" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div id="modal-inventory" class="panel panel-success modal-dialog">
        <div class="panel-heading">Добави продукт</div>
        <div class="panel-body model-content">
            <div class="model-header">

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <th>Име на Продукт</th>
                        <th>Описание</th>
                        <th>Цена</th>
                        <th>Категория Продукт</th>
                        <th>Здравословен</th>
                        <th>Операции</th>
                    </thead>
                    
                    <tfoot>
                    </tfoot>

                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    {{ $product->product_name }}
                                </td> 
                                <td>
                                    {{ $product->product_description}}
                                </td>
                                <td>
                                    {{ $product->product_price}} лв.
                                </td>
                                <td>
                                    
                                        @if ($product->product_type == 1)
                                            Бобови
                                        @elseif ($product->product_type == 2)
                                            Зърнени
                                        @elseif ($product->product_type == 3)
                                            Млечни
                                        @elseif ($product->product_type == 4)
                                            Животински	
                                        @elseif ($product->product_type == 5)
                                            Месо
                                        @elseif ($product->product_type == 6)
                                            Вегетариански
                                        @elseif ($product->product_type == 7)
                                            Вегански
                                        @elseif ($product->product_type == 8)
                                            Напитки
                                        @elseif ($product->product_type == 9)
                                            Други
                                        @endif
                                </td>
                                <td>
                                    @if ($product->isHealthy)
                                        Да
                                    @else 
                                        Не
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ URL::to('/products/edit/', $product->product_id) }}" class="btn btn-default" role="button">Постави</a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
        
            </div>
        </div>
    </div>
</div>          