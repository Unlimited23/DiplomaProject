<div class="container modal fade" id="inventory-product" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="panel panel-success modal-dialog">
        <div class="panel-heading">Добави продукт</div>
        <div class="panel-body model-content">
            <div class="model-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Нов Продукт</h4>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="inventory_product">Въведете продукт:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="inventory_product" id="new-product"
                                class="form-control" placeholder="Нов Продукт">
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-default" type="button" >Избери</button>
                            <!-- <input type="text" name="inventory_product" id="new-product"
                                   class="form-control" placeholder="Нов Продукт"> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="inventory_quantity">Въведете количество:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="inventory_quantity" id="product-quantity"
                                class="form-control" placeholder="Количество">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="save-inventory" class="btn btn-success" type="button">Запази</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Затвори</button>
                </div>
            </div>
        </div>
    </div>
</div>          