<?php 
    @session_start();

    use App\Db\Mysql;

    require_once _ROOTPATH_.'\templates\header.php'; 

    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM home');
    $query->execute();
    $pictures = $query->fetchAll($pdo::FETCH_ASSOC);

	$query = $pdo->prepare('SELECT * FROM menu');
    $query->execute();
    $menus = $query->fetchAll($pdo::FETCH_ASSOC);

?>
<div class="container">
    <h1>Espace administrateur - Le Quai Antique</h1>

    <section class="row">
        <div class="col-sm-6">
            <h2>Galerie d'images</h2>
        </div>
        <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Ajouter une image</span></a>
            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="bi bi-x-circle"></i> <span>Supprimer</span></a>						
        </div>

		<table class="col-12">
			<thead>
				<tr>
					<th class="col-sm-3">
						<span class="custom-checkbox">
							<input type="checkbox" id="selectAll">
							<label for="selectAll"></label>
						</span>
					</th>
					<th class="col-sm-3">Id</th>
					<th class="col-sm-3">Title</th>
					<th class="col-sm-3">Src</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pictures as $home){ ?>
					<tr>	
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox" name="options[<?= $home['id'] ;?>]" value="<?= $home['id'] ;?>">
								<label for="checkbox"></label>
							</span>
						</td>

						<td><?= $home['id'] ;?></td>
						<td><?= $home['title'] ;?></td>
						<td><?= $home['src'] ;?></td>
						<td>
							<a href="#editEmployeeModal" class="edit btn btn-warning" data-toggle="modal"><i class="bi bi-pen" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete btn btn-danger" data-toggle="modal"><i class="bi bi-x-circle" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
    </section>

    <section class="row">
		<div >
			<h2>La carte et ses menus</h2>
		</div>

	
		<table class="col-12">		
			<?php foreach ($menus as $menu) {?>
				

				<thead>
					<tr>
						<th class="col-sm-3">
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th class="col-sm-3">Id</th>
						<th class="col-sm-3">Title</th>
						<th class="col-sm-3">Src</th>
					</tr>
					
				</thead>		

				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox" name="options[<?= $home['id'] ;?>]" value="<?= $home['id'] ;?>">
								<label for="checkbox"></label>
							</span>
						</td>
						
						<td><?php echo $menu['title']; ?></td>
						<td><?php echo $menu['description']; ?></td>
						<td><?php echo $menu['price']; ?>€</td>
						<td>
							<a href="#editEmployeeModal" class="edit btn btn-warning" data-toggle="modal"><i class="bi bi-pen" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete btn btn-danger" data-toggle="modal"><i class="bi bi-x-circle" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>	
					</tr>
				</tbody>
			<?php } ?>	
		</table>
    </section>

    <section class="row">
        <div class="col-12">
            <h2>Les horaires du restaurant</h2>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <h2>Les réservations</h2>
        </div>
    </section>
</div>






<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>



<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>Thomas Hardy</td>
						<td>thomashardy@mail.com</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
						<td>(171) 555-2222</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						<td>Dominique Perrier</td>
						<td>dominiqueperrier@mail.com</td>
						<td>Obere Str. 57, Berlin, Germany</td>
						<td>(313) 555-5735</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						<td>Maria Anders</td>
						<td>mariaanders@mail.com</td>
						<td>25, rue Lauriston, Paris, France</td>
						<td>(503) 555-9931</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						<td>Fran Wilson</td>
						<td>franwilson@mail.com</td>
						<td>C/ Araquil, 67, Madrid, Spain</td>
						<td>(204) 619-5731</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>					
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td>Martin Blank</td>
						<td>martinblank@mail.com</td>
						<td>Via Monte Bianco 34, Turin, Italy</td>
						<td>(480) 631-2097</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr> 
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>