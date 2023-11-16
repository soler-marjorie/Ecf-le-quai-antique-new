<div class="">
    <div class="col-sm-6">
        <h2><b>Menu</b></h2>
    </div>

    <?php foreach($menuTitle as $menuTitles){ ?> 
        <div class="row">
            <table class="table table-striped table-hover"> 
                <thead>   
                    <tr>
                        <th><h2><?=$menuTitles['formule']; ?></h2></th>
                        <th><h3><?=$menuTitles['plat']; ?></h3></th>

                        <th class="col-sm-6">
                            <button href="#addEmployeeModal" class="btn btn-success"><i class="bi bi-plus-circle"></i>Ajouter un menu</button>
                        </th>
                    </tr>

                    <tr>  
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                
                <tbody class="bodyMenu">
                    <?php foreach($menu as $menus){
                        if($menus['plat'] == $menuTitles['plat']){?>
                            <tr class="trMenu">
                                <td><?=$menus['title']; ?></td>
                                <td><?=$menus['description']; ?></td>
                                <td><?=$menus['price']; ?></td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pen-fill"></i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3-fill"></i></a>
                                </td>    
                            </tr> 
                        <?php } 
                    } ?>   
                </tbody>   
            </table>
        </div>
    <?php } ?>   
</div>