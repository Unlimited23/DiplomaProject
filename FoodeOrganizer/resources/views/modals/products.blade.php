<div class="container modal fade" id="modal-product" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="panel panel-success modal-dialog">
        <div class="panel-heading">Добави продукт</div>
        <div class="panel-body model-content">
            <div class="model-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">&times;</span>
                </button> -->
                <h4 class="modal-title">Нов Продукт</h4>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="product_name">Въведете продукт:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="product_name" id="new-product"
                                class="form-control" placeholder="Нов Продукт">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="product_description">Въведете описание:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="product_description" id="product-description"
                                class="form-control" placeholder="Описание на продукта">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="product_price">Въведете цена:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="product_price" id="product-price"
                                class="form-control" placeholder="Цена">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="product_type">Изберете категория:</label>
                        </div>
                        <div class="col-sm-5">
                            <div class="form group">
                            <select  class="form-control" id="exampleFormControlSelect2">
                                <option>Напитки</option>
                                <option>Зърнени</option>
                                <option>Бобови</option>
                                <option>Млечни</option>
                                <option>Животински</option>
                                <option>Месо</option>
                                <option>Вегетариански</option>
                                <option>Вегански</option>
                            </select>
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="isHealthy">Здравословен:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="checkbox" name="isHealthy" id="isHealthy"
                                class="form-control">
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










