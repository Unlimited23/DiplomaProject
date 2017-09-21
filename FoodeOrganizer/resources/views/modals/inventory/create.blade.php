<div class="container modal fade" id="create-product" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div id="modal-" class="panel panel-success modal-dialog">
        <div class="panel-heading">Добави продукт</div>
        <div class="panel-body model-content">
            <div class="model-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">&times;</span>
                </button> -->
                <h4 class="modal-title">Изберете Продукт</h4>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="product_name">Изберете продукт:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="product_name" id="new-product"
                                class="form-control" placeholder="Име на Продукт">
                            
                        </div>
                        <div class="col-sm-2">
                            <button id="paste-product" class="btn btn-default pull-right" type="button">Избери</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <label for="product_description">Въведете цена:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="product_description" id="product-description"
                                class="form-control" placeholder="Цена на продукта">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="product_description">Въведете количество:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="product_description" id="product-description"
                                class="form-control" placeholder="Количество на продукта">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <label for="isHealthy">Срок на годност:</label>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <div class='input-group date'>
                                    <input id='datetimepicker1' type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>      

<script>
    
    $('#datetimepicker1').datepicker();
</script>








