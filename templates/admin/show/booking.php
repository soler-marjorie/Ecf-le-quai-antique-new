<div class="container pannel">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Images plats</b></h2>
                </div>
                <div class="col-sm-6">
                    <button href="#addEmployeeModal" class="btn btn-success"><i class="bi bi-plus-circle"></i>Ajouter une image</button>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Src</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($home as $homes){ ?>
                    <tr>
                        <td><?=$homes['title']; ?></td>
                        <td><?=$homes['src']; ?></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pen-fill"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                <?php } ?> 
            </tbody>
        </table>
    </div>
</div>