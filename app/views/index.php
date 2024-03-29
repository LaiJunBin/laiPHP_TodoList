<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDoList</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./public/assets/css/main.css">
    <script src="./public/assets/js/main.js"></script>
</head>
<body>

    <div class="container">
        <header>
            <h1>TodoList</h1>
        </header>

        <div class="card text-left my-3">
            <div class="card-header">
               <h3>Add Item</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="form_item">Item：</label>
                    <input id="form_item" class="form-control" type="text" placeholder="Please input item.">
                </div>
                <button id="addTodoBtn" type="button" class="btn btn-success w-100">Add</button>
            </div>
        </div>

        <div class="card text-left my-3">
            <div class="card-header">
               <h3>Search Item</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="form_item_id">Item ID：</label>
                    <input id="form_item_id" class="form-control" type="text" placeholder="Please input item id.">
                </div>
                <button id="searchTodoBtn" type="button" class="btn btn-primary w-100 my-1">Search</button>
                <button id="cancalSearchTodoBtn" type="button" class="btn btn-secondary w-100 my-1" disabled>Cancel</button>
            </div>
        </div>

        <h3>Items</h3>
        <div id="items">
            <div class="alert alert-warning">沒有代辦事項</div>
        </div>

    </div>

    <div class="modal fade" id="updateItemModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="form_update_item">Update Item：</label>
                        <input id="form_update_item" class="form-control" type="text" placeholder="Please input item.">
                        <input type="hidden" id="form_update_id" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="saveItemButton" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>