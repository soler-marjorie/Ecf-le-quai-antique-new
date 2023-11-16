<div class="container ">
    <div class="row" style="display: flex;">
        <div class="col-sm-6">
            <h2><b>Images plats</b></h2>
        </div>
        <div class="col-sm-6">
            <button href="#addEmployeeModal" class="btn btn-success"><i class="bi bi-plus-circle"></i>Ajouter une image</button>
        </div>
    </div>
    <div style="display: flex;">
        <?php foreach($home as $homes){ ?>
            <div class="card" style="width: 18rem;">
                <img src="uploads/<?=$homes['src']; ?>" class="card-img-top" alt="..." style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?=$homes['title']; ?></h5>
                    <p class="card-text"><?=$homes['src']; ?></p>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pen-fill"></i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3-fill"></i></a>
                </div>
            </div>
        <?php } ?> 
    </div> 
</div>

